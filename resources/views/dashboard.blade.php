@extends('layout.app')

@section('content')
<h2 class="text-center">Dashboard</h2>
@if (Session::has('msgLogin'))
<div class="alert alert-success">{{Session::get('msgLogin')}}</div>
@endif

@endsection