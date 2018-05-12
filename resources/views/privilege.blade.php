<?php
/**
 * Created by PhpStorm.
 * User: defjia
 * Date: 18-5-9
 * Time: 下午9:29
 */
?>
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <div class="card-header">
        {{__('会员特权')}}
    </div>

    <div class="card-body">
        <h3>我的违约</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-sm" >
                <thead>
                    <th>违约时间</th>
                    <th>违约类型</th>
                    <th>违约地点</th>
                </thead>

            </table>
        </div>
        <a href="/py">{{Form::button('查询不良购票记录', ['class' => 'btn btn-success'])}}</a>
        {{Form::button('删除所有不良记录', ['class' => 'btn btn-danger'])}}
    </div>
    <div class="card-body">
        <h3>我的订单</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-sm" >
                <thead>
                    <th></th>
                    <th>购票车次</th>
                    <th>发车日期</th>
                    <th>最晚支付时间</th>
                </thead>

            </table>
        </div>
        {{Form::button('查询当前订单', ['class' => 'btn btn-success'])}}
        {{Form::button('取消选中订单', ['class' => 'btn btn-danger'])}}
    </div>
    <div class="card-body">
        <h3>我要过户</h3>
        {{Form::button('开启30秒过户保护', ['class' => 'btn btn-warning'])}}
    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
