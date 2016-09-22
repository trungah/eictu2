@extends('/layouts/app')
@section('ChatFriend')
    <div class="row header">
        <h4>eICTuChatFriend - Tìm bạn để Chat</h4>
        <p class="glyphicon glyphicon-log-out" aria-hidden="true"> Logout </p>
    </div>
    <div class="row">
        <div class="col-lg-12" >
            <p class="lead">Tìm bạn để CHAT</p>
        </div>
        <div class="col-lg-2">icon</div>
        <div class="col-lg-6">
            <input class="form-control input-lg" id="inputlg" type="text">
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary btn-lg">Tìm Kiếm</button>
        </div>
    </div>
@stop