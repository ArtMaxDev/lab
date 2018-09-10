@extends('client.master')
@section('content')
    <div class="container">
        <nav class="navbar">
        <span id="navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
            <a href="#" id="logo">ОНКОТЕРАНОСТИКА</a>
            <ul id="main-nav">
                <li>
                    <a href="#" class="nav-links">Про нас</a>
                </li>
                <li>
                    <a href="#" class="nav-links">Послуги</a>
                </li>
                <li>
                    <a href="#" class="nav-links">Корисна Информация</a>
                </li>
                <li>
                    <a href="#" class="nav-links">Команда</a>
                </li>
                <li>
                    <a href="#" class="nav-links">Контакти</a>
                </li>
            </ul>
        </nav>
        <!-- /.row -->
    </div>

    <div class="container-fluid">
        <div class="row">
            Slider
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection
@push('scripts')
    <script defer src="{{mix('/assets/pages/index.js', 'client')}}"></script>
@endpush
