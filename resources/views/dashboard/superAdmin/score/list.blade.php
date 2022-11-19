@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    Score List
</div>

<div class="list">
    <div class="filter">
        <form class="frm-flx">
            <input type="text" placeholder="Course Title">
            <input type="text" placeholder="Started From">
            <input type="text" placeholder="End At">
            <button class="btn-primary">Search</button>
        </form>
    </div>
    <div class="show-entries">
        <strong>Show</strong>
        <select name="" id="" class="entry-number">
            <option value="">10</option>
            <option value="">50</option>
            <option value="">100</option>
        </select>
        <strong>Entries</strong>
    </div>
    <div class="display">
        <table>
            <thead>
                <th>Batch Title</th>
                <th>Starting at</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>IELTS</td>
                    <td>May, 2023</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>SAT</td>
                    <td>May, 2023</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>GRE</td>
                    <td>May, 2023</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>IELTS</td>
                    <td>May, 2023</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>SAT</td>
                    <td>May, 2023</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>GRE</td>
                    <td>May, 2023</td>
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