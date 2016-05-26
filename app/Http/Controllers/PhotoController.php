<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PhotoController extends Controller
{
    private $table = 'galleries';
    public function create($gallery_id){
        //render view
        return view('photo/create', compact('gallery_id'));
    }
    public function store(Request $request){

    }
    public function details($id){
        die($id);
    }
    public function index(){
        // galleries
        $galleries = DB::table($this->table)->get();
        return view('gallery/index', compact('galleries'));
    }
}