@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
<div class="page-container" style="margin-top: 15px">
    <div class="container" style="background-color: white">
        <center> <h1>Cập nhật dịch vụ</h1></center>
        <form action="/admin/service/{{$getService->id}}" method="post" enctype="multipart/form-data" style="padding: 0px 40px">
            @csrf
            @method('PATCH')
            <div style="margin-left: 350px">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã dịch vụ</label>
                    <input type="text" style="width: 300px" name="idService" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mã dịch vụ" value="{{$getService->id}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên dịch vụ</label>
                    <input type="text" style="width: 300px" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên dịch vụ" value="{{$getService->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá</label>
                    <input type="text" style="width: 300px" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Giá" value="{{$getService->price}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ghi chú</label>
                    <input type="text" style="width: 300px" name="note" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Giá" value="{{$getService->note}}">
                </div>
                <div class="form-group">
                    <label for="inputGroupFile04">Ảnh</label>
                    <div class="custom-file">
                        <input type="file" name="image"  class="custom-file-input" id="inputGroupFile04">
                        <label class="custom-file-label"  style="width: 300px" for="inputGroupFile04">Choose file</label>
                    </div>
                </div>
                <button style="margin-top: 20px; margin-left:100px; margin-bottom:10px" type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
