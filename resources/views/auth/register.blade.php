@extends('welcome')
@section('content')
    <div>
        <div class="container mt-5 mp-5" style="padding-bottom: 55px;">
            <h1 style="text-align: center">Реєстрація</h1>

            <div class="register_block">
                <div class="formRegisterLogin">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">ПІБ</label>
                            <input type="text" class="form-control" name="username"  placeholder="Введіть ПІБ" class="@error('username') is-invalid @enderror">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Номер телефону</label>
                            <input type="text" class="form-control" name="phone"  placeholder="Введіть номер телефону" class="@error('phone') is-invalid @enderror">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Дата народження</label>
                            <input type="date" class="form-control" name="city" placeholder="Введіть дату наролдження" class="@error('date_birth') is-invalid @enderror">
                            @error('date_birth')
                            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email адреса</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Введіть email" class="@error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" class="form-control" name="password" placeholder="Пароль" class="@error('password') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
                            @enderror
                        </div>


                        <div class="form-group" style="padding-left: 40px;">
                            <button type="submit" class="btn btn-light">{{ __('Зареєструватися') }}</button>
                        </div>
                    </form>

                </div>
            </div></div>
    </div>
@endsection
