@extends('layouts.app')

@section('content')

<div class="panel panel-default">
<div class="panel-heading">
Create a new post
</div>
<div class="panel-body">
    <form action="{{ route('posts.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Featured Image</label>
            <input type="file" name="fetured" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
        <div class="text-center">
        <button class="btn btn-success">Store post</button>
        </div>
        </div>
    </form>
</div>
</div>
@stop