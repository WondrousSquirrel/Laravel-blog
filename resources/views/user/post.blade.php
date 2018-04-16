@extends('user/app')
<!-- slug применяется вместо post, как указано в user\model\post-->
<!-- для отображение нобходимо сделать привязку - php artisan storage:link -->
@section('bg-img', Storage::disk('local')->url($slug->image))

@section('head')
<link rel="stylesheet" href="{{ asset('user\/css/prism.css') }}">
@endsection
@section('title', $slug->title) 
@section('sub-heading', $slug->subtitle)

@section('main-content')
	<!-- Post Content -->

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.12&appId=800423733491878&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <small>created at {{ $slug->created_at->diffForHumans() }}</small>
                        @foreach($slug->categories as $category)
                        <small class="pull-right" style="margin-right:20px">
                          <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                        </small>

                        @endforeach
                    </small>
                   {!! htmlspecialchars_decode($slug->body) !!}
                   <!-- Tags -->
                   <hr>
                   @foreach($slug->tags as $tag)
                   <a href="{{ route('tag',$tag->slug) }}">
                      <span class="badge badge-pill badge-default">{{ $tag->name }}</span>    
                   </a>
                   
                @endforeach
                </div>
            </div>
            <!-- Request::url() - возвращает адресс без строки запроса -->
            <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="10"></div>
        </div>
    </article>

    <hr>
@endsection
@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection