<x-main-layout>
    <main class="pt-28 pb-10 container">
        <div class="max-w-2xl mx-auto">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-black mt-2 mb-4">Tambah Modul</h1>
                <a href="{{ route('index') }}"
                    class="py-2 font-bold px-6 rounded bg-zinc-100 text-zinc-600 text-sm">Back</a>
            </div>
            <form action="{{ route('subjects.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title"
                        class="py-2 px-4 rounded border focus:outline-none">
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="grid">
                        <label for="level">Level</label>
                        <input type="text" name="level" id="level"
                            class="py-2 px-4 rounded border focus:outline-none">
                    </div>
                    <div class="grid">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject"
                            class="py-2 px-4 rounded border focus:outline-none">
                    </div>
                </div>
                <div class="space-y-1">
                    <label for="content">Content</label>
                    <textarea name="content" id="content"></textarea>
                </div>
                <button
                    class="py-2 font-bold px-6 rounded bg-indigo-100 text-indigo-600 text-sm">Submit</button>
            </form>
        </div>
    </main>
    <x-slot:js>
        <script>
            ClassicEditor
                .create(document.querySelector('#content'), {
                    licenseKey: '',
                })
                .then(editor => {
                    window.editor = editor;
                })
                .catch(error => {
                    console.error('Oops, something went wrong!');
                    console.error(
                        'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                    );
                    console.warn('Build id: l4dyuz3v73cu-g0a98aaq8txd');
                    console.error(error);
                });
        </script>
    </x-slot:js>
</x-main-layout>
