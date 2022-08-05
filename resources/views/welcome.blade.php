<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All Skate Decks</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @livewireStyles
        @livewireScripts
    </head>
    <body class="p-5">
        <livewire:search/>

        <main class="mt-5 flex">
            <livewire:sidebar/>
            <livewire:deck-listing/>
            <livewire:form.add-a-deck/>
        </main>

    </body>
</html>
