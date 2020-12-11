@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
<div class="container" style="background-color: white">
        <center><h1>Danh sách phòng</h1></center>
        <form action="/admin/room/search" method="post">
            @csrf
            <div class="input-group" style="width: 300px; margin:auto; margin-bottom:25px" >
                <select  class="form-control"  name="search" >
                    @foreach ($roomtype as $roomtype)
                    <option value="{{$roomtype->id}}">{{$roomtype->name}}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <button style="border: hidden" type="submit"><i class="fa fa-search search-icon" ></i></button>
                    </span>
                </div>
            </div>
        </form>
        <table class="table" style="text-align: center">
            <thead class="thead-dark" >
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Loại phòng</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Lựa chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                <tr>
                    <th scope="row">{{$room->id}}</th>
                    <th>{{$room->name}}</th>
                    <td><img src= "/./image/rooms/{{$room->image}}" width="150px" hight="150px"> </td>
                    <td>{{$room->note}}</td>
                    <td>
                        <div style="display:flex; justify-content:center">
                            <form action="/admin/room/{{$room->id}}/edit" method="get">
                                @csrf
                                <button type="submit" class="btn btn-warning"><i class="fas fa-edit    "></i></button>
                            </form>
                            <form action="/admin/room/{{$room->id}}" method="post">
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
