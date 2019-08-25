<?php
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
        $post = Input::get();
        $columns = ['reminder', 'username', 'pwd', 'mail', 'phone', 'wxid'];
        $data = DB::table('users')->where('name', $name);
        $update = [];
        if($post['reminder'] == 'email' && $post['mail'] == ''
            || $post['reminder'] == 'sms' && $post['phone'] == ''
            || $post['reminder'] == 'wechat' && $post['wxid'] == '')
            return redirect('/setting')->with('message', '您尚未填写已选择提醒方式的详细信息！');
        foreach ($columns as $column){
            if($post[$column] != $data->value($column))
                $update[$column] = $post[$column];
        }
        if (sizeof($update)) {
            DB::table('users')->where('name', $name)->update($update);
            return redirect('/setting')->with('message', '个人信息更新成功！');
        } else{
            return redirect('/setting')->with('message', '没有需要更新的信息！');;
        }
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

    // morn - 时间是否合法
    // 首先检测此人账号是否可用
    // 同一时段有无其他订单

}
