@extends('website.layouts.layout-website')
@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Blog</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">


                    <div class="blog-content" style="height: 420px;">
                        <ul class="post-meta">
                            <li>
                            <div class="text-center">
                             <img src="{{asset('storage/'.$post->post_img)}}" style="height: 200px; width:450px;" class="rounded" alt="{{$post->title}}">
                            </div>
                            </li>
                            <li>
                                <span>user:</span>
                                <a href="#">{{$post->user->name}}</a>
                            </li>
                            <li>
                                <span>Date:</span>
                                {{explode(' ', $post->created_at)[0]}}
                            </li>
                        </ul>
                        <h3>
                            <a href="{{route('website.posts.show', ['id' => $post->id])}}">{{$post->title}}</a>
                        </h3>
                        <p>{!!Str::limit($post->details, 60)!!}</p>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
    </div>
</section>
<!-- End Blog Area -->

@endsection