<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>An ninh mạng</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @livewireStyles()
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#sql">SQL Injection</a></li>
                <li><a href="#xss">XSS (Cross-site Scripting)</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @livewire('sql-injection')
        @livewire('xss')
    </main>
    @livewireScripts()
</body>
</html>