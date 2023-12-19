<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1>Ati efectuat o comada</h1>

    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th class="text-end">Total</th>
                </tr>
            </thead>
            @foreach ($orders->products as $product)
                <tbody>
                    <tr>
                        <td>
                            {{ $product->title }}
                            @if ($product->new_price)
                                <small>(${{ $product->new_price }}) x
                                    {{ $product->pivot->count }}</small>
                            @else
                                <small>(${{ $product->price }}) x
                                    {{ $product->pivot->count }}</small>
                            @endif

                        </td>
                        <td class="text-end">${{ $product->getPriceForCount() }}</td>
                    </tr>
                </tbody>
            @endforeach
            <tfoot>
                <tr>
                    <td colspan="2" class="text-end">
                        ${{ $orders->getFullPrice() }}
                    </td>
                </tr>
            </tfoot>

        </table>
    </div>

</body>
</html>





