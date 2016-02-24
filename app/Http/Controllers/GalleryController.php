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

    }
    public function show($id){
        die($id);
    }
}
