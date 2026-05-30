<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    //登録フォームを表示する
    public function create()
    {
        return view('register');
    }

    // 登録処理を行う
    public function store(StoreUserRequest $request)
    {
        // StoreUserRequest を引数に指定するだけでバリデーションが自動実行されます
        User::create($request->validated());

        return view('register_success'); // 登録完了画面（教材で提供済み）を表示
    }
}
