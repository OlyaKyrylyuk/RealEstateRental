@extends('welcome')
@section('content')
    <table class="table table-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ВУЛИЦЯ</th>
            <th scope="col">ТИП ОРЕНДИ</th>
            <th scope="col">КІЛЬКІСТЬ КІМНАТ</th>
            <th scope="col">ПОВЕРХ</th>
            <th scope="col-2">ДІЇ</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lessorFlats as $lessorFlat)
            <tr>
                <th scope="row">{{$lessorFlat->id}}</th>
                <td>{{optional($lessorFlat->address)->street}}</td>
                <td>{{$lessorFlat->type}}</td>
                <td>{{$lessorFlat->number_of_rooms}}</td>
                <td>{{$lessorFlat->ground}}</td>
                <td>
                    <button class="form-control">
                        <a href="/estates/edit/{{$lessorFlat->id}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </button>
                </td>
                <td>
                    <form method="POST" action="{{ route('estates.delete', ['id' => $lessorFlat->id])}}">
                        @csrf
                        <button class="form-control">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

