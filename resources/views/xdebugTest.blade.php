@extends('layout.master')

@section('content')
    <h1>{{$myArticle}}</h1>
    @foreach ($articles as $article)
        <li>{{$article}}</li>
    @endforeach
@stop
