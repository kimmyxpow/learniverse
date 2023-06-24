<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Learniverse' }}</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <nav class="fixed top-0 inset-x-0 bg-white py-4">
        <div class="container flex justify-between items-center">
            <a href="/" class="text-lg text-zinc-800 font-black">Learniverse<span
                    class="text-2xl text-indigo-600">.</span></a>

            <div class="flex gap-6 items-center">
                @if (auth()->check())
                    <a class="text-zinc-600 hover:text-zinc-800 font-medium" href="#">Mata Pelajaran</a>
                    <a class="text-zinc-600 hover:text-zinc-800 font-medium" href="#">Jenjang</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="py-2 font-bold px-6 rounded bg-red-600 text-white">Logout</button>
                    </form>
                @endif
            </div>
        </div>
    </nav>
    {{ $slot }}
    <footer class="py-4 border-t">
        <div class="container">
            <p>&copy; Learniverse 2023</p>
        </div>
    </footer>
</body>

</html>
