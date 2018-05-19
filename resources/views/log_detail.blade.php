<?php
/**
 * Created by PhpStorm.
 * User: defjia
 * Date: 18-5-11
 * Time: 下午9:02
 */
?>
@extends('layouts.app')

@if(Session::has('message'))
    <script type="text/javascript">
        alert('{{Session::get('message')}}');
    </script>
@endif

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">抢票详情</div>

<div class="card-body">
    <!--
        ID
    -->


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
