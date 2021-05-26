<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('/admin/dist/css/style.min.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-white">
<div class="container">
    <div class="row" style="margin-top: 45px">
        <div class="col-4 offset-4">
            <h4>Admin Girişi</h4>
            <hr>
            <form action="{{route('yonetim.login.check')}}" method="post">
                <div class="result">
                    @if(Session::get('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif
                </div>
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email Adresi" name="email" value="{{old('email')}}"
                           class="form-control">
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="password">Şifre</label>
                    <input type="password" placeholder="Şifre" name="password" class="form-control">
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success">Giriş Yap</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

@if(session()->has('success'))
    <script>alertify.success('{{session('success')}}')</script>
@endif
@if(session()->has('error'))
    <script>alertify.error('{{session('error')}}')</script>
@endif
@foreach($errors->all() as $error)
    <script>
        alertify.error('{{$error}}');
    </script>
@endforeach

</body>
</html>
