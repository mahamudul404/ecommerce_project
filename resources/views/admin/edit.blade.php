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

           <div class=" text-center ">

            <h2 class="h5 no-margin-bottom m-1">Update Category</h2>

            <form class="mt-4" action=" {{ url('update_category', $data->id) }} " method="POST ">
              @csrf
              @method('PUT')

              <input class="form-control" type="text" name="category" value="{{ $data->category_name }}">

              <input class="btn btn-primary mt-4" type="submit" value="Update Category">

            </form>

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