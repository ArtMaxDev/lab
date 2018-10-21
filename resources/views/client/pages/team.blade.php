@extends('client.master')
@section('title', __('team.title'))
@section('meta-title', __('team.title'))
@section('description', __('team.title'))
@section('keywords', __('team.title'))
@section('content')

    <main class="page" id="team">
        <h1 class="page-title">@lang('team.title')</h1>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{URL::to('/')}}">@lang('main.title')</a></li>
                <li>@lang('team.title')</li>
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
