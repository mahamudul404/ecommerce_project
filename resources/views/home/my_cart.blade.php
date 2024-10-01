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

  <table class="table table-bordered">
    <tr class="text-center">
      <th>Product Title</th>
      <th>Product Price</th>
      <th>Product Image</th>
    </tr>
    @foreach ($carts as $cart)
    <tr class="text-center ">
      <td class="text-center">{{$cart->product->title}}</td>
      <td class="text-center">{{$cart->product->price}}</td>
      <td class="text-center"><img src="/product/{{$cart->product->image}}" alt="" style="width: 100px; height: 100px;"></td>
    </tr>
    @endforeach
  </table>



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