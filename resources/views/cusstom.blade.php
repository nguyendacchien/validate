<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="content">
    <div class="title m-b-md">
        Laravel Cusstom Validation
    </div>

{{--    <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>--}}

    <div class="form-custom-validation">
        <form action="{{route('custom.check')}}"method="get">
            <label for="name">Name: </label>
            <input id="name" name="name" type="text" placeholder="Enter the full name">
            <br>
            <label for="age">Age: </label>
            <input id="age" name="age" type="text" placeholder="Enter the age">
            <br>
            <button type="submit">Submit</button>
        </form>
{{--        <div class="error-message">--}}
{{--            @if ($errors->any())--}}
{{--                @foreach($errors->all() as $nameError)--}}
{{--                    <p style="color:red">{{ $nameError }}</p>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        </div>--}}
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
