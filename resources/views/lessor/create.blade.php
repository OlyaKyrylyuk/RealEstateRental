@extends('welcome')
@section('content')
    <div class="container" style="padding-bottom: 35px;">

        <div class="container mt-5 mp-5">
            <h1 style="text-align: center">Авторизація</h1>

            <div class="register_block">
                <form>
                    <div class="form-group">
                        <label for="inputState">Адреса</label>
                        <select id="inputState" class="form-control">
                            @foreach($addresses as $address)
                                <option value="{{$address->id}}">{{$address->street}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputZip">Тип оренди нерухомості</label>
                        <select id="inputState" class="form-control">
                            @foreach(\App\Models\Estate::$types as $key=>$type)
                                <option value="{{$key}}">{{$type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-light">Додати нерухомість для оренди</button>
                </form>
            </div>
        </div>
    </div>
@endsection

