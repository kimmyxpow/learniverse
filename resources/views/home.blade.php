<x-main-layout>
    @if (auth()->check())
        @role('user')
            <x-landing-user />
        @endrole
    @else
        <x-landing-guest />
    @endif
</x-main-layout>
