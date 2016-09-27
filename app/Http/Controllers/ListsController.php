<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Photos;
use App\Post;
use App\Profile;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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
        $categories = Category::lists('name', 'id');
       return view('lists.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ListFormRequest $request)
    {
        $list = new Photos(array(
             'title' => $request->get('title'),
            'description' => $request->get('description')
            ));
        $list->save();
        if (count($request->get('categories'))) {
            $list->categories()->attach($request->get('categories'));
        }

        return \Redirect::route('lists.create')->with('message', 'Your list has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tasks = Task::done(false)->get();
        Excel::create('Filename', function($excel) {

            $excel->sheet('Sheetname', function($sheet) {

                $sheet->fromArray(array(
                    array('data1', 'data2'),
                    array('data3', 'data4')
                ));

            });

        })->export('xls');
        return view('lists.show', ['photo' => $tasks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Photos::find($id);
        return view('lists.edit')->with('list', $list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Requests\ListFormRequest $request)
    {
        $list = Photos::find($id);
        $list->update(array(
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ));
        return \Redirect::route('lists.edit', [$list->id])->with('message', 'Your list has been updated!');
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
