<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
</head>
<body>
@include('admin.header')
<div class="d-flex align-items-stretch">
    @include('admin.sidebar')
    <div class="page-content" style="padding:2rem; background:#f5f6fa; min-height:100vh;">
        <div class="container" style="max-width:1000px; margin:auto;">
            <h2 style="font-size:1.4rem; font-weight:600; margin-bottom:1.5rem; color:#222; text-align:center;">Borrow Requests</h2>
            <table class="table table-bordered table-hover" style="background:#fff; border-radius:10px; overflow:hidden;">
                <thead style="background:#f0f4fa;">
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Book Title</th>
                        <th>Quantity</th>
                        <th>Borrow Status</th>
                        <th>Book Image</th>
                        <th>Change Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->user->email }}</td>
                        <td>{{ $data->user->phone}}</td>
                        <td>{{ $data->book->title }}</td>
                        <td>{{ $data->book->quantity }}</td>
                        <td>
                            @if ($data->status == 'approved')
                                <span style="color: #4f8cff; font-weight:500;">{{ $data->status }}</span>
                            @elseif ($data->status == 'rejected')
                                <span style="color: #e74c3c; font-weight:500;">{{ $data->status }}</span>
                            @elseif ($data->status == 'returned')
                                <span style="color: #f1c40f; font-weight:500;">{{ $data->status }}</span>
                            @else
                                <span style="color: #888; font-weight:500;">{{ $data->status }}</span>
                            @endif
                        </td>
                        <td><img src="book/{{ $data->book->book_img}}" style="height: 80px; width:60px; border-radius:8px;"></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ url('approve_book', $data->id) }}">Approve</a>
                            <a class="btn btn-danger btn-sm" href="{{ url('rejected_book', $data->id) }}">Reject</a>
                            <a class="btn btn-info btn-sm" href="{{ url('return_book', $data->id) }}">Returned</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.footer')
</body>
</html>