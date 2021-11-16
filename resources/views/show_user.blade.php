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
    <div class="container">
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Contact No:</th>
                <th colspan="2">Action</th>
                
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->post_name}}</td>
                <td>{{$post->post_number}}</td>
                 <td><a href="/edit/{{$post->id}}" class="btn btn-success"> Edit </td>
                   <td><a href="/delete/{{$post->id}}" class="btn btn-danger"> Delete </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>