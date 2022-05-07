<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\School;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;
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
}
