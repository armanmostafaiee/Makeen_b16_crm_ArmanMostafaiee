<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\html.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <center>
        <h1>فرم ویرایش محصولات</h1>
    </center>
    <br>
    <form action="{{ $product->id }}" method="post">
        @csrf
        <input value="{{ $product->name_product }}" name="name_product" type="text" class="form-control"
            placeholder="نام محصول " value="{{ old('name_product') }}">
        @error('name_product')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <select name="color">
            <option value="abi" {{ $product->color == 'abi' ? 'selected' : '' }}>abi</option>
            <option value="tosi" {{ $product->color == 'tosi' ? 'selected' : '' }}>tosi</option>
        </select>
        <br>
        <input value="{{ $product->mark }}" name="mark" type="text" class="form-control"
            placeholder="برند محصول " value="{{ old('mark') }}">
            @error('mark')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <input value="{{ $product->price }}" name="price" type="text" class="form-control"
            placeholder="قیمت محصول " value="{{ old('price') }}">
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <center>
            <br>
            <button>تایید</button>
        </center>
    </form>
</body>

</html>
