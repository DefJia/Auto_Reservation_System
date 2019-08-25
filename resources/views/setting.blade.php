<?php
$name = Auth::user()->name;
$data = DB::table('users')->where('name', $name);
?>
@extends('layouts.app')

@section('title')
    提交申请
@endsection

@section('content')
{{ Form::open(array('action' => 'DBController@setting')) }}

    {{Form::label('reminder', '提醒方式', ['class' => ''])}}
    {{Form::select('reminder', ['email' => '邮件提醒', 'sms' => '短信提醒(暂未开通)', 'wechat' => '微信提醒(暂未开通)', 'no' => '不提醒'], $data->value('reminder'), ['class' => 'form-control'])}}
    <br/>

    {{Form::label('username', '统一身份认证账号(学号)', ['class' => ''])}}
    {{Form::text('username', $data->value('username'), ['class' => 'form-control'])}}
    <br/>

    {{Form::label('pwd', '统一身份认证密码', ['class' => ''])}}
    {{Form::text('pwd', $data->value('pwd'), ['class' => 'form-control'])}}
    <br/>

    {{Form::label('mail', '邮箱(邮件提醒)', ['class' => ''])}}
    {{Form::email('mail', $data->value('mail'), ['class' => 'form-control'])}}
    <br/>

    {{Form::label('phone', '手机号码(短信提醒)', ['class' => ''])}}
    {{Form::number('phone', $data->value('phone'), ['class' => 'form-control'])}}
    <br/>

    {{Form::label('wxid', '微信号(微信提醒)', ['class' => ''])}}
    {{Form::text('wxid', $data->value('wxid'), ['class' => 'form-control'])}}
    <br/>

    {{Form::label('a', '郑重承诺：统一身份认证账号及密码仅用于预约席位，绝不会存取您的个人信息或将账号用于其他用途。', ['class' => 'alert alert-info'])}}

    {{Form::submit('提交', ['class' => 'btn btn-primary my_submit'])}}

{{ Form::close() }}
@endsection
