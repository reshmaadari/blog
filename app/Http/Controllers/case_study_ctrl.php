<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employer;
use App\Models\candidate;
use Crypt;
use DB;
class case_study_ctrl extends Controller
{
    function valid_reg(Request $req){
        $validd=$req->validate(['username'=>'required|min:6',
        'email'=>'required|email|unique:candidates',
        'phone'=>'required|min:10|max:10|unique:candidates',
        'password'=>('required|min:8|max:12')]);
        if($validd){
        $data= new candidate;
        $data->Username=$req->username;
        $data->Email=$req->email;
        $data->Phone=$req->phone;
        $a=$req->btn;
        if($a == "yes"){
        $data->Admin=1;
        }
        
        $data->Password=Crypt::encrypt($req->password);
        $data->save();
        return redirect('signin');
        }
    }
    function valid_login(Request $req){
        $valid=$req->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:12']);
            if($valid){
                $user=candidate::where('email','=',$req->email)->first();
                // return $user;
                // return $user->Admin;
                $z=$user->Username;
                if($user){
                    $x=($req->password);
                    $y=Crypt::decrypt($user->Password);
                    if(($x==$y) && ($user->Admin==0)){
                        $req->session()->put('username',$z);
                        return redirect('dashboard');
                        }
                        else if(($x==$y) && ($user->Admin==1)){
                            $req->session()->put('username',$z);
                            return redirect('dashboard2');
                            }
                    else{
                        return redirect("/signin")->with("status","Incorrect password");
                   }
                }
                else{
                    return redirect("/signin")->with("status","Invalid email");
               }
             }
     }
     function savepost(Request $req){
        $valid=$req->validate([
            'title'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);
        if($valid){
            $data= new employer;
            $data->title=$req->title;
            $data->description=$req->description;
            $data->category=$req->category;
            $data->created_by=$req->createdby;

           
            $data->save();
            return redirect('create_post');
            }
     }
     function viewposts(){
         $a=session('username');
        $users = DB::select('select * from employers where created_by = ?',[$a]);
        return view('posts',['userss'=>$users]);
     }
     function profile(){
        $a=session('username');
        $users = DB::select('select * from candidates where Username = ?',[$a]);
        
        // return $users;
        return view('profile',['userss'=>$users]);
     }
    function dashboard(){
        $a=session('username');
        $users = DB::select('select * from employers where created_by = ?',[$a]);
        return view('dashboard',['users'=>$users]);
    }
    function delete($id){
        $a="sd";
        DB::update('update employers set status = ? where id = ?',[$a,$id]);
        return back()->with('status',"deleted Successfully");
    }
    function restore($id){
        $a="no";
        DB::update('update employers set status = ? where id = ?',[$a,$id]);
        return back()->with('status',"restored Successfully");
    }
    function dashboard2(){
        $users=DB::select('select * from employers');
        return view('dashboard2',['users'=>$users]);
    }
    function approve($id){
        $a="s";
        DB::update('update employers set status = ? where id = ?',[$a,$id]);
        return back()->with('status',"approved Successfully");
    }
    function refuse($id){
        $a="ref";
        DB::update('update employers set status = ? where id = ?',[$a,$id]);
        return back()->with('status',"refused the post ");
    }
    function profile2(){
        $a=session('username');
        $users = DB::select('select * from candidates where Username = ?',[$a]);
        // return $users;
        return view('profile2',['userss'=>$users]);
     }
     function users(){
         $users=DB::select('select * from candidates');
         return view('users',['userss'=>$users]);
     }
     function forgot(){
         return view('forgot');
     }
     function change(Request $req){
       $a=$req->email;
       $user=DB::select('select * from candidates where Email = ?',[$a]);
    //    $req->session()->put('username',$a);
        return view('change_password',['userss'=>$user]);
    }
    // function change_password(){
    //     return view('change_password');
    // }
    function password($id){
        $a=Crypt::encrypt($id);
        
        DB::update('update candidates set Password = ? where id = ?',[$a,$id]);
        $b=Crypt::decrypt($a);
        return view('login_form');
    }
}
