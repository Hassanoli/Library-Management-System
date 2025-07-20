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
            @if(session()->has('message'))
                <div class="alert alert-success" style="margin-bottom:1.5rem;">
                    {{ session('message') }}
                </div>
            @endif
            <h2 style="font-size:1.4rem; font-weight:600; margin-bottom:1.5rem; color:#222; text-align:center;">Books</h2>
            <table class="table table-bordered table-hover" style="background:#fff; border-radius:10px; overflow:hidden;">
                <thead style="background:#f0f4fa;">
                    <tr>
                        <th>Book Title</th>
                        <th>Author Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Book Image</th>
                        <th>Author Image</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book as $book )
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->auther_name}}</td>
                        <td>{{$book->price}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->quantity}}</td>
                        <td>{{$book->category->cat_title}}</td>
                        <td><img src="book/{{ $book->book_img }}" alt="" style="width:50px; border-radius:8px;"></td>
                        <td><img src="auther/{{ $book->auther_img }}" alt="" style="width:50px; border-radius:50%;"></td>
                        <td><a href="{{ url('book_delete', $book->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a></td>
                        <td><a href="{{ url('edit_book', $book->id) }}" class="btn btn-info btn-sm">Update</a></td>
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

