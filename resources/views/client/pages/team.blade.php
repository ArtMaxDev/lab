@extends('client.master')
@section('content')

    <main class="page" id="team">
        <h1 class="page-title">Наша команда</h1>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="#">One</a></li>
                <li>Two</li>
            </ul>
            <!-- /.breadcrumbs -->

            <div class="team">
                @foreach([1,2,3,4,5,6,7,8,9,10] as $slide)
                    <a href="#" class="item">
                        @include('client.components.team-member', [
                               'image' => '/client/assets/images/static/doctor.jpg'
                           ])
                        <div class="content">
                            <strong class="name">Петрова Елена
                                Викторовна</strong>
                            <span class="sub-text">Кандидат в доктор наук в области Гематологии</span>
                        </div>
                        <!-- /.item -->
                    </a>
                @endforeach
            </div>
        </div>
        <!-- /.container -->
    </main>
    <!-- /#team -->

@endsection
@push('scripts')
    {{--<script defer src="{{mix('/assets/pages/index.js', 'client')}}"></script>--}}
@endpush
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/team.css', 'client')}}">
@endpush
