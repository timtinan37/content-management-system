<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index', ['contents' => Content::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'title' => 'required|string',
            'attachment' => 'required',
            'description' => 'required|string',
            'type' => 'required|boolean',
            'section' => 'required|boolean',
            'is_published' => 'required|boolean',
        ]);

        $content = new Content();

        if (request('type') == '1')
        {
            $request->validate(['attachment' => 'image']);
            $content->attachment = $request->file('attachment')->store('public/images');
        }
        if (request('type') == '0')
        {
            $content->fill($request->validate(['attachment' => 'url']));
        }
        
        $content->fill(Arr::except(request()->all(), ['_token', 'attachment']));
        $content->save();
        return back()->with('status', 'Content created !');
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Content $content)
    {
        $content->update(['is_published' => !$content->is_published]);
        return back()->with('status', 'Content publication status changed !');
    }

}
