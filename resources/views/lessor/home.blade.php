@extends('welcome')
@section('content')
    @foreach($lessorFlats as $lessorFlat)
        <p>{{$lessorFlat->ground}}</p>
    @endforeach
@endsection

