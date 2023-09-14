<div class="header  wrapper" id="myHeader">
    <div class="logo">
        <a href="{{ asset('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="dipik">
        </a>
    </div>

    <nav>
        <div class="menu" onclick="myFunction()">[=]</div>
        <div class="topnav" id="myTopnav" onclick="handleNavLinkClick()">
            <a href="#story">Story</a>
            <a href="#work">Works</a>
            <a href="#experience">Experience</a>
            <a href="#contact">Contact</a>
            <a href="/blogs">Blogs</a>
        </div>
    </nav>
</div>