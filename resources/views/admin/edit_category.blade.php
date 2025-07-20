<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
      integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"></script>
    <style type="text/css">
      .div_deg {
        text-align: center;
        margin: auto;
      }
      .title_deg {
        color: white;
        padding: 40px;
        font-size: 30px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="div_deg">
              <h2 class="title_deg">Update Category</h2>
              <form action="{{ route('update_category', $category->id) }}" method="post">
                @csrf
                <label for="">Category Name</label>
                <input type="text" name="cat_name" value="{{ $category->cat_title }}">
                <input type="submit" class="btn btn-info" value="Update">
              </form>
            </div>
          </div>
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
