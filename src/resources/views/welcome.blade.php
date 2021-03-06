
@include("layouts.head")

<div class="mainPageWrapper">
    <div class="welcomeMessageBox">
        @if (Auth::check())
        <h2>こんにちは {{ Auth::user()->name }}さん</h2>
        @endif
    </div>

    <div class="createBoxWrapper">
        <div class="createMessageBox">
            <h1>フローチャートの<br>作成を始めてください</h1>
        </div>

        <div class="createBtnWrapper">
            <div class="createBtnBox">
                <a type="button" class="btn btn-success createBtn" href="{{ route('project.list') }}"><i class="bi bi-arrow-up-right-square" style="font-size: 1.5rem"></i> &ensp;作成済みのプロジェクトを開く</a>
            </div>
            <div class="createBtnBox">
                <a type="button" class="btn btn-primary createBtn" href="{{ url('/chartman/new') }}"><i class="bi bi-arrow-down-right-square" style="font-size: 1.5rem"></i> &ensp;新規作成</a>
            </div>
            <div class="createBtnBox">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input class="btn btn-warning createBtnLogout" type="submit" value="ログアウト">
                </form>
            </div>
        </div>
    </div>
</div>
@include("layouts.script")
