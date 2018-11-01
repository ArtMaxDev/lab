@extends('client.master')

@section('title', __('news.title'))
@section('meta-title', __('news.title'))
@section('description', __('meta-description'))
@section('keywords', __('meta-keywords'))
@section('content')
    <main class="page" id="news">
        <h1 class="page-title">@lang('news.title')</h1>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{URL::to('/')}}">@lang('main.title')</a></li>
                <li>@lang('news.title')</li>
            </ul>
            <!-- /.breadcrumbs -->

            <div class="news" id="news-container">
                @each('client.components.news-item', $news, 'news')
            </div>

            {{ $news->links('client.components.custom-paginator') }}
        </div>
        <!-- /.container -->
    </main>
    <!-- /#team -->
@endsection
@push('scripts')
    <script defer src="{{mix('/assets/pages/news.js', 'client')}}"></script>
@endpush
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/news.css', 'client')}}">
@endpush
