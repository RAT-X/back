@include("layouts.head")



    <h1>入力用サンプルページ</h1>
    {{Form::open(['method' => 'get', 'url' => 'sampletransition'])}}
        <p>ユーザー名：{{Form::text('user_name', '', ['id' => 'username'])}}</p>
        <p>年齢：{{Form::text('age', '', ['id' => 'age'])}}</p>
        <p>{{ Form::button('入力', ['type' => 'submit'])}}</p>
    {{Form::close()}}

@include("layouts.script")
