<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use File;

Trait ImageTrait
{
	public $files;
	// public function UploadImage(UploadedFile $uploadedFile, $folder, $disk = 'public')
	// {
	// 	$filename = Str::random(25) . '.' . $uploadedFile->getClientOriginalExtension();

	// 	$file = $uploadedFile->storeAs($folder, $filename , $disk);
		
	// 	return $filename;
	// }

	
	public function UploadImage($images, $folder, $width, $height)
	{
		
			$folder = storage_path($folder);
			
			//create folder if it doesnt exist
			if(!File::exists($folder))
			{
				File::makeDirectory($folder, $mode = 0777, true, true);
			}

			//user is uploading multiple images
			foreach($images as $image)
			{
				$filename = Str::random(25) . '.' . $image->extension();
				$img = Image::make($image->path());
				$img->fit($width, $height, function($const)
				{
					$const->aspectRatio();
				})->save($folder . '/' . $filename);

				$this->files[] = $filename;
			}
        
		return $this->files;
	}


	public function DeleteImage($folder, $filename)
	{
		//delete image
		Storage::disk('public')->delete($folder . '/' . $filename);
		return true;
	}

	
}