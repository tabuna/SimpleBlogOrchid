@extends('layouts.app')

@section('title',$post->getContent('title'))
@section('keywords',$post->getContent('keywords'))
@section('description',$post->getContent('description'))

@section('content')



<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{$post->attachment->first()->url() }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{$post->getContent('name')}}</h1>
                    <h2 class="subheading">{{$post->getContent('subname')}}</h2>
                    <span class="meta">Published on {{$post->publish_at->diffForHumans()}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <main>
                {!! $post->getContent('body') !!}
                </main>
            </div>
        </div>
    </div>
</article>
@endsection
