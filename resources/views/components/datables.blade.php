@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>DataTables Component</h1>
            <hr>
            <p>This component is a simple wrapper around the jQuery DataTables plugin.</p>
        </div>
        <data-tables data="{{$users}}"></data-tables>
    </div>
@endsection