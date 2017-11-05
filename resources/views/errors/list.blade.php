{{--错误信息显示区域--}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>请检查您输入的资料!</strong>
        <br><br>
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
        @endforeach
    </div>
@endif
