@extends('client.master')

@section('title', 'Прес-релiзи')
@section('meta-title', 'Прес-релiзи')
@section('description', 'Список новин вiд ОНКОТЕРАНОСТИКИ')
@section('keywords', 'Прес-релiзи, Новини')
@section('content')

    <main class="page" id="news">
        <h1 class="page-title">Прес-релiзи</h1>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{URL::to('/')}}">Головна</a></li>
                <li>Новини</li>
            </ul>
            <!-- /.breadcrumbs -->

            <div class="news" id="news-container">
                @each('client.components.news-item', $news, 'news')
            </div>
            <ul class="pagination">
                <li><a href="#" class="js-news-page link active">1</a></li>
                <li><a href="#" class="js-news-page link">2</a></li>
                <li><a href="#" class="js-news-page link">3</a></li>
                <li><a href="#" class="js-news-next">Показать еще</a></li>
            </ul>
            <!-- /.pagination -->
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
