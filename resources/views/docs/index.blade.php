@extends('layouts.main')

@section('content')
<main class="blog" style="background: url({{ asset("assets/images/bg.jpg") }}) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="container" style="background: white;padding: 1em 3em 1em 3em;">
    <div class="container" style="padding-bottom: 20em;">
        <h3>Документы</h3>
        <ul>
            <li><a target="_blank" href="{{ asset('assets/document.pdf') }}">Устав организации</a></li>
            <li><a target="_blank" href="{{ asset('assets/document2.pdf') }}">Свидетельство о гос. регистрации</a></li>
            <li><a target="_blank" href="{{ asset('assets/document3.pdf') }}">Свидетельство о постановке на учет ФНС</a></li>
        </ul>
    </div>
</div>
@endsection