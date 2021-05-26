@extends('yonetim.layout.app')


@section('modul')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Katalog</h4>
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

    <form role="form" id="form" action="{{route('yonetim.catalog.update',$catalog->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Yüklü Pdf</label>
            <div class="col-5">
                <iframe src="{{$catalog->file}}"></iframe>
                <br>
                <button type="" class="btn waves-effect waves-light btn-sm btn-outline-primary">
                    <i class="far fa-file-pdf"><a href="{{$catalog->file}}" target="_blank"> Başka sayfada Aç</a></i>
                </button>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Yeni Pdf*</label>
            <div class="col-5">
                <input type="file" name="file" value="{{ old('file') }}" id="example-text-input">
                <br>
                <span class="text-danger">@error('file'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Katalog Adı*</label>
            <div class="col-5">
                <input class="form-control" name="name" required="" value="{{ $catalog->name }}" type="text" >
                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Açıklama</label>
            <div class="col-9">
                <textarea class="form-control ckeditor" name="description" rows="5">{!! $catalog->description !!}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Sıra</label>
            <div class="col-5">
                <input class="form-control" name="must" type="number" value="{{$catalog->must}}" placeholder="1" id="example-text-input">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Durum</label>
            <div class="col-2">
                <select class="form-control" name="status">
                    <option value="1"
                        {{$catalog->status == 1 ? 'selected' : ''}}
                    >Aktif</option>
                    <option value="0"
                        {{$catalog->status == 0 ? 'selected' : ''}}
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


    <script type="text/javascript">
        CKEDITOR.replace( 'description' );
    </script>

@endsection



