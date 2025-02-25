<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Hello index blade view

<?php
// dd($data);
?>

    
@php

dd($data);

@endphp

<div class="container mt-3">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th width="10%">ID</th>
        <th>Name</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $value)
      <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>

</html>