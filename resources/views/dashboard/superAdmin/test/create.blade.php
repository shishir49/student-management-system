@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-plus"></i> Create Test
</div>

<div class="create">
    <h4><span class="txt-bg-round pink">Test Info</span></h4>
    <br>
    <form action="" method="post" class="primary-form">
        <div class="have-box">
            <div class="form-box-hf">
                <div class="secondary-group">
                    <label for="">Course Title</label> 
                    <select class="primary-input" name="" id="">
                        <option value="">Choose a Course</option>
                        <option value="">GRE</option>
                        <option value="">SAT</option>
                    </select>
                </div>
                <div class="secondary-group">
                    <label for="">Subject Title</label> 
                    <select class="primary-input" name="" id="">
                        <option value="">Choose a Subject</option>
                        <option value="">Physics</option>
                        <option value="">Math</option>
                    </select>
                </div>
                <div class="secondary-group">
                    <label for="">Number of Questions</label> 
                    <input class="primary-input" type="text">
                </div>
                <div class="secondary-group">
                    <label for="">Test Duration</label> 
                    <input class="primary-input" type="text">
                </div>
            </div>
            <div class="form-box-hf">
                <div class="secondary-group">
                    <label for="">Score Per Quersion</label> 
                    <input class="primary-input" type="text">
                </div>
                <div class="secondary-group">
                    <label for="">Number of Question</label> 
                    <input class="primary-input" type="text">
                </div>
                <div class="secondary-group">
                    <label for="">Negetive Scroing</label> 
                    <select class="primary-input" name="" id="">
                        <option value="">Choose an Option</option>
                        <option value="">Yes</option>
                        <option value="">No</option>
                    </select>
                </div>
                <div class="secondary-group">
                    <label for="">Negetive Score per Wrong Answer</label> 
                    <input class="primary-input" type="text">
                </div>
                <div class="secondary-group">
                    <label for="">Status</label> 
                    <select class="primary-input" name="" id="">
                        <option value="">Choose an Option</option>
                        <option value="">Publish</option>
                        <option value="">Unpublish</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="create m-t-20">
    <h4><span class="txt-bg-round pink">Questionnaire</span></h4>
    <br>
    <button class="btn-secondary"><i class="fa-solid fa-plus"></i> Question</button>
    <div class="gap">

    </div>
    <div class="question-slot">
        <form action="" method="post" class="primary-form">
            <div class="primary-group">
                <label for="">Question Number</label> 
                <input class="primary-input" type="text">
            </div>
            <div class="primary-group">
                <label for="">Question</label> 
                <textarea name="" class="question" cols="30" rows="10"></textarea>
            </div>
            <div class="primary-group">
                <label for="">Answer</label> 
                <textarea name="" class="answer" cols="30" rows="10"></textarea>
            </div>
            <button class="btn-secondary"><i class="fa-solid fa-plus"></i> Option</button>
        </form>
    </div>

    <div class="question-slot m-t-20">
        <form action="" method="post" class="primary-form">
            <div class="primary-group">
                <label for="">Question Number</label> 
                <input class="primary-input" type="text">
            </div>
            <div class="primary-group">
                <label for="">Question</label> 
                <textarea name="" class="question" cols="30" rows="10"></textarea>
            </div>
            <div class="primary-group">
                <label for="">Answer</label> 
                <textarea name="" class="answer" cols="30" rows="10"></textarea>
            </div>
            <button class="btn-secondary"><i class="fa-solid fa-plus"></i> Option</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.question').summernote({
        placeholder: 'Describe your syllabus here',
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

      $('.answer').summernote({
        placeholder: 'Write down the answer',
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