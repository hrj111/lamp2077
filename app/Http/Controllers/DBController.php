<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DBController extends Controller
{
    //
   	public function select()
   	{	// 查询
   		// $data = DB::select('select * from goods_1 limit 10');
   		// dd($data);
   		
   		// 单条
   		// DB::table('user')->insert(['email'=>'123@.com','age'=>'18','username'=>'哈哈']);
   		// 
   		
   		// 获取id查询
   		// $id = DB::table('user')-> insertGetId(['username'=>'yaoj','age'=>'180'] );
   		// dd($id);

   		//更新
   		// DB::table('user')->where('uid',9)->update(['username'=>'程咬金']);

   		// 删除
   		// DB::table('user')->where('uid',9)->delete();

   		// 查询所有
   		// $data = DB::table('user')->get();
   		// dd($data);

   		// 查询单条
   		// $data = DB::table('user')->first();

   		// 查询单条结果中的某个字段
   		// $data = DB::table('user')->value('username');
   		
   		// 获取一列数据
   		// $data = DB::table('user')->pluck('username');

   		// 类似
   		$data = DB::table('user')->where('username','like','d%');
   		dd($data);

   	}
}
