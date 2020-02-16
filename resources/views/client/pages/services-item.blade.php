@extends('client.master')

@section('meta-title', $service->getLocalizedProperty('meta_title'))
@section('description', $service->getLocalizedProperty('meta_description'))
@section('keywords', $service->getLocalizedProperty('meta_keywords'))

@section('content')

    <main class="ot-page" id="services">
        <div class="ot-page-title">{{$service->getLocalizedProperty('title')}}</div>
        <div class="ot-container">
            <ul class="ot-breadcrumbs">
                <li><a href="{{URL::to('/')}}">@lang('main.title')</a></li>
                <li><a href="/#services-2">@lang('nav.services.title')</a></li>
                <li>{{$service->getLocalizedProperty('title')}}</li>
            </ul>
            <!-- /.breadcrumbs -->
        </div>

        {!! $service->getLocalizedProperty('text') !!}

    </main>
    <!-- /#team -->
@endsection
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/news-item.css', 'client')}}">
    <link rel="stylesheet" href="{{mix('/assets/pages/services.css', 'client')}}">
    <link rel="stylesheet" href="{{mix('/assets/pages/services-2.css', 'client')}}">
@endpush
