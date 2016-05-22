<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index(){
      // galleries
        $galleries = DB::table('galleries')->get();
    	return view('gallery/index', compact('galleries'));
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
            $cover_image_filename = $cover_image->getClientOriginalName();
            $cover_image->move(public_path('images'), $cover_image_filename);
        } else {
            $cover_image_filename = 'noimage.jpg';
        }
        //insert into database
DB::table('galleries')->insert(
    [
        'name' => $name,
        'description' => $description,
        'cover_image' => $cover_image_filename,
        'owner_id' => $owner_id
    ]
);
        //redirect
        return \Redirect::route('gallery.index')->with('message', 'Gallery Created');
    }
    public function show($id){
        die($id);
    }
}
