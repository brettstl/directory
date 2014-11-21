<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Detone8 Staff</title>
</head>
<body>
  <h1>Detone Staff</h1>
  @foreach($staff as $person)
  <dl>
    <dt>Name</dt>
    <dd>{{ $person['name'] }}</dd>
    <dt>Postion</dt>
    <dd>{{ $person['position'] }}</dd>
    <dt>Email</dt>
    <dd>{{ $person['email'] }}</dd>
    <dt>Phone</dt>
    <dd>{{ $person['phone'] }}</dd>
    <dt>Bio</dt>
    <dd>{{ $person['bio'] }}</dd>
  </dl>
  @endforeach
</body>
</html>