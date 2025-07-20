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
        <div class="container" style="max-width:500px; margin:auto;">
            <h2 style="font-size:1.4rem; font-weight:600; margin-bottom:1.5rem; color:#222; text-align:center;">Update Category</h2>
            <form action="{{ route('update_category', $category->id) }}" method="post" style="background:#fff; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.03); padding:2rem;">
                @csrf
                <div class="mb-3">
                    <label>Category Name</label>
                    <input type="text" name="cat_name" value="{{ $category->cat_title }}" class="form-control" required>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Update" style="border-radius:6px; padding:0.5rem 2rem;">
                </div>
            </form>
        </div>
    </div>
</div>
@include('admin.footer')

    <script>
        // Check if there is a success message in the session
        @if(session()->has('message'))
            swal({
                title: "Success!",
                text: "{{ session('message') }}",
                icon: "success",
                button: "OK",
            });
        @endif
    </script>
</body>
</html>
