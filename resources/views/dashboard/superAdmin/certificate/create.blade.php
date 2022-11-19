@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Certificate
</div>

<div class="create">
    <form action="" method="post" class="primary-form">
        <div class="primary-group">
            <label for="">Certificate Title</label> 
            <input class="primary-input" type="text">
        </div>
        <div class="primary-group">
            <label for="">Description</label> 
            <textarea name="" class="certificate-description" cols="30" rows="10"></textarea>
        </div>
        <div class="primary-group">
            <label for="">Upload Template</label> 
            <input class="primary-input" type="file">
        </div>
        <button class="btn-secondary">Submit</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('.certificate-description').summernote({
        placeholder: 'Write the comment here',
        tabsize: 2,
        height: 60,
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