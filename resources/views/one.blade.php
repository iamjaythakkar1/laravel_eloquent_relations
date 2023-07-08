<h1>One to One Relation</h1>
<p>Table 1: Users</p>
<p>Table 2: Addresses</p><br>
@foreach ($users as $user)
<h3>Name : {{$user->name}}</h3>
<p>City : {{$user->address->city}}</p><br />
@endforeach