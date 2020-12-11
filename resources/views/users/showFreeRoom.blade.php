@extends('users/master')
@section('content')

<div class="showFreeRoom padding20">
    <center>
        <h1 class="title">Check free rooms</h1>
    </center>
    @if(isset($rooms))
    <?php
    ?>  
        <center>
        <table class="tableFreeRoom">
            <tr>
                <th>Room name</th>
                <th>Price</th>
                <th></th>
            </tr>
            @foreach($rooms as $room)
                <tr>
                    <td>{{$room->name}}</td>
                    <td>
                        @foreach($all_room as $ar)
                            @if(($ar->id)==($room->id_type))
                                {{$ar->price}}
                            @endif
                        @endforeach
                    </td>
                    <td><a href="{{route('chooseRoom',$room->id)}}"><button class="btn__bookRoom">Book Room</button></a></td>
                </tr>
            @endforeach
        </table>
        </center>
    @endif
</div>
    

@endsection