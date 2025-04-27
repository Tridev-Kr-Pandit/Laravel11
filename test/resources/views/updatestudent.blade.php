<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('bootstrap')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
                <h1 class="text-center py-3 bg-dark text-light fw-bold rounded my-2">Update Student Record</h1>
                
                <form class="border rounded p-3" action="{{route('updatestudent', $data->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name:</label>
                      <input type="text" value="{{$data->Name}}" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email:</label>
                      <input type="email" value="{{$data->Email}}" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Age:</label>
                      <input type="text" value="{{$data->Age}}" class="form-control" id="exampleInputEmail1" name="age" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Phone:</label>
                      <input type="text" value="{{$data->Phone}}" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Address</label>
                      <input type="text" value="{{$data->Address}}" class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>