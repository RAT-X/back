@include("layouts.head")

<div class="page_wrapper">
  <div class="message_wrapper">
      <h1>作成するアプリ名を入力してください</h1>
  </div>

  <div class="login_wrapper">
    <div class="project_box">
      <p class="project_title">プロジェクトのタイトル</p>
      <div class="form-floating mb-3 project_name_btn">
        <input type="email" class="form-control" id="floatingInput">
      </div>

      <div class="create_btn_wrapper">
        <a type="button" class="btn btn-primary create_project_btn" href="{{ url('/top') }}"><i class="bi bi-arrow-down-right-square" style="font-size: 1rem"></i>&ensp;作成</a>
      </div>
    </div>
  </div>
</div>
