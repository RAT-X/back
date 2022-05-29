@include("layouts.head")
@include("layouts.header.flowchart_header")

<div class="page_wrapper">
    <div class="flowchart_page_wrapper">
        <div class="flowchart_left_nav">
            <div class="project_box box"></div>


            <i class="fa-solid fa-person-circle-question"></i>
        </div>
        <div class="flowchart_create_box box_shadow">

        </div>
        <div class="flowchart_right_nav box_shadow">
            <div class="box_wrapper box_shadow">
                <div class="box_type"></div>
                <div class="box_type"></div>
                <div class="box_type"></div>
                <div class="box_type"></div>
                <div class="box_type"></div>
            </div>

            <a type="button" class="btn btn-info how_to_btn" href="{{ url('/') }}"><i class="bi bi-question-square-fill" style="font-size: 1rem"></i> &ensp;HowTo</a>
        </div>
    </div>
</div>

@include("layouts.script")
