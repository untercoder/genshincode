<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard_table',
            [
                'title' => "News admin table",
                'user' => Auth::user(),
                'date' => News::all(),
                'modelName' => "News",
                'tableTh' => [ "Статья", "Дата создания" , "Последние обновление","Действия"]
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inputform_news',
            [
                'title' => "News admin table",
                'user' => Auth::user(),
                'modelName' => "News",
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $params = $request->all();

        if(isset($file)) {
            $imgPath = $file->store('news_img');
            $params['image'] = $imgPath;
            News::create([
                'header' => $params['header'],
                'body_text' => $params['text'],
                'img_path' => $params['image']
            ]);
        }
        else {
            News::create([
                'header' => $params['header'],
                'body_text' => $params['text'],
            ]);
        }
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.inputform_news',
            [
                'title' => "News admin table",
                'user' => Auth::user(),
                'modelName' => "News",
                'news' => $news
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, News $news)
    {
        $file = $request->file('image');
        $params = $request->all();

        if(isset($file)) {
            if(isset($news->img_path)) {
                Storage::delete($news->img_path);
            }
            $imgPath = $file->store('news_img');
            $params['image'] = $imgPath;
            $news->update([
                'header' => $params['header'],
                'body_text' => $params['text'],
                'img_path' => $params['image']
            ]);
        }
        else {
            $news->update([
                'header' => $params['header'],
                'body_text' => $params['text'],
            ]);
        }
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(News $news)
    {
        Storage::delete($news->img_path);
        $news->delete();
        return redirect()->route('news.index');
    }
}
