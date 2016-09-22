@extends('/layouts/app')
@section('ChatClassRoom')
    <div class="row header">
        <h4>eICTuChatClassRoom - chat theo lớp học</h4>
        <p class="glyphicon glyphicon-log-out" aria-hidden="true"> Logout </p>
    </div>
    <div class="row">
        <div class="col-lg-12" >
            phần tin nhắn
        </div>
    </div>
    <div class="row  message" >
        <div class="col-lg-9 col-lg-offset-1">
            <input class="form-control input-lg" id="inputlg" type="text">
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary btn-lg">Gửi</button>
        </div>
    </div>
@stop
