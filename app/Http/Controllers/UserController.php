<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
      // crud create read update delete
      //    $data = DB::select("select * from users");
        // $insert = DB::table('users')->insert(['name' => 'ahmad',
        //                             'email' => 'ahmad3@gmail.com',
        //                             'email_verified_at' => now(),
        //                             'password' => '123456',
        //                             'remember_token' => '11112',
        //                             'created_at' => '2023-08-09 12:58:34',
        //                             'updated_at' => '2023-08-09 12:58:34'],
        //                         );
        // if($insert){
        //     dd("yes");
        // }else{
        //     dd("error");
        // }
         $users = DB::table('users')->get();
        //  $users2 = User::find();

        //  dd($users2);
         
         $title = 'users';
         return view('users.users',compact('users','title'));

        // dd($data);
    }

    public function show($id){
      $data = DB::table('users')->where('id',$id)->first();
      dd($data);
    }

    public function create(){
       return view('users.create');
    }

    public function insert(Request $request){
      $rules = [
        'username' => ['required','string','between:5,255'],
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed','min:8'],

      ];
    //  $request->validate($rules);
    //  $this->validate($request,$rules);


      $validate = Validator::make($request->all(),$rules,[
        'username.required' => 'the :attribute is required',
        'email.required' => 'the :attribute is required as ahmm@gmail.com'

      ]);

      if($validate->fails()){
         return redirect()->back()->withErrors($validate);
      }

     // dd($validate->fails());

     // dd($request);
              // $insert = DB::table('users')->insert(['name' => $request->post('username'),
              //                       'email' => $request->post('email'),
              //                       'email_verified_at' => now(),
              //                       'password' => $request->post('password'),
              //                       'remember_token' => '11112',
              //                       'created_at' => now(),
              //                       'updated_at' => now()]
              //                   );
              $user = new User();
              $user->name = $request->post("username");
              $user->email = $request->post("email");
              $user->password = $request->post("password");
              $user->save();

              return  redirect('users/index');
      
   }


   public function edit($id){
    $user = User::find($id);
    return view('users.edit',compact('user'));
   }

   public function update(Request $request){
    $rules = [
      'username' => ['required','string','between:5,255'],
      'email' => ['required', 'email'],
      'password' => ['required', 'confirmed','min:8'],

    ];
    $request->validate($rules);
    //$this->validate($request,$rules);


    // $validate = Validator::make($request->all(),$rules,[
    //   'username.required' => 'the :attribute is required',
    //   'email.required' => 'the :attribute is required as ahmm@gmail.com'

    // ]);

    // if($validate->fails()){
    //    return redirect()->back()->withErrors($validate);
    // }
    $user = User::find($request->id);
    $user->name = $request->post("username");
    $user->email = $request->post("email");
    $user->password = $request->post("password");
    $user->save();

    return  redirect('users/index');
  }

   public function destroy(Request $request){
    //User::where('id',$request->id)->delete();
    User::destroy($request->id);
     //echo $request->id;
     return  redirect('users/index');

   }
    //
}
