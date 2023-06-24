<x-main-layout>
    @if (auth()->check())
        <main class="min-h-screen flex items-center justify-center py-28">
            logged in
        </main>
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
