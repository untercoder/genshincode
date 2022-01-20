<?php


namespace App\Traits\News;


use Intervention\Image\ImageManagerStatic as Image;

trait WorkWithImgTrait
{
    public function resizeAndSave($file, $path) {
        $filename = uniqid().$file->getClientOriginalName();
        $imgPath = public_path('storage/'.$path.$filename);

        $image_resize = Image::make($file->getRealPath());
        $image_resize->resize(1110, 480);
        $image_resize->save($imgPath);
        return $path.$filename;
    }
}
