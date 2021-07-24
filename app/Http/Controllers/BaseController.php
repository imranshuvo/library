<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class BaseController extends Controller
{


    //Get all the books
    public function home(){
        $books = app('db')->select("SELECT *FROM books");

        //return $books;

        return view('home',['books' => $books]);

    }
    

    //Add book view
    public function addbook(){

        return view('addbook');
    }

   
}
