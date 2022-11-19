@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
<i class="fa-solid fa-list"></i> Course List
</div>

<div class="list">
    <div class="filter">
        <form class="frm-flx">
            <select class="secondary-input" name="" id="">
                <option value="">IELTS</option>
                <option value="">SAT</option>
            </select>
            <input type="date" class="secondary-input" placeholder="Started From">
            <input type="date" class="secondary-input" placeholder="End At">
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
                <th>Course Title</th>
                <th>Course Duration</th>
                <th>Course Fee</th>
                <th>Number of Seats</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>IELTS</td>
                    <td>3 Months</td>
                    <td>12,000 BDT</td>
                    <td>40</td>
                    <td>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>SAT</td>
                    <td>3 Months</td>
                    <td>12,000 BDT</td>
                    <td>40</td>
                    <td>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>GRE</td>
                    <td>3 Months</td>
                    <td>12,000 BDT</td>
                    <td>40</td>
                    <td>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>IELTS</td>
                    <td>3 Months</td>
                    <td>12,000 BDT</td>
                    <td>40</td>
                    <td>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>SAT</td>
                    <td>3 Months</td>
                    <td>12,000 BDT</td>
                    <td>40</td>
                    <td>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>GRE</td>
                    <td>3 Months</td>
                    <td>12,000 BDT</td>
                    <td>40</td>
                    <td>
                        <i class="fa fa-users" aria-hidden="true"></i>
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