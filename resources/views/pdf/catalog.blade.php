<!doctype html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/guvenlogo1.jpg">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guven Kuruyemiş</title>
    <!-- CSS only -->
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">--}}
</head>
<body>
<style>
    * {
        font-family: "DeJaVu Sans Mono", monospace;
    }
</style>

<table width="100%">
    <tr>
        <td width="30%" style="font-size: 10px">{!! \App\Models\Setting::find(1)->address !!}
            <br><br> {{\App\Models\Setting::find(1)->gsm}}
        </td>
        <td width="40%" align="center"><img src="images/logo/guvenlogo1.jpg" width="150px"></td>
        <td width="30%" style="font-size: small;margin-top: 0px" align="right">
            {{date('Y-m-d H:i:s')}}
        </td>
    </tr>
</table>

<h3 align="center">Güven Kuruyemis Ürün Kataloğu</h3>
<table class="table" width="100%" style="border-collapse: collapse; border: 0px;">
    <thead>
    <tr>
        <th scope="col" style="border: 1px solid #2B7C0C; background-color: #2B7C0C; color: white; padding-left: 8px"
            width="5%">No
        </th>
        <th scope="col" style="border: 1px solid #2B7C0C; background-color: #2B7C0C; color: white; padding-left: 8px"
            width="10%">
        </th>
        <th scope="col" style="border: 1px solid #2B7C0C; background-color: #2B7C0C; color: white; padding-left: 8px"
            width="25%">Urun Adi
        </th>
        <th scope="col" style="border: 1px solid #2B7C0C; background-color: #2B7C0C; color: white; padding-left: 8px"
            width="25%">Kategori
        </th>
        <th scope="col" style="border: 1px solid #2B7C0C; background-color: #2B7C0C; color: white; padding-left: 8px"
            width="10%">Birim
        </th>
        <th scope="col" style="border: 1px solid #2B7C0C; background-color: #2B7C0C; color: white; padding-left: 8px"
            width="25%">Fiyat
        </th>
    </tr>
    </thead>
    <tbody>

    <tbody>
    @php($index=0)
    @foreach($product_data as $key)
        @php($index++)
        <tr style="{{$index%2==1?'background-color:#C5E8B8':''}}">
            <td style="border: 1px solid; padding:12px; font-size: small" align="center">{{$index}}</td>
            <td style="border: 1px solid; padding:12px;" align="center"><img src="{{ltrim($key->image,'/')}}" width="50px" height="50px"></td>
            <td style="border: 1px solid; padding:12px; font-size: small">{{$key->name}}</td>
            <td style="border: 1px solid; padding:12px; font-size: small">{{$key->category->name}}</td>
            <td style="border: 1px solid; padding:12px; font-size: small"
                align="center">{{$key->unit_id==1?'Kg':'Paket'}}</td>
            @if($key->discountedPrice == null)
                <td style="border: 1px solid; padding:12px;">
                    {{$key->price}} TL
                </td>
            @else
                <td style="border: 1px solid; padding:12px;">
                    <s><font style="color: darkred">{{$key->price}} TL</font></s><br>
                    {{$key->discountedPrice}} TL
                </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>

<!-- JavaScript Bundle with Popper -->
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"--}}
{{--        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"--}}
{{--        crossorigin="anonymous"></script>--}}
</body>
</html>
