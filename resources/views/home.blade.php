@extends('layouts.app')

@section('title')
    提交订单
@endsection

@section('content')
    <div class="card">
        <div class="card-header" style="text-align: center">
            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                实时捡漏
            </a>
        </div>
        <div id="collapseOne" class="collapse" data-parent="#accordion">
            <div class="card-body">
                @include('subview.pick')
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" style="text-align: center">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                预约抢票
            </a>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body">
                @include('subview.morn')
            </div>
        </div>
    </div>

    <div class="card-body">
        {{Form::label('d', '注：实时捡漏模式是指，在已经错过开售时间（前一日6:00am）后，可通过该模式捡漏当日或次日已释放的席位；预约抢票可预约5日内尚未开售的席位。', ['class' => 'alert alert-info'])}}
        {{Form::label('d', '郑重声明：此网站仅用于日常交流学习，为购票提供便利，不可用于其他非法用途。', ['class' => 'alert alert-info'])}}
    </div>

    <div class="card-body" style="text-align: center">
        <img src="resources/home.jpg" width="80%" align="middle" alt="cover" >
    </div>
@endsection
