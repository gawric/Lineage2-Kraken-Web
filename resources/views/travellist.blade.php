<html>
<head>
	<title>Travel List</title>
</head>

<body>
	<h1>My Travel Bucket List</h1>
	<h2>Places I'd Like to Visit</h2>
	<ul>
	  @foreach ($togo as $newplace)
		<li>{{ $newplace}}</li>
	  @endforeach
	</ul>

	<h2>Places I've Already Been To</h2>
	<ul>
          @foreach ($visited as $place)
                <li>{{ $place}}</li>
          @endforeach
	</ul>
</body>
</html>