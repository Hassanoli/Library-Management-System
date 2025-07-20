<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.css')
    <style type="text/css">
    .table_deg
    {
      border: 1px;
      margin: auto;
      text-align: center;
      margin-top: 100px;
    }
    th
    {
      background-color: skyblue;
      color: white;
      font-weight: bold ; 
      font-size: 18px;
      padding: 10px;
    }
    td 
    {
      color: white;
      background-color: black ; 
      border: 1px solid white;

    }
    .book_img
    {
      height: 120px;
      width: 80 px;
      margin: auto;
    }
    
    </style>
</head>

<body>

    @include('home.header')

    <div class="currently-market">
      <div class="container">
        <div class="row">
          
          @if (session()->has('message'))
          <div class="alert alert-success" style="margin-top: 100px;">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
          </div>
        @endif
        
          <table class="table_deg">
            <tr>
              <th>Book Name</th>
              <th>Book Auther</th>
              <th>Book Status</th>
              <th>Image</th>
              <th>Cancel Request</th>
            </tr>
          @foreach ($data as $data )
          <tr>
            <td>{{ $data->book->title }}</td>
            <td>{{ $data->book->auther_name }}</td>
            <td>{{ $data->status }}</td>
            <td>
              <img class="book_img" height="120" width="80" src="book/{{ $data->book->book_img }}" alt="">
            </td>
            <td>
              @if($data->status == 'Applied')
              <a class="btn btn-warning" href="{{ url('cancel_req',$data->id) }}">Cancel</a>
              @else
              <p style="color:white; font-weight:bold;">Not Allowed</p>
              @endif
            </td>
          </tr>
          @endforeach
          </table>
          </div>
          </div>
          </div>
    @include('home.footer')
    
</body>

</html>
