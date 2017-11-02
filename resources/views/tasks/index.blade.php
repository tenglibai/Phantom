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
                <form action="" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="">
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
                </form>
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
                        <th>Task</th>
                        <th width="200"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="table-text">
                            <div class="">Task2</div>
                        </td>
                        <td>
                            {{--完成task按钮--}}
                            <form action="" method="POST" class="form-inline">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check"></i>完成
                                </button>
                            </form>
                            {{--删除task按钮--}}
                            <form action="" method="POST" class="form-inline">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>删除
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-text">
                            <div class="check">Task 1</div>
                        </td>
                        <td>
                            {{--完成task按钮--}}
                            <form action="" method="POST" class="form-inline">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check"></i>完成
                                </button>
                            </form>
                            {{--删除task按钮--}}
                            <form action="" method="POST" class="form-inline">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>删除
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
