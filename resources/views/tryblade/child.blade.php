@extends('tryblade.layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <x-button>
Hello
</x-button>

    @component('tryblade.alert')
        @slot('title')
            Forbidden
        @endslot
        
        <strong>Whoopppps!</strong>
    @endcomponent
@endsection

