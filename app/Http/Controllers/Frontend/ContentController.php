<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section_1_contents = Content::where('section', 1)->where('is_published', 1)->latest()->take(5)->get();
        $section_2_contents = Content::where('section', 0)->where('is_published', 1)->latest()->take(5)->get();

        return view('frontend.index', compact('section_1_contents', 'section_2_contents'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return view('frontend.show', compact('content'));
    }
}
