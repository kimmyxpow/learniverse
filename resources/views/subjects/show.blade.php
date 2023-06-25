<x-main-layout>
    <main class="pt-28 pb-10 container">
        <div class="max-w-2xl mx-auto">
            <div class="flex justify-between items-center gap-2">
                <h1 class="sm:text-4xl text-2xl font-black">{{ $subject->title }}</h1>
                <a href="{{ route('index') }}"
                    class="py-2 font-bold px-6 rounded bg-zinc-100 text-zinc-600 text-sm">Back</a>
            </div>
            <div class="flex items-center gap-1 mt-4 mb-8">
                <span class="text-xs py-1 px-2 rounded-full bg-indigo-600 text-white">{{ $subject->subject }}</span>
                <p class="text-sm">Jenjang: {{ $subject->level }}</p>
            </div>
            <div class="prose prose-zinc sm:prose-base prose-sm">
                {!! $subject->content !!}
            </div>
        </div>
    </main>
</x-main-layout>
