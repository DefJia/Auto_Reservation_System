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
            <br/>
            {{Form::label('option', '可选车次')}}
            <div class="form-check">


                <table class="table table-sm">
                    <tbody>
                    <?php
                        $room = array(208, 211, 308, 311);
                        for($i = 0; $i < 9; $i++){
                            echo "<tr>";
                            for($j = 0; $j < 4; $j++){
                                $tmp = chr(65+$i);
                                $val = $j * 9 + $i;
                                echo "<td style='text-align: left'><label class='form-check-label'><input type='checkbox' class='form-check-input pick_room' name='option[]' value='{$val}' id='{$room[$j]}-{$tmp}'/>{$room[$j]}-{$tmp}</label></td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            for($i = 0; $i < 4; $i++){
            echo "<button class='btn btn-info' type='button' id='all_{$room[$i]}' onclick='select_all({$room[$i]})'>所有{$room[$i]}室</button>      ";
            }
            $room = array('small', 'big', 'all', 'un_all');
            $description = array('所有2-3人间', '所有4-6人间', '全选', '取消全部');
            $color = array('info', 'info', 'success', 'danger');
            for($i = 0; $i < 4; $i++){
            echo "<button class='btn btn-{$color[$i]}' type='button' id='all_{$room[$i]}' onclick='select_all({$i})'>{$description[$i]}</button>      ";
            }
            ?>
            <hr>
            {{Form::submit('提交申请', ['class' => 'btn btn-primary my_submit'])}}
            {{Form::close()}}
        </div>
    </div>
    <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#morn">预约抢票模式</button>
    <div id="morn" class="collapse">
        <div class="card-body">
            {{Form::open(array('action' => 'DBController@morn', 'url' => 'morn')) }}
            {{Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
            {{Form::close()}}
        </div>
    </div>

    <div class="card-body">
        {{Form::label('d', '注：捡漏模式是指，在已经错过开售时间后，通过实时抢票捡漏；预约抢票可预约2日后的座位，开售时间为前一天早6:00. 此网站仅用于日常交流学习，为购票提供便利，不可用于其他非法用途。', ['class' => 'alert alert-info'])}}
    </div>
    <div class="card-body" align="center">
        <img src="resources/home.jpg" width="80%" align="middle" alt="cover" >
    </div>

</div>
</div>
</div>
</div>
@endsection
