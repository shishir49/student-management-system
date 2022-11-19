@extends('layout.superAdmin')

@section('superAdminContent')
<div class="headline">
    <i class="fa-solid fa-list"></i> Batch List
</div>

<div class="list">
    <div class="filter">
        <form class="frm-flx">
            <select class="secondary-input" name="" id="">
                <option value="">IELTS</option>
                <option value="">SAT</option>
            </select>
            <input type="text" class="secondary-input" placeholder="Batch Title">
            <input type="text" class="secondary-input" placeholder="Batch No">
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
                <th>Batch No</th>
                <th>Batch Title</th>
                <th>Course</th>
                <th>Instructor</th>
                <th>Room No</th>
                <th>Session</th>
                <th>Starts From</th>
                <th>Ends AT</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>RN1245</td>
                    <td>IELTS-Batch-1</td>
                    <td>IELTS</td>
                    <td>Md. Ripon</td>
                    <td>24</td>
                    <td>2022</td>
                    <td>10 May, 2022</td>
                    <td>20 Aug, 2022</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>RN1245</td>
                    <td>IELTS-Batch-1</td>
                    <td>IELTS</td>
                    <td>Md. Ripon</td>
                    <td>24</td>
                    <td>2022</td>
                    <td>10 May, 2022</td>
                    <td>20 Aug, 2022</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>RN1245</td>
                    <td>IELTS-Batch-1</td>
                    <td>IELTS</td>
                    <td>Md. Ripon</td>
                    <td>24</td>
                    <td>2022</td>
                    <td>10 May, 2022</td>
                    <td>20 Aug, 2022</td>
                    <td>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>RN1245</td>
                    <td>IELTS-Batch-1</td>
                    <td>IELTS</td>
                    <td>Md. Ripon</td>
                    <td>24</td>
                    <td>2022</td>
                    <td>10 May, 2022</td>
                    <td>20 Aug, 2022</td>
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