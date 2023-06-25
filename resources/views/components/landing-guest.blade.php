<main class="min-h-screen flex items-center justify-center py-28">
    <div class="container flex flex-col items-center text-center">
        <h1 class="lg:text-8xl md:text-6xl text-5xl font-black">Selamat Datang di <span
                class="text-indigo-600">Learniverse</span>!</h1>
        <p class="md:text-xl text-lg my-8 max-w-2xl">
            Platform e-learning yang memungkinkan Anda untuk menjelajahi dan belajar dari
            berbagai modul pembelajaran yang dikurasi dengan cermat. Dengan akses ke ribuan modul pembelajaran,
            Learniverse menawarkan beragam pelajaran dari berbagai subjek dan jenjang pendidikan.
        </p>
        <div class="flex flex-wrap justify-center gap-2 mb-8">
            @forelse ([...$levels, ...$subjects] as $row)
                <span
                    class="md:text-lg py-2 px-4 rounded-full border text-zinc-800">{{ $row->level ? $row->level : $row->subject }}</span>
            @empty
                <p>Empty</p>
            @endforelse
        </div>
        <a href="{{ route('login') }}"
            class="bg-indigo-600 text-white font-bold md:text-xl text-lg py-4 px-8 rounded">Mulai
            Sekarang!</a>
    </div>
</main>
