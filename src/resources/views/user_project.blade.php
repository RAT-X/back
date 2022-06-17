@include("layouts.head")

<div class="mainPageWrapper">

  <h1>Project Number:</h1>
  <p>{{ $project->project_number }}</p>
  <p>{{ $project->project_title }}</p>
  <p>{{ $project->comment }}</p>

  <div>
    <a href={{ route('project.list') }} class="btn btn-outline-primary">一覧に戻る</a>
  </div>

</div>

@include("layouts.script")
