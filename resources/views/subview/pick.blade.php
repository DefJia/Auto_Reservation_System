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
        echo "<button class='btn btn-info' type='button' id='all_{$room[$i]}' onclick='select_all({$room[$i]})'>所有{$room[$i]}室</button>";
    }
    $room = array('small', 'big', 'all', 'un_all');
    $description = array('所有2-3人间', '所有4-6人间', '全选', '取消全部');
    $color = array('info', 'info', 'success', 'danger');
    for($i = 0; $i < 4; $i++){
        echo "<button class='btn btn-{$color[$i]}' type='button' id='all_{$room[$i]}' onclick='select_all({$i})'>{$description[$i]}</button>";
    }
?>
<hr>
{{Form::submit('提交订单', ['class' => 'btn btn-primary my_submit'])}}
<br/>
{{Form::close()}}