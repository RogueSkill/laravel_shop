<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
class adminController extends BaseController
{
    public function index()
    {
    	$data = DB::table('newgoods')->get();

    	return view('admin/index');
    }

    public function add()
    {
    	return view('admin/add');
    }

    public function edit($id)
    {
    	echo '编辑的'.$id;
    	return view('admin/edit');
    }

    public function delete()
    {
    	echo '删除';
    	return view('admin/delete');
    	// $url = route('del');
    }

    public function login()
    {
    	echo '登录';
    	return view('admin/login');
    }

    public function dologin()
    {

    	return view('admin/dologin');
    }

    

}


