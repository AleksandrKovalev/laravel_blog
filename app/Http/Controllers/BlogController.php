<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BlogController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($slug)
    {
        $pageRes = Page::where('slug', '=', $slug, 'and', 'status', '=', 'published')->firstOrFail();

        return view('page', ['page' => $pageRes] );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */

    public function index()
    {

        $page = Page::paginate(15);

        return view('blog.index', compact('page'));
    }

}
