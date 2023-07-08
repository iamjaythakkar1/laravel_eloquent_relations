<h1>Many to Many Relation</h1>
<p>Table 1: Posts</p>
<p>Table 2: Comments</p>
<p>Pivot Table: comment_post</p><br>

@foreach ($post as $pst)
<h3>Post ID : {{$pst->id}}</h3>
<h3>Title : {{$pst->title}}</h3>
<h3>description : {{$pst->description}}</h3>

@foreach($pst->comments as $cmt)
<p>Comment : {{$cmt->comment}}</p>

@endforeach
<br/>
@endforeach