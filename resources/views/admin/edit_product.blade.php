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

                <div class="text-center ">
                    <h1 >Edit Product</h1>
                </div>

                <div class="">

                    <form class="mt-4" action="{{ url('update_product', $data->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                      <div class="mb-3">
                        <label for=""> Product Title</label>
                        <input class="form-control" type="text" name="title" value="{{ $data->title }}">
                      </div>

                      <div class="mb-3">
                        <label for=""> Product Description</label>
                        <input class="form-control" type="text" name="description" value="{{ $data->description }}">
                      </div>

                      <div class="mb-3">
                        <label for=""> Product Price</label>
                        <input class="form-control" type="number" name="price" value="{{ $data->price }}" required>
                      </div>

                      <div class="mb-3">
                        <label for=""> Product Quantity</label>
                        <input class="form-control" type="number" name="quantity" value="{{ $data->quantity }}" required>
                      </div>

                      <div class="mb-3">
                        <label for=""> Product Category</label>
                        <select class="form-control" name="category" id="">
                            <option value=" {{$data->category}} ">{{$data->category}}</option>
                            
                        </select>
                      </div>

                      <div class="mt-3">
                        <label for=""> Product Image</label>
                        <img class="img-thumbnail" width="140" src="/product/{{ $data->image }}" alt="">
                      </div>

                      <div class="text-center m-4">
                        <input class="btn btn-success" type="submit" value="Update">
                      </div>
                      


                    </form>
                </div>




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
