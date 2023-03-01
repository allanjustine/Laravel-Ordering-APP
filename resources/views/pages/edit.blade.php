@extends('base')

@section('content')
    <div class="container m-3">

        <div class="offset-5">
            <livewire:edit :orderId="$id" />
        </div>
    </div>
@endsection
