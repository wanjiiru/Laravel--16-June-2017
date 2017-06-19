<?php

namespace App\Http\Controllers;

use App\Blog;

class PagesController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view('blogs.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('blogs.create');

    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $this->validate(request(), ['title' => 'required', 'content' => 'required']);
        $input = request()->all();
        Blog::create($input);
        return redirect('/blogs/create');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postForm()
    {
        return view('form');
    }
}
