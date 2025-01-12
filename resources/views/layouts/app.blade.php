@props(['title' => '', 'bodyClass' => null, 'footerLinks' => ''])

<x-base-layout :$title :$bodyClass>

    <x-layouts.header />

    {{ $slot }}

    <x-layouts.footer>
        <x-slot:footerLinks>
            {{ $footerLinks }}
        </x-slot:footerLinks>
    </x-layouts.footer>

</x-base-layout>
