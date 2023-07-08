<h1>One to Many Inverse Relation</h1>
<p>Table 1: Users</p>
<p>Table 2: Posts</p><br>

@foreach ($posts as $post)
<h3>Post ID : {{$post->id}}</h3>
<h3>Title : {{$post->title}}</h3>
<p>Description : {{$post->description}}</p>

<p>User Name : {{$post->user->name}}</p>
<br>
@endforeach