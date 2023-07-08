<h1>One to One Inverse Relation</h1>
<p>Table 1: Users</p>
<p>Table 2: Addresses</p><br>
@foreach ($adds as $add)
<h3>City : {{$add->city}}</h3>
<p>Name : {{$add->user->name}}</p>
<br />
@endforeach