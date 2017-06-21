<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{
    public function index ()
    {
        $blogs = Blog::all ();
        return view ( 'blogs.index', ['blogs' => $blogs] );
    }


    public function create ()
    {
        return view ( 'blogs.create' );
    }


    public function store ()
    {
        $this->validate ( request (), ['title' => 'required', 'content' => 'required'] );
        $input = request ()->all ();
        Blog::create ( $input );
        return redirect ( '/blogs/create' );
    }


    public function destroy ($id )
    {
        $blog = Blog::findOrFail ( $id );
        $blog->delete ();
        return Redirect::to ( '/blogs' )
            ->with ( 'message', 'Successfully deleted!' );
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect ('\blogs');
    }


    public function postForm ()
    {
        return view ( 'form' );
    }

}
