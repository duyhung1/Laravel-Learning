@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <p class="quote">The beautiful Laravel</p>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <h1 class="post-title">Learning Laravel</h1>
        <p>This blog post will get you right on track with Laravel</p>
        <p><a href="{{route('blog.readMore', ['id'=>1])}}">Read more...</a></p>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12 text-center">
        <h1 class="post-title">The next steps</h1>
        <p>Understanding the Basics is great, but you need to be able to make 
            the next steps.</p>
            <p><a href="{{route('blog.readMore', ['id'=>2])}}">Read more...</a></p>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12 text-center">
        <h1 class="post-title">Laravel 7.2</h1>
        <p>The Laravel team released v7.2.0 this week with HTTP client 
            query string support and a new timeout configuration
             option for the SMTP mail driver.</p>
             <p><a href="{{route('blog.readMore', ['id'=>3])}}">Read more..</a></p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h4>Control Structures</h4>
        @if(false)
            <p>dung</p>
        @else
            <p>sai</p>
        @endif
        <hr>
        @for($i = 0; $i < 5; $i++)
        <p> Number.{{ $i +1 }}  </p>
        @endfor
        <hr>
        <h4>XSS</h4>
        <!-- {{" <script>alert('Hello');</script> "}}
        {!!" <script>alert('Hello');</script> "!!} -->
    </div>
</div>
@endsection
