<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogService;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $data = BlogService::BlogList($request);
        // dd($data);

        return view('admin.blog.index', compact('data'));
    }
}
