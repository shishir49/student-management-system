@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Syllabus
</div>

<div class="create">
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Course Title</label> 
            <select class="primary-input" name="" id="">
                <option value="">Choose a Course</option>
                <option value="">GRE</option>
                <option value="">SAT</option>
            </select>
        </div>
        <div class="primary-group">
            <label for="">Subject Title</label> 
            <select class="primary-input" name="" id="">
                <option value="">Choose a Subject</option>
                <option value="">Physics</option>
                <option value="">Math</option>
            </select>
        </div>
        <div class="primary-group">
            <label for="">Syllabus Description</label> 
            <textarea name="" id="summernote" cols="30" rows="10"></textarea>
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        placeholder: 'Describe your syllabus here',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    });
</script>
@endsection