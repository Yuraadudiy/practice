<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TasksController extends Controller
{
    public function task1()
    {
        return view('tasks.1.index');
    }

    public function task1Store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $reversedText = $this->utf8_strrev($request->text);
        File::put(public_path('text.txt'), $request->text);
        File::put(public_path('reversedText.txt'), $reversedText);

        return redirect(route('task.1.getInfo'))->with('success', 'Текст успішно збережений');
    }

    public function task1GetInfoFromFiles()
    {
        $text = File::get(public_path('text.txt'));
        $reverseText = File::get(public_path('reversedText.txt'));

        return view('tasks.1.getInfos', compact('text','reverseText'));
    }

    public function task2()
    {
        $fibonachiNumbers = [];

        return view('tasks.2.index', compact('fibonachiNumbers'));
    }

    public function task2Store(Request $request)
    {
        $request->validate([
            'index' => 'required|integer'
        ]);
        $fibonachiNumbers = [];

        $index = intval($request->index);

        for ($n = 1; $n <= $index; $n++) {
            $fibonachiNumbers[] = $this->fibonacci($n);
        }

        return view('tasks.2.index', compact('fibonachiNumbers'));
    }

    public function task3()
    {
        $arr1 = [];
        $arr2 = [];
        $arr3 = null;
        $result = [];
        for ($i = 0; $i < 10; $i++) {
            $arr1[] = rand(1, 5000);
            $arr2[] = rand(1, 5000);
        }
        $arr3 = array_unique(array_merge($arr1, $arr2));
        array_multisort($arr3);
        foreach ($arr3 as $item) {
            if ($item % 5) {
                $result[] = $item;
            }
        }

        return view('tasks.3.index', compact('arr1','arr2', 'result'));
    }

    private function utf8_strrev($str){
        preg_match_all('/./us', $str, $ar);
        return implode(array_reverse($ar[0]));
    }

    private function fibonacci($n)
    {
        if ($n < 3) {
            return 1;
        }
        else {
            return $this->fibonacci($n-1) + $this->fibonacci($n-2);
        }
    }
}
