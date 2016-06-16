<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class GalleryController extends Controller
{
    //set teble name
    private $table = 'galleries';
    public function index(){
      // galleries
        $galleries = DB::table($this->table)->get();
    	return view('gallery/index', compact('galleries'));
    }
    public function create(){
        if(!Auth::check()){
            return \Redirect::route('gallery.index')->with('message', 'Access Failed');
        }
    	return view('gallery/create');
    }
    public function store(Request $request){
        //get request input
        if(!Auth::check()){
            return \Redirect::route('gallery.index')->with('message', 'Access Failed');
        }
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
DB::table($this->table)->insert(
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
        //get gallery
        $gallery = DB::table($this->table)->where('id', $id)->first();
        //get the phohos
        $photos = DB::table('photos')->where('gallery_id', $id)->get();
        return view('gallery/show', compact('gallery', 'photos'));
    }
}
