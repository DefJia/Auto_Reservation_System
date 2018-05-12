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

class PythonController extends Controller{

    public function test(){
        $res = shell_exec("python3 Manage.py");
        echo $res;
    }

}


