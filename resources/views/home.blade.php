<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İsa Eken</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body class="font-sans leading-normal text-gray-700 bg-gray-100 dark:text-gray-200 dark:bg-gray-900 print:bg-white min-h-screen">
<div id="app">
    <div class="p-6 flex items-center leading-7 text-lg font-light justify-center min-h-screen">
        <div class="md:flex">
            <img src="https://github.com/isaeken.png" alt="İsa Eken" class="h-24 w-24 flex-shrink-0 rounded-full border border-gray-400 dark:border-gray-800 md:h-32 md:w-32" />

            <div class="mt-6 md:ml-6 md:mt-0">
                <div class="inline-flex items-center justify-center">
                    <h1 class="text-gray-800 dark:text-gray-100 text-3xl font-bold">
                        İsa Eken
                    </h1>
                </div>

                <div class="max-w-2xl mt-3">
                    <div class="space-y-4 dark:text-gray-200">
                        <p class="text-xl font-semibold text-gray-500 dark:text-gray-300">
                            Hi there, I'm İsa Eken &mdash; a full-stack web application developer from <span class="whitespace-no-wrap">Ankara, Türkiye</span>.
                        </p>

                        <p>
                            I am passionate about open-source software, best practices, standards, user experience, and developer experience.
                            My favourite stack these days is <a href="http://laravel.com/" target="_blank">Laravel</a>, and <a href="https://tailwindcss.com/" target="_blank">Tailwind</a>.
                        </p>

                        <p>
                            <a href="https://isaeken.medium.com" target="_blank" class="mr-2">Blog</a>
                            <a href="mailto:hello@isaeken.com.tr" class="mr-2">Contact</a>
                            <a href="http://api.isaeken.com" target="_blank" class="mr-2">API</a>
                        </p>
                    </div>

                    <div class="flex mt-8 items-center space-x-2">
                        @foreach($links as $link)
                            <a href="{{ $link->url }}" target="_blank" class="inline-block text-gray-500 border-0 hover:text-gray-700 focus:text-gray-700 dark:text-gray-300 dark:hover:text-gray-400 focus:hover:text-gray-400">
                                {!! $link->svg !!}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{ url('js/app.js') }}"></script>
</body>
</html>
