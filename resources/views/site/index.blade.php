@extends('layouts.LayoutSite')

@section('header')
    @component('site.sections.header')
    @endcomponent
@endsection  


@section('aside')
@component('site.sections.aside',['produtos'=>$produtos])
@endcomponent
@endsection


@section('intro')
@component('site.sections.intro')
@endcomponent
@endsection       


@section('produtos_destaques')
@component('site.sections.destaques',['produtos'=>$produtos])
@endcomponent
@endsection     


@section('parceiros')
@component('site.sections.partner')
@endcomponent
@endsection
@section('footer')
@component('site.sections.footer')
@endcomponent
@endsection

        
    