<section id="mainToolItemBox">
    <div class="textTool toolBtn">
        <div class="dashedBox">
            <p class="textIcon btn">T</p>
        </div>
    </div>
    @php
        $toolItems = [
            'textBold'=>['fa-solid','fa-bold'],
            'textCheck'=>['fa-solid','fa-circle-check'],
            'textCut'=>['fa-solid','fa-scissors'],
            'insertCode'=>['fa-solid','fa-code'],
        ];

    @endphp
    @foreach($toolItems as $key => $toolItem)
        <div class="{{$key}} toolBtn">
            <div class="dashedBox">
                <i class="{{$toolItem[0]}} {{$toolItem[1]}} btn otherIcon"></i>
            </div>
        </div>
    @endforeach
</section>
