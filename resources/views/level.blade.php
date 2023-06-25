<x-main-layout title="Learniverse - Modul berdasarkan jengang {{ $level }}">
    <main class="pt-28 pb-10">
        <div class="container">
            <div class="flex justify-between items-center mb-4 gap-2">
                <h1 class="text-2xl font-black">Modul berdasarkan jenjang {{ $level }}!</h1>
                <a href="{{ route('index') }}"
                    class="py-2 font-bold px-6 rounded bg-zinc-100 text-zinc-600 text-sm">Back</a>
            </div>
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4">
                @forelse ($modules as $row)
                    <a href="{{ route('subjects.show', $row->id) }}" class="p-6 rounded-xl border">
                        <h2 class="text-xl font-bold mb-1">{{ $row->title }}</h2>
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-sm">Jenjang: {{ $row->level }}</p>
                            <span
                                class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">{{ $row->subject }}</span>
                        </div>
                    </a>
                @empty
                    <p>empty</p>
                @endforelse
            </div>
        </div>
    </main>
</x-main-layout>
