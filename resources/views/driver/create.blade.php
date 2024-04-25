<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Driver</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    
     <div class="container mt-4">
              <h1 class="text-center">Add New Driver</h1>
              <a href="{{ route('driver.index') }}" class="btn btn-success float-end">All Drivers</a><br/><br/>
              <form action="{{ route('driver.store') }}" method="post">
                  @csrf
                  <label>Driver Name</label>
                  <input type="text" name="driname" class="form-control" placeholder="Enter Driver Name" required/><br/>
                  <label>Driver Address</label>
                  <input type="text" name="driaddress" class="form-control" placeholder="Enter Driver Address" required/><br/>
                  <label>Driver Registration Number</label>
                  <input type="text" name="drireg" class="form-control" placeholder="Enter Driver Reg Number" required/><br/>
                  <input type="submit" value="Save" class="btn btn-success"/>
              </form>

     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>