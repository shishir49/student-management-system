@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
<i class="fa-solid fa-list"></i> Instructor List
</div>

<div class="list">
    <div class="filter">
        <form class="frm-flx">
            <input type="text" class="secondary-input" placeholder="Full Name">
            <input type="text" class="secondary-input" placeholder="Phone Number">
            <input type="text" class="secondary-input" placeholder="ID">
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
                <th>Serial</th>
                <th>Full Name</th>
                <th>Present Address</th>
                <th>Permanent Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Photo</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Md. Ripon</td>
                    <td>Uttara, Dhaka</td>
                    <td>Karimpur, Narshingdi</td>
                    <td>ripon@gmail.com</td>
                    <td>+880178465456</td>
                    <td><img class="user-thumbnail" src="{{asset('dashboard/images/uploads/user.webp')}}" alt="" srcset=""></td>
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