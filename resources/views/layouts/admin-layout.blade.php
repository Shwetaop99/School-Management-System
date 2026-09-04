<x-ladmin-panel :title="$title ?? 'School Management System'">

    {{-- Common Admin Page Header --}}
    <x-slot name="contentHeader">
        @yield('contentHeader')
    </x-slot>

    {{-- Page Content --}}
    @yield('content')

</x-ladmin-panel>