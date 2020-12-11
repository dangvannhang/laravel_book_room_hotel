@extends('admin.masterad')
@section('contentAdmin')

<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="/admin/feedbacks/rep">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Trả lời </h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <h5 for="">Trả lời phản hồi: <br><span id="feedback-content" style="color: blue"></span></h5>
                    <h6>Tên khách hàng : <span id="feedback-name" style="color: coral"></span></h6>
                    <h6>Mail : <span id="feedback-mail" style="color: coral"></span></h6>
                  </div>
                  <input type="text" hidden name='id' id='id'>
                <input type="text" name="mail" hidden id="mail" class="form-control" placeholder="" aria-describedby="helpId">
                <input type="text" name="name" hidden id="name" class="form-control" placeholder="" aria-describedby="helpId">

              <div class="form-group">
                <label for="">Nội dung</label>
                <textarea type="text" name="content" required id="content"  name="" rows="3" class="form-control" placeholder="" aria-describedby="helpId"></textarea>
              </div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">send</button>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="content">
<div class="container" style="background-color: white">
        <center><h1>Feedbacks</h1></center>
        <table class="table" style="text-align: center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Trả lời</th>
                    <th scope="col">Tùy chọn</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feedbacks as $f)
                <tr>
                    <input type="text" id="{{ $f->id }}" hidden value="{{ $f }}">
                    <th scope="row">{{ $f->id }}</th>
                    <th>{{$f->name}}</th>
                    <td>{{$f->mail}}</td>
                    <td>{{$f->content}}</td>
                    <td style="color: coral">{{ $f->reply }}</td>
                    <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" onclick="getFB({{ $f->id }})" data-target="#my-modal"><i class="fa fa-reply" aria-hidden="true"></i></button>
                    </td>
                    <td>
                        <form action="/admin/feedbacks/delete" method="post">
                            @csrf
                            <input type="text" hidden name="id" value="{{ $f->id }}">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    function getFB(id){
         var fb=JSON.parse(document.getElementById(id).value);
         document.getElementById('feedback-content').innerText= fb.content;
         document.getElementById('feedback-mail').innerText=fb.mail;
         document.getElementById('feedback-name').innerText=fb.name;
         document.getElementById('mail').value=fb.mail;
         document.getElementById('name').value=fb.name;
         document.getElementById('id').value=fb.id;
    }
</script>
@endsection
