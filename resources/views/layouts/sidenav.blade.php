<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates.header')
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <aside class="sidenav">
            <ul>
                <li><a href="/users">Users</a></li>
                <li><a href="/users/create">Create</a></li>
                @guest
                <li>Guest User</li>
                @endguest
                @auth
                <li><a href="/logout">Logout</a></li>
                @endauth
            </ul>
        </aside>

        <main>
            <div class="main">

                @yield('content')

            </div>
        </main>

    </div>


</body>

</html>