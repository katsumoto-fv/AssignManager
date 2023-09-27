<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkersController extends Controller
{
    public function index()
    {
        // ページネーション
        $workers = Worker::paginate(5);

        return view(
            'workers.index',
            ['workers' => $workers]
        );
    }

    public function create()
    {
        return view('workers.create');
    }


    public function edit()
    {
        return view('workers.edit');
    }
}
