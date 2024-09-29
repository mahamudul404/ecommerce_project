<!DOCTYPE html>
<html>
  <body>
    
    @include('admin.css')


    <style>

      .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
      }
      .table_deg{
        border: 2px solid yellowgreen;
      }

      th{
        backgournd-color: skyblue;
        color:white;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
      }

      td{
        border: 1px solid skyblue;
        text-align: center;
      }

      td img{
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
                </tr>

                @foreach ($data as $data)
                <tr>
                  <td>{{$data->title}}</td>
                  <td>{{$data->description}}</td>
                  <td><img src="product/{{$data->image}}" alt=""></td>
                  <td>{{$data->price}}</td>
                  <td>{{$data->category}}</td>
                  <td>{{$data->quantity}}</td>
                </tr>
                  
                @endforeach



              </table>
            </div>




          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('adminCSS/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminCSS/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('adminCSS/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminCSS/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('adminCSS/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('adminCSS/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('adminCSS/js/charts-home.js')}}"></script>
    <script src="{{asset('adminCSS/js/front.js')}}"></script>
  </body>
</html>