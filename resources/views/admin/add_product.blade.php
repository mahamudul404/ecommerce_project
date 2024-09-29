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

            
            <div class=" text-center mt-5 text-white">

              <h2 class="h5 no-margin-bottom m-1">Add Product</h2>

              <form class="mt-4" action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
                @csrf 
                

                <div class="form-group m-2">
                  <label for="" class="form-control-label">Product Title</label>
                  <input type="text" class="form-control" name="title" required>
                </div>

                <div class="form-group m-2">
                  <label for="" class="form-control-label">Product Description</label>
                  <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
                </div>

                <div class="form-group m-2">
                  <label for="" class="form-control-label">Product Price</label>
                  <input type="number" class="form-control" name="price" required>
                </div>

                <div class="form-group m-2">
                  <label for="" class="form-control-label">Product Quantity</label>
                  <input type="number" class="form-control" name="quantity" required>
                </div>

                <div class="form-group m-2">
                  <label for="" class="form-control-label">Product Category</label>
                  <select name="category" id="" class="form-control" required>
                    <option class="form-control " value="">Select Category</option>

                    @foreach ($category as $item) 

                    <option class="form-control " value="{{ $item->category_name }}">{{ $item->category_name }}</option>

                    @endforeach

                </div>

                <div class="form-group m-2">
                  <label for="" class="form-control-label">Product Image</label>
                  <input type="file" class="form-control" name="image" >
                </div>

                <div class="form-group m-4">
                  <input type="submit" class="btn btn-primary" value="Add Product">
                </div>

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