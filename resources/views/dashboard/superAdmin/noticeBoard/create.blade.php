@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Notice
</div>

<div class="create">
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Subject</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Notice Description</label> 
            <textarea name="" id="notice-details" cols="30" rows="10"></textarea>
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#notice-details').summernote({
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