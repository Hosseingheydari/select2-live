@extends('layouts.app')


@section('content')

<div>
    @livewire('specification')
 
 
</div>

@livewireScripts
@push('name')
@stack('js/select2')
    
@endpush
@endsection