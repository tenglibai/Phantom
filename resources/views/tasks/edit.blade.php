@extends('layout.master')

@section('title','编辑')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    修改任务
                </div>
                <div class="panel-body">
                    @include('errors.list')
                    {{--编辑新task 表单--}}
                    {!! Form::model($task,['method'=>'PATCH','url'=>'tasks/'.$task->id,'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('task-name','任务名称',['class'=>'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name',null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('intro','任务简介', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('intro',null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('intro','过期时间', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::date('expire_at',null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    {{--修改新task按钮--}}
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i>修改Task
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
