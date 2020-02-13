<?php

namespace App\Http\Controllers\Backend\Garage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AccountController extends Controller
{
    public function companyDetails(Request $request){
        //get garage details
        $query = DB::table('garages')
                    ->select('*')
                    ->where('user_id',session()->get('userid'))
                    ->first();
    	return view('backend.pages.garage.account.companydetails',compact('query'));
    }

    public function updateCompanyDetails(Request $request){

        $validator = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'established_date' => 'required',
            'web_link' => 'required',
            'description' => 'required',           
        ]);
        //get garage details
        $get_details = DB::table('garages')
                ->select('*')
                ->where('user_id',session()->get('userid'))
                ->first();
        if(empty($get_details)){
            //get data for insert
            $data = array(
                'name' => $request->name,
                'slug' => \Str::slug($request->name),
                'location' => $request->location,
                'established_date' => date('Y-m-d',strtotime($request->established_date)),
                'web_link' => $request->web_link,
                'description' => $request->description,
                'user_id' => session()->get('userid'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
            //put array to insert data
            $query = DB::table('garages')
                    ->insert($data);
        }
        else{
            //get data for insert
            $data = array(
                'name' => $request->name,
                'slug' => \Str::slug($request->name),
                'location' => $request->location,
                'established_date' => date('Y-m-d',strtotime($request->established_date)),
                'web_link' => $request->web_link,
                'description' => $request->description,
                'user_id' => session()->get('userid'),
                'updated_at' => date('Y-m-d H:i:s')
            );
            //put array to insert data
            $query = DB::table('garages')
                    ->where('user_id',session()->get('userid'))
                    ->update($data);
        }
        //check query result
    	if($query){
    		toastr()->success('Company Details Updated Successfully');
    		return redirect()->back();
    	}else{
            toastr()->success('Something Went Wrong');
    		return redirect()->back();
    	}
    }

    public function uploadImages(Request $request){
        //upload multiple images of garage
        $file = $request->file('file');
        $image = $file->getClientOriginalName();
        $file->move(public_path().'/backend-asset/backendimages/garage/', $image);
        //Set Data for insert
        $data = array(
            'image' => $image,
            'garage_id' => 1,
            'created_at' => date('Y-m-d H:i:s')
        );
        
        //Query For Inserting Data
        $query = DB::table('garage_images')
                     ->insertGetId($data);
        return response()->json(['success' => $image]);
    }

    public function deleteImages(Request $request){
        //delete files from db and directory
        $filename = $request->get('filename');
        $query = DB::table('garage_images')
            ->where('image',$filename)
            ->delete();
        // $path = public_path().'/backend-asset/backendimages/garage/'.$filename;
        // if (file_exists($path)) {
        //     unlink($path);
        // }
        // return $filename;
    }

    public function getImages(Request $request){
        //get all images
        $query = DB::table('garage_images')
                ->select('image')
                ->where('garage_id',1)
                ->get();
        return response()->json(['images' => $query]);
    }
}
