<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('AdminInsta.auth.login');
    }  
      
    public function customLogin(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->route('AdminInsta.dashboard')->withSuccess('Signed in');
    }

    return back()->withErrors(['error' => 'Invalid credentials']);
}


    public function registration()
    {
        return view('AdminInsta.auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("backend/dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('backend.layout.dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
       
       return redirect()->route('login')->with('success', 'Password changed successfully.');
     
    }
    
    public function showChangePasswordForm()
    {
        return view('AdminInsta.change_password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);
    
        $user = Auth::user();
    
        if (Hash::check($request->current_password, $user->password)) {
            if ($request->current_password == $request->new_password) {
                return redirect()->route('admin.show.change.password.form')->with('error', 'New password must be different from the current password.');
            }
    
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
    
            return redirect()->route('AdminInsta.show.change.password.form')->with('success', 'Password changed successfully.');
        }
    
        return redirect()->route('AdminInsta.show.change.password.form')->with('error', 'Current password is incorrect.');
    }
}