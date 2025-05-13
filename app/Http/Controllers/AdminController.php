<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        $name = 'Iffahan Suksuwan';
        $date = '2025-05-13';
        return view('welcome', compact('name', 'date'));
    }

    function blogs()
    {
        $blogs = DB::table('blogs')->get();
        return view('blog', compact('blogs'));
    }

    function delete($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect()->back();
    }
}
