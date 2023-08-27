<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PhotoUploadController extends Controller
{
    public static function photoUpload($file,$name,$height,$width,$path){

       $image_name = $name.'.webp';
       $file->move($path,$image_name);
       return $image_name;
    }

    public static function unlinkPhoto($name,$path){
       $image_name = $name.'.webp';
       $image_path = public_path($path).$image_name;
       if(file_exists($image_path)){
           unlink($image_path);
       }
    }
}
