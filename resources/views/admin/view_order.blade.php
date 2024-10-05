<!DOCTYPE html>
<html>
  <body>
    
    @include('admin.css')

  </body>
  <body>
    
    @include('admin.header')

    @include('admin.sidebar')
    
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">



   <div class="container">

        <h2>My Order</h2>

        <table class="table table-bordered">

            <tr class="text-center">
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Status</th>
                <th>Product Image</th>
                <th>Update Status</th>
                <td>Print PDF</td>


            </tr>

            @foreach ($orders as $order)
            <tr class="text-center">
              <td> {{ $order->product->title }} </td>
              <td> {{ $order->product->price }} </td>
              <td>

                @if ($order->status == 'pending')

                <span style="color: red" >{{ $order->status }}</span>

                @elseif ($order->status == 'On the way')

                <span style="color: skyblue">{{ $order->status }}</span>

                @elseif ($order->status == 'Delevered')

                <span style="color: orange">{{ $order->status }}</span>

                @endif


              </td>
              <td> <img class="img-fluid" src="/product/{{ $order->product->image }}" width="100" height="100"> </td>
              <td> <a href=" {{ url('update_status', $order->id) }} " class="btn btn-primary">On the way</a>
              <a href=" {{ url('delevered', $order->id) }} " class="btn btn-success">Delivered</a></td>
              </td>
              

              <td><a href=" {{ url('print_pdf', $order->id) }} " class="btn btn-danger">Print PDF</a></td>
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