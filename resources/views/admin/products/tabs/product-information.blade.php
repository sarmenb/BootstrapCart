<div class="form-group">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control">
                            <option value="">Choose an option</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->slug }}" @if($category->slug == $product->category->slug) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input name="name" type="text" value="{{ $product->name }}" class="form-control" />
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Slug</label>
                        <input name="slug" type="text" value="{{ $product->slug }}" class="form-control" />
                        @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input name="price" type="text" value="{{ $product->price }}" class="form-control" />
                        </div>
                        @error('price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sku</label>
                        <input name="sku" type="text" value="{{ $product->sku }}" class="form-control" />
                        @error('sku')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="5">{{ $product->description }}</textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Images</label>
                        <input type="file" name="product_images" class="form-control" multiple>
                        @error('product_images')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>