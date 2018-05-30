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
            <th>状态</th>
        </thead>
        <tbody>
        <?php
            $name = Auth::user()->name;
            $data = DB::table('logs')->where('name', $name)->get();
            foreach ($data as $item) {
                echo "<tr>";
                if($item->action == 1) echo "<td>捡漏模式</td>";
                else echo "<td>预约模式</td>";
                echo "<td>".$item->created_at."</td>";
                echo "<td>";
                switch ($item->status){
                    
                }
                echo "</td>";
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
