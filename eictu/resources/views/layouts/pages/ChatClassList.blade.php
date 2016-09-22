@extends('/layouts/app')
@section('ChatClassList')
    <div class="row header">
        <h4>eICTuChatClassList - Các nhóm chat theo lớp học</h4>
        <p class="glyphicon glyphicon-log-out" aria-hidden="true"> Logout </p>
    </div>
    <div class="row">
        <div class="col-lg-12" >
            <p class="lead"> Danh mục nhóm chát lớp học :</p>
            <ol>
                <li> <a href="ChatClassRoom.blade.php?yield=ChatClassRoom">ICT-K11</a></li>
                <li> <a>BIZ-K11</a> </li>
                <li> <a>DEV-K11</a></li>

            </ol>
        </div>
    </div>
@stop
