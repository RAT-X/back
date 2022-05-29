<div class="visit-area fix visite-padding">
    <div class="container">
        <h1>User Login</h1>
        @error('login')
        <div class="alert alert-danger">
            &#x26A0; {{ $message }}
        </div>
        @enderror
        <form method="POST" action="/admin/login">
            @csrf
            <label class="mt-3">ユーザーID</label>
            <input type="text" name="userid" class="form-control">
            <label class="mt-3">パスワード</label>
            <input class="form-control" type="password" name="password">
            <button class="btn btn-primary mt-5" type="submit">ログイン</button>
        </form>
    </div>
</div>
