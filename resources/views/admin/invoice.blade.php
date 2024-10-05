<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user invoice</title>
</head>

<body>

    <h1>Invoice</h1>

    <span>Phone Number: {{ $order->phone }}</span>
    <br>
    <span>Address: {{ $order->rec_address }}</span>
    <p>Dear {{ $order->name }},</p>

    <p>
        Thank you for your order! Here is a summary of your order:
    </p>

    <p>
        Order ID: {{ $order->id }}<br>
        Order Date: {{ $order->created_at }}<br>
        Order Amount: {{ $order->product->price }}<br>
        Order Status: {{ $order->status }}<br>
        <img style="width: 100px; height: 100px;" src="product/{{ $order->product->image }}" alt="order image">
    </p>





</body>

</html>
