@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Instructor
</div>

<div class="create">
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Full Name</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Present Address</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Permanent Address</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Email</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Phone Number</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Photo</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Username</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Password</label> 
            <input class="primary-input" type="password">
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>
@endsection