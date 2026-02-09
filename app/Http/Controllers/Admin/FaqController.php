<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;

class FaqController extends Controller
{

    public function index()
    {
        $faqs = Faq::latest()->paginate(24);
        return view('admin.faq.index', compact('faqs'));
    }


    public function create()
    {
        return view('admin.faq.create');
    }


    public function store(StoreFaqRequest $request)
    {
        $input = $request->all();
        Faq::create($input);
        return redirect()->route('faq.index')->with('message', 'Created Successfully');
    }


    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }


    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $input = $request->all();
        $faq->update($input);
        return redirect()->route('faq.edit', $faq->id)->with('message', 'Update Successfully');
    }


    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('message', 'Deleted Successfully');
    }
}
