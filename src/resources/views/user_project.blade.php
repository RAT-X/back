@include("layouts.head")

<div class="mainPageWrapper">

  <h1>{{ $chart->project->name }}</h1>

  <div>
    <p>{{ $chart->project->project_number }}</p>
    <p>{{ $chart->comment }}</p>
  </div>

  <div>
    <a href={{ route('project.list') }} class="btn btn-outline-primary">一覧に戻る</a>
  </div>

</div>

@include("layouts.script")
