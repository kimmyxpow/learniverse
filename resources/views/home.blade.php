<x-main-layout>
    @if (auth()->check())
        <main class="pt-28 pb-10">
            <div class="container">
                <span class="text-zinc-600">Selamat datang {{ auth()->user()->name }}!</span>
                <h1 class="text-2xl font-black mt-2 mb-4">Rekomendasi Untukmu!</h1>
                <div class="grid grid-cols-4 gap-4">
                    <a href="#" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">Aljabar Dasar</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: SMA</p>
                            <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">Matematika</span>
                        </div>
                    </a>
                    <a href="#" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">Aljabar Dasar</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: SMA</p>
                            <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">Matematika</span>
                        </div>
                    </a>
                    <a href="#" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">Aljabar Dasar</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: SMA</p>
                            <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">Matematika</span>
                        </div>
                    </a>
                    <a href="#" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">Aljabar Dasar</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: SMA</p>
                            <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">Matematika</span>
                        </div>
                    </a>
                    <a href="#" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">Aljabar Dasar</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: SMA</p>
                            <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">Matematika</span>
                        </div>
                    </a>
                    <a href="#" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">Aljabar Dasar</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: SMA</p>
                            <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">Matematika</span>
                        </div>
                    </a>
                    <a href="#" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">Aljabar Dasar</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: SMA</p>
                            <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">Matematika</span>
                        </div>
                    </a>
                    <a href="#" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">Aljabar Dasar</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: SMA</p>
                            <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">Matematika</span>
                        </div>
                    </a>
                </div>
            </div>
        </main>
        <section class="py-20">
            <div class="container">
                <h1 class="text-2xl font-black mb-4">Filter berdasarkan jenjang / mata pelajaran:</h1>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Matematika</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">IPA</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">IPS</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">PAIBP</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Kimia</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Fisika</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Elektronika</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Basis Data</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Pemodelan Perangkat
                        Lunak</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Simulasi Digital</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Bahasa Indonesia</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Bahasa Inggris</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">Bahasa Arab</a>
                    <a href="#" class="text-lg py-2 px-4 rounded-full border text-zinc-800">PPKN</a>
                </div>
            </div>
        </section>
    @else
        <main class="min-h-screen flex items-center justify-center py-28">
            <div class="container flex flex-col items-center text-center">
                <h1 class="text-8xl font-black">Selamat Datang di <span
                        class="text-indigo-600">Learniverse</span>!</h1>
                <p class="text-xl my-8 max-w-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ex cum
                    libero
                    explicabo
                    sed sunt, deserunt
                    nobis fugiat magni, veritatis aliquid alias? Voluptatibus mollitia recusandae eveniet vitae
                    reprehenderit porro.</p>
                <div class="flex flex-wrap justify-center gap-2 mb-8">
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Matematika</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">IPA</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">IPS</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">PAIBP</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Kimia</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Fisika</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Elektronika</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Basis Data</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Pemodelan Perangkat Lunak</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Simulasi Digital</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Bahasa Indonesia</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Bahasa Inggris</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">Bahasa Arab</span>
                    <span class="text-lg py-2 px-4 rounded-full border text-zinc-800">PPKN</span>
                </div>
                <a href="{{ route('login') }}"
                    class="bg-indigo-600 text-white font-bold text-xl py-4 px-8 rounded">Mulai
                    Sekarang!</a>
            </div>
        </main>
    @endif
</x-main-layout>
