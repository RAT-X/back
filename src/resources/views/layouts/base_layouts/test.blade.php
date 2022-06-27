<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>-- chartman --></title>
    <script>
        window.onload = function(){
            const req = new XMLHttpRequest();
        };
    </script>
    @include("layouts.get_styles.fc_style")
    <script src="https://kit.fontawesome.com/d41d269103.js" crossorigin="anonymous"></script>
</head>
    <body>
        <header>
            <div id="innerBoxOfHeader">
                @include("layouts.fc_items.header_item")
            </div>
        </header>
        <!-- <div id="brankBox"></div> -->
        <div id="content-wrapper">
            <div id="content-inner-wrapper">
                <section id="titleArea">
                    @include("layouts.fc_items.title_area_item")
                </section>
                <section id="flowChartArea">
                    <div class="area">
                        <canvas class="arrow"></canvas>
                        <canvas class="arrow"></canvas>
                    </div>
                    <div class="area">
                        <div>
                            <p>
                                <textarea name="textarea" id="textarea"></textarea>
                            </p>
                        </div>
                        <canvas class="arrow downArrow"></canvas>
                    </div>
                    <div class="area">
                        <canvas class="arrow"></canvas>
                        <canvas class="arrow"></canvas>
                    </div>
                </section>
                <div id="mainToolBox">
                    @include("layouts.fc_items.ca_item")
                    @include("layouts.fc_items.mti_item")
                </div>
            </div>
        </div>
        <span id="temporaly"></span>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/chartControll.js')}}"></script>
    </body>
</html>
