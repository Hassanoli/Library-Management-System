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
            <h2 style="font-size:1.4rem; font-weight:600; margin-bottom:1.5rem; color:#222; text-align:center;">Update Book</h2>
            <form action="{{ url('update_book',$data->id) }}" method="post" enctype="multipart/form-data" style="background:#fff; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.03); padding:2rem;">
                @csrf
                <div class="mb-3">
                    <label>Book Title</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Author Name</label>
                    <input type="text" name="auther_name" value="{{$data->auther_name}}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="text" name="Price" value="{{$data->price}}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3">{{$data->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label>Quantity</label>
                    <input type="number" name="quantity" value="{{$data->quantity}}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Category</label>
                    <select name="category" class="form-control">
                        <option value="{{ $data->category_id }}">{{ $data->category->cat_title}}</option>
                        @foreach ($category as $category)
                            <option value="{{$category->id}}">{{$category->cat_title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Current Author Image</label><br>
                    <img style="width:60px; border-radius:50%; margin-bottom:0.5rem;" src="/auther/{{ $data->auther_img }}">
                </div>
                <div class="mb-3">
                    <label>Change Author Image</label>
                    <input type="file" name="auther_img" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Current Book Image</label><br>
                    <img style="width:60px; border-radius:8px; margin-bottom:0.5rem;" src="/book/{{ $data->book_img }}">
                </div>
                <div class="mb-3">
                    <label>Change Book Image</label>
                    <input type="file" name="book_img" class="form-control">
                </div>
                <div class="text-center">
                    <input class="btn btn-primary" type="submit" value="Update Book" style="border-radius:6px; padding:0.5rem 2rem;">
                </div>
            </form>
        </div>
    </div>
</div>
@include('admin.footer')
</body>
</html>