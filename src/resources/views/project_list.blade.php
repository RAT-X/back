@include("layouts.head")

<div class="mainPageWrapper">

  <h1>プロジェクト一覧</h1><br>

  <div class="newProjectBtn">
    <a href={{ route('project.new') }} class="btn btn-outline-primary">新しいプロジェクト</a>
  </div>


  @foreach ($projects as $project)
    <a href="{{ route('project.detail', ['id' => $project->id, 'project_title' => $project->project_title]) }}">
      <div class="userProjectBox projectTitleBox">
        <p class="projectTitle">ProjectNumber: {{ $project->id }}</p>
        <p class="projectTitle">ProjectTitle: {{ $project->project_title }}</p>
      </div>
    </a>
  @endforeach


</div>

@include("layouts.script")
