@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Settings
</div>

<div class="create">
    <h4><span class="txt-bg-round pink">General Settings</span></h4>
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Brand Name</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Brand/Logo</label> 
            <input class="primary-input" type="file">
        </div>
        <div class="primary-group">
            <label for="">Favicon</label> 
            <input class="primary-input" type="file">
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
            <label for="">Mobile</label> 
            <input class="primary-input" type="text">
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>

<div class="create m-t-20">
    <h4><span class="txt-bg-round pink">Account Settings</span></h4>
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">User Name</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Old Password</label> 
            <input class="primary-input" type="password">
        </div>
        <div class="primary-group">
            <label for="">Password</label> 
            <input class="primary-input" type="password">
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>
@endsection