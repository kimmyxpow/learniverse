<x-auth-layout>
    <form action="{{ route('newUser') }}" method="POST" class="max-w-sm bg-white p-8 rounded-lg mx-auto">
        @csrf
        <h1 class="font-black text-2xl mb-4">Selamat Datang!</h1>
        <div class="grid gap-4">
            <div class="grid">
                <label for="name">Nama</label>
                <input type="name" name="name" id="name"
                    class="py-2 px-4 rounded border focus:outline-none">
            </div>
            <div class="grid">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                    class="py-2 px-4 rounded border focus:outline-none">
            </div>
            <div class="grid">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="py-2 px-4 rounded border focus:outline-none">
            </div>
            <button class="py-2 font-bold px-6 rounded bg-indigo-600 text-white">Register</button>
            <div class="grid grid-cols-2 gap-2 items-center">
                <a href="/"
                    class="text-zinc-600 underline">Kembali</a>
                <a href="{{ route('login') }}"
                    class="py-2 font-bold text-center px-6 rounded text-zinc-800 border">Login</a>
            </div>
        </div>
    </form>
</x-auth-layout>
