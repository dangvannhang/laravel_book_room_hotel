@extends('admin.masterad')
@section('contentAdmin')
<div class="content">
    <div class="container" style="background-color: white">
    <center><h1>Danh sách đặt phòng</h1></center>
        <table class="table" style="text-align: center">
            <thead class="thead-dark" >
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Nguoi dat</th>
                    <th scope="col">Ten phong</th>
                    <th scope="col">Loai phong</th>
                    <th scope="col">Thời gian đến</th>
                    <th scope="col">Thời gian đi</th>
                    
                </tr>
            </thead>
            <tbody>
                
                @foreach($bookRoom as $bRoom)
                <?php $count++; ?>
                <tr>
                    <th scope="col"><?php echo $count;?></th>
                    <!-- hien thi ra ten user -->
                    <th scope="col">
                        @foreach($userBook as $user)
                            @if(($user->id) == ($bRoom->id_user))
                                {{$user->name}}
                            @endif
                        @endforeach
                        
                    </th>

                     <!-- Hien thi ra ten phong -->
                    <th scope="col">
                        @foreach($room as $rm)
                            @if( ($rm->id)==($bRoom->room_id) )
                                {{$rm->name}}
                            @endif
                        @endforeach
                    </th>   

                    <!-- Hien thi ra loai phong -->
                    <th scope="col">
                        @foreach($room as $rm)

                            @if( ($rm->id) == ($bRoom->room_id))
                                @foreach($typeRoom as $type)
                                    @if( ($rm->id_type) == ($type->id))
                                        {{$type->name}}
                                    @endif
                                @endforeach
                                
                            @endif
                            
                        @endforeach

                        {{$bRoom->id_room}}
                    </th>

                   

                    <th scope="col">{{$bRoom->time_from}}</th>
                    <th scope="col">{{$bRoom->time_to}}</th>
                </tr>
                @endforeach

                
            </tbody>
    </div>
</div>
@endsection