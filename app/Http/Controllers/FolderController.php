<?php

namespace App\Http\Controllers;

//↓追加
use App\Folder;
use App\Http\Requests\CreateFolder;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function showCreateForm()
    {
        return view('folders/create');
    }

    public function create(CreateFolder $request)
{
    // フォルダモデルのインスタンスを作成する
    $folder = new Folder();
    // タイトルに入力値を代入する
    $folder->title = $request->title;

    Auth::user()->folders()->save($folder);

    // インスタンスの状態をデータベースに書き込む
    //いったん消した→$folder->save();

    return redirect()->route('tasks.index', [
        'id' => $folder->id,
    ]);
}
}
