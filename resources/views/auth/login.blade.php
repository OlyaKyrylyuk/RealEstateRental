@extends('welcome')

@section('content')


    <div class="container" style ="padding-bottom: 35px;">

        <div class="container mt-5 mp-5">
            <h1 style="text-align: center">Авторизація</h1>

            <div class = "register_block">
                <div class="formRegisterLogin">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email адреса</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введіть email" class="@error('email') is-invalid @enderror">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введіть пароль" class="@error('password') is-invalid @enderror">

                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-light">Авторизуватися</button>
                        </div>
                    </form>
                    <a style="color: white;" href="/register">Ще не зареєстрований(а)?</a>
                </div>
            </div></div></div>
@endsection
