<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Phone;


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

        //    array:2 [▼ // app\Http\Controllers\StudentController.php:39
        //   "name" => "kai"
        //   "phone" => "09123"
        // ]

        $input = $request->except('_token');

        // ps. 主表存檔 才會有id


        // 主表
        $data = new Student;
        $data->name = $input['name'];
        $data->save();


        // 子表 也要存檔
        // 子表
        $dataPhone = new Phone;
        $dataPhone->student_id = $data->id;
        $dataPhone->phone = $input['phone'];
        $dataPhone->save();

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
        $data = Student::with('phoneRelation')->find($id);
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

        //   array:2 [▼ // app\Http\Controllers\StudentController.php:99
        //   "name" => "dog"
        //   "phone" => "123"
        // ]

        // form input       
        $input = $request->except('_token', '_method');

        // 抓主表資料
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->save();

        // 刪除子表
        Phone::where('student_id', $id)->delete();

        // 新增子表
        $dataPhone = new Phone;
        $dataPhone->student_id = $data->id;
        $dataPhone->phone = $input['phone'];
        $dataPhone->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("students destroy ok $id");

        // 先刪除子表
        Phone::where('student_id', $id)->delete();
        Student::where('id', $id)->delete();
        // $data = Student::find($id);
        // $data->delete();
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
