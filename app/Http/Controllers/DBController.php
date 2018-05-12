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
        return 1;
    }

    public function morn(){
        return 1;
    }
}
