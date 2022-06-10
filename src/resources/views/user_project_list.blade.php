@include("layouts.head")

<div class="mainPageWrapper">

  <h1>プロジェクト一覧</h1>

  @foreach ($projects as $project)
    <p>
      {{ $shop->category->name }},
      {{ $project->project_title }},
      {{ $project->comment }}
    </p>

  <div>
    <a href={{ route('project.new') }} class="btn btn-outline-primary">新しいプロジェクト</a>
  </div>

</div>
