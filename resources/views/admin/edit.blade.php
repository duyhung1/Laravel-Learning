@extends('layouts.admin')
@section('content')
@include('partials.errors')
<div class="row">
    <div class="col-md-12">
       <form action="{{route('admin.update')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="title" 
                    name="title" 
                    value=" {{$edit['title'] }} ">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="content" 
                    name="content"
                    value="{{$edit['content'] }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
</div>

@endsection
