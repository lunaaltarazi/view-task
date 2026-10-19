<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1> Hello {{ $name }}</h1>

    <table class="table">
  <thead>


    <tr>
      <th >id</th>
      <th >name</th>
      <th >email</th>
    </tr>

  </thead>
  <tbody>
     @foreach ($users as $user )
    <tr>
      <td >{{$user->id}}</td>
      <td>{{ $user->name }}</td>
      <td>{{$user->email}}</td>

    </tr>
    @endforeach


  </tbody>
</table>
</body>
</html>
