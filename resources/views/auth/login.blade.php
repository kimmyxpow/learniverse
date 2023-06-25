<x-auth-layout title="Learniverse - Login">
    <form action="{{ route('authenticate') }}" method="POST" class="max-w-sm bg-white p-8 rounded-lg mx-auto">
        @csrf
        <h1 class="font-black text-2xl mb-4">Selamat Datang Kembali!</h1>
        @error('login')
            <div class="py-2 px-4 rounded bg-red-100 text-red-600 mb-4 border border-red-600">
                {{ $message }}
            </div>
        @enderror
        @if (session()->has('success_register'))
            <div class="py-2 px-4 rounded bg-green-100 text-green-600 mb-4 border border-green-600">
                {{ session('success_register') }}
            </div>
        @enderror
        <div class="grid gap-4">
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
            <button class="py-2 font-bold px-6 rounded bg-indigo-600 text-white">Login</button>
            <div class="grid grid-cols-2 gap-2 items-center">
                <a href="/"
                    class="text-zinc-600 underline">Kembali</a>
                <a href="{{ route('register') }}"
                    class="py-2 font-bold text-center px-6 rounded text-zinc-800 border">Register</a>
            </div>
        </div>
</form>
</x-auth-layout>
