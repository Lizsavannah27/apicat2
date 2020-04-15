<?php

namespace App\Http\Controllers;
use App\Student;
use App\Fee;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function index()
    
    {
        $students=Student::all();
        return view('Githaiga.layouts.fees')->with('students', $students);
    }
    
     public function storePayment(Request $request)
    {
            $this->validate($request, [
                'student_number'=>'required',
                'date_of_payment'=>'required',
                'amount'=>'required'
            ]);

            $fee=new fee();
            $fee->student_number=$request->student_number;
            $fee->date_of_payment=$request->date_of_payment;
            $fee->amount=$request->amount;
            $fee->save();

            return redirect()->route('home')->with('successing','You have successfully added a new Fee payment');
        }

    }
