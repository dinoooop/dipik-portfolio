@extends('layouts.front')
@section('title', 'User Login')


@section('content')
<section class="blog-header">
    @include('templates.nav')
</section>

<section class="blogs" id="nav-stick-time">
    <div class="wrapper">

        <h1>Blogs</h1>

        <div class="pockets">
            <div class="pocket">
                <div class="thumb">
                    <a href="/sample">
                    <img src="{{ asset('assets/images/helvetica.jpg') }}" alt="">
                    </a>
                </div>
                <div class="details">
                    <h2><a href="/sample">The Font, Helvetica </a></h2>
                    <p class="time">Jun 26, 2023 | JS, Laravel</p>
                    <p>Index funds have gained popularity in the world of investing, offering a simple and effective way for individuals to participate in the stock market.</p>
                </div>
            </div>
            <div class="pocket">
                <div class="thumb">
                    <img src="{{ asset('assets/images/phone.jpg') }}" alt="">
                </div>
                <div class="details">
                    <h2>Prestige, The show of the day.</h2>
                    <p class="time">Jun 26, 2023 | JS, Laravel</p>
                    <p>A sample assembly the investing, offering a simple and effective way for individuals to participate in the stock market.</p>
                </div>

            </div>
            <div class="pocket">
                <div class="thumb">
                    <img src="{{ asset('assets/images/titanic-expedition-view.jpg') }}" alt="">
                </div>
                <div class="details">
                    <h2>Submarine 2023 on board.</h2>
                    <p class="time">Jun 26, 2023 | JS, Laravel</p>
                    <p>A sample assembly the investing, offering a simple.</p>
                </div>

            </div>

            <div class="pocket">
                <div class="thumb">
                    <img src="{{ asset('assets/images/zebra.jpg') }}" alt="">
                </div>
                <div class="details">
                    <h2>Prestige, The show of the day.</h2>
                    <p class="time">Jun 26, 2023 | JS, Laravel</p>
                    <p>A sample assembly the investing, offering a simple and effective way for individuals to participate in the stock market.</p>
                </div>

            </div>

        </div>
    </div>

</section>

@include('templates.footer')

@endsection