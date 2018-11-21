@extends('layouts.LayoutSite')
@section('header')
    @component('site.sections.header',['categoria'=>$categoria,'subcategoria'=>$subcategoria])
    @endcomponent
@endsection  

@section('shop')
@component('site.sections.produtos_grid',['produtos'=>$produtos,'ordenar'=>$ordenar])
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

        
    