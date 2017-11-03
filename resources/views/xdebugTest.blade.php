@extends('layout.master')

@section('content')
    @foreach ($articles as $article)
        <li>{{$article}}</li>
    @endforeach
@stop
