<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create (Request $request){
		if (null !== $request->all() ) {
			$user = new User();
            $user->nickname = (isset($request->nickname)?$request->nickname:'');
            $user->name = (isset($request->name)?$request->name:'');
			$user->surname = (isset($request->surname)?$request->surname:'');
			$user->phone = (isset($request->phone)?$request->phone:'');
			$user->male = (isset($request->sex)?$request->sex:'');
			$user->show_phone = (isset($request->showPhone)?$request->showPhone:0);
            $user->save();
            return view('index',[
                'nickname' => (isset($request->nickname)?$request->nickname:''),
                'name' => (isset($request->name)?$request->name:''),
                'surname' => (isset($request->surname)?$request->surname:''),
				'phone' => (isset($request->phone)?$request->phone:'')
				]
			);
		}
		return view('index',[]);
	}
}
