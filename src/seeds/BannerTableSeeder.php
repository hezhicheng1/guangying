<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$insertData['title'] = '测试标题';
    	$insertData['content'] = '测试测试测试测试测试测试测试测试内容';
    	$insertData['img'] = 'http://up.deskcity.org/pic_source/2f/f4/42/2ff442798331f6cc6005098766304e39.jpg';
    	$insertData['created_at'] = '2022-03-29 15:04:17';
   		DB::table('banner')->insert($insertData);
    }
}
