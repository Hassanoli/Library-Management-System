<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
      integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"></script>
    <style type="text/css">
      .div_center {
        text-align: center;
        margin: auto;
      }
      .cat_label {
        font-size: 30px;
        font-weight: bold;
        padding: 30px;
        color: white;
      }
      .center {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 50px;
        border: 1px solid white;
      }
      th {
        background-color: skyblue;
        padding: 10px;
      }
      tr {
        border: 1px solid white;
        padding: 10px;
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
            <div class="div_center">
              <h1 class="cat_label">Add Category</h1>
              <form action="{{ url('add_category') }}" method="POST">
                @csrf
                <span style="padding-right: 15px;">
                  <label>Category Name</label>
                  <input type="text" name="category" required>
                  <input class="btn btn-primary" type="submit" value="Add Category">
                </span>
              </form>
              <div>
                <table class="center">
                  <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($data as $category)
                  <tr>
                    <td>{{ $category->cat_title }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ route('edit_category', $category->id) }}">Update</a>


                        <a onclick="confirmation(event)"
                         class="btn btn-danger"
                         href="{{ route('cat_delete', $category->id) }}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
        @include('admin.footer')
        <script>
            @if(session()->has('message'))
                swal({
                    title: "Success!",
                    text: "{{ session('message') }}",
                    icon: "success",
                    button: "OK",
                });
            @endif

            function confirmation(ev) {
                ev.preventDefault();
                var urlToRedirect = ev.currentTarget.getAttribute('href');
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        window.location.href = urlToRedirect;
                    }
                });
            }
            @if(session()->has('message'))
              swal({
                  title: "Success!",
                  text: "{{ session('message') }}",
                  icon: "success",
                  button: "OK",
              });
          @endif
        </script>
      </div>
    </div>
  </body>
</html>

        
        
      </div>
    </div>
  </body>
</html>
