<?php

namespace App\Http\Controllers\GuestAndUsers;

use App\Models\News;
use App\Http\Controllers\Controller;
use App\Traits\News\ShowNewsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestNewsController extends Controller
{
    use ShowNewsTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('news_feed', [
            'title' => "News feed",
            'user' => Auth::user(),
            'news' => News::all()
        ]);
    }

}
