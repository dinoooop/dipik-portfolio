@extends('layouts.sidenav')
@section('title', 'Edit Blog')

@section('content')

<h1>Edit Blog</h1>
<form method="post" action="/admin/blogs/{{$data->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title:</label>
        <input name="title" type="text" id="title" value="{{ $data->title }}" />
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea name="content" id="content">{{ $data->content }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input name="image" type="text" id="image" value="{{ $data->image }}" />
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <span><input name="status" type="radio" value="2" id="draft" {{ $data->status == 2 ? "checked" : "" }} /> <label for="draft">Draft</label></span>
        <span><input name="status" type="radio" value="1" id="publish" {{ $data->status == 1 ? "checked" : "" }} /> <label for="publish">Publish</label></span>
    </div>
    <button type="submit">Submit</button>
</form>

@endsection