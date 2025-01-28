@extends('template.master')

        @section('content_title', 'Form Movie and Genre')
        @section('content')

        @include('template.separate.movie')
        @include('template.separate.genre')

@endsection
