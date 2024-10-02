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
        <div class="row justify-content-center">
            <div class="col-md-8">
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

                        @php
                            $total = 0;
                        @endphp

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
                            @php
                                $total += $cart->product->price;
                            @endphp
                        @endforeach
                </table>

            </div>
            <div class="col-md-4 offset-md-2 mt-3 ">
                <h4>Total Price : ${{ $total }}</h4>
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
