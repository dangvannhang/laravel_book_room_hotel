<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Room;
use App\RoomType;
use RealRashid\SweetAlert\Facades\Aler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    function roomType(){
        $roomtype = RoomType::all();
        return view('admin.rooms.createRoom',compact('roomtype'));
    }
    function getRoom() {
        $rooms = DB::table('rooms')
        ->join('room_types', 'room_types.id', '=', 'rooms.id_type')
        ->select('rooms.id', 'room_types.name', 'rooms.image','rooms.note')->get();
        $roomtype = RoomType::all();
        return view('admin.room',compact('rooms','roomtype'));
    }
    function deleteRoom($id){
        DB:: table('rooms')->where('id','=',$id)->delete();
        return redirect()->route('room');
    }
    function addRoom(Request $request){
        $idRoom = $request->input('idRoom');
        $id_RoomType = $request->input('roomType');
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('public/image/rooms/',$image);
        $note = $request->input('note');

        $rooms = new Room();
        $rooms->id = $idRoom;
        $rooms->id_type = $id_RoomType;
        $rooms->image= $image;
        $rooms->note = $note;
        $rooms->save();
        return redirect()->route('room')->with('alert','Thêm phòng thành công!');;

    }
    function editRoom($id){
        $getRoom= DB::table('rooms')->where('id','=',$id)->first();
        $roomtype = RoomType::all();
        return view('admin.rooms.editRoom',compact('getRoom','roomtype'));
    }
    function updateRoom($id, Request $request){
        $idRoom = $request->input('idRoom');
        $id_RoomType = $request->input('roomType');
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('public/image/rooms/',$image);
        $note = $request->input('note');
        DB::table('rooms')->where('id','=',$id)->update(['id'=>$idRoom,'id_type'=>$id_RoomType,'image'=>$image,'note'=>$note]);
        return redirect()->route('room')->with('alert','Cập nhật phòng thành công!');;
    }
    function searchRoom(Request $request){
        $roomtype = RoomType::all();
        $search = $request->input('search');
        $findRoom = Room::where('id_type','=',$search)->get();
        //$findRoom = DB::table('rooms')->where('id_type','=', $search)->get();
        foreach($findRoom as $findRooms){
            $findRooms->room_type;
        }
        return view('admin.rooms.search',compact('roomtype','findRoom'));
    }
    
}
