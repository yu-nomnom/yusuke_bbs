<?php

namespace App\Http\Controllers;

use App\test;
use Illuminate\Http\Request;


class TestController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = 'welcome to my bbs';
        $tests = test::all();
        // dd('aaaa');
        return view('index', ['message' => $message, 'tests' => $tests]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $message = '新規投稿';

        return View('new',['message' => $message]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = new test();
        $test->title = $request->title;
        $test->content = $request->content;
        $test->name = $request->name;
        $test->save();
        return redirect('/tests');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, test $test)
    {
        $message = 'ID:'. $id;
        $test = test::find($id);
        return view('show', ['message' => $message, 'test' => $test]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id, test $test)
    {
        //削除機能
        $test = $test::find($id);
        $test->delete();
        return redirect('/tests'); 
    }
}
