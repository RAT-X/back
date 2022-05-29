@include("layouts.head")
@include("layouts.header.main_header")

<div class="page_wrapper">
    <div class="message_wrapper">
        <h1 class="welcome_message">Welcome!! User.</h1>
        <h2>作成するフローチャートを選択してください</h2>
    </div>

    <div class="welcome_wrapper">
        <div class="welcome_box">
            <div class="choice_box">
                <div class="choice_message">
                    <h4>既存のファイルを開く場合</h4>
                    <p class="message_distance">既に作成したファイルを開く場合は<br>こちらから開くことができます</p>
                </div>
                <a type="button" class="btn btn-outline-success choice_btn" href="{{ url('/login') }}"><i class="bi bi-arrow-up-right-square-fill" style="font-size: 1.5rem"></i> &ensp;Open Project</a>
            </div>
        </div>
        <div class="welcome_box">
            <div class="choice_box">
                <div class="choice_message">
                    <h4>新しく作成する場合</h4>
                    <p class="message_distance">新しくフローチャートを作成する場合は<br>こちらから作成できます</p>
                </div>

                <a type="button" class="btn btn-outline-primary choice_btn" href="{{ url('/register') }}"><i class="bi bi-arrow-down-right-square-fill" style="font-size: 1.5rem"></i> &ensp;Create Project</a>
            </div>
        </div>
    </div>
</div>
@include("layouts.script")
