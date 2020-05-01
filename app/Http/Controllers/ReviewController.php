<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    public function __construct(Review $review){
        $this->review = $review;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        //
        //validate data
        $this->validate($request, [
            'review' => 'required|numeric|min:1|max:10',
            'comment' => 'required|string',
            'user_id' => 'required|numeric',
        ]);
 
        $this->review->review = $request->review;
        $this->review->comment = $request->comment;
        $this->review->book_id = $id;
        $this->review->user_id = $request->user_id;
    
        //Save new  review book
        if($this->review->save()){  

            $latestreview = $this->review->id;
            $review = $this->review::findOrFail($latestreview)->with('review')->get();
            return response()->json([
                'success' => true,
                'data' => $review->toArray(),
            ], 200);
            
        }else
        return response()->json([
            'success' => false,
            'message' => 'Review could not be added'
        ], 500);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
