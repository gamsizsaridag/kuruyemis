@extends('yonetim.layout.app')


@section('modul')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Kullanıcılar</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">AnaSayfa</a></li>
                    <li class="breadcrumb-item active">Kullanıcılar</li>
                </ol>
                <button type="button" onclick="window.location.href='{{route('yonetim.user.create')}}'"
                        class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Kullanıcı Ekle
                </button>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="table-responsive">
        <table id="datatable" class="table table-striped table-hover">
            <thead class="">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kullanıcı Adı</th>
                <th scope="col">Email</th>
                <th scope="col">Tarih</th>
                <th scope="col">Durum</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            {{$index=1}}
            @foreach($users as $key)
                <tr id="">
                    <th scope="row">{{$index++}}</th>
                    <td>{{$key->name}}</td>
                    <td>{{$key->email}}</td>
                    <td>{{$key->updated_at==null? $key->created_at:$key->updated_at}}</td>
                    <td width="2%" style="text-align: center">
                        <button type="" class="btn waves-effect waves-light btn-sm btn-{{$key->status==1?'warning':'secondary'}}">
                            <i class="fas fa-check-circle"></i>
                        </button>
                    </td>

                    <td width="2%">
                        <a href="{{ route('yonetim.user.edit',$key->id)}}"><i style="color: blue;" class="fas fa-pencil-alt"></i></a>
                    </td>

                    <td width="2%">
                        <a href="javascript:void(0)"><i id="{{ $key->id }}"
                                                        class="fas fa-trash-alt delete"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


    <script>
        $(".delete").click(function () {
            destroy_id = $(this).attr('id');
            alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
                function () {
                    location.href = "/yonetim/user/delete/" + destroy_id;
                },
                function () {
                    alertify.error('Silme işlemi iptal edildi')
                }
            )
        });

    </script>





@endsection
