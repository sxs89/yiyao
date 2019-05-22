<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/5/15
 * Time: 14:50
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * 登录和注册控制器
 * Class LoginController
 * @package App\Http\Controllers\Api
 */
class LoginController extends Controller
{

    public function index()
    {
        return view('api.login');
    }

    /**
     * 手机用户登陆方法
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function check(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $result = DB::table('user')->where([['username', $username]])->first();

        if ($result) {
            //用户存在，匹对密码
            if ($password == decrypt($result->password)) {
                echo "登录成功";
                //把登陆的用户信息保存到session中
                session(['id' => $result->id]);
                session(['username' => $result->username]);
                return;
            } else {
                return back()->with("error", '密码错误');
            }
        } else {
            return back()->with("error", '用户不存在');
        }

    }

    //注册界面
    public function register()
    {
        return view('api.register');
    }

    /**
     * 注册逻辑处理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerCheck(Request $request)
    {
        $resultData = $request->all();
        unset($resultData['_token']);

        //根据用户名判断账户是否在数据库存在
        $userDa = DB::table('user')->where('username', $resultData['username'])->first();
        if (empty($userDa)) { //判断帐户名是否被使用
            //该用户名没有被使用过

            //判断密码长度
            if (strlen($resultData['pass']) >= 6 && strlen($resultData['pass']) <= 12) {

            } else {
                return back()->withErrors('密码长度不满足');
            }

            //判断两次秘密输入的是否一致
            if ($resultData['pass'] == $resultData['repass']) {
                $data = array();
                $data['username'] = $resultData['username'];
                $data['password'] = encrypt($resultData['pass']);
                $data['createtime'] = time();

                if (DB::table('user')->insert($data)) {
                    return redirect('api/login');
                } else {
                    return back()->withErrors('用户注册失败');
                }

            } else {
                return back()->withErrors('输入的密码不一致');
            }
        } else {
            return back()->withErrors('该用户名已被使用，请重新输入用户名');
        }
    }
}