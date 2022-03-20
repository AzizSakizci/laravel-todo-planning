<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>



<div class="d-flex justify-content-center">

  @foreach($toDoList as  $key => $value)
      <div class="h-50 w-50">
    <h3><b>WEEK{{ $key }}</b></h3>
          <div>
<table class="table table-striped">
    <thead>
    <div>
    <tr>
        @foreach($value as  $key2 => $val)
        <th scope="col">{{$key2}}</th>
    </tr>
    </div>
    </thead>

    <tbody>
    @foreach($val as  $v)

    <tr>
        <td>{{$v}}</td>
    </tr>
    @endforeach
    @for($i=0 ; $i<8-count($val) ;$i++)
        <tr>
            <td>.</td>
        </tr>
    @endfor

    </tbody>
    @endforeach
</table>
          </div>
      </div>
@endforeach
</div>







{{--@foreach($toDoList as  $key => $value)--}}
{{--    <h3><b>WEEK{{ $key }}</b></h3>--}}
{{--<table class="table table-striped">--}}

{{--    <thead>--}}

{{--    <tr>--}}
{{--        @foreach($value as  $key2 => $val)--}}
{{--        <th scope="col">--}}
{{--       {{$key2}}--}}
{{--        </th>--}}
{{--    <tr>--}}
{{--            @foreach($val as  $v)--}}
{{--                <td>{{$v}}</td>--}}
{{--                @endforeach--}}
{{--    </tr>--}}

{{--        @endforeach--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}




<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
