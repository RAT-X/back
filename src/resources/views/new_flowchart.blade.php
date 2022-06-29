@include("layouts.head")

<div class="mainPageWrapper">
    <div class="messageBox">
        <h1>作成するアプリ名を入力してください</h1>
    </div>

    <div class="createProjectWrapper">

        {{Form::open(['method' => 'get', 'url' => 'new_flowchart_after'])}}
            <p>プロジェクトのタイトル：{{Form::text('project_title', '', ['id' => 'project_title'])}}</p>
            <p>{{ Form::button('作成', ['type' => 'submit'])}}</p>
        {{Form::close()}}
    </div>
</div>
