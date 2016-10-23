<!DOCTYPE html>
<html>
	<body>
		<div style="border: 2px solid orange; padding: 30px;">
			<div>From: <b>{{ $_POST['name'] }}</b></div>
			<div>Email: <b>{{ $_POST['email'] }}</b><hr></div><br>
			<div style="text-align: justify;"><strong>{{ $_POST['comment'] }}</strong></div><br>
			
			@if (Auth::guest())

			@else
				<div>
					<hr>
					Account Details: 
					<div>Name : {{ Auth::user()->name }}</div>
					<div>Email: {{ Auth::user()->email }}</div>
				</div>
			@endif
		</div>
	</body>
</html>