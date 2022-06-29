<div id="titleBox" class="titleBox">
    <div class="titleInnerBox">

        @if(!isset($project))
        <p id="projectTitle">{{ $project_title }}</p>
        @else
        <p id="projectTitle">{{ $project->project_title }}</p>
        @endif
    </div>
</div>
<div id="plusBtnWrapper">
    <i class="fa-solid fa-circlWe-plus"></i>
</div>
