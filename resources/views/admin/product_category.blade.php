<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tramass Admin Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      html,body{
        background-color: #00796B ;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Crud Grid</h1>
      <div class="col-md-8">
        <h3>Create Category</h3>
        <form class="form-group" action="" method="post">
          {{ csrf_field() }}
          <input type="text" name="title" class="form-control"><br>
          <input type="submit" name="submit" value="CREATE">
        </form>
        <table class="table table-bordered">
            <tr>
              <th>Id</th>
              <th>Category Name</th>
            </tr>

            @foreach($categories as $category)
              <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->title }}</td>
              </tr>
            @endforeach
        </table>


      </div>
      <a href="/" class="btn btn-primary" type="button">Back To index</a>
    </div>
  </body>
</html>
