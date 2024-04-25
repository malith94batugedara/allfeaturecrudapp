<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Drivers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>

    <div class="container mt-4">

        <h1 class="text-center">All Drivers</h1><br/>
        <a href="{{ route('driver.create') }}" class="btn btn-primary float-end">Add Driver</a><br/><br/><br/>
        @if(session('status'))
           <div class="alert alert-success">
                 {{ session('status') }}
           </div>
        @endif
            <table class="table table-bordered table-dark">
                  <thead>
                      <tr>
                        <th>ID</th>
                        <th>Driver Name</th>
                        <th>Driver Address</th>
                        <th>Driver Reg Number</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($drivers as $driver)
                        
                       <tr>
                        <td>{{$driver->id}}</td>
                        <td>{{$driver->name}}</td>
                        <td>{{$driver->address}}</td>
                        <td>{{$driver->regnumber}}</td>
                        <td>
                            <a href="{{ route('driver.edit',$driver->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('driver.delete',$driver->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                       </tr>

                    @endforeach
                  </tbody>
            </table>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>