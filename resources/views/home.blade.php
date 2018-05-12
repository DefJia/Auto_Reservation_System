@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">
    {{__('提交申请')}}
</div>

    <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#pick">实时捡漏模式</button>
    <div id="pick" class="collapse">
        <div class="card-body">
            {{Form::open(array('action' => 'DBController@pick', 'url' => 'pick')) }}
            {{Form::label('date', '日期')}}
            {{Form::select('date', [0 => '当日', 1 => '次日'], 0, ['class' => 'form-control'])}}
            {{Form::label('option', '可选车次')}}
            <div class="form-check">
                {{Form::label('name', '哈哈')}}
                {{Form::checkbox('name', 'value')}}
                {{Form::label('name1', '哈哈随时')}}
                {{Form::checkbox('name1', 'value')}}
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Option 1
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Option 2
                </label>
            </div>
            {{Form::close()}}
        </div>
    </div>
    <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#morn">预约抢票模式</button>
    <div id="morn" class="collapse">
        <div class="card-body">
            {{Form::open(array('action' => 'DBController@pick', 'url' => 'morn')) }}
            {{Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
            {{Form::close()}}
        </div>
    </div>

    <div class="card-body">
        {{Form::label('d', '注：捡漏模式是指', ['class' => 'alert alert-info'])}}
    </div>

</div>
</div>
</div>
</div>
@endsection
