<?php


namespace App\Traits\News;


use App\Models\News;
use Illuminate\Support\Facades\Auth;

trait ShowNewsTrait
{
    public function show(News $news)
    {
        return view('new',
            [
                'title' => $news->header,
                'user' => Auth::user(),
                'modelName' => "News",
                'news' => $news
            ]
        );
    }
}
