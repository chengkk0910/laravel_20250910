<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
// class StudentsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // $data = Student::all();
        $data = Student::select('id', 'name')->get();
        // dd($data);
        return $data;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name'
        ];
    }
}
