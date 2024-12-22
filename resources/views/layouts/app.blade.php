@props(['title' => ''])

<x-base-layout :$title>

    <x-header />

    {{ $slot }}

    <x-footer></x-footer>

</x-base-layout>
