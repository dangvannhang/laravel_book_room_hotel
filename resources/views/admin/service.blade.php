@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
<div class="container" style="background-color: white">
        <center><h1>Service</h1></center>
        <table class="table" style="text-align: center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Loại dịch vụ</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <th scope="row">{{$service->id}}</th>
                    <th>{{$service->name}}</th>
                    <td><img src= "{{$service->image}}" width="150px" hight="150px"></td>
                    <td>{{ number_format($service->price)}}VNĐ</td>
                    <td>
                        <div style="display:flex;  justify-content:center">
                            <form action="/admin/service/{{$service->id}}/edit" method="get">
                                @csrf
                                <button type="submit" class="btn btn-warning" "><i class="fas fa-edit"></i></button>
                            </form>
                            <form action="/admin/service/{{$service->id}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger" style="margin-left: 5px"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
