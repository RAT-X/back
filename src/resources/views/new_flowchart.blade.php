@include("layouts.head")

<div class="mainPageWrapper">
    <div class="messageBox">
        <h1>作成するアプリ名を入力してください</h1>
    </div>

    <div class="createProjectWrapper">
        <form action="/flowchart" method="post">
            @csrf
            <div class="projectBox">
                <p class="projectTitle">プロジェクトのタイトル</p>
                <div class="form-floating mb-3 projectNameBtn">
                <input type="text" name="project_title" class="form-control" id="floatingInput">
                </div>

                <input type="submit" value="作成" class="btn btn-primary projectCreateBtn"></input>
            </div>
        </form>
    </div>
</div>
