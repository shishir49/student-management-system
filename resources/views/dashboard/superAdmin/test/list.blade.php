@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    Test List
</div>

<div class="list">
    <div class="filter">
        <form class="frm-flx">
            <select class="secondary-input" name="" id="">
                <option value="">Course</option>
                <option value="">IELTS</option>
                <option value="">SAT</option>
            </select>
            <select class="secondary-input" name="" id="">
                <option value="">Batch</option>
                <option value="">Batch-1</option>
                <option value="">Batch-2</option>
            </select>
            <input type="text" class="secondary-input" placeholder="Subject">
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
                <th>Course</th>
                <th>Subject</th>
                <th>No of Question</th>
                <th>Test Duration</th>
                <th>Score per Question</th>
                <th>Negative Scoring</th>
                <th>Negetive Score per Wrong Answer</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>#1</td>
                    <td>IELTS</td>
                    <td>Math</td>
                    <td>10</td>
                    <td>5 Minutes</td>
                    <td>1</td>
                    <td>yes</td>
                    <td>0.25</td>
                    <td><span class="txt-bg-round green">published</span></td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>#2</td>
                    <td>GRE</td>
                    <td>Math</td>
                    <td>10</td>
                    <td>5 Minutes</td>
                    <td>1</td>
                    <td>yes</td>
                    <td>0.25</td>
                    <td><span class="txt-bg-round red">unpublished</span></td>
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