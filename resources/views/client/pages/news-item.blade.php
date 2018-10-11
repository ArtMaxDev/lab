@extends('client.master')
@inject('carbon', '\Carbon\Carbon')

@section('title', $item->getLocalizedProperty('title'))
@section('meta-title', $item->getLocalizedProperty('title'))
@section('description', $item->getLocalizedProperty('meta_description'))
@section('keywords', $item->getLocalizedProperty('meta_keywords'))

@section('content')

    <main class="page" id="team">
        <div class="page-title">Прес-релiзи</div>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{URL::to('/')}}">Головна</a></li>
                <li><a href="{{route('client.news.index')}}">Новини</a></li>
                <li>{{$item->getLocalizedProperty('title')}}</li>
            </ul>
            <!-- /.breadcrumbs -->

            <article class="news-article">
                <h1 class="news-article-title">{{$item->getLocalizedProperty('title')}} <time datetime="{{$item->publicated_at}}">{{$item->publicated_at}}</time></h1>
                <picture>
                    <source srcset="{{$item->image}}_small.jpg" media="(max-width: 768px)">
                    <img class="news-article-img" src="{{$item->image}}.jpg" alt="{{$item->image_alt}}">
                </picture>

                {!! $item->getLocalizedProperty('text') !!}
            </article>

            <h5 class="section-title">Подборка</h5>
            <!-- /.section-title -->
            <div class="news">
                @each('client.components.news-item', $news, 'news')
            </div>
            <!-- /.pagination -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#team -->
@endsection
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/news-item.css', 'client')}}">
    <link rel="stylesheet" href="{{mix('/assets/pages/news.css', 'client')}}">
@endpush
