@include("layouts.head")

<div class="mainPageWrapper">

  <h1>プロジェクト一覧</h1>

  @foreach ($charts as $chart)
    <p>
      {{ $chart->project->name }},
      {{ $chart->project_id }},
      {{ $chart->comment }}
    </p>
    @endforeach

  <div>
    <a href={{ route('project.new') }} class="btn btn-outline-primary">新しいプロジェクト</a>
  </div>

</div>

@include("layouts.script")
