@extends('layouts.front')
@section('title', 'User Login')


@section('content')
<section class="home" id="home">

    @include('templates.nav')


    <div class="hero-text wrapper">
        <h2>Hi, I am <span>Dinoop</span></h2>
        <p>Welcome to my portfolio</p>
    </div>
</section>

<section class="story artboard" id="nav-stick-time">
    <div class="wrapper" id="story">
        @if(isset($story->title))
        <h2>{{ $story->title }}</h2>
        <p><?php echo $story->content; ?></p>
        @endif
        
    </div>
</section>
<section class="work bgtext artboard" id="work">
    <div class="wrapper">
        <h2>Works</h2>
        <p class="subtitle">Made with fun</p>

        <div class="work-tile">
            @foreach($works as $key => $work)
            <a href="{{ $work->url }}" target="_blank" class="tile ripple">{{ $work->title }}</a>
            @endforeach
        </div>
    </div>
</section>
<section class="experience artboard" id="experience">
    <div class="wrapper">
        <h2>Experience</h2>
        <p class="subtitle">Listing my industrial connections</p>

        <div class="cards">
            @foreach($experiences as $key => $experience)
            <div class="card">
                <div class="thumb">{{ $experience->duration }}</div>
                <div class="details">
                    <h3>{{ $experience->title }}</h3>
                    <p class="address">{{ $experience->address }}</p>
                    <p>{{ $experience->content }}</p>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</section>
<section class="contact artboard" id="contact">
    <div class="wrapper">
        <h2>Contact</h2>
        <p class="subtitle">Lets do something together</p>
        <!-- https://formspree.io/f/moqbgwzj -->
        <form action="/contact" method="post">
            @csrf
            <div class="form-element">
                <div for="name">
                    <strong>Name</strong>
                    <input type="text" id="name" name="name" required />
                </div>

                <div for="email">
                    <strong>Email</strong>
                    <input type="email" id="email" name="email" required />
                </div>

                <div for="message">
                    <strong>Message</strong>
                    <textarea name="message" required></textarea>
                </div>

                <button type="submit" class="">Submit</button>
            </div>
        </form>
    </div>
</section>

@include('templates.footer')

@endsection