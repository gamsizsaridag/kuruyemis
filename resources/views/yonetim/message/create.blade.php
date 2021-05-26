@extends('yonetim.layout.app')


@section('modul')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Mesaj</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">

                <button type="button" onclick="myFunction()"
                        class="btn btn-success m-l-15"><i class="fas fa-save"></i> Kaydet
                </button>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <form role="form" id="form" action="{{route('yonetim.message.insert')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Adı*</label>
            <div class="col-5">
                <input class="form-control" name="name" required="" value="{{ old('name') }}" type="text" >
                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">E-Mail*</label>
            <div class="col-5">
                <input class="form-control" name="email" required="" value="{{ old('email') }}" type="email" >
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Gsm*</label>
            <div class="col-5">
                <input class="form-control" name="gsm" required="" value="{{ old('gsm') }}" type="text" >
                <span class="text-danger">@error('gsm'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Mesaj</label>
            <div class="col-9">
                <textarea class="form-control" name="message" rows="6">{!! old('message') !!}</textarea>
            </div>
        </div>



        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Durum</label>
            <div class="col-2">
                <select class="form-control" name="status">
                    <option value="1"
                        {{ old('status') == 1 ? 'selected' : ''}}
                    >Aktif</option>
                    <option value="0"
                        {{ old('status') == 0 ? 'selected' : ''}}
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



