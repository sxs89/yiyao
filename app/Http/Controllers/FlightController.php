<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/5/21
 * Time: 9:48
 */

namespace App\Http\Controllers;

use App\Model\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    //查询方法
    public function test03()
    {
        $flights = Flight::where('name','sxs')->get();
        dump($flights);
    }

    //模型插入数据方法
    public function save(Request $request)
    {
        $flight = new Flight();
        $flight->name = '123456';
        $flight->save();
        dd($flight);
    }

    //模型的修改方法
    public function update()
    {
        $flight = Flight::find(4);
        $flight->name = "789";
        $flight->save();
        dd($flight);
    }
}