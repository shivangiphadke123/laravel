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
    <h2 class="text-center">Update User</h2>
    <form method="POST" action="/update/{{$posts->$id}}">
        @csrf
    <div class="mb-3">
        <label class="form-label">Enter Name</label>
        <input type="text" class="form-control" name="name" value={{$posts->post_name}}>
    </div>
    <div class="mb-3">
        <label class="form-label">Contact No</label>
        <input type="text" class="form-control" name="number" value={{$posts->post_number}}>
    </div>
        <input type="submit" name="update" value="Update" class="btn btn-success"> 
    </form>
 </div>
</body>
</html>