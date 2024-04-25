<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Driver</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    
     <div class="container mt-4">
              <h1 class="text-center">Edit Driver</h1>
              <form action="{{ route('driver.update',$driver->id) }}" method="post">
                  @csrf
                  <label>Driver Name</label>
                  <input type="text" name="driname" class="form-control" value="{{ $driver->name }}" placeholder="Enter Driver Name" required/><br/>
                  <label>Driver Address</label>
                  <input type="text" name="driaddress" class="form-control" value="{{ $driver->address }}" placeholder="Enter Driver Address" required/><br/>
                  <label>Driver Registration Number</label>
                  <input type="text" name="drireg" class="form-control" value="{{ $driver->regnumber }}" placeholder="Enter Driver Reg Number" required/><br/>
                  <input type="submit" value="Update" class="btn btn-success"/>
              </form>

     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>