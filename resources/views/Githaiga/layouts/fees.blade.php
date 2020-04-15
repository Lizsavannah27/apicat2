@extends('Githaiga.layouts.app')

@section('content')
  
<div class="container">
     <div class="row justify-content-centre">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">
                    <h3 class="text-centre">Add a new Student</h3>
                    </div>
                      <div class="card-body">
                          
                      <form  method="POST" action="{{ route('storePayment') }}">
                         @csrf
  <div class="form-group">
    <label for="student_number">Student</label>
    <select name="student_number" class="form-control" >
         <option selected disabled>Select Your Student</option>
         @foreach($students as $item)
<option value="{{$item->student_number}}"> {{$item->full_name}}  <small>{{$item->student_number}} </small></option>
         @endforeach
    </select> 
    <small class="form-text text-muted">Kindly select your student</small>
  </div>
  

  <div class="form-group">
    <label for="date_of_payment">Date of Payment</label>
    <input type="date" class="form-control" name="date_of_payment">
    <small  class="form-text text-muted">Kindly enter your Date of Payment</small>
  </div>

  <div class="form-group">
    <label for="amount">Amount paid</label>
    <input type="number" name="amount"  class="form-control">
    <small class="form-text text-muted">Kindly enter the Amount Paid</small>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Add new Fee Payment</button>
</form>

                      </div>
                    </div >
                  </div>
                </div>  
             </div>      

@endsection