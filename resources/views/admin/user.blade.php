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
        <table class="table table-bordered">
          <tr>
            <th>Id</th>
            <th>Name Surname</th>
            <th>City</th>
            <th>Products</th>
            <th>Type</th>
            <th>UserDelete</th>
          </tr>
          @foreach($users as $user)

          <tr>
            <td>
                {{$user->id}}
            </td>
            <td>
              {{$user->name}}
            </td>
            <td>
              {{$user->city_id}}
            </td>
            <td>
            <a href="/admin/user_product/{{$user->id}}">BAX</a>
            </td>
            <td>
              {{$user->type}}
            </td>
            <td>
               <a href="/admin/user_delete/{{$user->id}}">delete</a>
            </td>
            </tr>
          @endforeach

        </table>
      </div>
      <a href="/" class="btn btn-primary" type="button" >Back To index</a>
    </div>
  </body>
</html>
