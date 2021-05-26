@extends('yonetim.layout.app')


@section('modul')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Ürün</h4>
        </div>

        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                @if($product->status==1)
                    <a href="{{$product->url}}" target="_blank">
                        <button type="button"
                                class="btn btn-info m-l-15"><i class="ti ti-shopping-cart"></i> Sitede Göster
                        </button>
                    </a>
                @endif
                <button type="button" onclick="myFunction()"
                        class="btn btn-success m-l-15"><i class="fas fa-save"></i> Güncelle
                </button>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <form role="form" id="form" action="{{route('yonetim.product.update',$product->id)}}" method="post"
          enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <div class="col-4 offset-2">
                <div id="yeniresim">
                    <img src="{{$product->image}}" width="150px" height="150px">
                    <input type="text" name="old_image" value="{{$product->image}}" style="display: none;">
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
            <label for="example-text-input" class="col-2 col-form-label">Ürün adı*</label>
            <div class="col-5">
                <input class="form-control" name="name" required="" value="{{$product->name}}" type="text">
                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Normal Fiyatı</label>
            <div class="col-5">
                <input step="0.01" type="number" name="price" value="{{$product->price}}" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">İndirimli Fiyatı</label>
            <div class="col-5">
                <input step="0.01" type="number" name="discountedPrice" value="{{$product->discountedPrice}}"
                       class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Kategori</label>
            <div class="col-5">
                <select class="form-control" name="categoryId">
                    <option value="0" {{ $product->categoryId == 0 ? 'selected' : ''}}>------Yok------</option>
                    @foreach($category as $key)
                        <option value="{{$key->id}}"
                            {{ $product->categoryId == $key->id ? 'selected' : ''}}
                        >{{$key->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Marka</label>
            <div class="col-5">
                <select class="form-control" name="brandId">
                    <option value="0" {{ $product->brandId == 0 ? 'selected' : ''}}>------Yok------</option>
                    @foreach($brand as $key)
                        <option value="{{$key->id}}"
                            {{ $product->brandId == $key->id ? 'selected' : ''}}
                        >{{$key->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Açıklama</label>
            <div class="col-9">
                <textarea class="form-control ckeditor" name="description"
                          rows="5">{!! $product->description !!}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Sıra</label>
            <div class="col-5">
                <input class="form-control" name="must" type="number" value="{{$product->must}}" placeholder="1"
                       id="example-text-input">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Ana Sayfa da Göster</label>
            <div class="col-2">
                <select class="form-control" name="homeStatus">
                    <option value="1"
                        {{ $product->homeStatus == 1 ? 'selected' : ''}}
                    >Aktif
                    </option>
                    <option value="0"
                        {{ $product->homeStatus == 0 ? 'selected' : ''}}
                    >Pasif
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Durum</label>
            <div class="col-2">
                <select class="form-control" name="status">
                    <option value="1"
                        {{ $product->status == 1 ? 'selected' : ''}}
                    >Aktif
                    </option>
                    <option value="0"
                        {{ $product->status == 0 ? 'selected' : ''}}
                    >Pasif
                    </option>
                </select>
            </div>
        </div>

    </form>


    <script>
        function myFunction() {
            $("#form").submit();
        }

        function resmisil() {
            $('#yeniresim').html('<img src="/images/urun/default.jpg" name="old_image" width="150px" height="150px">' +
                '<input type="text" name="old_image" value="/images/urun/default.jpg" style="display: none;">');
        }
    </script>


    <script type="text/javascript">
        CKEDITOR.replace('description');
    </script>

@endsection


