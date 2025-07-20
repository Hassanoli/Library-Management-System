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
            <h2 style="font-size:1.4rem; font-weight:600; margin-bottom:1.5rem; color:#222; text-align:center;">Add Category</h2>
            <form action="{{ url('add_category') }}" method="POST" style="background:#fff; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.03); padding:2rem; margin-bottom:2rem;">
                @csrf
                <div class="mb-3 d-flex align-items-center" style="gap:1rem;">
                    <label style="margin-bottom:0; min-width:120px;">Category Name</label>
                    <input type="text" name="category" class="form-control" required>
                    <input class="btn btn-primary" type="submit" value="Add Category" style="border-radius:6px;">
                </div>
            </form>
            <table class="table table-bordered table-hover" style="background:#fff; border-radius:10px; overflow:hidden;">
                <thead style="background:#f0f4fa;">
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $category)
                    <tr>
                        <td>{{ $category->cat_title }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('edit_category', $category->id) }}">Update</a>
                            <a class="btn btn-danger btn-sm" href="{{ route('cat_delete', $category->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
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
