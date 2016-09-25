<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photos;
use App\Post;
use App\Profile;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photos::orderBy('title', 'DESC')->paginate(5);
        return view('lists.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photos::find($id);
//        $category = new Category(['name' => 'Vacation']);
//        $photo->categories()->save($category);
//        $photo->categories()->detach([1]);
        $list = Photos::find(2);
//
//        $categories = [
//            new Category(['name' => 'Vacation']),
//            new Category(['name' => 'Tropical']),
//            new Category(['name' => 'Leisure']),
//        ];
        $list->categories()->updateExistingPivot(
            '3', ['description' => 'Cause i dont care about nothing']
        );

//        $list->categories()->saveMany($categories);
        return view('lists.show', ['photo' => $photo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Photos::destroy($id);
        return \Redirect::route('lists.index')->withMessage('record deleted');

    }
}
