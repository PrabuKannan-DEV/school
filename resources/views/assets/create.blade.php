<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Asset</title>
</head>
<body>
    <form action="/assets" method="post">
        @csrf
        <select name="product_id" id="product_id">
           @foreach ($products as $product)
            <option value="{{$product->id}}">{{$product->name}}</option>
           @endforeach
        </select>

        <input type="text" name="serial_no" id="serial_no" placeholder="serial no">
            @foreach ($employees as $employee)
            <option value="{{$employee->id}}">{{$employee->name}}</option>
            @endforeach
            

        <button>Submit</button>
    </form>
</body>
</html>
