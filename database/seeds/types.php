<?php

use Illuminate\Database\Seeder;

class types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr = [];
        for($i=0;$i<40;$i++){
        	$tmp = [];
        	$tmp['name'] = str_random(8);
        	$tmp['pid'] = rand(0,10);
        	$tmp['path'] = rand(0,10).','.rand(0,10).',';
        	$tmp['created_at'] = date('Y-m-d H:i:s');
        	$tmp['updated_at'] = date('Y-m-d H:i:s');
        	$arr[] = $tmp;
        }
        DB::table('types')->insert($arr);

    }
}