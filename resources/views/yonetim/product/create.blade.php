@extends('yonetim.layout.app')


@section('modul')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Ürün</h4>
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

    <form role="form" id="form" action="{{route('yonetim.product.insert')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Ürün resmi</label>
            <div class="col-5">
                <input type="file" name="image" value="{{ old('image') }}" id="example-text-input">
                <br>
                <span class="text-danger">@error('image'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Ürün adı*</label>
            <div class="col-5">
                <input class="form-control" name="name" required="" value="{{ old('name') }}" type="text" >
                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Normal Fiyatı</label>
            <div class="col-5">
                <input step="0.01" type="number" name="price" value="{{ old('price') }}" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">İndirimli Fiyatı</label>
            <div class="col-5">
                <input step="0.01" type="number" name="discountedPrice" value="{{ old('discountedPrice') }}" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Kategori</label>
            <div class="col-5">
                <select class="form-control" name="categoryId">
                    <option value="0" selected="selected">------Yok------</option>
                    @foreach($category as $key)
                        <option value="{{$key->id}}"
                            {{ old('categoryId') == $key->id ? 'selected' : ''}}
                        >{{$key->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Marka</label>
            <div class="col-5">
                <select class="form-control" name="brandId">
                    <option value="0" selected="selected">------Yok------</option>
                    @foreach($brand as $key)
                        <option value="{{$key->id}}"
                            {{ old('brandId') == $key->id ? 'selected' : ''}}
                        >{{$key->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Açıklama</label>
            <div class="col-9">
                <textarea class="form-control ckeditor" name="description" rows="5">{!! old('description') !!}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Sıra</label>
            <div class="col-5">
                <input class="form-control" name="must" type="number" value="{{old('must')}}" placeholder="1" id="example-text-input">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Ana Sayfa da Göster</label>
            <div class="col-2">
                <select class="form-control" name="homeStatus">
                    <option value="1"
                        {{ old('homeStatus') == 1 ? 'selected' : ''}}
                    >Aktif</option>
                    <option value="0"
                        {{ old('homeStatus') == 0 ? 'selected' : ''}}
                    >Pasif</option>
                </select>
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


    <script type="text/javascript">
        CKEDITOR.replace( 'description' );
    </script>

@endsection


