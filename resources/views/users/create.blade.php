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
<h1>فرم ایجاد کاربران</h1>
</center>
<br>
<form action="create" method="post">
@csrf
<input  name="name"  type="text" class="form-control" placeholder="نام"  value="{{old('name_product')}}" >
@error('name')
<span class="text-danger">{{ $message }}</span>
@enderror
<br>
<input name="last_name"  type="text" class="form-control" placeholder="نام خانوادگی" value="{{old('last_name')}}">
@error('last_name')
<span class="text-danger">{{ $message }}</span>
@enderror
<br>
<input name="tahsilat"  type="text" class="form-control" placeholder="تحصیلات " value="{{old('tahsilat')}}">
@error('tahsilat')
<span class="text-danger">{{ $message }}</span>
@enderror
<br>
<input  name="age" type="text" class="form-control" placeholder="سن " value="{{old('age')}}">
@error('age')
<span class="text-danger">{{ $message }}</span>
@enderror
<center>
<br>
<button>تایید</button>
</center>
</form>
</body>
</html>
