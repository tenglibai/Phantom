@extends('layout.master')

@section('title','todo 范例程序')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    建立新的Task
                </div>
                <div class="panel-body">
                    {{--错误信息显示区域--}}
                    <div class="alert alert-danger">
                        <strong>请检查您输入的资料!</strong>
                        <br><br>
                        <ul>
                            <li>错误信息1</li>
                            <li>错误信息2</li>
                            <li>错误信息3</li>
                        </ul>
                    </div>

                    {{--建立新task 表单--}}
                    {!! Form::open(['url'=>'/create','class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('task-name','任务名称', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('name',null , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('intro','任务简介', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('intro',null , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('intro','过期时间', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::date('expire_at', date('Y-m-d H:i'), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        {{--建立新task按钮--}}
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i>建立Task
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            {{--Task清单--}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    所有 Task 清单
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <tr>
                            <th>任务名称</th>
                            <th>任务简介</th>
                            <th>过期时间</th>
                            <th width="200"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div class="{{($task->done) ? 'check' : ''}}">{{$task->name}}</div>
                                </td>
                                <td class="table-text">
                                    <div class="{{($task->done) ? 'check' : ''}}">{{$task->intro}}</div>
                                </td>
                                <td class="table-text">
                                    <div class="{{($task->done) ? 'check' : ''}}">
                                        {{$task->leftTimeToExpire()}}
                                    </div>
                                </td>
                                <td>
                                    @if (!$task->done)
                                        {{--完成task按钮--}}
                                        <form action="" method="POST" class="form-inline">
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-check"></i>完成
                                            </button>
                                        </form>
                                    @endif
                                    {{--删除task按钮--}}
                                    <form action="" method="POST" class="form-inline">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>删除
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
