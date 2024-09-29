<!DOCTYPE html>
<html>

<body>

    @include('admin.css')


    <style>
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg {
            border: 2px solid yellowgreen;
        }

        th {
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
        }

        td img {
            width: 120px;
            height: 120px;
        }
    </style>


</body>

<body>

    @include('admin.header')

    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">



                <div class="div_deg">
                    <table class="table_deg ">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Delete</th>
                        </tr>

                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>{!!Str::limit($product->description, 50)!!}</td>
                                <td><img src="product/{{ $product->image }}" alt=""></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->quantity }}</td>

                                <td>
                                  <a class="btn btn-danger" href="{{ url('delete_product', $product->id)}}" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                

                            </tr>
                        @endforeach

                    </table>


                </div>

                <div class="div_deg">
                    {{ $products->links() }}
                </div>



            </div>
        </div>
    </div>
    <!-- JavaScript files-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-J0lbW/ZC26boFizb6RgZQ9QPHpQMOYaBtZz5CnXIQkqKcYwIL7RZP3HgSm9B0xS3" crossorigin="anonymous">



    <script src="{{ asset('adminCSS/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminCSS/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('adminCSS/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminCSS/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('adminCSS/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('adminCSS/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('adminCSS/js/charts-home.js') }}"></script>
    <script src="{{ asset('adminCSS/js/front.js') }}"></script>
</body>

</html>
