@extends('finance::layouts.master')

@section('content')
    <h1>Hello World</h1>
    <livewire:finance::manage-invoice />
    <p>
        This view is loaded from module: {!! config('finance.name') !!}
    </p>
@endsection
