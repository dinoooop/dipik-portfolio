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
    <div class="wrapper">
        <h3>Story</h3>
        <p class="subtitle"><?php echo $story; ?></p>
    </div>
</section>
<section class="work bgtext artboard" id="work">
    <div class="wrapper">
        <h3>Works</h3>
        <p class="subtitle">Made with fun</p>

        <div class="work-tile">
            <a href="#" class="tile ripple">TIMLOG</a>
            <a href="#" class="tile"></a>
            <a href="#" class="tile"></a>
        </div>
    </div>
</section>
<section class="experience artboard" id="experience">
    <div class="wrapper">
        <h3>Experience</h3>
        <p class="subtitle">Listing my industrial connections</p>

        <div class="cards">
            <div class="card">
                <div class="thumb">2016 - 18</div>
                <div class="details">
                    <h4>Spark Support Pvt. Ltd</h4>
                    <p class="address">Infopark, Kochi, India</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, cumque! Doloribus, dolores. Deserunt id facere debitis nisi dicta quisquam distinctio asperiores, non eaque ab voluptatem et esse eius! Recusandae, vero?</p>
                </div>
            </div>

            <div class="card">
                <div class="thumb">2014 - 16</div>
                <div class="details">
                    <h4>Neolink Technologies</h4>
                    <p class="address">Infopark TBC, Kochi, India</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, cumque! Doloribus, dolores. Deserunt id facere debitis nisi dicta quisquam distinctio asperiores, non eaque ab voluptatem et esse eius! Recusandae, vero?</p>
                </div>
            </div>

            <div class="card">
                <div class="thumb">2012 - 14</div>
                <div class="details">
                    <h4>Green I Solutions</h4>
                    <p class="address">Kakkanad, Kochi, India</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, cumque! Doloribus, dolores. Deserunt id facere debitis nisi dicta quisquam distinctio asperiores, non eaque ab voluptatem et esse eius! Recusandae, vero?</p>
                </div>
            </div>

        </div>


    </div>
</section>
<section class="contact artboard" id="contact">
    <div class="wrapper">
        <h3>Contact</h3>
        <p class="subtitle">Lets do something together</p>

        <form action="https://formspree.io/f/moqbgwzj" method="post">
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