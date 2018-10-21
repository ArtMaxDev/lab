@extends('client.master')
@section('title', 'Team')
@section('meta-title', 'Team')
@section('description', 'Team')
@section('keywords', 'Team')
@section('content')

    <main class="page" id="team">
        <h1 class="page-title">Team</h1>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{URL::to('/')}}">@lang('main.title')</a></li>
                <li>Team</li>
            </ul>
            <!-- /.breadcrumbs -->

            <div class="team">
                @each('client.components.team-item', $team, 'member')
            </div>
        </div>
        <!-- /.container -->
    </main>
    <!-- /#team -->

@endsection
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/team.css', 'client')}}">
@endpush
