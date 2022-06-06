@include("layouts.head")
@include("layouts.flowchart_header")

    <div class="flowchart_page_wrapper row">
        <div id="titleAreaWrapper">
            <div id="titleArea">
                <div class="user_project_box box_flame"></div>
                <div class="plus_btn_wrapper">
                    <a class="plus_btn" type="button" href=""><i class="bi bi-plus-circle"style="font-size: 2rem"></i></a>
                </div>
            </div>
        </div>

        <div id="flowChartArea"></div>

        <div id="functionArea">
            <div id="confirmationArea">
                <div id="startEnd" class="flowchart_items">
                    <div class="fontClass">start&stop</div>
                </div>
                <div id="branch" class="flowchart_items">
                    <div id="branchFontReset">
                        <p>if</p>
                    </div>
                </div>
                <div id="process" class="flowchart_items">
                    <div class="fontClass">process</div>
                </div>
                <div id="input" class="flowchart_items">
                    <div class="fontClass">input</div>
                </div>
                <div id="loopStart" class="flowchart_items">
                    <div class="fontClass">LoopStart</div>
                </div>
                <div id="loopEnd" class="flowchart_items">
                    <div class="fontClass">LoopEnd</div>
                </div>
                <div id="display" class="flowchart_items">
                </div>
                <div id="connectOut" class="flowchart_items">
                    <div class="fontClass">C</div>
                </div>
                <div id="connectIn" class="flowchart_items">
                    <div class="fontClass">I</div>
                </div>
            </div>

            <div id="btnArea">
                <div id="functionBtn">
                    <div class="box_type box_type1 box_flame"></div>
                    <div class="box_type box_type1 box_flame"></div>
                    <div class="box_type box_type2 box_flame"></div>
                    <div class="box_type box_type2 box_flame"></div>
                    <div class="box_type box_type2 box_flame"></div>
                </div>

                <div class="howToBtn">
                <a type="button" class="btn btn-outline-info how_to_btn" href="{{ url('/') }}"></i>How To</a>
                </div>
            </div>
        </div>
    </div>

@include("layouts.script")
