@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Batch
</div>

<div class="create">
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Batch No</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Batch Title</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Course</label> 
            <select class="primary-input" name="" id="">
                <option value="">Choose a Course</option>
                <option value="">GRE</option>
                <option value="">SAT</option>
            </select>
        </div>
        <div class="primary-group">
            <label for="">Instructor</label> 
            <select class="primary-input" name="" id="">
                <option value="">Choose an Instructor</option>
                <option value="">Md. Hasan Saiful</option>
                <option value="">Mr. Ripon</option>
            </select>
        </div>
        <div class="primary-group">
            <label for="">Room No</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Session</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Schedule</label> 
            <input class="primary-input" type="text" placeholder="10.00 AM To 12.30 PM">
        </div>
        <div class="primary-group">
            <label for="">Starts From</label> 
            <input class="primary-input" type="date">
        </div>
        <div class="primary-group">
            <label for="">Ends By</label> 
            <input class="primary-input" type="date">
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>
@endsection