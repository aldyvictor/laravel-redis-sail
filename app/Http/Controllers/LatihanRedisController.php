<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class LatihanRedisController extends Controller
{
    public function testredis()
    {
        Redis::set('nama', 'RedisTest');
         return Redis::get('nama');
    }

    public function cache()
    {
        $data = array(
            'blog' => 'RedisTest',
            'author' => 'Aldy Victor Rianes'
        );

        // if (Cache::has('nama')) {
        //     Cache::add('nama', json_encode($data));
        // }

        return Cache::get($data);
    }
}
