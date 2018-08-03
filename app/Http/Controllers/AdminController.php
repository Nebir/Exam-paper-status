<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Course;
use App\CourseTeacher;
use App\CourseType;
use App\Department;
use App\Semester;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        /*$datas = [];
        $datas = [
            "educationTraining"=> EduData::select('id','title','featured','treanding', 'editors_pick')->get(),
            "events"=> Event::select('id','title','featured','treanding','editors_pick')->get(),
            "reportPublications"=> Publication::select('id','title','featured','treanding', 'editors_pick')->get(),
            "fundingOpportunities"=> DonorData::select('id','title','featured','treanding', 'editors_pick')->get()
        ];*/
        // return $datas;
        return view('admin.index');
    }

    /* =-=-=-=-=-=- Teacher Options =-=-=-=-=-=- */

    public function teacherData()
    {
        $teacherDatas = User::get();
        return view('admin.teacher.all_data')
            ->with('teacherDatas', $teacherDatas);
    }
    public function addNewTeacherForm()
    {
        return view('admin.teacher.create_new_teacher');
    }
    public function addNewTeacher(Request $request)
    {
        $input = $request->all();
        $id = User::insertGetId([
            'name'   => $input['name'],
            'email'   => $input['email'],
            'password'   => $input['password']
            /*'designation'   => $input['designation'],
            'joiningDate'   => $input['joiningDate']*/
        ]);
        return redirect()->back();
    }

    /* =-=-=-=-=-=- Semester Options =-=-=-=-=-=- */

    public function semesterData()
    {
        $semesterDatas = Semester::get();
        return view('admin.semester.all_data')
            ->with('semesterDatas', $semesterDatas);
    }

    public function addNewSemesterForm()
    {
        return view('admin.semester.create_new_semester');
    }

    public function addNewSemester(Request $request)
    {
        $input = $request->all();
        $id = Semester::insertGetId([
            'name'   => $input['name'],
            'short_form'   => $input['short_form']
        ]);
        return redirect()->back();
    }

    /* =-=-=-=-=-=- Course Options =-=-=-=-=-=- */

    public function courseData()
    {
        $courseDatas = Course::get();
        return view('admin.course.all_data')
            ->with('courseDatas', $courseDatas);
    }

    public function addNewCourseForm()
    {
        $departments = Department::get();
        $semesters = Semester::get();
        $courseTypes = CourseType::get();
        return view('admin.course.create_new_course')
            ->with('departments', $departments)
            ->with('semesters', $semesters)
            ->with('courseTypes', $courseTypes);
    }

    public function addNewCourse(Request $request)
    {
        $input = $request->all();
        $id = Course::insertGetId([
            'name'   => $input['name'],
            'course_code'   => $input['course_code'],
            'course_credit'   => $input['course_credit'],
            'dept_id'   => $input['dept_id'],
            'semester_id'   => $input['semester_id'],
            'course_type_id'   => $input['course_type_id']
        ]);
        return redirect()->back();
    }

    /* =-=-=-=-=-=- Course Type Options =-=-=-=-=-=- */

    public function addNewCourseTypeForm()
    {
        return view('admin.course.create_new_courseType');
    }

    public function addNewCourseType(Request $request)
    {
        $input = $request->all();
        $id = CourseType::insertGetId([
            'name'   => $input['name']
        ]);
        return redirect()->back();
    }

    /* =-=-=-=-=-=- Department Options =-=-=-=-=-=- */

    public function addNewDepartmentForm()
    {
        return view('admin.additional-options.create_new_department');
    }

    public function addNewDepartment(Request $request)
    {
        $input = $request->all();
        $id = Department::insertGetId([
            'name'   => $input['name']
        ]);
        return redirect()->back();
    }

    /* =-=-=-=-=-=- Batch Options =-=-=-=-=-=- */

    public function batchData()
    {
        $batchDatas = Batch::get();
        return view('admin.batch.all_data')
            ->with('batchDatas', $batchDatas);
    }

    public function addNewBatchForm()
    {
        $departments = Department::get();
        return view('admin.batch.create_new_batch')
            ->with('departments', $departments);
    }

    public function addNewBatch(Request $request)
    {
        $input = $request->all();
        $id = Batch::insertGetId([
            'session'   => $input['session'],
            'dept_id'   => $input['dept_id']
        ]);
        return redirect()->back();
    }

    /* =-=-=-=-=-=- Assign Course Teacher =-=-=-=-=-=- */

    public function assignCourseTeacherForm()
    {
        $courses = Course::with('department')->get();
        $batches = Batch::with('department')->get();
        $teachers = User::get();
        return view('admin.additional-options.assign_course_to_teacher')
            ->with('courses', $courses)
            ->with('batches', $batches)
            ->with('teachers', $teachers);
    }

    public function assignCourseTeacher(Request $request)
    {
//        return $request->course_id;
        $input = $request->all();
        $id = CourseTeacher::insertGetId([
            'course_id'   => $input['course_id'],
            'batch_id'   => $input['batch_id'],
            'teacher_id'   => $input['teacher_id']
        ]);
        return redirect()->back();
    }
}
