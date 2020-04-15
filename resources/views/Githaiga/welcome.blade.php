@extends('Githaiga.layouts.app')

@section('content')
 <div class="container">
     <div class="row justify-content-centre">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">
                    <h3 class="text-centre">Welcome</h3>
                    </div>
                      <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                               <a href="/students" class="btn btn-md btn-primary">Add new Student</a>
                 </div>
                 <div class="col-md-6"><div>
                 <a href="/fees" class="btn btn-md btn-secondary">Add new fee Payment</a>
                 </div>
         </div>
     </div>
 </div>   
@endsection