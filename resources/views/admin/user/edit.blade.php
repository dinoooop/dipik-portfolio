@extends('layouts.sidenav')
@section('title', 'Edit User')

@section('content')

<h1>Edit User</h1>
<form method="post" action="/admin/users/{{$user->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input name="name" type="text" id="name" value="{{$user->name}}"/>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input name="email" type="email" id="email" value="{{$user->email}}"/>
    </div>
    <button type="submit">Save</button>
</form>
@endsection