<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cmyk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body class="font-sans text-base antialiased bg-base-100">

        <div class="grid grid-cols-1">
            <div class="m-auto navbar bg-neutral text-neutral-content">
                TOP NAV
            </div>
        </div>
        

        <div class="grid grid-cols-1 sm:grid-cols-6 m-auto gap-4 sm:my-2">
            <div class="bg-neutral text-neutral-content sm:col-span-2 sm:order-2 sm:rounded-r-md order-3">
                <h2 class="text-primary text-lg text-center">SIDEBAR</h2>
                <ul>
                    <li><a href="{{ route('main.index') }}" class="text-secondary underline">Sidebar Nav Link</a></li>
                    <li><a href="{{ route('main.index') }}" class="text-secondary underline">Sidebar Nav Link</a></li>
                    <li><a href="{{ route('main.index') }}" class="text-secondary underline">Sidebar Nav Link</a></li>
                </ul>
                <br />

                <button class="btn btn-primary">One</button>
                <button class="btn btn-secondary">Two</button>
                <button class="btn btn-accent btn-outline">Three</button>
            </div>

            <div class="bg-base-100 base-content sm:order-4 sm:col-span-3 order-2 p-1 sm:p-0">
                <h1 class="text-center font-bold text-xl text-primary">CONTENT</h1>
                <p>
                    This is a paragraph of text. And it has a <a href="{{ route('main.index') }}" class="text-secondary underline">Hyperlink!</a>
                </p>
                <br />
                <button class="btn btn-primary">Save your work!</button>
            </div>
        </div>

    </body>
</html>