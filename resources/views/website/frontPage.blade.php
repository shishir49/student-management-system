@extends('layout.website')

@section('content')
   <div class="main-content">
       <div class="title">
           <h2>Welcome to the Demo Version of Student Management System</h2>
       </div>
       <div class="select-user">
           <a href="{{url('super-admin')}}">As Super Admin</a>
           <a href="">As Instructor</a>
           <a href="">As Student</a>
       </div>
   </div>
@endsection
