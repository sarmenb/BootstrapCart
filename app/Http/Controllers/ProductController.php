<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ImageTrait;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all()
        ]);
    }


    public function show(Category $category, Product $product)
    {
        return view('guest.product-detail', [
            'product' => $product,
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required|unique:products',
            'sku' => 'required',
            'is_featured' => 'required',
            'price' => 'required',
            'description' => 'required',
            //'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        //get category_id
        $category_id = Category::select('id')->where('slug', $request->category)->first();
        
        $product = new Product;
        $product->category_id = $category_id->id;
        $product->name = $request->name;

        if($request->has('slug'))
        {
            $product->slug = Str::slug($request->slug);
        }
        $product->slug = Str::slug($request->name);

        $product->sku = $request->sku;
        $product->is_featured = $request->is_featured;    
        $product->description = $request->description;
        $product->price = $request->price;
        

        $files = $this->UploadImage($request->images, 'app/public/images', 600,600);

        $product->save();
        
        //save images
        foreach($files as $index => $file)
        {
            $pimage = new ProductImage;
            $pimage->product_id = $product->id;
            $pimage->image = $file;
            $pimage->slug = md5($file);

            if($index == 0)
            {
                $pimage->is_primary = 1;
            }
            else
            {
                $pimage->is_primary = 0;
            }

            $pimage->save();
        }

        flash('The product has been successfully saved')->success();

        return back();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'categories' => Category::all(),
            'product' => $product,
            'images' => $product->images
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:products,id',
            'is_featured' =>  'required',
            'sku' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        //get category_id
        $category_id = Category::select('id')->where('slug', $request->category)->first();
      
        $product->category_id = $category_id->id;
        $product->name = $request->name;
        $product->slug = Str::slug($request->slug);
        $product->is_featured = $request->is_featured;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->price = $request->price;
        

        //product images
        if($request->has('product_images'))
        {
            $files = $this->UploadImage($request->product_images, 'app/public/images', 600,600);
            
            foreach($files as $index => $file)
            {
                $pimage = new ProductImage;
                $pimage->product_id = $product->id;
                $pimage->image = $file;
                $pimage->slug = md5($file);

                if($index == 0)
                {
                    $pimage->is_primary = 1;
                }

                $pimage->save();
            }
        }

        $product->save();
        
        flash('The product has been updated')->success();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $images = $product->images;

        foreach($images as $image)
        {
            $this->DeleteImage(storage_path('app/public/images'), $image->image);
        }

        $product->delete();

        flash('The product has been deleted')->success();

        return back();

    }
}
