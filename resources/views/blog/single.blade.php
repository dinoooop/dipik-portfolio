@extends('layouts.front')
@section('title', 'User Login')


@section('content')
<section class="blog-header">
    @include('templates.nav')
</section>

<section id="nav-stick-time">
    <div class="wrapper blog-single">

        <div class="blog-main">
            <h1>{{ $data['title'] }}</h1>
            <p class="date-time">{{ blogDateFormat($data['updated_at']) }}</p>
            <div class="blog-content"><?php echo $data->content ?></div>
        </div>

        <div class="blog-side">

            <div class="side-block">
                <img src="{{ getImageById(3) }}" alt="author" class="author-image">
                <h4>Author</h4>
                <p> hoping for an excuse to make some more updates. Maybe a few of these pieces will scratch the itch!</p>
            </div>

            <div class="side-block">
                <h4>Explore</h4>
                <div class="tags">
                    @foreach($tags as $key => $tag)
                        <div class="tag">
                            <a href="{{ url('tags/' . $tag->slug) }}">{{ $tag->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>

            
            <div class="side-block ">
                <h4>Newsletter</h4>
                <form action="">
                    @csrf
                    <div class="form-group newsletter">
                        <input name="email" type="email" placeholder="Email" />
                        <button class="subscribe">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>


    </div>

</section>

@include('templates.footer')

@endsection