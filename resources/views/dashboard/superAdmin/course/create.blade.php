@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Course
</div>

<div class="create">
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Course Title</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Course Duration</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Course Fee (BDT)</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Number of Seats</label> 
            <input class="primary-input" type="text">
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>
@endsection