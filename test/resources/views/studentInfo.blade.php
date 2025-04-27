<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student information</title>
    @include('bootstrap')
    <style>
        nav .w-5{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 mx-auto">
                <h1 class="text-center py-4 bg-dark text-light rounded">Student Information</h1>
                
                <div class="text-center my-3">
                    <a href="{{route('openAddForm')}}" class="btn btn-success fw-bold fs-4 btn-sm">+ Add Student</a>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Si. No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @php
                        $Id = 1;
                    @endphp
                    @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        {{-- <td>@php echo $Id; $Id++; @endphp</td> --}}
                        <td>{{$item->Name}}</td>
                        <td>{{$item->Email}}</td>
                        <td>{{$item->Age}}</td>
                        <td>{{$item->Phone}}</td>
                        <td>{{$item->Address}}</td>
                        <td><a href="{{route('single_student', $item->id)}}" class="btn btn-info btn-sm">View</a></td>
                        <td><a href="{{route('delete_record', $item->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="{{route('updatepage', $item->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                    </tr>
                    @endforeach
                </table>
                <div class="text-end mt-5">
                    {{$data->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
    </div>




    {{-- @foreach ($data as $item)
        <h3>
            {{$item->id}}-
            {{$item->Name}}-
            {{$item->Email}}-
            {{$item->Age}}-
            {{$item->Phone}}-
            {{$item->Address}}
        </h3>
    @endforeach --}}
</body>
</html>