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
        <div class="container" style="max-width:600px; margin:auto;">
            @if(session()->has('message'))
                <div class="alert alert-success" style="margin-bottom:1.5rem;">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h2 style="font-size:1.4rem; font-weight:600; margin-bottom:1.5rem; color:#222; text-align:center;">Add Book</h2>
            <form action="{{ url('store_book') }}" method="post" enctype="multipart/form-data" style="background:#fff; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.03); padding:2rem;">
                @csrf
                <div class="mb-3">
                    <label>Book Title</label>
                    <input type="text" name="book_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Author Name</label>
                    <input type="text" name="auther_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label>Quantity</label>
                    <input type="number" name="quantity" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Category</label>
                    <select name="category" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->id }}">{{ $category->cat_title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Book Image</label>
                    <input type="file" name="book_img" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Author Image</label>
                    <input type="file" name="auther_img" class="form-control">
                </div>
                <div class="text-center">
                    <input type="submit" value="Add Book" class="btn btn-primary" style="border-radius:6px; padding:0.5rem 2rem;">
                </div>
            </form>
        </div>
    </div>
</div>
@include('admin.footer')
</body>
</html>
