<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous">
</head>
<body>
    <div class="container" style="width: 60%;">
    <h2 class="text-center">Add User</h2>
    <form method="POST" action="./store">
        @csrf
    <div class="mb-3">
        <label class="form-label">Enter Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="mb-3">
        <label class="form-label">Contact No</label>
        <input type="text" class="form-control" name="number" placeholder="Contact No">
    </div>
        <input type="submit" name="add" value="Add" class="btn btn-primary"> 
    </form>
 </div>
</body>
</html>