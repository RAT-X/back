@include("layouts.head")

<div class="mainPageWrapper">
  <div class="messageBox">
      <h1>作成するアプリ名を入力してください</h1>
  </div>

  <div class="createProjectWrapper">
    <div class="projectBox">

      <p class="projectTitle">プロジェクトのタイトル</p>

      <div class="form-floating mb-3 projectNameBtn">
        <input type="email" class="form-control" id="floatingInput">
      </div>

        <a type="button" class="btn btn-primary projectCreateBtn" href="{{ url('/flowchart') }}"><i class="bi bi-arrow-down-right-square" style="font-size: 1rem"></i>&ensp;作成</a>
    </div>
  </div>
</div>
