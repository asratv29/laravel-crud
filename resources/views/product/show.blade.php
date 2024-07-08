<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show product</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card p-4">
                <p>Name : <b>{{ $product->name}}</b></p>
                <p>descroption:<b>{{ $product->descroption}}</b></p>

            </div>

        </div>
    </div>
</div>
</body>
</html>
