@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-list"></i> Schedule List
</div>

<div class="list">
    <div class="filter">
        <form class="frm-flx">
            <select class="secondary-input" name="" id="">
                <option value="">Schedule Type</option>
                <option value="">Class Schedule</option>
                <option value="">Class Test Schedule</option>
                <option value="">Exam Schedule</option>
                <option value="">Result Schedule</option>
            </select>
            <select class="secondary-input" name="" id="">
                <option value="">Select a Course</option>
                <option value="">IELTS</option>
                <option value="">SAT</option>
            </select>
            <select class="secondary-input" name="" id="">
                <option value="">Select a Batch</option>
                <option value="">Batch-1</option>
                <option value="">Batch-2</option>
            </select>
            <button class="btn-secondary deep-blue color-white m-x-5">Search</button>
        </form>
    </div>
    <div class="show-entries-download">
        <div class="show-entries">
            <strong>Show</strong>
            <select name="" id="" class="entry-number">
                <option value="">10</option>
                <option value="">50</option>
                <option value="">100</option>
            </select>
            <strong>Entries</strong>
        </div>
        <div class="show-download">
            <i class="fa-solid fa-print custom-icon" aria-hidden="true"></i>
            <i class="fa-solid fa-download custom-icon" aria-hidden="true"></i>
        </div>
    </div>
    <div class="display">
        <table>
            <thead>
                <th>#Serial</th>
                <th>Schedule Type</th>
                <th>Course</th>
                <th>Batch</th>
                <th>Subject</th>
                <th>Schedule</th>
                <th>Date To</th>
                <th>Date To</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>#1</td>
                    <td>Class</td>
                    <td>IELTS</td>
                    <td>Batch-1</td>
                    <td>Math</td>
                    <td style="display:grid;grid-gap: 10px;">
                        <div style="padding: 5px;border: 1px solid gray;border-radius: 5px;font-size: 13px;">
                            <div><strong>SAT, MON:</strong></div> <div>10.30 AM - 12.00 PM </div>
                        </div>
                        <div style="padding: 5px;border: 1px solid gray;border-radius: 5px;font-size: 13px;">
                            <div><strong>WED :</strong></div> <div>09.30 AM - 11.00 AM </div>
                        </div>
                    </td>
                    <td>01 January, 2022</td>
                    <td>30 May, 2022</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="list-footer">
            <div class="showing-entries">
                <strong>Showing 1 to 10 of 250 Entries</strong>
            </div>
            <div class="pagination">
                <button>Previous</button>
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>Next</button>
            </div>
        </div>
    </div>
</div>
@endsection