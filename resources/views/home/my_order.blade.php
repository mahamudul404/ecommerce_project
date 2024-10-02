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


    <div class="container">

        <h2>My Order</h2>

        <table class="table table-bordered">

            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Status</th>
                <th>Product Image</th>

            </tr>

            @foreach ($orders as $order)
            <tr>
              <td> {{ $order->product->title }} </td>
              <td> {{ $order->product->price }} </td>
              <td> {{ $order->status }} </td>
              <td> <img src="/product/{{ $order->product->image }}" width="100" height="100"> </td>
            </tr>

            @endforeach
        </table>

    </div>
















    @include('home.footer')


</body>

</html>
