@props(['size' => 35, 'color' => 'gray'])

@php
    switch ($color) {
        case 'gray':
            $col = "#374151";
            break;
        case 'white':
            $col = "#FFFFFF";
            break;
        default:
            $col = "#374151";
            break;
    }
@endphp

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="{{$size}}" height="{{$size}}" viewBox="0 0 172 172"
    style=" fill:#000000;">
    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
        <path d="M0,172v-172h172v172z" fill="none"></path>
        <g fill="{{$col}}">
            <path d="M150.5,35.83333l-28.83867,50.16667l-64.328,-6.149l23.97967,-38.055z" opacity="0.3"></path>
            <circle cx="7.998" cy="20.001" transform="scale(7.16667,7.16667)" r="2"></circle>
            <circle cx="17.998" cy="20.001" transform="scale(7.16667,7.16667)" r="2"></circle>
            <path
                d="M118.38617,93.17383c5.21017,0 10.01183,-2.83083 12.5345,-7.3745l25.8215,-46.47583c1.23983,-2.22167 1.204,-4.9235 -0.086,-7.1165c-1.29,-2.18583 -3.64067,-3.53317 -6.17767,-3.53317h-105.70117l-5.98417,-14.35483l-24.4455,0.11467l0.0645,14.33333l14.84217,-0.07167l5.96267,14.30467h0.61633h8.85083v0.00717h93.611l-19.909,35.83333h-51.70033l-0.00717,-0.00717h-8.69317l-12.69217,20.253c-2.86667,4.58667 -3.01717,10.37733 -0.39417,15.10017c2.623,4.72283 7.611,7.66117 13.01467,7.66117h85.41233v-14.33333h-85.41233l-0.46583,-0.8385l8.43517,-13.49483h52.503z">
            </path>
            <path d="M54.61,57.33333l-8.74333,13.90333l-0.28667,0.43h-45.58v-14.33333z"></path>
            <path d="M36.62167,86l-9.10167,14.33333h-27.52v-14.33333z"></path>
        </g>
    </g>
</svg>
