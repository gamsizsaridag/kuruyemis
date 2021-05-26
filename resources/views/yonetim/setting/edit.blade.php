@extends('yonetim.layout.app')


@section('modul')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Ayarlar</h4>
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

    <div class="box-body" style="margin-bottom: 35px;">
        <button type="button" class="btn btn-dark btn-sm" id="GenelButton" data-toggle="modal"
                data-target="#modal-info" style="margin-left:5px; padding: 5px 15px 5px 15px;">
            Genel
        </button>
        <button type="button" class="btn btn-secondary btn-sm" id="MedyaButton" data-toggle="modal"
                data-target="#modal-info" style="margin-left:5px; padding: 5px 15px 5px 15px;">
            Sosya Medya
        </button>
        <button type="button" class="btn  btn-secondary btn-sm" id="HakkimizdaButton" data-toggle="modal"
                data-target="#modal-info" style="margin-left:5px; padding: 5px 15px 5px 15px;">
            Hakkimizda
        </button>
    </div>

    <form role="form" id="form" action="{{route('yonetim.setting.update')}}" method="post"
          enctype="multipart/form-data">
        @csrf

        <div id="Genel">

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Site adı*</label>
                <div class="col-5">
                    <input class="form-control" name="name" required="" value="{{$setting->name}}" type="text">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Site_Title*</label>
                <div class="col-5">
                    <input class="form-control" name="title" required="" value="{{$setting->title}}" type="text">
                    <span class="text-danger">@error('title'){{ $message }}@enderror</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">GSM</label>
                <div class="col-5">
                    <input class="form-control" name="gsm" value="{{$setting->gsm}}" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">E-mail</label>
                <div class="col-5">
                    <input class="form-control" name="email" value="{{$setting->email}}" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Adres</label>
                <div class="col-5">
                  <textarea class="form-control" name="address"
                            rows="5">{{ $setting->address }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Map</label>
                <div class="col-10">
                    <input class="form-control" name="map" value="{{$setting->map}}" type="text">
                </div>
            </div>

        </div>

        <div id="Medya">

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Site Url*</label>
                <div class="col-5">
                    <input class="form-control" name="siteUrl" required="" value="{{$setting->siteUrl}}" type="text">
                    <span class="text-danger">@error('siteUrl'){{ $message }}@enderror</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Whatsapp</label>
                <div class="col-5">
                    <input class="form-control" name="whatsapp" value="{{$setting->whatsapp}}" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">instagram</label>
                <div class="col-5">
                    <input class="form-control" name="instagram" value="{{$setting->instagram}}" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">facebook</label>
                <div class="col-5">
                    <input class="form-control" name="facebook" value="{{$setting->facebook}}" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">twitter</label>
                <div class="col-5">
                    <input class="form-control" name="twitter" value="{{$setting->twitter}}" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">youtube</label>
                <div class="col-5">
                    <input class="form-control" name="youtube" value="{{$setting->youtube}}" type="text">
                </div>
            </div>

        </div>

        <div id="Hakkimizda">
            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Hakkımızda Başlık</label>
                <div class="col-5">
                    <input class="form-control" name="about_name" value="{{$setting->about_name}}" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Hakkımızda Açıklama</label>
                <div class="col-9">
                <textarea class="form-control ckeditor" name="about_description"
                          rows="5">{!! $setting->about_description !!}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Hakkımızda Durumu</label>
                <div class="col-2">
                    <select class="form-control" name="about_status">
                        <option value="1"
                            {{ $setting->about_status == 1 ? 'selected' : ''}}
                        >Aktif
                        </option>
                        <option value="0"
                            {{ $setting->about_status == 0 ? 'selected' : ''}}
                        >Pasif
                        </option>
                    </select>
                </div>
            </div>
        </div>

    </form>

        <script>
            function myFunction() {
                $("#form").submit();
            }

        </script>


        <script type="text/javascript">
            CKEDITOR.replace('about_description');
        </script>

        <script>
            $(document).ready(function () {
                $("#Genel").show();
                $("#Medya").hide();
                $("#Hakkimizda").hide();

                $("#GenelButton").click(function () {
                    $("#Genel").show();
                    $("#Medya").hide();
                    $("#Hakkimizda").hide();

                    $("#GenelButton").attr('class', 'btn btn-dark btn-sm');
                    $("#MedyaButton").attr('class', 'btn btn-secondary btn-sm');
                    $("#HakkimizdaButton").attr('class', 'btn btn-secondary btn-sm');
                });

                $("#MedyaButton").click(function () {
                    $("#Genel").hide();
                    $("#Medya").show();
                    $("#Hakkimizda").hide();

                    $("#MedyaButton").attr('class', 'btn btn-dark btn-sm');
                    $("#GenelButton").attr('class', 'btn btn-secondary btn-sm');
                    $("#HakkimizdaButton").attr('class', 'btn btn-secondary btn-sm');
                });
                $("#HakkimizdaButton").click(function () {
                    $("#Genel").hide();
                    $("#Medya").hide();
                    $("#Hakkimizda").show();

                    $("#HakkimizdaButton").attr('class', 'btn btn-dark btn-sm');
                    $("#GenelButton").attr('class', 'btn btn-secondary btn-sm');
                    $("#MedyaButton").attr('class', 'btn btn-secondary btn-sm');
                });

            });
        </script>

@endsection
