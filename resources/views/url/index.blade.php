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
            <h5>Shorten your Url</h5>
    <form class="form-inline" action="{{route('create')}}" method="post">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
          <label for="url" class="sr-only">Url </label>
          <input type="text" class="form-control" id="url" name="url" placeholder="Enter your url">
        </div>
        <div class="form-group mx-sm-3 mb-2">
        <button type="submit" class="btn btn-primary mb-2">Click to convert</button>
        </div>
      </form>
    </div>
    </div>
    <?php
    // dd($url)
    // var_dump($allUrl);
    ?>
   <div class="row justify-content-center">
    <div class="col-md-8">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            {{-- <th scope="col">URl</th> --}}
            <th scope="col">ShortUrl</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($allUrl as $url)

            <tr>
              <th scope="row">{{$url->id}}</th>
              {{-- <td>{{$url->url}}</td> --}}
              <td><a href="{{url('/short/').'/'.$url->short_url}}">{{$url->short_url}}</a> </td>
              <td><a href="{{route('edit', $url->id) }}">Edit</a></td>
               <td><a href="{{route('delete', $url->id) }}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
   </div>
</div>
</body>
</html>
