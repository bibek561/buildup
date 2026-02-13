<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;


class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::all();
        return view('admin.quote.index', compact('quotes'));
    }

    public function create()
    {
        return view('admin.quote.create');
    }

    public function store(Request $request)
    {
        Quote::create($request->all());
        return redirect()->route('quote.index');
    }

    public function edit($id)
    {
        $quote = Quote::findOrFail($id);
        return view('admin.quote.edit', compact('quote'));
    }

    public function update(Request $request, $id)
    {
        $quote = Quote::findOrFail($id);
        $quote->update($request->all());
        return redirect()->route('quote.index');
    }

    public function destroy($id)
    {
        Quote::findOrFail($id)->delete();
        return redirect()->route('quote.index');
    }
}
