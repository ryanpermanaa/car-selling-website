@extends('layouts.clean')

@section('childContent')
    <x-header />

    @yield('content')

    <x-footer></x-footer>
@endsection
