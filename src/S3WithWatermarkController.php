<?php

namespace Dotsquares\S3WithWatermark;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

class S3WithWatermarkController extends Controller
{
    //
    public function store($file, $media_path, $watermark)
    {
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
        return $path;
    }
}
