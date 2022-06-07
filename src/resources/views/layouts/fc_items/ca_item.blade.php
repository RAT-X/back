<section id="confirmationArea">
    @php
        $boxname = [
            'startEnd' => 'Start&Stop',
            'branch' => 'If',
            'process' => 'Process',
            'input' => 'Input',
            'loopStart' => 'LoopStart',
            'loopEnd' => 'LoopEnd',
            'display' => 'Display',
            'connectOut' => 'o',
            'connectIn' => 'i',
        ];
    @endphp
    @foreach($boxname as $boxid => $boxname)
        <div class="cbBox">
            <div id="{{ $boxid }}" class="confirmationBlock">
                <p>{{ $boxname }}</p>
            </div>
        </div>
    @endforeach
</section>
