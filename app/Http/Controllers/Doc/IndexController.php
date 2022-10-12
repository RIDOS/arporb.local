<?php

namespace App\Http\Controllers\Doc;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('docs.index');
    }
}
