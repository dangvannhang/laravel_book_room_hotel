@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
<div class="container" style="background-color: white">
        <center><h1>Users</h1></center>
        <table class="table" style="text-align: center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Vai trò</th>
                    <th scope="col">Tuy chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->dateOfBirth}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <form action="user/{{$user->id}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
