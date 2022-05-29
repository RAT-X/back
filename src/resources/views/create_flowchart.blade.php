@include("layouts.head")
@include("layouts.header.main_header")

<div class="page_wrapper">
  <div class="message_wrapper">
      <h1 class="welcome_message">作成するプロジェクト名を付けてください</h1>
  </div>

  <div class="login_wrapper">
    <div class="project_box">
      <p class="create_project">Project Tile</p>
      <div class="form-floating mb-3 project_name_btn">
        <input type="email" class="form-control" id="floatingInput" placeholder="Name your Project">
      </div>

      <div>
        <a type="button" class="btn btn-outline-primary create_project_btn" href="{{ url('/top') }}"><i class="bi bi-arrow-down-right-square-fill" style="font-size: 1rem"></i> create</a>
      </div>
    </div>
  </div>
</div>
