@extends('layouts.LayoutSite')
@section('header')
    @component('site.sections.header',['categoria'=>$categoria,'subcategoria'=>$subcategoria,'ordenar'=>$ordenar,'subcategoria_id'=>$subcategoria_id])
    @endcomponent
@endsection  

@section('shop')
@component('site.sections.produtos_grid',['produtos'=>$produtos])
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

        
    