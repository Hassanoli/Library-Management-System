<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
   integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
   crossorigin="anonymous"
   referrerpolicy="no-referrer"></script>
   <style type="text/css">
    .table_center
    {
        text-align: center;
        margin: auto;
        border: 1px solid yellowgreen;
        margin-top: 50px;
    }
    th
    {
        background-color: skyblue;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
        color: black;
    }
    .img_book
    {
      width: 80px;
      border-radius: 50%;
    }
    .img_author
    {
      width: 80px;
      border-radius: 50%;
    }
    
   </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <!-- Close button -->
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <!-- Display the success message -->
                {{ session('message') }}
            </div>
        @endif
        
              
          
              
            
            <div>
                <table class="table_center">
                    <tr>
                        <th>Book Title</th>
                        <th>Author Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Book Image</th>
                        <th>Auther Image</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>

                    @foreach ($book as $book )
                    <tr>
                      <td>{{$book->title}}</td>
                      <td>{{$book->auther_name}}</td>
                      <td>{{$book->price}}</td>
                      <td>{{$book->description}}</td>
                      <td>{{$book->quantity}}</td>
                      <td>{{$book->category->cat_title}}</td>
                      <td>
                        <img class="img_book" src="book/{{ $book->book_img }}" alt="">
                      </td>
                      
                      <td>
                        <img class="img_author" src="auther/{{ $book->auther_img }}" alt="">
                      </td>

                      <td>
                        <a href="{{ url('book_delete', $book->id) }}" class="btn btn-danger"
                          onclick="confirmation(event)">Delete</a>                       
                      </td>
                      <td>
                        <a href="{{ url('edit_book', $book->id) }}" class="btn btn-info">Update</a>                       
                      </td>
                  </tr>
                    @endforeach
                </table>
            </div>

        </div>
        </div>
        </div>


        @include('admin.footer')

        <script type="text/javascript">
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
  </body>
</html>

