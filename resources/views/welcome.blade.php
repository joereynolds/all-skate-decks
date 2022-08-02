<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All Skate Decks</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        @livewireScripts
    </head>
    <body class="p-5">
        <livewire:search/>

        <main class="mt-5 flex">
            <livewire:sidebar :brands="$brands"/>
            <livewire:deck-listing :decks="$decks"/>
        </main>

    </body>
</html>
