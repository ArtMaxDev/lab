@extends('client.master')
@section('content')

    <main class="page" id="news">
        <h1 class="page-title">Прес-релiзи</h1>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="#">One</a></li>
                <li>Two</li>
            </ul>
            <!-- /.breadcrumbs -->

            <div class="news">
                @each('client.components.news-item', $news, 'news')
            </div>
            <ul class="pagination">
                <li><a href="#" class="link active">1</a></li>
                <li><a href="#" class="link">2</a></li>
                <li><a href="#" class="link">3</a></li>
                <li><a href="#">Показать еще</a></li>
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
