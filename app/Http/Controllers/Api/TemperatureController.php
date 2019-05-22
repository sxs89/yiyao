<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/5/16
 * Time: 13:44
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ApiTemperature;

/**
 * 手机上传温度数据处理控制器
 * Class TemperatureController
 * @package App\Http\Controllers\Api
 */
class TemperatureController extends Controller
{
    /**
     * 接收手机上传温度数据方法
     */
    public function index(Request $request)
    {
       $apiTemper = new ApiTemperature();
       $apiTemper->card_id = '832B4521';
       $apiTemper->user_id = 15;
       $apiTemper->temp = 100;
       $apiTemper->time = time();

       $saveResult = $apiTemper->save();
       if ($saveResult){
           echo "添加成功";
       }else{
           echo "添加失败";
       }
    }


    /**
     * 手机与测温仪建立连接方法
     */
    public function setting(Request $request)
    {
        $apitemper = new ApiTemperature();

        echo $request->input('name');
    }

}