@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Welkom <b>{{Auth::user()->name}}</b>.</h3>
    <p>Je bent nu ingelogd.</p>
</div>
@endsection