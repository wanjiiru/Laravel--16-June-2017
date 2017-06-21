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

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store ()
    {
        $this->validate ( request (), ['title' => 'required', 'content' => 'required'] );
        $input = request ()->all ();
        Blog::create ( $input );
        return redirect ( '/blogs/create' );
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param Blog $blog
     */
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


    /**
     * @param $id
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect ('\blogs');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postForm ()
    {
        return view ( 'form' );
    }
}
