@include("layouts.head")

<div class="page_wrapper">
    <div class="welcome_message">
        <h2>こんにちは User.</h2>
    </div>

    <div class="welcome_wrapper">
        <div class="create_message">
            <h1>フローチャートの<br>作成を始めてください</h1>
        </div>

        <div class="choice_btn_wrapper">
            <div class="choice_btn">
                <a type="button" class="btn btn-success choice_btn" href="{{ url('/load_flowchart') }}"><i class="bi bi-arrow-up-right-square" style="font-size: 1.5rem"></i> &ensp;作成済みの<br>プロジェクトを開く</a>
            </div>
            <div class="choice_btn">
                <a type="button" class="btn btn-primary choice_btn" href="{{ url('/create_flowchart') }}"><i class="bi bi-arrow-down-right-square" style="font-size: 1.5rem"></i> &ensp;新規作成</a>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value="ログアウト">
            </form>
        </div>
    </div>
</div>
@include("layouts.script")
