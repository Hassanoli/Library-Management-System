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

        .title_deg {
            color: white;
            padding: 35px;
            font-size: 40px;
            font-weight: bold;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_pad {
            padding: 15px;
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
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >X</button>
                      {{ session()->get('message') }}
                    </div>
                    @endif
                    <div class="div_center">
                        <h1 class="title_deg">Add Book</h1>
                        <form action="{{ url('store_book') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="div_pad">
                                <label for="">Book Title</label>
                                <input type="text" name="book_name">
                            </div>

                            <div class="div_pad">
                                <label for="">Auther Name</label>
                                <input type="text" name="auther_name">
                            </div>

                            <div class="div_pad">
                                <label for="">Price</label>
                                <input type="text" name="price">
                            </div>

                            <div class="div_pad">
                                <label for="">Description</label>
                                <textarea name="description"></textarea>
                            </div>

                            <div class="div_pad">
                                <label for="">Quantity</label>
                                <input type="number" name="quantity">
                            </div>

                            <div class="div_pad">
                                <label for="">Category</label>
                                <select name="category" id="" required>
                                    <option value="">Select Category</option>

                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}">{{ $category->cat_title }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="div_pad">
                                <label for="">Book Image</label>
                                <input type="file" name="book_img">
                            </div>

                            <div class="div_pad">
                                <label for="">Auther Image</label>
                                <input type="file" name="auther_img">
                            </div>

                            <div class="div_pad">
                                <input type="submit" value="Add Book" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.footer')
</body>

</html>
