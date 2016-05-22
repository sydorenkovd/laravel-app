<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index(){
        $test = 'testing';
    	return view('gallery/index', compact('test'));
    }
    public function create(){
    	return view('gallery/create');
    }
    public function store(Request $request){
        //get request input
        $name = $request->input('name');
        $description = $request->input('description');
        $cover_image = $request->file('cover_image');
        $owner_id = 1;
        //check image upload
        if($cover_image){
            die('yes');
        } else {
            die('now');
        }
    }
    public function show($id){
        die($id);
    }
}
