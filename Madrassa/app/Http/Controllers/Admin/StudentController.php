<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\student;
use Auth;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        

   
           
     $data = DB::table('users')
       ->join('students', 'users.id', '=', 'students.user_id')
        ->where('students.student_status', '=', 1)
       ->select('users.email', 'users.mobile', 'students.student_name','students.student_address','students.id','students.student_status')
       
       ->get();
     return view('admin.student.view', compact('data'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $request->validate([
           'name' =>'required',
           'email' =>'required', 
           'mobile' =>'required',
           'password' =>'required',

            'student_name' =>'required',
            'student_dob' =>'required',
            'student_gender' =>'required',
            'student_mother' =>'required',
            'student_father' =>'required',
            'student_guardian' =>'required',
            'student_address' =>'required',
            'student_picode' =>'required',
            'student_whatsapp' =>'required',
            'student_current_school' =>'required',
            'student_current_madrassa' =>'required',
            'student_blood' =>'required',
            'student_status' =>'required',

        ]);

        //dd($request->all());
        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->mobile =$request->mobile;
        $user->password =$request->password;

        $user->save();

       
         // dd($user);
         $student=new Student();



          $student->user_id =$user->id;
          $student->student_name =$request->student_name;
          $student->student_dob  =$request->student_dob;
          $student->student_gender  =$request->student_gender;
          $student->student_mother  =$request->student_mother;
          $student->student_father  =$request->student_father;
          $student->student_guardian =$request->student_guardian;
          $student->student_address  =$request->student_address;
          $student->student_picode   =$request->student_picode;
          $student->student_whatsapp  =$request->student_whatsapp;
          $student->student_current_school  =$request->student_current_school;
          $student->student_current_madrassa  =$request->student_current_madrassa;
          $student->student_blood  =$request->student_blood;
          $student->student_status  =$request->student_status;

          $student->save();

          return redirect()->route('students.index')->with('message','successfully added students details');
           
          
           
           
          
       



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $student = Student::find($id);
        return view('admin.student.edit',['edit'=>$student]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


        $student =Student::find($id);



          $student->student_name =$request->student_name;
          $student->student_dob  =$request->student_dob;
          $student->student_gender  =$request->student_gender;
          $student->student_mother  =$request->student_mother;
          $student->student_father  =$request->student_father;
          $student->student_guardian =$request->student_guardian;
          $student->student_address  =$request->student_address;
          $student->student_picode   =$request->student_picode;
          $student->student_whatsapp  =$request->student_whatsapp;
          $student->student_current_school  =$request->student_current_school;
          $student->student_current_madrassa  =$request->student_current_madrassa;
          $student->student_blood  =$request->student_blood;
          $student->student_status  =$request->student_status;

          $student->save();

          return redirect()->route('students.index')->with('message','successfully update students details');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      
    }
}
