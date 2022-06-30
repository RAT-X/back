@include("layouts.head")

<div class="mainPageWrapper">
    <div class="messageBox">
        <h1>作成するアプリ名を入力してください</h1>
    </div>

    <div class="createProjectWrapper">
        <div class="projectBox">

        <p class="projectTitle">プロジェクトのタイトル</p>

        {{Form::open(['method' => 'post', 'url' => '/flowchart/new/'])}}
            @csrf
                <p>{{Form::text('project_title', '', ['id' => 'project_title', 'class' => 'form-floating mb-3 projectNameBtn form-control'])}}</p>
                <p>{{ Form::button('作成', ['type' => 'submit', 'class' => 'btn btn-primary projectCreateBtn'])}}</p>
        {{Form::close()}}
        </div>
    </div>
</div>
