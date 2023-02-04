@extends('layouts.app')


@section('content')

<div>
    @livewire('panel')
</div>

@livewireScripts
@push('name')
@stack('js/select2')
    
@endpush
@endsection