@extends('layouts.app')

@section('content')

    @foreach($hall as $h)
        {{$h->name}}
    @endforeach
@endsection
