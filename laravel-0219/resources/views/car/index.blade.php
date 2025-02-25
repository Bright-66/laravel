<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cars Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Cars Index</h2>
  <a href="{{route('cars.create')}}">add</a>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>rank</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $key => $value) :?>
      <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
        <td>{{$value['rank']}}</td>
      </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>

</body>
</html>