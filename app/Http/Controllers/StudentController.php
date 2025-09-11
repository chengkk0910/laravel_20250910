<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $url = route('students.create');
        // $url = route('students.edit', ['student' => 1]);
        // dd($url);
        // dd('hello students index');
        // $data = [
        //     [
        //         'id' => 1,
        //         'name' => 'amy',
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'bob',
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'cat',
        //     ]
        // ];

        $data = DB::select('select * from students');
        dd($data);


        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('hello students create');
        return view('student.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd("students id = $id edit ok");
        return view('student.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function excel()
    {
        dd('students excel ok');
        // return view('student.excel');
    }

    public function test()
    {
        // dd('students excel ok');

        $data = 'test ok';

        $data = [
            [
                'id' => 1,
                'name' => 'amy',
            ],
            [
                'id' => 2,
                'name' => 'bob',
            ],
            [
                'id' => 3,
                'name' => 'cat',
            ]
        ];
        return view('student.test', ['data' => $data]);
    }

    public function child()
    {
        // dd('students child ok');
        return view('student.child');
    }

    public function html()
    {
        // dd('students child ok');
        return view('page.html');
    }

    public function js()
    {
        // dd('students child ok');
        return view('page.js');
    }

    public function php()
    {
        // dd('students child ok');
        return view('page.php');
    }

    public function python()
    {
        // dd('students child ok');
        return view('page.python');
    }
}
