<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Course;

class CourseController extends Controller
{
    //


    public function index(){
    	return view('admin.course.view',['data'=>Course::all()]);
    }

    public function create(){
    	return view('admin.course.create');
    }
    
    public function store(Request $request){
    	//dd($request->all());

    	$request->validate([

             
              
        'course_name'=>'required',
        'course_description'=>'required',
        'course_image'=>'required',
        'course_duration'=>'required',
        'course_duration_type'=>'required',
        'course_category'=>'required',
        'course_student_type'=>'required',
        'course_status'=>'required',




    	]);

    	$course =new Course();


    	$course->course_name = $request->course_name;
    	$course->course_description = $request->course_description;


    	$filename =$request->course_image->getClientOriginalName();
    	$request->course_image->storeAs('images',$filename,'public');
    	$course->course_image =$filename;


    	$course->course_duration = $request->course_duration;
    	$course->course_duration_type = $request->course_duration_type;
    	$course->course_category = $request->course_category;
    	$course->course_student_type = $request->course_student_type;
    	$course->course_status = $request->course_status;
    	$course->save();

    	return redirect()->route('courses.index')->with('message','details added successfully ');
    }
      
      public function show($id){


      }

      

     public function edit($id){
     	$course=Course::find($id);
        return view('admin.course.edit',['edit'=>$course]);
     }


     public function update(Request $request, $id){

        // dd($request->all());
        $course =Course::find($id);

        $course->course_name = $request->course_name;
    	$course->course_description = $request->course_description;

    	if($request->hasFile('course_image')){
    		$filename =$request->course_image->getClientOriginalName();

    		if(Course::find($id)->course_image){
    			Storage::delete('/public/images/'.Course::find($id)->course_image);
    		} 
    		$request->course_image->storeAs('images',$filename,'public');
    	$course->course_image = $filename;
    	}

    	$course->course_duration = $request->course_duration;
    	$course->course_duration_type = $request->course_duration_type;
    	$course->course_category = $request->course_category;
    	$course->course_student_type = $request->course_student_type;
    	$course->course_status = $request->course_status;
    	$course->save();

    	return redirect()->route('courses.index')->with('message','details Updated successfully ');



     }

     public function delete($id){


     	if(Course::find($id)->course_image){
    			Storage::delete('/public/images/'.Course::find($id)->course_image);
    		} 

    		$course =Course::find($id);
    		$course->delete();
    		return redirect()->route('course.indexs')->with('message','successfully deleted ');

     }


}
