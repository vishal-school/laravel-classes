<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\businessman;

class BusinessmanController extends Controller
{
    public function createfirst(Request $request)
    {
     DB::table('businessman')->INSERT([
    'email'=>$request->email,        
    'b_id'=>$request->b_id,
    'businessman_name'=>$request->businessman_name,        
    'address'=>$request->address,
    'mobile'=>$request->mobile,        
    'mobile1'=>$request->mobile1,
    'tagline'=>$request->tagline,        
    'city'=>$request->city,
    'state'=>$request->state,        
    'country'=>$request->country,
    'b_email'=>$request->b_email,        
    'b_rank'=>$request->b_rank,
    'recognised'=>$request->recognised,        
    'businessman_title'=>$request->businessman_title,
    'businessman_header'=>$request->businessman_header,
    'businessman_option'=>$request->businessman_option,
    'businessman_option1'=>$request->businessman_option1,
    'businessman_option2'=>$request->businessman_option2
   
   
      ]);

        return "Your Message Sent Successfully ";
       }

        public function index()
      {
        $businessman = businessman::all();
        return view('businessman-detail-view')->with('businessman',$businessman);
      }
    
  
         public function delete($id)
       {
            businessman::where('S_id',$id)->delete();
            return "Your Message delete Successfully ";
       }
 
        public function update($id)
      {
         $school = businessman::find( $id);
         // return view('update-school')->with('school',$school);
         return View('update-school',compact('school' , 'id'));
      }


         public function updatedata(Request $request )
    {
         $school = businessman::find( $request->s_id    );
         $school->school_name = $request->school_name;
         $school->mobile = $request->mobile;
         $school->city = $request->city;
         $school ->save();
         return  "Your Message updated ";
    }


          public function viewok($id=null)
    {
         //businessman::where('S_id',$id)->delete();
         return "Your Message delete Successfully . $id ";
    }
        public function viewview($id=null, $viewed)
    {
         //businessman::where('S_id',$id)->delete();
         return "Your Message delete Successfully . $id ";
    }
                public function age($id)
          {
                  return "Your Message delete Successfully . $id ";
          }

  }


