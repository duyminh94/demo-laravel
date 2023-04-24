<?php

namespace App\Http\Controllers;

use Doctrine\Inflector\Rules\Patterns;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{   
    private $age;

    public function __construct() {
        $this->age = 10;
    }

    public function getData(Request $request, $name) {
        echo 'xin chào: ' . $name;
        echo '<br/> Tuoi: ' . $this->age;
        echo '<br/>'.$request->path();
        echo '<br/>'.$request->url();
        /* Trả về một url đầy đủ */

        // dd($request);
        // var_dump($request);
        // if(!$request->is('admin/*')) {
        //     return redirect('/');
        //     /* trả về trang home */
        // } else {
        //     echo 2;
        // }

        if($request->isMethod('get')) {
            echo 1;
        } else {
            echo 2;
        }
    }

    public function getform() {
        return view('form');
    }

    public function takeform(Request $request) {
        dd($request);
    }

    public function Upload() {
        return view('up-load');
    }

    public function handleUpload(Request $request) {
            $this->validate($request, [
                'name' => 'required',
                'image' => 'required'
            ], [
                'name.required' => 'Bạn chưa nhập tên',
                'image.required' => 'Bạn Chưa up Ảnh',
            ]);
        if($request->hasFile('image')) {
           $file = $request->file('image');
           $name_file = $file->getClientOriginalName('image');

           $extension = $file->getClientOriginalExtension('image');
           if(strcasecmp($extension, 'jpg') === 0 || strcasecmp($extension, 'jfif') === 0 || strcasecmp($extension, 'png') === 0 ) {
            $name = Str::random(5)."_".$name_file;
            while(file_exists('image/'.$name)) {
                $name = Str::random(5)."_".$name_file; 
            }
            $file->move(public_path('image'), $name);
            /* Đường dẫn ảnh public_path */


            return redirect()-> route('up-load')->with('success', 'Upload thành công') ;    
           }

        } else {
            return redirect()->route('up-load')->with('error', 'bạn chưa chọn hình');
        }
    }
};
