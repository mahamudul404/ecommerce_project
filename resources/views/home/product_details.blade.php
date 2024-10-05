<!DOCTYPE html>
<html>

<head>
    <style>
        .detail-box {
            padding: 10px 25px;
        }
    </style>

    @include('home.css')

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->




        <section class="shop_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Latest Products
                    </h2>
                </div>
                <div class="row">





                    <div class="col-sm-6 col-md-10">
                        <div class="box">

                            <div class="img-box">
                                <img src="/product/{{ $product->image }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    {{ $product->title }}
                                </h6>
                                <h6>
                                    Price
                                    <span>
                                        ${{ $product->price }}
                                    </span>
                                </h6>
                            </div>

                            <div class="detail-box">
                                <h6>
                                    Category : {{ $product->category }}
                                </h6>
                                <h6>
                                    Available Quantity:
                                    <span>
                                        {{ $product->quantity }}
                                    </span>
                                </h6>
                            </div>

                            <div class="detail-box">
                                <p>{{ $product->description }}</p>
                            </div>


                            <div>
                                <a class="btn btn-primary" href=" {{ url('add_to_cart', $product->id) }} ">Add to
                                    cart</a>
                            </div>

                        </div>
                    </div>





                </div>
            </div>

        </section>






        @include('home.footer')


</body>

</html>
