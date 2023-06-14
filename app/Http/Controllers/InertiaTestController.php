<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* Model */
use App\Models\InertiaTest;
/* Inertia */
use Inertia\Inertia;


class InertiaTestController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/Index');
    }

    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    public function show($id)
    {
        // dd($id); // Stringの数字が渡ってくる
        return Inertia::render('Inertia/Show',
        [
            'id' => $id,
        ]);
    }

    public function store(Request $request)
    {
        // バリデーション処理
        $request->validate([
            'title' => ['required', 'max:20'],
            'content' => ['required'],
        ]);

        // DB保存処理
        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        // to_route('名前付きルート');
        return to_route('inertia.index')
                ->with(['message' => '登録完了しました！']);
    }
}
