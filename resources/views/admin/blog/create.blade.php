@extends('layouts.sidenav')
@section('title', 'Create Blog')

@section('header')
<link rel="stylesheet" href="{{ asset('assets/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ asset('assets/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/richtexteditor/plugins/all_plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/rte-upload.js') }}"></script>
@endsection

@section('content')

<h1>Create Blog</h1>
<form method="post" action="/admin/blogs">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input name="title" type="text" id="title" />
    </div>
    <div class="form-group">
        <!-- <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea> -->

        <label for="content">Content:</label>
        <input name="content" id="inp_content" type="hidden" />
        <div id="content_editor" class="richtexteditor" style="width: 100%; margin:0 auto;">
        
        </div>
    </div>
    <div class="form-group">
        <label for="excerpt">Excerpt:</label>
        <textarea name="excerpt" id="excerpt"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input name="image" type="text" id="image" />
    </div>
    <div class="form-group">
        <label for="tags">Tags:</label>
        <input name="tags" type="text" id="tags" />
    </div>
    <div class="form-group">
        <label for="related">Related Post:</label>
        <input name="related" type="number" id="related" />
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <span><input name="status" type="radio" value="2" id="draft" checked /> <label for="draft">Draft</label></span>
        <span><input name="status" type="radio" value="1" id="publish" /> <label for="publish">Publish</label></span>
    </div>

    <div class="form-group">
        <label for="is_featured">Set Featured:</label>
        <span><input name="status" type="checkbox" value="1" checked /> <label for="draft">A featured post</label></span>
    </div>
    <button type="submit">Submit</button>
</form>

<script>
    var editor1 = new RichTextEditor(document.getElementById("content_editor"));
    
    editor1.attachEvent("change", function() {
        document.getElementById("inp_content").value = editor1.getHTMLCode();
    });
</script>
@endsection