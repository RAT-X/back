
<div id="userIconBox" class="useBtn">
    <a href="">
        <div  id="userIcon">
            <p>U</p>
        </div>
    </a>
</div>

<div id="headToolBox">
    @php
        $awesomeIcons = [
            'fa-vector-square',
            'fa-comment-dots',
            'fa-magnifying-glass-plus',
            'fa-magnifying-glass-minus',
            'fa-hand',
            'fa-cloud-arrow-up',
            'fa-question',
        ];
    @endphp
    @foreach($awesomeIcons as $awesomeIcon)
        <i class="fa-solid {{$awesomeIcon}} aSColor fa-2x"></i>
    @endforeach
</div>

<div id="shareBtnArea">
    <a href="">
        <div id="shareBtn">
            <p>share</p>
        </div>
    </a>
</div>
