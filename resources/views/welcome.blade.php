<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autókereskedés</title>

    <!-- links -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>

<body class="antialiased">
    <main>
        <header>
            <img src="{{url('images/logo.jpg')}}"  id="header_logo" class="photo" width="100" height="100">
            <h1 id="nevunk">Mercedes Mercy</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Kezdőlap</a></li>
                <li><a href="konfigurator.html">Konfigurátor</a></li>
                <li id="user"><a href="#">Bejelentkezés</a></li>
            </ul>
        </nav>
        <article>

        </article>

        <footer></footer>
    </main>
</body>

</html>