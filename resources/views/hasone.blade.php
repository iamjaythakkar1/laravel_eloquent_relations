<h1>Has One Through Relation</h1>
<p>Table 1: Projects</p>
<p>Table 2: Students</p>
<p>Table 3: Tasks</p><br>

@foreach ($projects as $project)
<h3>Project ID : {{$project->id}}</h3>
<h3>Project Name : {{$project->project_name}}</h3>

{{-- @php
dd($project->tasks);
@endphp --}}
<p>Task Name : {{$project->tasks->task_name}}
</p>


<br/>
@endforeach

{{-- Output of $project->tasks
"id" => 2
"student_id" => 2
"task_name" => "Nash Feeney"
"created_at" => "2023-05-12 10:47:15"
"updated_at" => "2023-05-12 10:47:15"
"laravel_through_key" => 1 
--}}