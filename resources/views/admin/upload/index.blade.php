@extends('layouts.sidenav')
@section('title', 'Uploads')

@section('content')

<h1>Uploads</h1>

<div class="table-top">
    <div class="form-group">
        <input type="text" name="search" />
    </div>
    <a href="/admin/uploads" class="btn"><i class="fas fa-search"></i></a>
    <a href="/admin/uploads/create" class="btn"><i class="fas fa-add"></i></a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>URL</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data['uploads'] as $key => $model)
        <tr>
            <td>{{$model['id']}}</td>
            
            <td>
                <img src="{{asset('storage/uploads/' . $model['url'])}}" alt="" width="150">
            </td>
            <td>
                <a href="/admin/uploads/{{$model['id']}}/edit" class="btn"><i class="fas fa-edit"></i></a>
                <button data-model-end-point="uploads" data-model-id="{{ $model->id }}" class="btn trash"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection