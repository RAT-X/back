@include("layouts.head")

<div class="mainPageWrapper">

    <div class="messageBox">
        <h1>chartmanへようこそ</h1>
    </div>

    <div class="loginBoxWrapper">
        <div class="loginBox">
            <a type="button" class="btn btn-success loginBtn" href="{{ url('/login') }}"><i class="bi bi-arrow-up-right-square" style="font-size: 1.5rem"></i> &ensp;ログイン</a>
            <a type="button" class="btn btn-primary  loginBtn" href="{{ url('/register') }}"><i class="bi bi-arrow-down-right-square" style="font-size: 1.5rem"></i> &ensp;新規登録</a>
        </div>
    </div>

</div>

@include("layouts.script")
<!-- @if (Auth::check())
<p>USER: {{Auth::user()->name . ' (' . Auth::user()->email . ')'}}</p>
@else
<p>※ログインしていません。(<a href="/login">ログイン</a>|
    <a href="/register">登録</a>)</p>
@endif -->
