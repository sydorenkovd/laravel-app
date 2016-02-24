<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function create(){
        die('Photo/CREATE');
    }
    public function store(Request $request){

    }
    public function details($id){
        die($id);
    }
}