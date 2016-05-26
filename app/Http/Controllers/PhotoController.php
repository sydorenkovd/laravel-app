<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PhotoController extends Controller
{
    private $table = 'galleries';
    public function create(){
        die('Photo/CREATE');
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