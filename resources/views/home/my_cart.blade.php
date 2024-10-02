<!DOCTYPE html>
<html>

<head>

    @include('home.css')

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->


        <!-- end slider section -->
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <table class=" table table-striped table-bordered table-hover table-sm text-center">
                    <thead class="">
                        <thead class="">
                            <tr class="text-center">
                                <th scope="col">Product Title</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Product Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        @foreach ($carts as $cart)
                            <tr class="text-center">
                                <td class="text-center">{{ $cart->product->title }}</td>
                                <td class="text-center">{{ $cart->product->price }}</td>
                                <td class="text-center"><img src="/product/{{ $cart->product->image }}" alt=""
                                        style="width: 100px; height: 100px;"></td>
                                <td>
                                    <a href=" {{ url('remove_cart/' . $cart->id) }} " class="btn btn-danger">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                </table>

            </div>
        </div>
    </div>

    <!-- end hero area -->

    <!-- shop section -->



    <!-- end shop section -->







    <!-- contact section -->



    <br><br><br>

    <!-- end contact section -->


    <!-- info section -->

    @include('home.footer')


</body>

</html>
