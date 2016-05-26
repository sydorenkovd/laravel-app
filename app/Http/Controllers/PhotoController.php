<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PhotoController extends Controller
{
    private $table = 'photos';
    public function create($gallery_id){
        //render view
        return view('photo/create', compact('gallery_id'));
    }
    public function store(Request $request){
//get request input
        $gallery_id = $request->input('gallery_id');
        $title = $request->input('title');
        $description = $request->input('description');
        $location = $request->input('location');
        $image = $request->file('image');
        $owner_id = 1;
        //check image upload
        if($image){
            $image_filename = $image->getClientOriginalName();
            $image->move(public_path('images'), $image_filename);
        } else {
            $image_filename = 'noimage.jpg';
        }
        //insert into database
        DB::table($this->table)->insert(
            [
                'title' => $title,
                'description' => $description,
                'location' => $location,
                'gallery_id' => $gallery_id,
                'image' => $image_filename,
                'owner_id' => $owner_id
            ]
        );
        //redirect
        return \Redirect::route('gallery.show', ['id' => $gallery_id])->with('message', 'Gallery Created');
    }
    public function details($id){
       // get photho

    }
    public function index(){
        // galleries
        $galleries = DB::table($this->table)->get();
        return view('gallery/index', compact('galleries'));
    }
}