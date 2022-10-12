@extends('layouts.main')

@section('content')
<div class="blog">
    <div class="container" style="padding-bottom: 15em;">
        <h3>Документы</h3>
        <ul>
            <li><a target="_blank" href="{{ asset('assets/document.pdf') }}">Устав организации</a></li>
            <li><a target="_blank" href="{{ asset('assets/document2.pdf') }}">Свидетельство о гос. регистрации</a></li>
            <li><a target="_blank" href="{{ asset('assets/document3.pdf') }}">Свидетельство о постановке на учет ФНС</a></li>
        </ul>
    </div>
</div>
@endsection