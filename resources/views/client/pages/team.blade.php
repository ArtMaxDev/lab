@extends('client.master')
@section('title', 'Наша команда')
@section('meta-title', 'Команда')
@section('description', 'Команда ОНКОТЕРАНОСТИКА')
@section('keywords', 'Наша команда, ОНКОТЕРАНОСТИКА')
@section('content')

    <main class="page" id="team">
        <h1 class="page-title">Наша команда</h1>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{URL::to('/')}}">Головна</a></li>
                <li>Наша команда</li>
            </ul>
            <!-- /.breadcrumbs -->

            <div class="team">
                @each('client.components.team-item', [1,2,3,4,5,6,7,8,9,10], 'member')
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
