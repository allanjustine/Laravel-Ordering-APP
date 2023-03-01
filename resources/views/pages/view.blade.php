@extends('base')

@section('content')

<div class="container m-3">
    <livewire:view :orderId="$id"/>
</div>

@endsection
