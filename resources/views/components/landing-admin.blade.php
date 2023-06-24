<main class="pt-28 pb-10">
    <div class="container">
        <span class="text-zinc-600">Selamat datang {{ auth()->user()->name }}!</span>
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-black mt-2 mb-4">Daftar Modul!</h1>
            <a href="{{ route('subjects.create') }}"
                class="py-2 font-bold px-6 rounded bg-indigo-100 text-indigo-600 text-sm">Create</a>
        </div>
        @if (session()->has('success'))
            <div class="py-2 px-4 rounded bg-green-100 text-green-600">
                {{ session('success') }}
            </div>
        @endif
        <table class="w-full">
            <thead>
                <tr>
                    <th class=" text-sm font-medium text-zinc-600 border-b py-4 px-6 text-center">No</th>
                    <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Created At</th>
                    <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Subject</th>
                    <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Title</th>
                    <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Level</th>
                    <th class=" text-sm font-medium text-zinc-600 text-left border-b py-4 px-6">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($subjects as $row)
                    <tr>
                        <td class="text-zinc-600 py-4 border-b px-6 text-center">{{ $loop->iteration }}</td>
                        <td class="text-zinc-600 py-4 border-b px-6">{{ $row->created_at }}</td>
                        <td class="text-zinc-600 py-4 border-b px-6">{{ $row->subject }}</td>
                        <td class="text-zinc-600 py-4 border-b px-6">{{ $row->title }}</td>
                        <td class="text-zinc-600 py-4 border-b px-6">{{ $row->level }}</td>
                        <td class="text-zinc-600 py-4 border-b px-6">
                            <div class="flex gap-1">
                                <a href="{{ route('subjects.edit', $row->id) }}"
                                    class="py-2 font-bold px-6 rounded bg-amber-100 text-amber-600 text-sm">Edit</a>
                                <form action="{{ route('subjects.destroy', $row->id) }}" method="POST"
                                    onsubmit="return confirm('Sure?')">
                                    @method('DELETE')
                                    @csrf
                                    <button
                                        class="py-2 font-bold px-6 rounded bg-red-100 text-red-600 text-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="999">Empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
