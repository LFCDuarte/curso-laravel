<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStudentFormRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(Request $request)

    {
        $search = $request->search;


         $students = Student::where(function($query) use ($search){
            if($search){
                $query -> where ('email', $search);
                $query -> orWhere ('name', 'LIKE', "%{$search}");

             }
         })->get();

        return view ('students.index', compact('students'));
    }

    public function show($id)

    {
        //$user = User::where('id', $id) -> first ();
        if (!$student = Student::find($id))
            return redirect()-> route('student.index');

        return view ('students.show', compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StoreUpdateStudentFormRequest $request)
    {
        $data = $request->all();
        $data ['password']=bcrypt($request->password);

        Student::create($data);
        
        return redirect() -> route('students.index');
    }

    public function edit($id)
    {
        if (!$student = Student::find($id))
            return redirect()-> route('students.index');

        return view('students.edit', compact('student'));
    }

    public function update(StoreUpdateStudentFormRequest $request, $id)
    {
        if (!$student = Student::find($id))
            return redirect()-> route('students.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password']= bcrypt($request->password);

        $student->update($data);
        
        return redirect()-> route('students.index');
    }

    public function destroy(Student $student)
    {
        $student ->delete();

        return redirect()-> route('students.index');
    }
}
