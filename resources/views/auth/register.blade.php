<x-auth-layout title="Learniverse - Register">
    <form action="{{ route('newUser') }}" method="POST" class="max-w-sm bg-white p-8 rounded-lg mx-auto">
        @csrf
        <h1 class="font-black text-2xl mb-4">Selamat Datang!</h1>
        <div class="grid gap-4">
            <div class="grid gap-1">
                <label for="name" class="font-medium text-zinc-800">Nama</label>
                <input type="name" name="name" id="name" value="{{ old('name') }}"
                    class="py-2 px-4 rounded border focus:outline-none">
                @error('name')
                    <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="grid gap-1">
                <label for="email" class="font-medium text-zinc-800">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="py-2 px-4 rounded border focus:outline-none">
                @error('email')
                    <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="grid gap-1">
                <label for="password" class="font-medium text-zinc-800">Password</label>
                <input type="password" name="password" id="password" value="{{ old('password') }}"
                    class="py-2 px-4 rounded border focus:outline-none">
                @error('password')
                    <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                @enderror
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
