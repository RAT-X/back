@include("layouts.head")

<div class="mainPageWrapper">

  <h1>プロジェクト一覧</h1><br>

  @foreach ($projects as $project)
    <a href="{{ route('project.detail', ['id' => $project->id, 'project_title' => $project->project_title]) }}">
      <div class="userProjectBox">
        ProjectTitle: {{ $project->project_title }}
      </div>
    </a>
  @endforeach

  <div>
    <a href={{ route('project.new') }} class="btn btn-outline-primary">新しいプロジェクト</a>
  </div>

</div>

@include("layouts.script")
