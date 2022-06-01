@include("layouts.head")
@include("layouts.flowchart_header")

    <div class="flowchart_page_wrapper">
        <div class="flowchart_left_nav">
            <div class="user_project_box box_flame"></div>
            <div class="plus_btn_wrapper">
                <a class="plus_btn" type="button" href=""><i class="bi bi-plus-circle"style="font-size: 2rem"></i></a>
            </div>

        </div>
        <div class="flowchart_create_box box_shadow box_flame">

        </div>

        <div class="flowchart_right_nav">
            <div id="confirmationArea">
                <div id="startEnd" class="flowchart_items"></div>
                <div id="branch" class="flowchart_items"></div>
                <div id="process" class="flowchart_items"></div>
                <div id="input" class="flowchart_items"></div>
                <div id="loopStart" class="flowchart_items"></div>
                <div id="loopEnd" class="flowchart_items"></div>
                <div id="display" class="flowchart_items"></div>
                <div id="connectOut" class="flowchart_items"></div>
                <div id="connectIn" class="flowchart_items"></div>
            </div>

            <div id="btnArea" box_shadow">
                <div class="box_type box_type1 box_flame"></div>
                <div class="box_type box_type1 box_flame"></div>
                <div class="box_type box_type2 box_flame"></div>
                <div class="box_type box_type2 box_flame"></div>
                <div class="box_type box_type2 box_flame"></div>
            </div>

            <div class="how_to_btn_box">
                <a type="button" class="btn btn-outline-info how_to_btn" href="{{ url('/') }}"></i>How To</a>
            </div>


        </div>
    </div>

@include("layouts.script")
