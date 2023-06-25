<x-main-layout title="Learniverse - Platform E-Learning Terlengkap">
    @if (auth()->check())
        @role('user')
            <x-landing-user />
        @else
            <x-landing-admin />
        @endrole
    @else
        <x-landing-guest />
    @endif
</x-main-layout>
