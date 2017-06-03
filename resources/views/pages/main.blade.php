@extends('layouts.app')

@section('content')


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Вселенная</h1>
                        <hr class="small">
                        <span class="subheading">Простыми словами о сложном</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{route('blog.post',$post->slug)}}">
                        <h2 class="post-title">
                            {{$post->getContent('name')}}
                        </h2>
                        <h3 class="post-subtitle">

                            {{ str_limit(strip_tags($post->getContent('body')),150) }}
                        </h3>
                    </a>
                    <p class="post-meta">Опубликованно: {{$post->publish_at->diffForHumans()}}</p>
                </div>
                <hr>
                @endforeach


                <div class="row text-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>


@endsection
