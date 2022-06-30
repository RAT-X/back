
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
                <a type="button" class="btn btn-success" href="{{ url('/flowcharts') }}"><i class="bi bi-arrow-up-right-square" style="font-size: 1.5rem"></i> &ensp;作成済みの<br>プロジェクトを開く</a>
            </div>
            <div class="createBtnBox">
                <a type="button" class="btn btn-primary" href="{{ url('/chartman/new') }}"><i class="bi bi-arrow-down-right-square" style="font-size: 1.5rem"></i> &ensp;新規作成</a>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value="ログアウト">
            </form>
        </div>
    </div>
</div>
@include("layouts.script")
