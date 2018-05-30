<?php
/**
 * Created by PhpStorm.
 * User: defjia
 * Date: 18-5-10
 * Time: 上午8:20
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Validation\Rules\In;
use function PHPSTORM_META\type;

class DBController extends Controller {

    public function judge_insert($column_name, $name, $data){
        $post = Input::get($column_name);
        if($post != $data->value($column_name))
            DB::table('users')
                ->where('name', $name)
                ->update([$column_name => $post]);
    }

    public function setting()
    {
        $name = Auth::user()->name;
        $data = DB::table('users')->where('name', $name);
        $this->judge_insert('username', $name, $data);
        $this->judge_insert('pwd', $name, $data);
        $this->judge_insert('mail', $name, $data);
        $this->judge_insert('phone', $name, $data);
        $this->judge_insert('wxid', $name, $data);

        return redirect('/setting')->with('message', '个人信息更新成功！');
    }

    public function pick(){
        $name = Auth::user()->name;
        $date = Input::get('date');
        $option = Input::get('option');
        // echo $option;
        $room = '';
        foreach ($option as $elem){
            $room .= $elem . ",";
        }
        DB::table('logs')->insert(['name' => $name, 'action' => 1, 'status' => 0, 'detail' => $room]);
        return redirect('/log')->with('message', '抢票订单提交成功！');
    }

    public function morn(){
        return 1;
    }
}
