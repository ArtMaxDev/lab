@extends('client.master')
@section('content')

    <section class="slider">
    <div id="slider">
        <div class="slide">
            <img class="image tns-lazy-img" data-src="/client/assets/images/static/slide1.jpg" alt="Slide 1">
            <div class="content">
                <div class="container">
                    <div class="content-right">
                        <h3 class="title">Цени свою жизнь</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>
                        <a href="#" class="btn">Узнать подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <img class="image tns-lazy-img" data-src="/client/assets/images/static/slide1.jpg?1" alt="Slide 2">
            <div class="content">
                <div class="container">
                    <div class="content-right">
                        <h3 class="title">Цени свою жизнь</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>
                        <a href="#" class="btn">Узнать подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <img class="image tns-lazy-img" data-src="/client/assets/images/static/slide1.jpg?2" alt="Slide 3">
            <div class="content">
                <div class="container">
                    <div class="content-right">
                        <h3 class="title">Цени свою жизнь</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing eli</p>
                        <a href="#" class="btn">Узнать подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
@push('scripts')
    <script defer src="{{mix('/assets/pages/index.js', 'client')}}"></script>
@endpush
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/index.css', 'client')}}">
@endpush
