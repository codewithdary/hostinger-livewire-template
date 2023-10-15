<html lang="en">
<head>
    <meta
        charset="UTF-8"
    />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Hostinger Livewire
    </title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link
        href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-800">
<div class="relative h-full isolate overflow-hidden  px-6 lg:px-8">
    <header>
        @include('layouts.nav')
    </header>
    <div class="relative isolate pt-24 sm:pt-32">
        <div class="mx-auto w-4/5">
            @yield('content')
        </div>
        <div class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu overflow-hidden opacity-30 blur-3xl" aria-hidden="true">
            <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
    <footer class="absolute bottom-0 w-full align-center">
        @include('layouts.footer')
    </footer>
</div>
</body>
</html>
