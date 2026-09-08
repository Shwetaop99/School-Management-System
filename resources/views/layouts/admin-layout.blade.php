<x-ladmin-panel :title="$title ?? 'School Management System'">

    <x-slot name="contentHeader">
        @yield('contentHeader')
    </x-slot>

    @yield('content')

</x-ladmin-panel>