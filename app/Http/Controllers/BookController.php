<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return Book::create([
        //     'title' => 'মোগল সম্রাট আওরঙ্গজেব',
        //     'slug' => 'moghal_somrat_aurongjeb',
        //     'authors' => 'মোহাম্মদ জালালউদ্দিন বিশ্বাস',
        //     'published_date' => 'ফেব্রুয়ারী, ২০১৮',
        // ]);

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'authors' => 'required'
        ]);

        return Book::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Book::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::find($id);
        $book->update($request->all());
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Book::destroy($id);
    }

    public function search($name)
    {
        return Book::where('title','like','%'.$name.'%')
                    ->orWhere('slug','like','%'.$name.'%')->get();
    }
}
