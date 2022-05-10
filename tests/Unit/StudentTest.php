<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Asset;
use App\Models\Branch;
use App\Models\School;
use App\Models\Product;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Employee;
use App\Models\Standard;
use App\Models\StudentClass;

class StudentTest extends TestCase
{
    public function testAStudentCanBeCreated()
    {
        //teacher
        $teacher = Teacher::create([
            'name' =>'Magrej'
        ]);

        //School
        $school = School::create([
            'name' => "KGFHSS"
        ]);

        //Class
        $standard = Standard::create([
            'name' => "LKG",
        ]);

        $section = Section::create([
            'name' => 'A'
        ]);

        $student_class = StudentClass::create([
            'section_id' => $section->id,
            'standard_id' => $standard->id,
            'teacher_id' => $teacher->id
        ]);

        //student
        $student = Student::create([
            'name' => 'Rahul Raj.D',
            'dob' => '22-09-2025',
            'student_class_id' => $student_class->id
        ]);
        $this->assertEquals($student->name, 'Rahul Raj.D');
        $this->assertEquals($student->studentClass->name, 'LKG - A');
    }

    public function testAssets()
    {
        $product = Product::create([
            'name' => 'Dell XPS 13',
            'price' => '50000',
            'warranty' => '1 year'
        ]);

        $branch = Branch::create([
            'name' => 'Salem'
        ]);

        $employee = Employee::create([
            'name' => 'Ram Arjun',
            'dob' => '20-09-1995',
            'branch_id' => $branch->id
        ]);

        $asset = Asset::create([
            'product_id' => $product->id,
            'employee_id' => $employee->id,
            'serial_no' => 2223345,
            'status' => 'Working'
        ]);

        $this->assertEquals('Dell XPS 13', $asset->product->name);
        $this->assertEquals('Salem', $asset->employee->branch->name);
        $this->assertEquals('Ram Arjun', $asset->employee->name);
        
    }
}
