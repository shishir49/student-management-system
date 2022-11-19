@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Class Schedule <button class="btn-regular"><i class="fa-solid fa-plus"></i>Batch</button>
</div>

<div class="create">
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Schedule Type</label> 
            <select class="primary-input" name="" id="">
                <option value="">Choose a Type</option>
                <option value="">Class Schedule</option>
                <option value="">Exam Schedule</option>
                <option value="">Result Publication Schedule</option>
            </select>
        </div>
        <div class="primary-group">
            <label for="">Batch</label> 
            <select class="primary-input" name="" id="">
                <option value="">Choose a Batch</option>
                <option value="">Batch 1</option>
                <option value="">Batch 2</option>
            </select>
        </div>
        <div class="primary-group">
            <label for="">Subject</label> 
            <select class="primary-input" name="" id="">
                <option value="">Choose a Subject</option>
                <option value="">Math</option>
                <option value="">English</option>
            </select>
        </div>
        <div class="primary-group">
            <label for="">Date From</label> 
            <input class="primary-input" type="date">
        </div>
        <div class="primary-group">
            <label for="">Date To</label> 
            <input class="primary-input" type="date">
        </div>
        <div class="in-form-title">
            Schedule <button class="btn-regular"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="in-form-div">
            <div class="primary-group">
                <label for="">Days in a week</label> 
                <select class="primary-input" style="height:100%" multiple name="" id="">
                    <option value="">SAT</option>
                    <option value="">SUN</option>
                    <option value="">MON</option>
                    <option value="">TUES</option>
                    <option value="">WED</option>
                    <option value="">THURS</option>
                    <option value="">FRI</option>
                </select>
            </div>
            <div class="primary-group">
                <label for="">Class Starts</label> 
                <input class="primary-input" type="time">
            </div>
            <div class="primary-group">
                <label for="">Class Ends</label> 
                <input class="primary-input" type="time">
            </div>
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>
@endsection