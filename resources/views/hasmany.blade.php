<h1>Has Many Through Relation</h1>
<p>Table 1: Projects</p>
<p>Table 2: Students</p>
<p>Table 3: Tasks</p><br>

@foreach ($projects as $project)
<h3>Project ID : {{$project->id}}</h3>
<h3>Project Name : {{$project->project_name}}</h3>

@foreach($project->manytasks as $task)
<p>Task Name : {{$task->task_name}}</p>
@endforeach

<br/>
@endforeach