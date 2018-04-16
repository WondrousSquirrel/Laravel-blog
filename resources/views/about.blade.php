
@extends('user/app')

@section('bg-img',asset('user/img/about.jpg'))
@section('head')

@endsection
@section('title','About')
@section('sub-heading','')

@section('main-content')
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
           <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Hi, My name is <i>Alexander</i> .</p>
                <p>I wrote this blog for learning purpose. Hope you enjoy it.</p>
            </div>
        </div>
    </div>
</article>

<hr>
@endsection
@section('footer')
@endsection
