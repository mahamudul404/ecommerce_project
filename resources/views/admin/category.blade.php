<!DOCTYPE html>
<html>

<body>

    @include('admin.css')

    <style>
        input[type="text"] {
            width: 200px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;

            margin: 30px;
        }
        .table_deg{
            text-align: center;
            /* position: absolute; */
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width:600px;
        }

        th{
            background-color: skyblue;
            padding:15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        
        td{
            padding: 10px;
            border: 1px solid skyblue;
            color: white;
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


                <h2>Add category</h2>

                <div class="div_deg">
                    <form action=" {{ url('add_category') }} " method="POST">
                        @csrf

                        <div>
                            <input type="text" name="category" placeholder="category">
                            <input class="btn btn-primary" type="submit" value="Add category">
                        </div>


                    </form>
                </div>

                <table class="table_deg">

                    <tr>
                        <th class=>Category Name</th>
                    </tr>

                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->category_name }}</td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
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
