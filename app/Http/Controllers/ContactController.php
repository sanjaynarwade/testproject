<?php

namespace App\Http\Controllers;
use App\contact;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{

       public function __construct()
    {
        $this->middleware('auth');
    }

    public function Addcontact()
    {

    	return view('add_contact');
    }
    
    public function Allcontact()
    {
            
    //da=DB::table('contacts')->get();
    $da=contact::all();
 return view('all_contact')->with('contact',$da);
//return Redirect()->route('all.contact')->with('all.contact',$da);
    	//return view('all_contact');
    }

      public function insert(Request $request)

    {
//     	$data=array();
//     	$data['name']=$request->name;
//     	$data['email']=$request->email;
//     	$data['phone']=$request->phone;
    	
//     	$sql=DB::table('contact')->insert($data);

//  if($sql)
//  {
// $notification=array(
// 'message'=>'save successfully',
 	
//  'alert'=>'success');
//  }
// return Redirect()->route('all.contact')->with($notification);
    	
    

    $acontact=new contact;
     $acontact->name=$request->name;
      $acontact->email=$request->email;
     $acontact->phone=$request->phone;
     $acontact->save();

     if( $acontact->save())
     {
     	echo"save successfully";
     }else
     {
     	echo"error";
     }


 }

 public function deletecontact($id)
 {
// using model
//$dt=contact::find($id)->delete();

  $dt=DB::table('contacts')->where('id',$id)->delete();

     if( $dt)
     {
     	echo"save successfully";
     }else
     {
     	echo"error";
     }



 }

 public function showcontact($id)
 {
$dt=DB::table('contacts')->where('id',$id)->first();
 return view('show_contact')->with('single',$dt);
 if( $dt)
     {
     	echo"save successfully";
     }else
     {
     	echo"error";
     }


 }

  public function editcontact($id)
 {
 	//return view('edit_contact');
 $dt=DB::table('contacts')->where('id',$id)->first();
return view('edit_contact')->with('single',$dt);
 if( $dt)
     {
     	echo"save successfully";
     }else
     {
     	echo"error";     }


 }

 public function updatecontact(Request $request, $id)
 {
 	//return view('edit_contact');
//using query bilder
 // 	$data1=array();
 // 	$data1['name']=$request->name;
 // 	$data1['email']=$request->email;
 // 	$data1['phone']=$request->phone;

 // $dt1=DB:: table('contacts')->where('id',$id)->update($data1);


//using model
$contacts=contact::find($id);
$contacts->name=$request->name;
$contacts->email=$request->email;
$contacts->phone=$request->phone;
 	$contacts->save();


//return view('all_contact')->with('contact',$da);
 if($contacts->save())
     {
     	echo"save successfully";
     }else 
     {
     	echo"error";     }


 }



 }

