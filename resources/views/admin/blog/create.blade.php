@extends('layouts.sidenav')
@section('title', 'Create Blog')

@section('content')

<h1>Create Blog</h1>
<form method="post" action="/admin/blogs">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input name="title" type="text" id="title" />
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input name="image" type="text" id="image" />
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <span><input name="status" type="radio" value="2" id="draft" checked /> <label for="draft">Draft</label></span>
        <span><input name="status" type="radio" value="1" id="publish" /> <label for="publish">Publish</label></span>
    </div>
    <button type="submit">Submit</button>
</form>

@endsection