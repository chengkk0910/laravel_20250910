<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Student::all();
        $data = Student::with('phoneRelation')->get();
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
        // $input = $request->all();
        $input = $request->except('_token');
        // dd($input);
        $data = new Student;

        $data->name = $input['name'];

        $data->save();

        // return redirect('/students');
        return redirect()->route('students.index');
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
        // $data = [
        //     'id' => $id
        // ];
        $data = Student::find($id);
        // dd($data);
        return view('student.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd('update ok');
        // dd($data);

        // form input       
        $input = $request->except('_token');

        // 抓id 單筆資料
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("students destroy ok $id");
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('students.index');
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
