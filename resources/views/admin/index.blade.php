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

            @include('admin.body')

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