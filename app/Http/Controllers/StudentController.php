<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Mockery\Undefined;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isEmpty;

class StudentController extends Controller
{
    public function login() {
        return view('login');
    }
    public function create() {
        return view('create');
    }

    public function createAccount(Request $request) {

        /*Create new student account and save data into db*/
        $createAccountObj = new Student;
        $createAccountObj->name = $request->input('name');
        $createAccountObj->email = $request->input('email');
        $createAccountObj->password = $request->input('pwd');
        $createAccountObj->save();
        return redirect('details');
    }

    public function studentLogin(Request $request) {

        /*Get student record from db and store into an array*/
        $studentArr = Student::select('*')->where([
            ['email', '=', $request->input('email')],
            ['password', '=', $request->input('pwd')]
        ])->get();
        
        /*Count if array has a student record */
        if(count($studentArr)) {
            foreach($studentArr as $key => $val)
                $email = $val['email'];
                $pwd = $val['password'];
            
            if(!isset($email) && !isset($pwd))
                return redirect('login');
            else
                /*Create student data session while loging in*/
                $request->session()->put('userData',[$request->input()]);
                return redirect('details');
        } else {
            return redirect('login');
        }            
    }

    public function details() {

        /*If the session is set show student record or redirect to login page */
        $userData = Session::get('userData');
        /*Fetch all student record from db*/
        $studentDeails = student::all();
        return view('details', ['studentDeails'=>$studentDeails],['userData'=>$userData]);

        
    }
}
