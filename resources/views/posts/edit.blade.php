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
    <h1>فرم ایجاد پست</h1>
    </center>
    <form action="{{$post->id}}" method="post">
        @csrf
    <input value="{{$post->name}}" name="name" type="text" class="form-control" placeholder=" نام " value="{{old('name')}}">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror
    <br>
    <input value="{{$post->last_name}}" name="last_name" type="text" class="form-control" placeholder="  نام خانوادگی "  value="{{old('last_name')}}">
    @error('last_name')
    <span class="text-danger">{{ $message }}</span>
@enderror
    <br>
    <select name="cat" id="">
        <option value="ali">ali</option>
       </select>
      <br>
      <textarea name="texs" id="" cols="30" rows="10" placeholder="متن">{{$post->texs}}</textarea>
      <br>
    <button>تایید</button>
    </center>
  </form>
</body>
</html>
