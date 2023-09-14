@extends('layouts.sidenav')
@section('title', 'Create User')

@section('content')

<h1>Create User</h1>
<form method="post" action="/admin/users">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input name="name" type="text" id="name" />
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input name="email" type="email" id="email" />
    </div>
    <button type="submit">Submit</button>
</form>

@endsection