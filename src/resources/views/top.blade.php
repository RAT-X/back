@include("layouts.head")
@include("layouts.header.main_header")

<div class="page_wrapper">
    <div class="message_wrapper">
        <h1 class="welcome_message">chartmanへようこそ</h1>
    </div>
    <div class="login_wrapper">
        <div class="login_box">
            <a type="button" class="btn btn-outline-success login_register_btn" href="{{ url('/login') }}"><i class="bi bi-arrow-up-right-square-fill" style="font-size: 1.5rem"></i> &ensp;ログイン</a>
            <a type="button" class="btn btn-outline-primary  login_register_btn" href="{{ url('/register') }}"><i class="bi bi-arrow-down-right-square-fill" style="font-size: 1.5rem"></i> &ensp;新規登録</a>
            
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value="ログアウト">
            </form>


        </div>
    </div>
</div>

{{--
@include("layouts.script")
<!-- @if (Auth::check())
<p>USER: {{$user ?? ''->name . ' (' . $user ?? ''->email . ')'}}</p>
@else
<p>※ログインしていません。(<a href="/login">ログイン</a>|
    <a href="/register">登録</a>)</p>
@endif -->
--}}