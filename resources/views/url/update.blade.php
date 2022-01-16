<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h5>Update your Url</h5>
                @php
                // var_dump($url)
                @endphp
                @error('short_url')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        <form class="form-inline" action="{{route('update',$url->id)}}" method="post">
            @csrf
            <div class="form-group mx-sm-3 mb-2">
              <label for="short_url" class="sr-only">short url </label>
              <input type="text" class="form-control" value="{{$url->short_url}}" id="short_url" name="short_url" placeholder="Enter your url">
              {{-- <input type="text" class="form-control"  name="short" > --}}

            </div>

            <div class="form-group mx-sm-3 mb-2">
            <button type="submit" class="btn btn-primary mb-2">Update Url</button>
            </div>
          </form>
        </div>
        </div>
    </div>
</body>
</html>
