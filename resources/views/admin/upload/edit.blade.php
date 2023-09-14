@extends('layouts.sidenav')
@section('title', 'Edit Upload')

@section('content')

<h1>Edit Upload</h1>
<form method="post" action="/admin/uploads/{{$data->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="url">URL:</label>
        <input name="url" type="text" id="url" value="{{ $data->url }}" />
    </div>
    <div class="form-group">
        <label for="url_two">URL Two:</label>
        <textarea name="url_two" id="url_two">{{ $data->url_two }}</textarea>
    </div>
    <button type="submit">Submit</button>
</form>

@endsection