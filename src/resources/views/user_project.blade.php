@include("layouts.head")

<div class="mainPageWrapper">


  <h1>Project Title: {{ $project->project_title }}<br></h1>

  <p>Project Number:{{ $project->id }}</p>
  <p>Project Comment:<br>{{ $project->comment }}</p>

    <a href={{ route('project.list') }} class="btn btn-outline-primary">一覧に戻る</a>
  </div>

</div>

@include("layouts.script")
