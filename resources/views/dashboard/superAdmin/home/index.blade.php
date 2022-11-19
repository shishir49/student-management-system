@extends('layout.superAdmin')

@section('superAdminContent')
   <div class="content-container">
       <div class="dashboard-boxes">
            <div class="dashboard-box red color-white">
                <div class="box-body">
                    <h2>Courses</h2>
                </div>
                <div class="box-footer">
                    <p><strong>5</strong></p>
                </div>
            </div>
            <div class="dashboard-box orange color-white">
                <div class="box-body">
                    <h2>Current Batches</h2>
                </div>
                <div class="box-footer">
                    <p><strong>13</strong></p>
                </div>
            </div>
            <div class="dashboard-box green color-white">
                <div class="box-body">
                    <h2>Current Students</h2>
                </div>
                <div class="box-footer">
                    <p><strong>640</strong></p>
                </div>
            </div>
            <div class="dashboard-box deep-blue color-white">
                <div class="box-body">
                    <h2>Current Instructors</h2>
                </div>
                <div class="box-footer">
                    <p><strong>10</strong></p>
                </div>
            </div>
       </div>
        
        <!-- Chart  -->
        <div class="m-t-20" id="chartContainer"></div>
   </div>
@endsection
