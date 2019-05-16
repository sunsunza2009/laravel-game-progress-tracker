@extends('layouts.app')
<link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">

@section('content')

<a name="about"></a>
<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="intro-message">
                    <h1>{{ config('app.name', 'GAMEROOM') }}</h1>
                    <h3>Track your game progress</h3>
                    <hr class="intro-divider">
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</div>

<!-- Page Content -->

<a name="services"></a>
<div class="content-section-a">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Save progress</h2>
                <p class="lead">Save game progress to continue game.</p>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-sm-6">
                <img class="img-fluid w-100" src="/images/save.png" alt="">
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.content-section-a -->

<div class="content-section-b">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
			<img class="img-fluid w-100" src="/images/18plus.jpg" alt="">
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Age Verify</h2>
                <p class="lead">Verify your age for accessing adult content.</p>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.content-section-b -->
<!-- /.content-section-a -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">หน้าแรก</a>
                    </li>
                    <li class="footer-menu-divider list-inline-item">&sdot;</li>
                    <li class="list-inline-item"> <a href="https://github.com/sunsunza2009/laravel-game-progress-tracker">GitHub</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

