@extends('yonetim.layout.app')


@section('modul')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Blog</h4>
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


    <form role="form" id="form" action="{{route('yonetim.blog.update',$blog->id)}}" method="post"
          enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <div class="col-4 offset-2">
                <div id="yeniresim">
                    <img src="{{$blog->image}}"  width="150px" height="150px">
                    <input type="text" name="old_image" value="{{$blog->image}}" style="display: none;">
                </div>
                <br><br>
                <button type="button" onclick="resmisil()"
                        class="btn btn-info"><i class="fas fa-refresh"></i> Resmi Sil
                </button>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Resim Ekle</label>
            <div class="col-5">
                <input type="file" name="image" value="{{old('image')}}" id="example-text-input">
                <br>
                <span class="text-danger">@error('image'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Blog adı*</label>
            <div class="col-5">
                <input class="form-control" name="name" required="" value="{{ $blog->name }}" type="text" >
                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Açıklama</label>
            <div class="col-9">
                <textarea class="form-control ckeditor" name="description" rows="5">{!! $blog->description !!}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Sıra</label>
            <div class="col-5">
                <input class="form-control" name="must" type="number" value="{{$blog->must}}" placeholder="1" id="example-text-input">
            </div>
        </div>


        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Durum</label>
            <div class="col-2">
                <select class="form-control" name="status">
                    <option value="1"
                        {{ $blog->status == 1 ? 'selected' : ''}}
                    >Aktif</option>
                    <option value="0"
                        {{ $blog->status == 0 ? 'selected' : ''}}
                    >Pasif</option>
                </select>
            </div>
        </div>

    </form>


    <script>
        function myFunction() {
            $( "#form" ).submit();
        }

        function resmisil() {
            $('#yeniresim').html('<img src="/images/blog/default.jpg" name="old_image" width="150px" height="150px">' +
                '<input type="text" name="old_image" value="/images/blog/default.jpg" style="display: none;">');
        }
    </script>


    <script type="text/javascript">
        CKEDITOR.replace( 'description' );
    </script>

@endsection



