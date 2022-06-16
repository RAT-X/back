@include("layouts.head")

<div class="mainPageWrapper">

  <h1>Project Number: {{ $project_number }}</h1>

  <div>
    <a href={{ route('project.list') }} class="btn btn-outline-primary">一覧に戻る</a>
  </div>

</div>

@include("layouts.script")
