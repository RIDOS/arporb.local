<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Service\PostService as ServicePostService;
use Illuminate\Http\Request;
use PostService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ServicePostService $service)
    {
        $this->service = $service;
    }
}
