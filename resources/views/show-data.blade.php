<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Crud</title>
  </head>
  <body>
    <div class="container">
    <a href="{{ Route('addData') }}" class="btn btn-primary my-3"> AddData </a>
    <table class="table table-bordered my-3">
      <thead>
        <tr>
          <th scope="col">SL</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($showData as $key => $data)
          
       
        <tr>
         <td>{{ $key+1 }}</td>
         <td>{{ $data->Name }}</td>
         <td>{{ $data->Email }}</td>
         <td> 
          <a href="{{ Route('editData' ,$data->id) }}" class="btn btn-success">Edit</a>
          <a href="{{ Route('deleteData' ,$data->id) }}" class="btn btn-danger"> Delete </a>
        </td>
         
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $showData->links() }}
  </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>