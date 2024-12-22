@props(['title' => '', 'footerLinks' => ''])

<x-base-layout :$title>

    <x-layouts.header />

    {{ $slot }}

    <x-layouts.footer>
        <x-slot:footerLinks>
            {{ $footerLinks }}
        </x-slot:footerLinks>
    </x-layouts.footer>

</x-base-layout>
