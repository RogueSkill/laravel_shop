<?php

use Illuminate\Database\Seeder;

class goods extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr=[];
        for($i=0; $i<10;$i++){
        	$tmp=[];
        	$tmp['typeid'] = rand(0,20);
        	$tmp['goods'] = str_random(10);
        	$tmp['company'] = str_random(10);
        	$tmp['descr'] = str_random(20);
        	$tmp['price'] = rand(0,100);
        	$tmp['picname'] = str_random(11).'pic';
        	$tmp['picname_m'] = str_random(20).'pic';
        	$tmp['picname_s'] = str_random(11).'pic';
        	$tmp['state'] = rand(0,20);
        	$tmp['store'] = rand(0,100);
        	$tmp['num'] = rand(0,100);
			$tmp['clicknum'] = rand(0,100);
        	$tmp['created_at'] = date('Y-m-d H:i:s');
        	$tmp['updated_at'] = date('Y-m-d H:i:s');
        	$arr[] = $tmp;
        }
        DB::table('goods')->insert($arr);
    }
}
