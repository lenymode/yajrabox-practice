<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use DataTables;

class BlogController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }

    public function getBlog(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::latest()->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $actionBtn = 
                '<a href="javascript::void(0);"  class="show btn btn-info btn-sm">View</a>
                <a href="javascript::void(0);"  class="edit btn btn-primary btn-sm">Edit</a>
                <a href="javascript::void(0);"  class="delete btn btn-danger btn-sm">Delete</a>
                '
                ;
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }
}
