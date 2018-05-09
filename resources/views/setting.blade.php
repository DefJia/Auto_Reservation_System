<?php
/**
 * Created by PhpStorm.
 * User: defjia
 * Date: 18-5-9
 * Time: 下午8:47
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">个人设置</div>

                    <div class="card-body">

                        <div class="form-group">
                            <label for="sel1">提醒方式</label>
                            <select class="form-control" id="sel1">
                                <option>邮件提醒</option>
                                <option>短信提醒(暂未开通)</option>
                                <option>微信提醒(暂未开通)</option>
                                <option>不提醒</option>
                            </select>
                        </div>
<!--
    账号密码无效
-->
                                <form>
                                    <div class="form-group">
                                        <label for="username_">账号</label>
                                        <input type="text" class="form-control" id="username_" placeholder="请输入统一身份认证账号">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd_">密码</label>
                                        <input type="password" class="form-control" id="pwd_" placeholder="请输入密码">
                                    </div>
<div class="alert alert-info">
    郑重承诺：统一身份认证账号及密码仅用于预约席位，绝不会存取您的个人信息。
</div>
                                    <button type="submit" class="btn btn-primary" style="float: right">提交</button>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
