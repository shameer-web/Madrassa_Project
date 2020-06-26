<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    //

    public function index(){

    	return view('admin.slide.view',['data'=>Slide::all()]);
    }

    public function create(){

    	return view('admin.slide.create');
    }


    public function store(Request $request){



    	 $request->validate([
           
           'slide_name' =>'required',
           'slide_image' =>'required',
           'slide_description' =>'required',
           'slide_link' =>'required',
           'slide_status' =>'required',


        ]);
        $slide =new Slide();
          

          $slide->slide_name =$request->slide_name;

          $filename =$request->slide_image->getClientOriginalName();
          $request->slide_image->storeAs('images',$filename,'public');
          $slide->slide_image =$filename;


          $slide->slide_description =$request->slide_description;
          $slide->slide_link =$request->slide_link;
          $slide->slide_status =$request->slide_status;

          $slide->save();

          return redirect()->route('slides.index')->with('message','slides added successfully ');




    }

    public function show($id){

    }

    public function edit($id){

    	$slide= Slide::find($id);

        return view('admin.slide.edit',['edit'=>$slide]);
    }
    public function update(Request $request, $id){

    	//dd($request->all());
    	$slide =Slide::find($id);

    	$slide->slide_name =$request->slide_name;



    	if($request->hasFile('slide_image')){
    		$filename =$request->slide_image->getClientOriginalName();

    		if(Slide::find($id)->slide_image){
    			Storage::delete('/public/images/'.Slide::find($id)->slide_image);
    		} 
    		$request->slide_image->storeAs('images',$filename,'public');
    	$slide->slide_image = $filename;
    	}


    	$slide->slide_description =$request->slide_description;
        $slide->slide_link =$request->slide_link;
        $slide->slide_status =$request->slide_status;

        $slide->save();

        return redirect()->route('slides.index')->with('message','slides update successfully ');




    }

    public function destroy($id){


    	if(Slide::find($id)->slide_image){
    			Storage::delete('/public/images/'.Slide::find($id)->slide_image);
    		} 

    	$slide =Slide::find($id);
    	$slide->delete();

    	return redirect()->route('slides.index')->with('message','slides delete successfully ');
    }
}
