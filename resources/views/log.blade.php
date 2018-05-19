<?php
/**
 * Created by PhpStorm.
 * User: defjia
 * Date: 18-5-9
 * Time: 下午9:29
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
<div class="card-header">抢票记录</div>

<div class="card-body">
    <table class="table table-sm table-hover">
        <thead>
            <th>模式</th>
            <th>时间</th>
            <th>车次</th>
            <th>状态</th>
            <th>查看</th>
        </thead>
        <tbody>
        <?php
            $name = Auth::user()->name;
            $data = DB::table('queue_pick')->where('name', $name);
            foreach ($data as $item) {
                echo "<tr>";
                $hh = array();
                echo "<td>{$item->value('time')}</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
