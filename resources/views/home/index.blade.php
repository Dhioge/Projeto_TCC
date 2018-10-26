@extends('layouts.LayoutHome')
@section('header')
    @component('home.header')
    @endcomponent
@endsection  


@section('aside')
@component('home.aside',['produtos'=>$produtos])
@endcomponent
@endsection


@section('intro')
@component('home.intro')
@endcomponent
@endsection       


@section('produtos_destaques')
@component('home.destaques',['produtos'=>$produtos])
@endcomponent
@endsection     


@section('parceiros')
@component('home.partner')
@endcomponent
@endsection
@section('footer')
@component('home.footer')
@endcomponent
@endsection

        
    