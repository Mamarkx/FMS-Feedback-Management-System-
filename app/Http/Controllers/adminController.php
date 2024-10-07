<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\login;
use App\Models\Feedback;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    public function home(){
        $feeds = Feedback::select('Name', 'Category', 'Status')->get();
        $count = feedback::Count('Name');
        $stats = feedback::where(['Status' => 0])->Count();
        $avg = feedback::Avg('Rate');       
        $format_avg = number_format($avg , 1);
                 
      
        return view('admins.home', compact('feeds','count','stats','format_avg'));
    }


  public function update($ID)
    {
       
      $result = Feedback::where('ID', $ID)->update(['Status' => 1]);
         return redirect('feedback');

    }
    public function feedback(Request $request)
    {
        $search = $request->input('search');

    
        $customers = Feedback::when($search, function ($query, $search) {
            return $query->where('ID', 'like', "%{$search}%")
                ->orWhere('Name', 'like', "%{$search}%")
                ->orWhere('Email', 'like', "%{$search}%")
                ->orWhere('Experience', 'like', "%{$search}%");
        })->get();

        return view('feed.feedback', compact('customers'));
    }
    
    public function help(){
        return view('admins.help');
    }
    public function users(){
          $users = Feedback::select('ID', 'Name', 'Date','Time')->get();
          return view('admins.users', compact('users'));
    }
    


    
    public function destroy($ID)
    {
        Feedback::destroy($ID);
        
           return redirect('feedback');
    }
public function show($ID)
{

    $customer = Feedback::find($ID);
    return view('feed.show')->with('customer', $customer);
}

      
 public function store(Request $request)
{
    $request->validate([
        'Name' => 'required',
        'Email' => 'required',
        'Phone' => 'required',
        'Experience' => 'required',
        'Rate' => 'required',
        'Category' => 'required',
        'Message' => 'required',
     
        
    ]);
    

    feedback::create($request->all());

      return view('form-feedback.form'); 
}

 public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
 public function loginPost(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('You have Successfully loggedIn');
        }
  
        return redirect("login")->withError('Opps! You have entered invalid credentials');
    }
      
public function registerPost(Request $request): RedirectResponse
{
 
    $request->validate([
       'name' => 'required|unique:users,name',  
        'email' => 'required|email|unique:users,email', 
        'password' => 'required|min:6',
    ]);
    $data = $request->all();
    $user = $this->create($data);
    Auth::login($user);
    return redirect("login")
        ->with('success', 'Great! You have Successfully Registered');
}

       
   public function create(array $data)
    {
      return login::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     public function logout(): RedirectResponse
{
    Session::flush();
    Auth::logout();

    return redirect()->route('login');
}


public function report(){

   
   
        $experienceData = Feedback::select('Experience', \DB::raw('COUNT(DISTINCT Experience) as count'))
            ->groupBy('Experience')
            ->get();

     
        $rateData = Feedback::select('Rate', \DB::raw('COUNT(DISTINCT Rate) as count'))
            ->groupBy('Rate')
            ->get();

   
        return view('admins.report', compact('experienceData', 'rateData'));
    
 
}




}

