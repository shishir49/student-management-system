<div class="brand">
    <h2>Logo</h2>
</div>

<div class="primary-menu">
    <a href="{{url('super-admin')}}" class="menu-item {{(request()->is('super-admin')) ? 'active' : ''}}">
        <div class="dropdown-title">
        <i class="fa-solid fa-house p-x-15"></i> Dashboard
        </div>
    </a>    
</div>

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('course*')) ? 'active' : ''}}">
        <i class="fa-solid fa-book-open p-x-15"></i> Course <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>    
    </a>
    <div class="dropdown-content {{(request()->is('course*')) ? '' : 'invisible'}}">
        <a href="{{url('course/list')}}" class="{{(request()->is('course/list')) ? 'active-background' : ''}}">Course List</a>
        <a href="{{url('course/create')}}" class="{{(request()->is('course/create')) ? 'active-background' : ''}}">Create Course</a>
        <!-- <a href="#" class="">Enroll Application</a> -->
    </div>
</div>

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('subject*')) ? 'active' : ''}}">
        <i class="fa-solid fa-book p-x-15"></i> Subject <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('subject*')) ? '' : 'invisible'}}">
        <a href="{{url('subject/create')}}" class="{{(request()->is('subject/create')) ? 'active-background' : ''}}">Create Subject</a>
        <a href="{{url('subject/list')}}" class="{{(request()->is('subject/list')) ? 'active-background' : ''}}">Subjects List</a>
    </div>
</div>

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('syllabus*')) ? 'active' : ''}}">
        <i class="fa-solid fa-file p-x-15"></i> Syllabus <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('syllabus*')) ? '' : 'invisible'}}">
        <a href="{{url('syllabus/create')}}" class="{{(request()->is('syllabus/create')) ? 'active-background' : ''}}">Create Syllabus</a>
        <a href="{{url('syllabus/list')}}" class="{{(request()->is('syllabus/list')) ? 'active-background' : ''}}">Syllabus List</a>
    </div>
</div>

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('batch*')) ? 'active' : ''}}">
        <i class="fa-solid fa-building-columns p-x-15"></i> Batch <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('batch*')) ? '' : 'invisible'}}">
        <a href="{{url('batch/create')}}" class="{{(request()->is('batch/create')) ? 'active-background' : ''}}">Create Batch</a>
        <a href="{{url('batch/list')}}" class="{{(request()->is('batch/list')) ? 'active-background' : ''}}">Batch List</a>
    </div>
</div>

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('instructor*')) ? 'active' : ''}}">
            <i class="fa-solid fa-person-chalkboard p-x-15"></i> Instructor <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('instructor*')) ? '' : 'invisible'}}">
        <a href="{{url('instructor/create')}}" class="{{(request()->is('instructor/create')) ? 'active-background' : ''}}">Add Instructor</a>
        <a href="{{url('instructor/list')}}" class="{{(request()->is('instructor/list')) ? 'active-background' : ''}}">Instructor List</a>
    </div>
</div>

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('student*')) ? 'active' : ''}}">
           <i class="fa-solid fa-user-graduate p-x-15"></i> Student <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('student*')) ? '' : 'invisible'}}">
        <a href="{{url('student/create')}}" class="{{(request()->is('student/create')) ? 'active-background' : ''}}">Enroll Student</a>
        <a href="{{url('student/list')}}" class="{{(request()->is('student/list')) ? 'active-background' : ''}}">Student List</a>
        <!-- <a href="#" class="">Assignment</a>
        <a href="#" class="">Attendance</a>
        <a href="#" class="">Class Performance</a> -->
    </div>
</div>

<!-- <div class="primary-menu">
    <a href="{{url('score/list')}}" class="menu-item">
        <div class="dropdown-title {{(request()->is('score/list')) ? 'active' : ''}}">
        <i class="fa-solid fa-marker p-x-15"></i> Scores
        </div>
    </a>    
</div> -->

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('schedule*')) ? 'active' : ''}}">
            <i class="fa-solid fa-calendar-days p-x-15"></i> Schedule <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('schedule*')) ? '' : 'invisible'}}">
        <a href="{{url('schedule/class')}}" class="{{(request()->is('schedule/class')) ? 'active-background' : ''}}">Create Class Schedule</a>
        <a href="{{url('schedule/class-test')}}" class="{{(request()->is('schedule/class-test')) ? 'active-background' : ''}}">Create Class Test Schedule</a>
        <a href="{{url('schedule/exam')}}" class="{{(request()->is('schedule/exam')) ? 'active-background' : ''}}">Create Exam Schedule</a>
        <a href="{{url('schedule/result')}}" class="{{(request()->is('schedule/result')) ? 'active-background' : ''}}">Create Result Publication Schedule</a>
        <a href="{{url('schedule/list')}}" class="{{(request()->is('schedule/list')) ? 'active-background' : ''}}">Schedule List</a>
    </div>
</div>

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('test*')) ? 'active' : ''}}">
        <i class="fa-solid fa-file-pen p-x-15"></i> Test <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('test*')) ? '' : 'invisible'}}">
        <a href="{{url('test/create')}}" class="{{(request()->is('test/create')) ? 'active-background' : ''}}">Create Test</a>
        <a href="{{url('test/list')}}" class="{{(request()->is('test/list')) ? 'active-background' : ''}}">Test List</a>
    </div>
</div>

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('notice-board*')) ? 'active' : ''}}">
        <i class="fa-solid fa-flag-checkered p-x-15"></i> Notice Board <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('notice-board*')) ? '' : 'invisible'}}">
        <a href="{{url('notice-board/create')}}" class="{{(request()->is('notice-board/create')) ? 'active-background' : ''}}">Create Notice</a>
        <a href="{{url('notice-board/list')}}" class="{{(request()->is('notice-board/list')) ? 'active-background' : ''}}">Notice List</a>
    </div>
</div>

<!-- <div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('message*')) ? 'active' : ''}}">
        <i class="fa-solid fa-comments p-x-15"></i> Chat <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('message*')) ? '' : 'invisible'}}">
        <a href="{{url('message/list')}}" class="{{(request()->is('message/list')) ? 'active-background' : ''}}">Inbox</a>
        <a href="{{url('message/create')}}" class="{{(request()->is('message/create')) ? 'active-background' : ''}}">Send Message</a>
    </div>
</div> -->

<div class="primary-menu dropdown">
    <a href="#" class="menu-item">
        <div class="dropdown-title {{(request()->is('certificate*')) ? 'active' : ''}}">
        <i class="fa-solid fa-award p-x-15"></i> Certificate <i class="fa-solid fa-caret-down float-right p-x-15"></i>
        </div>
    </a>    
    <div class="dropdown-content {{(request()->is('certificate*')) ? '' : 'invisible'}}">
        <a href="{{url('certificate/create')}}" class="{{(request()->is('certificate/create')) ? 'active-background' : ''}}">Create Certificate</a>
        <a href="{{url('certificate/list')}}" class="{{(request()->is('certificate/list')) ? 'active-background' : ''}}">Certificate List</a>
        <!-- <a href="#" class="">Distribute</a> -->
    </div>
</div>

<div class="primary-menu">
    <a href="{{url('settings/store')}}" class="menu-item">
        <div class="dropdown-title {{(request()->is('settings/store')) ? 'active' : ''}}">
        <i class="fa-solid fa-cog p-x-15"></i> Settings
        </div>
    </a>    
</div>