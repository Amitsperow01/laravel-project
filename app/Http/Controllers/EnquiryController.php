<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function index() {
        $Enquirys = Enquiry::all();
        return view('web.Enquiry', compact('Enquirys'));
    }

    public function store(Request $request) {
        // dd($request->all());
        $data = $request->except('_token');
        // dd($data);

        $test = Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'status' => 1
        ]);
        // dd($test);
        return back()->withSuccess('Enquiry Send Successfully.');
    }

    public function enquiriyStatus(Request $request) {
        // echo $id;
        // print_r($request->all());

        $status_id = $request->status_id;

        Enquiry::where('id', $status_id)->update([
            'status' => 2
        ]);

        echo "<button class='btn btn-success'>Read</button>";

    }
    // public function index(){
    //     $enquirys = Enquiry::all();
    //     return view("admin.enquiry",compact("enquirys"));
    // }
  
    // public function store(Request $request){
    //     $data = $request->validate([
    //         "name"=> "required",
    //         "email"=> "required",
    //         "phone" => 'required',
    //         "message" => 'required',

    //     ]);
    //     $enquiry = Enquiry::create($data);
    //     return redirect("contact")->with("success","Data submit Successfully");
    // }
     
    //  public function status(Request $request){
    //     $enqId = $request->enquiryId;
    //   Enquiry::where("id",$enqId)->update(["status"=>2]);
    //   echo '<button class="btn btn-success">Read</button>';


    // } 
      
     public function destroy($id){
      
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();
        // return redirect()->route('enquiry')->with('success','');
        return back();
     }
}
