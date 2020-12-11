@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
    <div class="container" style="background-color: white">
        <center><h3 style="color: orange; font-weight: bold">Thêm danh sách đặt phòng</h3></center>
        @isset($typeRoom)
        <form action="/admin/chooseTime" method="post" enctype="multipart/form-data" style="padding: 0px 40px;display:flex">
            @csrf
            <div class="form-left">
                <h5>Kiểm tra phòng</h5>
                <div class="form-group">
                    <label for="time_from" style="font-weight: bold">Thời gian đến</label>
                    <input type="date" style="width: 300px" name="time_from" class="form-control" id="time_from" placeholder="Mã dịch vụ" required>
                </div>
                <div class="form-group">
                    <label for="time_to" style=" font-weight: bold">Thời gian trả phòng</label>
                    <input type="date" style="width: 300px" name="time_to" class="form-control" id="time_to" placeholder="Tên dịch vụ" required>
                </div>

                <div class="form-group">
                    <label for="car" style=" font-weight: bold">Chọn loại phòng</label>
                    <select name="typeRoom" id="type">
                        <option value="all" selected="selected">Tất cả các phòng</option>
                        @foreach($typeRoom as $type)
                        <option value='{{$type->id}}'>{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
               
            </div>

            </div>
                <button style="margin-top: 20px" type="submit" class="btn btn-primary">Kiểm tra</button>
            </div>
            
        </form>

        @endisset

        @isset($rooms)

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tên phòng</th>
                    <th scope="col">Tầng</th>
                    <th scope="col">Loại phòng</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>

            @foreach($rooms as $rm)
            <tr>
                <td>{{$rm->name}}</td>
                <td>{{$rm->floor}}</td>

                <td>
                    @foreach($allTypeRoom as $allTypeR)
                        @if( ($allTypeR->id) == ($rm->id_type) )
                            {{$allTypeR->name}}
                        @endif
                    @endforeach
                </td>
                <td>
                    <button><a href="{{ route('datphong',$rm->id) }}">Đặt phòng</a></button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        @endisset

        @isset($idPhong)
          

            <form action="/admin/saveInfor" method="post">
            @csrf
                <div class="form-left">
                    <div class="form-group">
                        <label for="name_customer" style="font-weight: bold">Tên khách hàng</label>
                        <input type="text" style="width: 300px" name="name_customer" class="form-control" id="name_customer" placeholder="Đặng Văn Nhàng" required>
                    </div>
                    <div class="form-group">
                        <label for="gender_customer" style="font-weight: bold">Giới tính</label>
                        <select name="gender" id="">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dob_customer" style="font-weight: bold">Ngày sinh</label>
                        <input type="date" style="width: 300px" name="dob_customer" class="form-control" id="dob_customer"  required>
                    </div>
                    <div class="form-group">
                        <label for="add_customer" style="font-weight: bold">Địa chỉ</label>
                        <input type="text" style="width: 300px" name="add_customer" class="add-control" id="add_customer" placeholder="101B LHT" required>
                    </div>
                    <div class="form-group">
                        <label for="mail_customer" style="font-weight: bold">Email</label>
                        <input type="text" style="width: 300px" name="mail_customer" class="add-control" id="mail_customer" placeholder="101B LHT" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_customer" style="font-weight: bold">Số điện thoại</label>
                        <input type="number" style="width: 300px" name="phone_customer" class="form-control" id="phone_customer" required>
                    </div>
                    
                    
                <input type="submit" value="Xác nhận">
            </form>
            
        @endisset

        @isset($user)
        <form action="/admin/saveBookRoom" method="post">
        @csrf
        <div class="form-group">
                        <label for="" style="font-weight: bold">Tên phòng</label>
                        <label for="">
                            @foreach($allRoom as $alRoom)
                                @if($idPhong == ($alRoom->id))
                                    {{$alRoom->name}}
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="" style="font-weight: bold">Loại phòng </label>
                        <label for="">
                            @foreach($allRoom as $alRoom)
                                @if($idPhong == ($alRoom->id))
                                    
                                    @foreach($allTypeRoom as $alTypeR)
                                        @if(($alRoom->id_type) == ($alTypeR->id))
                                            {{$alTypeR->name}}
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="" style="font-weight: bold">Ngày đến</label>
                        <label for="">{{$time_from}}</label>
                    </div>
                    <div class="form-group">
                        <label for="" style="font-weight: bold">Ngày đi</label>
                        <label for="">{{$time_to}}</label>
                    </div>
                </div>

                <input type="submit" value="Xac nhan">
        </form>
        @endisset
    </div>
</div>
@endsection
