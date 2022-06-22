@include("layouts.head")

<div class="mainPageWrapper">
    <form action="/" method="post">
        @csrf
    プロジェクト名: <input type="text" name="project_title" />
    コメント: <input type="text" name="comment" />
    <input type="submit" />
    </form>
</div>
