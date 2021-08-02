<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



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

   //Searh book
   public function search($name){

   }



    //Create a book in database
    public function createBook(Request $request){
        $this->validate($request, [
            'title' => 'required|string',
            'authors' => 'required|string',
            'part' => 'string',
            'publish' => 'string'
        ]);

        $book = app('db')->insert('insert into books ( title, authors, part, published_date ) values (?, ?, ? ,?)', [
            $request->input('title'),
            $request->input('authors'),
            $request->input('part'),
            $request->input('publish')
        ]);
       
        if($book){
            return redirect('/');
        }

    }
}
