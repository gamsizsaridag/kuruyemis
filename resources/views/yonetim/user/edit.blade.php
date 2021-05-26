@extends('yonetim.layout.app')


@section('modul')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Kullanıcı</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">

                <button type="button" onclick="myFunction()"
                        class="btn btn-success m-l-15"><i class="fas fa-save"></i> Güncelle
                </button>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <form role="form" id="form" action="{{route('yonetim.user.update',$user->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Kullanıcı Adı*</label>
            <div class="col-5">
                <input class="form-control" name="name" required="" value="{{ $user->name }}" type="text" >
                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Email*</label>
            <div class="col-5">
                <input class="form-control" name="email" required="" value="{{ $user->email }}" type="email" >
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Şifre*</label>
            <div class="col-5">
                <input class="form-control" name="password" type="password" >
                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Şifre Tekrar*</label>
            <div class="col-5">
                <input class="form-control" name="password2" type="password" >
                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Durum</label>
            <div class="col-2">
                <select class="form-control" name="status">
                    <option value="1"
                        {{ $user->status == 1 ? 'selected' : ''}}
                    >Aktif</option>
                    <option value="0"
                        {{ $user->status == 0 ? 'selected' : ''}}
                    >Pasif</option>
                </select>
            </div>
        </div>

    </form>


    <script>
        function myFunction() {
            $( "#form" ).submit();
        }
    </script>


@endsection



