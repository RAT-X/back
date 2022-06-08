@include("layouts.head")

<div class="mainPageWrapper">
  <div class="messageBox">
      <h1>編集するプロジェクトを選んでください</h1>
  </div>

  <div class="createProjectWrapper">
    <div class="userProjectBoxList">Project 1
      <a class="userProjectBoxLink" href="{{ url('/') }}"></a>
    </div>
    <div class="userProjectBoxList">Project 2
      <a class="userProjectBoxLink" href="{{ url('/') }}"></a>
    </div>
    <div class="userProjectBoxList">Project 3
      <a class="userProjectBoxLink" href="{{ url('/') }}"></a>
    </div>

  </div>
</div>
