<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $reviews = Review::latest()->paginate(5);
      
        return view('admin.reviews.index',compact('reviews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::latest()->pluck('name','id');
        return view('admin.reviews.create', compact('products'));
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required',
            'product_id' => 'required',
            'comment' => 'required',
        ]);
      
        Review::create($request->all());
       
        return redirect()->route('reviews.index')
                        ->with('success','Review created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('admin.reviews.show',compact('review'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        $products = Product::latest()->pluck('name','id');
        return view('admin.reviews.edit',compact('review', 'products'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'rating' => 'required',
            'comment' => 'required',
        ]);
      
        $review->update($request->all());
      
        return redirect()->route('reviews.index')
                        ->with('success','Review updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
       
        return redirect()->route('reviews.index')
                        ->with('success','Review deleted successfully');
    }
}
