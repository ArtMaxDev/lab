@php($id = mt_rand(1, time()))
<svg viewbox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" class="ot-team-hexagon">
    <filter id="grayscale">
        <feColorMatrix type="matrix" values="0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0" />
    </filter>
    <defs>
        <pattern id="hexagon-{{$id}}" patternUnits="userSpaceOnUse" width="100" height="100">
            <image class="ot-team-hexagon__img" xlink:href="{{$image}}" x="-25" y="5" width="150" height="100" />
        </pattern>
    </defs>
    <polygon class="ot-team-hexagon__hex" points="50 6 90 30 90 70 50 94 10 70 10 30" fill="url(#hexagon-{{$id}})"/>
</svg>
