<h1>One to Many Relation</h1>
<p>Table 1: Users</p>
<p>Table 2: Posts</p><br>
@foreach ($users as $user)
<h3>User Name : {{$user->name}}</h3>
@foreach($user->post as $post)
<p>Post : {{$post->title}}</p>
<p>Description : {{$post->description}}</p>
@endforeach
<br>
@endforeach