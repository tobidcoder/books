<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Facades\DB;
use App\AuthorBook;
use App\Book;
use App\Review;

class BookController extends Controller
{
    public function __construct(Book $book, Review $review, AuthorBook $authorbook){
        $this->book = $book;
        $this->authorbook = $authorbook;
    }

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    { 
        //Get books list 
        // $reviews = $hisbook->$this->review 
        $books = $this->book::with('author:name,username')->with('reviews')->orderBy('title', 'DESC')->paginate(); 
        if($books->count() === 0){ 
            return response()->json([ 
            'success' => false, 
            'message' => 'No books available found' 
        ], 404); 
 
      } 
       
      elseif($books){ 
            return response()->json([ 
                'data' => $books->toArray(), 
                ], 200); 
        } else { 
            return response()->json(['error' => 'UnAuthorised'], 401); 
        } 
         
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        //validate data
        $this->validate($request, [
            'isbn' => 'required|numeric|digits:13|unique:books',
            'title' => 'required|string',
            'description' => 'required|string',
            'author_id' => 'required|numeric',
        ]);
 
        $this->book->isbn = $request->isbn;
        $this->book->title = $request->title;
        $this->book->description = $request->description;

        //Save new books
        if($this->book->save()){
          
            $latestbookid = $this->book->id;
            $this->authorbook->book_id = $this->book->id;
            $this->authorbook->author_id = $request->author_id;
            
            $latestbookid = $this->book->id;

            if($this->authorbook->save()){
                                
                $book = $this->book::find($latestbookid)->with('author:name,username')->with('reviews')->paginate();
                return response()->json([
                    'success' => true,
                    'data' => $book->toArray(),
                ], 200);
            }else
            return response()->json([
                'success' => false,
                'message' => 'Books could not be added'
            ], 500);
        }

            
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
