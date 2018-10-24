<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
   
   public function alldata()
   {

   	$data=DB::table('students')
   	->join('subjects','students.id','subjects.stud_id')
   	->select('students.*','subjects.subject_name')
   	//->where ('subjects.stud_id','1')
   	->get();
   return view('all_data')->with('data',$data);

   	   }
   	   
   	   public function threedata()
   {

   	$data=DB::table('students')
   	->join('subjects','students.id','subjects.stud_id')
   	->join('teachers','teachers.sub_id','subjects.id')
   	->select('students.*','subjects.subject_name','teachers.tname')
   	//->where ('subjects.stud_id','1')
   	->get();
   return view('threetablejoin')->with('data',$data);

   	   }
}
