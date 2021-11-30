<h1 class="display-6">{{$news->header}}</h1>
<hr>
@isset($news->img_path)
    <div class="text-center">
        <img src="{{\Illuminate\Support\Facades\Storage::url($news->img_path)}}" class="img-thumbnail" alt="...">
    </div>
@endisset
<p class="text-justify font-size">{{$news->body_text}}</p>
