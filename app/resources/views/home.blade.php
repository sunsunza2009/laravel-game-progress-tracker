@extends('layouts.home')
<link href="css/home.css" rel="stylesheet">
@section('content')
<script src="js/home.js"></script>
<div class="bg"></div>
<div class="container">
    <div class="row justify-content-center">
		<div id="alert">
		</div>
		<div class="">
			<div class="text-white">
				<h2>Game List</h2>
            </div>
			<div class="card-body">
				<div class="card-columns" id="list">
				</div>
			</div>
    </div>
</div>
@endsection
