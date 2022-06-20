@include("layouts.head")

<div class="mainPageWrapper">

  <h1>プロジェクト一覧</h1>

  @foreach ($projects as $project)
  <div class="userProjectBox box_flame">
  <a href="{{ route('project.detail', ['id' => $project->id, 'project_title' => $project->project_title]) }}">
    Number: {{$project->id}}<br>
    Title: {{ $project->project_title }}
  </a>
</div>


    @endforeach

  <div>
    <a href={{ route('project.new') }} class="btn btn-outline-primary">新しいプロジェクト</a>
  </div>

</div>

@include("layouts.script")
