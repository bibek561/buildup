<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::latest()->paginate(10);
        return view('admin.review.index', compact('review'));
    }


    public function create()
    {
        return view('admin.review.create');
    }


    public function store(StoreReviewRequest $request)
    {
        $input = $request->all();

        $input['image'] = fileUpload($request, 'image', 'review');
        $input['slug'] = Str::slug($request->name);


        // Create the review
        Review::create($input);

        return redirect()->route('review.index')->with('message', 'Created Successfully');
    }


    public function edit(Review $review)
    {
        return view('admin.review.edit', compact('review'));
    }


    public function update(UpdateReviewRequest $request, Review $review)
    {
        $input = $request->all();
        $old_image = $review->image;
        $image = fileUpload($request, 'image', 'review');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $input['slug'] = Str::slug($request->name);
        $review->update($input);

        return redirect()->route('review.index')->with('message', 'Updated Successfully');
    }


    public function destroy(Review $review)
    {
        removeFile($review->image);
        $review->delete();

        return redirect()->route('review.index')->with('message', 'Deleted Successfully');
    }
}
