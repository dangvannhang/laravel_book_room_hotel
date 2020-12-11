@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
<div class="page-container" style="margin-top: 15px">
    <div class="container" style="background-color: white">
        <center> <h1>Cập nhật phòng</h1></center>
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
        <form action="/admin/room/{{$getRoom->id}}" method="post" enctype="multipart/form-data" style="padding: 0px 40px">
            @csrf
            @method('PATCH')
            <div style="margin-left: 350px">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã phòng</label>
                    <input type="text" style="width: 300px" name="idRoom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mã phòng" value="{{$getRoom->id}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Loại phòng</label>
                    <select  class="form-control"  name="roomType" style="width: 300px" >
                        @foreach ($roomtype as $roomtype)
                        @if($roomtype->id == $getRoom->id_type)
                            <option selected value="{{$roomtype->id}}">{{$roomtype->name}}</option>
                        @else
                            <option value="{{$roomtype->id}}">{{$roomtype->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputGroupFile04">Ảnh</label>
                    <div class="custom-file">
                        <input type="file" name="image"  class="custom-file-input" id="inputGroupFile04">
                        <label class="custom-file-label"  style="width: 300px" for="inputGroupFile04">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Note</label>
                    <input type="text" name="note" style="width: 300px" class="form-control" id="exampleInputPassword1" placeholder="Ghi chú" value="{{$getRoom->note}}">
                </div>
                <button style="margin-top: 20px; margin-left:100px; margin-bottom:10px" type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
