<?php

namespace Dotsquares\S3WithWatermark;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class S3WithWatermarkController extends Controller
{
    //
    static function store($file, $media_path, $watermark)
    {
        if($watermark==null)
        {
            $path = Storage::disk('s3')->put($media_path, $file);
            $path = Storage::disk('s3')->url($path);
            
        }else{
            $imageName = time() . '_' . $file->getClientOriginalName();
    
            $img = Image::make($file);
            $img->insert($watermark);
            // dd($img);
            //detach method is the key! Hours to find it... :/
            $resource = $img->stream()->detach();
    
            $path = Storage::disk('s3')->put(
                $media_path . $imageName,
                $resource
            );
            $path = Storage::disk('s3')->url($path);
        }
        return $path;
    }
    static function storeFile($file, $media_path)
    {
        $path = Storage::disk('s3')->put($media_path, $file);
        $path = Storage::disk('s3')->url($path);
        return $path;
    }
}
