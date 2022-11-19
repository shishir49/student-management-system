@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Subject
</div>

<div class="create">
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Course</label> 
            <select class="primary-input" name="" id="">
                <option value="">Choose a Course</option>
                <option value="">GRE</option>
                <option value="">SAT</option>
            </select>
        </div>
        <div class="primary-group">
            <label for="">Subject Name</label> 
            <input class="primary-input" type="text">
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>
@endsection