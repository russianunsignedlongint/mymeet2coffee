<x-guest-layout>
    
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <!-- <a href="{{ route('faq') }}" class="text-sm text-gray-700 underline ml-4">FAQ</a> -->

                        <a href="{{ route('about') }}" class="text-sm text-gray-700 underline ml-4">About Us</a>

                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline ml-4">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />

            <!-- COLOR SHOULD  BE 306ab6 :) -->
            
            <!-- add this  in footer of  the page please with very very small font size hahah:
            
              <div>Icons made by <a href="https://www.flaticon.com/authors/vitaly-gorbachev" title="Vitaly Gorbachev">Vitaly Gorbachev</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>  -->
        
 
                    <!-- 
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="960.000000pt" height="540.000000pt" viewBox="0 0 960.000000 540.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,540.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M3590 4871 c-177 -36 -240 -253 -109 -378 65 -61 144 -78 230 -48
                    l43 15 121 -120 c67 -66 125 -120 129 -120 23 0 46 24 46 48 0 21 -25 52 -116
                    143 l-116 116 18 34 c23 45 23 133 -1 182 -45 95 -146 148 -245 128z m131
                    -130 c33 -33 39 -45 39 -82 0 -123 -131 -180 -216 -95 -85 85 -28 216 95 216
                    37 0 49 -6 82 -39z"/>
                    <path d="M5909 4866 c-131 -35 -203 -188 -143 -307 12 -25 9 -29 -107 -145
                    -118 -117 -135 -144 -107 -172 27 -27 55 -11 172 107 l118 118 30 -15 c76 -38
                    175 -23 240 36 175 158 24 439 -203 378z m129 -106 c69 -43 78 -136 18 -196
                    -85 -85 -216 -28 -216 95 0 37 6 49 39 82 33 33 45 39 82 39 26 0 57 -8 77
                    -20z"/>
                    <path d="M4637 4415 c-367 -70 -647 -327 -750 -690 -25 -91 -34 -301 -17 -399
                    26 -147 88 -288 178 -408 l53 -71 -105 -106 c-104 -105 -121 -132 -94 -159 27
                    -27 54 -10 159 94 l106 106 60 -46 c191 -145 441 -215 672 -188 235 27 422
                    121 584 292 117 123 187 250 235 422 25 93 24 356 -2 453 -46 168 -121 301
                    -240 424 -127 131 -278 220 -447 261 -112 28 -289 34 -392 15z m113 -480 l0
                    -405 -200 0 -200 0 0 40 c0 151 88 371 211 527 50 64 58 90 37 111 -22 22 -55
                    13 -86 -23 -130 -147 -234 -389 -257 -597 l-6 -58 -150 0 c-171 0 -158 -11
                    -135 112 68 357 360 635 721 687 33 5 61 9 63 10 1 0 2 -181 2 -404z m296 364
                    c146 -45 266 -121 375 -237 145 -155 214 -317 226 -529 20 -349 -170 -667
                    -488 -818 -83 -39 -212 -75 -271 -75 l-38 0 0 400 0 400 201 0 202 0 -6 -74
                    c-8 -87 -53 -234 -100 -323 -29 -57 -104 -168 -158 -234 -26 -33 -18 -66 17
                    -75 32 -8 50 8 126 110 112 150 193 355 213 539 l6 57 83 0 c86 0 106 8 106
                    45 0 37 -20 45 -106 45 l-83 0 -6 58 c-27 239 -140 478 -313 660 -38 39 -66
                    72 -62 72 4 0 39 -10 76 -21z m-47 -152 c68 -78 132 -176 172 -264 39 -86 79
                    -240 79 -304 l0 -49 -200 0 -200 0 0 381 0 381 48 -42 c26 -23 71 -69 101
                    -103z m-744 -764 c27 -241 135 -470 309 -650 43 -46 74 -83 68 -83 -5 0 -41
                    10 -78 21 -302 93 -531 348 -590 657 -23 123 -36 112 135 112 l150 0 6 -57z
                    m495 -325 l0 -382 -76 74 c-126 124 -195 222 -255 363 -37 88 -69 216 -69 280
                    l0 47 200 0 200 0 0 -382z"/>
                    <path d="M5552 2728 c-28 -28 -11 -55 107 -172 116 -116 119 -120 107 -145
                    -22 -43 -26 -89 -15 -143 9 -42 22 -62 64 -104 58 -59 90 -69 181 -62 141 12
                    235 174 175 303 -51 112 -167 160 -287 119 l-47 -16 -116 116 c-115 114 -142
                    131 -169 104z m468 -293 c127 -66 85 -245 -59 -245 -37 0 -49 6 -82 39 -33 33
                    -39 45 -39 82 0 101 96 167 180 124z"/>
                    <path d="M3545 2521 c-121 -55 -167 -185 -107 -302 39 -78 92 -112 181 -117
                    80 -5 129 15 180 74 42 47 53 77 53 145 0 158 -165 265 -307 200z m140 -85
                    c45 -19 75 -69 75 -125 0 -37 -6 -49 -39 -82 -33 -33 -45 -39 -82 -39 -141 0
                    -186 167 -66 240 38 24 66 25 112 6z"/>
                    <path d="M3670 1743 c-24 -3 -47 -8 -50 -13 -3 -5 -7 -76 -8 -158 -3 -131 -1
                    -151 15 -171 21 -25 95 -37 167 -27 40 6 46 10 46 32 0 13 -6 24 -12 25 -7 0
                    -44 2 -83 2 l-70 2 -3 46 -3 46 47 7 c26 3 61 6 79 6 37 0 58 20 49 45 -6 15
                    -17 17 -86 12 l-78 -5 0 43 c0 42 2 44 33 50 17 3 57 5 87 3 53 -3 55 -2 55
                    22 0 36 -48 45 -185 33z"/>
                    <path d="M3950 1742 l-45 -7 -8 -135 c-11 -170 -3 -205 51 -220 72 -20 166
                    -11 177 18 10 27 -13 36 -87 33 -80 -3 -88 3 -88 60 0 36 1 36 46 43 26 3 61
                    6 79 6 37 0 60 22 51 46 -6 14 -18 16 -86 11 l-80 -5 0 43 c0 40 2 44 31 50
                    17 4 55 4 83 1 42 -6 55 -4 66 9 32 39 -70 64 -190 47z"/>
                    <path d="M6020 1743 c-24 -3 -47 -8 -50 -13 -3 -4 -5 -78 -5 -164 0 -127 3
                    -158 16 -171 19 -19 102 -30 163 -21 40 6 46 10 46 32 0 13 -6 24 -12 25 -7 0
                    -44 2 -83 2 l-70 2 -3 46 -3 46 47 7 c26 3 61 6 79 6 37 0 60 22 51 46 -6 14
                    -18 16 -86 11 l-80 -5 0 43 c0 42 2 44 33 50 17 3 57 5 87 3 53 -3 55 -2 55
                    22 0 36 -48 45 -185 33z"/>
                    <path d="M6300 1742 l-45 -7 -8 -135 c-10 -171 -2 -205 51 -220 77 -21 182 -7
                    182 24 0 24 -21 30 -94 27 -76 -3 -86 3 -86 56 0 39 3 41 76 48 98 10 106 13
                    102 38 -3 21 -8 22 -85 21 l-83 -1 0 42 c0 41 1 43 36 50 20 3 59 3 88 0 45
                    -6 54 -4 60 11 4 10 1 24 -8 32 -16 16 -117 24 -186 14z"/>
                    <path d="M5420 1726 c-6 -6 -10 -79 -10 -178 0 -141 2 -170 15 -174 31 -12 45
                    15 45 91 0 84 1 85 90 85 63 0 82 16 53 46 -13 12 -31 15 -80 12 l-63 -4 0 39
                    0 39 87 -3 c78 -4 88 -2 91 14 6 28 -57 48 -144 45 -40 -1 -78 -6 -84 -12z"/>
                    <path d="M5694 1723 c-12 -12 -14 -45 -12 -175 3 -143 5 -162 21 -172 30 -18
                    47 17 47 96 0 76 -1 75 95 80 43 3 50 6 53 25 4 27 -25 37 -98 31 l-50 -3 0
                    39 0 39 79 -6 c75 -5 101 2 101 26 0 34 -204 51 -236 20z"/>
                    <path d="M3276 1708 c-8 -13 -17 -39 -21 -58 -3 -19 -18 -81 -32 -138 -25 -97
                    -25 -104 -9 -120 28 -28 48 -4 69 89 l20 84 23 -79 c12 -43 29 -86 38 -94 14
                    -14 17 -14 35 2 11 10 32 55 47 100 l28 81 20 -85 c24 -98 30 -110 56 -110 30
                    0 32 15 11 97 -11 43 -25 110 -32 148 -14 88 -24 107 -52 103 -23 -3 -29 -16
                    -68 -146 -12 -40 -24 -71 -26 -69 -2 2 -12 46 -24 98 -11 51 -25 99 -31 106
                    -16 19 -36 16 -52 -9z"/>
                    <path d="M4163 1714 c-11 -28 6 -43 55 -50 l50 -6 6 -46 c3 -24 6 -80 6 -122
                    0 -54 4 -81 14 -89 17 -14 46 -4 47 18 3 35 -2 188 -7 213 -5 27 -5 27 63 30
                    62 3 68 5 71 26 2 12 -3 24 -10 26 -7 3 -75 7 -151 9 -112 4 -140 2 -144 -9z"/>
                    <path d="M4539 1707 c-40 -27 -52 -67 -20 -67 11 0 36 9 55 21 46 27 78 18 74
                    -19 -2 -20 -20 -39 -65 -72 -34 -25 -66 -55 -72 -68 -15 -30 -14 -89 1 -98 6
                    -4 52 -7 102 -7 72 0 92 4 100 16 18 29 -9 42 -85 42 -43 0 -69 4 -69 11 0 13
                    33 42 88 78 41 26 72 74 72 111 0 9 -13 30 -29 46 -38 38 -101 40 -152 6z"/>
                    <path d="M4928 1721 c-37 -5 -57 -16 -88 -46 -116 -113 -105 -268 21 -282 69
                    -8 160 44 145 82 -7 20 -29 19 -73 -5 -47 -25 -75 -25 -96 -2 -31 34 -14 101
                    41 160 32 35 76 43 86 16 3 -9 15 -14 28 -12 25 3 34 32 24 74 -7 25 -9 26
                    -88 15z"/>
                    <path d="M5154 1716 c-62 -27 -114 -117 -114 -197 0 -111 153 -178 249 -109
                    74 52 108 203 59 265 -40 51 -127 70 -194 41z m144 -72 c22 -31 11 -116 -22
                    -158 -31 -41 -63 -53 -108 -40 -80 23 -88 116 -17 188 37 36 42 38 86 33 29
                    -3 52 -12 61 -23z"/>
                    <path d="M3060 890 c0 -124 18 -134 22 -12 l3 87 45 -85 c26 -50 52 -86 63
                    -88 15 -3 17 7 17 97 0 61 -4 101 -10 101 -6 0 -10 -34 -10 -82 l0 -83 -46 83
                    c-32 59 -51 82 -65 82 -18 0 -19 -8 -19 -100z"/>
                    <path d="M3270 890 l0 -100 65 0 c37 0 65 4 65 10 0 6 -25 10 -56 10 l-55 0 3
                    38 3 37 53 3 c70 4 67 22 -4 22 -54 0 -55 0 -52 28 3 25 7 27 56 30 75 4 65
                    22 -13 22 l-65 0 0 -100z"/>
                    <path d="M3420 980 c0 -5 16 -10 35 -10 l35 0 0 -90 c0 -73 3 -90 15 -90 12 0
                    15 17 15 90 l0 90 35 0 c19 0 35 5 35 10 0 6 -35 10 -85 10 -50 0 -85 -4 -85
                    -10z"/>
                    <path d="M3628 890 c21 -76 31 -100 44 -100 12 0 21 18 34 75 10 41 21 72 24
                    70 4 -3 13 -31 20 -63 14 -70 23 -87 42 -80 14 6 63 186 53 196 -11 11 -23
                    -15 -40 -88 -10 -41 -21 -68 -23 -60 -3 8 -13 44 -22 80 -24 94 -41 91 -66
                    -12 l-21 -83 -11 40 c-6 22 -16 59 -22 83 -6 23 -17 42 -24 42 -11 0 -8 -22
                    12 -100z"/>
                    <path d="M3912 967 c-69 -74 -12 -200 83 -183 41 8 64 34 72 79 12 79 -22 127
                    -90 127 -32 0 -49 -6 -65 -23z m108 -17 c25 -25 27 -95 3 -122 -23 -26 -78
                    -24 -97 4 -26 37 -16 108 18 130 20 14 56 8 76 -12z"/>
                    <path d="M4110 890 c0 -82 3 -100 15 -100 11 0 15 11 15 40 0 33 3 40 20 40
                    10 0 33 -18 51 -40 18 -22 41 -40 52 -40 16 0 14 6 -17 40 l-37 41 21 26 c25
                    32 25 48 0 73 -15 15 -33 20 -70 20 l-50 0 0 -100z m91 70 c39 -21 16 -70 -33
                    -70 -26 0 -28 3 -28 40 0 34 3 40 21 40 11 0 29 -5 40 -10z"/>
                    <path d="M4310 890 c0 -82 3 -100 15 -100 10 0 15 10 15 34 0 52 18 54 57 7
                    19 -22 41 -41 49 -41 22 0 17 9 -27 57 l-40 44 41 47 c27 30 37 48 29 51 -7 2
                    -35 -20 -61 -50 l-48 -54 0 53 c0 39 -4 52 -15 52 -12 0 -15 -18 -15 -100z"/>
                    <path d="M4490 980 c0 -5 7 -10 15 -10 24 0 21 -148 -2 -166 -16 -12 -13 -13
                    25 -14 23 0 42 5 42 10 0 6 -4 10 -10 10 -6 0 -10 33 -10 80 0 47 4 80 10 80
                    6 0 10 5 10 10 0 6 -18 10 -40 10 -22 0 -40 -4 -40 -10z"/>
                    <path d="M4620 890 c0 -81 3 -100 15 -100 11 0 15 18 17 81 l3 81 43 -81 c31
                    -58 49 -81 63 -81 17 0 19 8 19 100 0 82 -3 100 -15 100 -12 0 -15 -16 -16
                    -82 l0 -83 -42 83 c-34 67 -46 82 -64 82 -22 0 -23 -3 -23 -100z"/>
                    <path d="M4849 961 c-33 -34 -39 -83 -14 -131 20 -39 78 -57 129 -40 34 11 36
                    14 36 56 l0 44 -40 0 c-29 0 -40 -4 -40 -15 0 -9 9 -15 25 -15 20 0 25 -5 25
                    -25 0 -23 -4 -25 -44 -25 -54 0 -76 24 -76 82 0 68 58 96 133 64 12 -6 17 -4
                    17 7 0 19 -21 27 -77 27 -36 0 -50 -6 -74 -29z"/>
                    <path d="M5150 890 c0 -60 4 -100 10 -100 6 0 10 34 10 83 l1 82 30 -57 c16
                    -32 31 -58 34 -58 3 0 18 26 34 58 l30 57 1 -82 c0 -67 3 -83 15 -83 12 0 15
                    18 15 100 0 94 -1 100 -21 100 -15 0 -27 -15 -46 -57 l-27 -58 -25 57 c-17 38
                    -32 57 -43 58 -16 0 -18 -11 -18 -100z"/>
                    <path d="M5402 908 c-17 -46 -33 -91 -37 -100 -5 -13 -2 -18 9 -18 8 0 18 11
                    22 25 5 22 11 25 54 25 43 0 49 -3 54 -25 4 -14 14 -25 22 -25 11 0 14 5 9 18
                    -4 9 -20 54 -37 100 -22 61 -34 82 -48 82 -14 0 -26 -21 -48 -82z m66 9 c16
                    -46 16 -47 -18 -47 -33 0 -35 3 -19 49 14 40 22 39 37 -2z"/>
                    <path d="M5570 891 l0 -101 50 0 c86 0 123 31 122 103 -1 61 -35 89 -112 95
                    l-60 4 0 -101z m98 68 c55 -19 66 -101 19 -134 -12 -8 -36 -15 -54 -15 l-33 0
                    0 80 c0 88 3 92 68 69z"/>
                    <path d="M5790 890 l0 -100 65 0 c37 0 65 4 65 10 0 6 -22 10 -50 10 l-50 0 0
                    40 0 40 50 0 c28 0 50 5 50 10 0 6 -22 10 -50 10 -49 0 -50 1 -50 30 0 29 1
                    30 50 30 28 0 50 5 50 10 0 6 -28 10 -65 10 l-65 0 0 -100z"/>
                    <path d="M6060 890 l0 -100 70 0 c40 0 70 4 70 10 0 6 -25 10 -55 10 l-55 0 0
                    40 0 40 55 0 c30 0 55 5 55 10 0 6 -25 10 -55 10 -54 0 -55 0 -55 30 0 30 1
                    30 55 30 30 0 55 5 55 10 0 6 -30 10 -70 10 l-70 0 0 -100z"/>
                    <path d="M6262 908 c-17 -46 -33 -91 -37 -100 -5 -13 -2 -18 9 -18 8 0 18 11
                    22 25 5 22 11 25 54 25 43 0 49 -3 54 -25 4 -14 14 -25 22 -25 11 0 14 5 9 18
                    -4 9 -20 54 -37 100 -22 61 -34 82 -48 82 -14 0 -26 -21 -48 -82z m62 18 c3
                    -13 9 -31 12 -40 5 -13 -1 -16 -25 -16 -34 0 -36 3 -20 49 13 37 25 40 33 7z"/>
                    <path d="M6448 979 c-20 -11 -25 -74 -7 -85 6 -4 32 -12 58 -19 39 -9 46 -15
                    46 -36 0 -22 -4 -24 -45 -23 -25 0 -53 4 -64 9 -14 6 -17 4 -15 -10 8 -37 103
                    -43 141 -8 42 38 12 84 -64 97 -39 7 -55 30 -37 52 14 17 62 18 91 3 17 -9 19
                    -8 16 8 -2 14 -14 19 -53 20 -28 2 -58 -2 -67 -8z"/>
                    <path d="M6621 953 c12 -21 29 -47 36 -58 7 -11 13 -39 13 -62 0 -32 4 -43 15
                    -43 11 0 15 12 15 45 0 35 8 59 35 100 25 40 31 55 20 55 -8 0 -28 -21 -44
                    -46 l-28 -46 -27 46 c-15 25 -34 46 -42 46 -13 0 -11 -7 7 -37z"/>
                    </g>
                    </svg>

           -->
       

            <!-- <img src="{{asset('/img/logo.png')}}" height="200" width="200" style="float: center"> -->
            <!-- <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
            width="188.000000pt" height="182.400000pt" viewBox="0 0 1222.000000 1216.000000"
            preserveAspectRatio="xMidYMid meet">

            <g transform="translate(0.000000,1216.000000) scale(0.100000,-0.100000)"
            fill="#2b65bc" stroke="none">
            <path d="M4915 9605 c-77 -36 -152 -97 -175 -141 -8 -16 -22 -41 -32 -55 -40
            -59 -42 -284 -4 -328 7 -9 20 -29 29 -46 8 -16 38 -52 66 -80 97 -95 263 -140
            366 -98 22 9 58 17 80 17 39 0 46 -6 250 -210 115 -115 219 -222 231 -238 19
            -28 20 -32 6 -100 -20 -106 -11 -187 32 -271 68 -132 151 -197 279 -217 161
            -25 278 17 381 134 79 90 118 254 81 341 -32 77 -35 73 223 330 257 257 258
            258 327 221 17 -9 60 -19 97 -21 60 -5 78 -2 154 28 72 28 96 43 148 96 43 42
            67 76 75 104 7 24 20 53 28 65 24 37 13 184 -19 259 -36 82 -135 181 -215 214
            -72 30 -221 41 -256 19 -12 -8 -43 -22 -68 -31 -29 -11 -69 -40 -106 -77 -103
            -103 -149 -266 -106 -375 8 -22 17 -56 20 -75 5 -34 -1 -41 -214 -252 -120
            -119 -227 -226 -238 -236 -20 -20 -21 -20 -60 2 -35 18 -56 21 -175 21 -114 0
            -140 -3 -166 -19 -31 -18 -31 -18 -70 7 -21 14 -132 119 -245 234 l-207 208 9
            55 c29 191 20 275 -41 368 -46 71 -100 114 -189 152 -59 25 -83 30 -148 29
            -66 -1 -88 -6 -148 -34z"/>
            <path d="M3950 8609 c-109 -9 -216 -85 -283 -200 -53 -91 -53 -289 1 -377 59
            -95 148 -167 233 -187 79 -18 145 -19 229 -1 45 9 73 11 93 4 36 -13 444 -422
            461 -463 8 -18 10 -39 5 -52 -11 -31 -14 -147 -5 -238 l7 -80 -218 -217 c-281
            -280 -271 -273 -320 -240 -22 14 -49 17 -138 17 -105 0 -113 -2 -168 -33 -171
            -94 -238 -226 -215 -427 7 -68 14 -88 46 -134 63 -92 136 -147 233 -177 50
            -15 98 -23 119 -21 56 7 173 45 199 64 67 52 86 71 123 127 53 80 69 186 46
            316 -13 71 -13 89 -2 110 7 14 109 121 226 237 234 234 236 235 313 194 32
            -17 56 -21 135 -21 87 0 101 3 161 33 116 56 186 137 213 243 58 227 -50 430
            -262 493 -86 26 -150 26 -226 1 -110 -37 -96 -46 -338 198 -119 119 -221 228
            -226 242 -7 17 -5 47 4 90 43 204 -18 355 -186 458 -62 38 -145 51 -260 41z"/>
            <path d="M4994 8610 c-109 -12 -223 -99 -284 -217 -30 -59 -32 -69 -32 -169 0
            -102 2 -109 35 -173 95 -181 254 -252 466 -207 35 7 76 10 92 7 33 -7 450
            -405 476 -454 14 -28 14 -33 -3 -61 -26 -45 -26 -201 0 -273 l20 -52 -156
            -153 c-339 -335 -345 -340 -404 -302 -23 16 -48 19 -139 19 -109 0 -111 -1
            -175 -37 -69 -39 -137 -103 -163 -153 -46 -87 -49 -99 -49 -203 0 -97 2 -107
            34 -169 41 -81 143 -178 203 -194 22 -6 59 -17 83 -25 59 -19 81 -18 177 11
            99 30 159 73 219 156 66 91 78 187 47 371 l-8 47 126 125 c119 117 280 273
            334 324 30 27 34 27 88 2 63 -28 200 -28 285 1 l62 21 117 -113 c324 -316 365
            -358 365 -378 0 -11 -9 -44 -21 -73 -46 -115 1 -284 108 -391 53 -53 204 -117
            275 -117 47 0 186 49 229 80 56 40 114 111 129 156 7 20 18 48 26 62 8 16 14
            58 14 102 0 143 -84 281 -217 356 -63 35 -75 38 -164 42 -82 4 -103 1 -144
            -17 -26 -12 -55 -21 -65 -21 -16 0 -137 113 -401 372 -97 95 -98 97 -92 135 3
            21 12 55 20 77 18 53 16 113 -6 178 -27 79 -19 102 63 181 247 239 379 363
            391 370 8 4 59 0 115 -9 85 -15 114 -15 177 -6 135 21 235 103 294 243 27 64
            30 79 26 153 -2 59 -10 97 -29 139 -29 67 -101 155 -144 177 -16 8 -42 24 -57
            35 -25 18 -44 20 -165 20 l-137 0 -66 -43 c-59 -38 -149 -131 -149 -154 0 -5
            -10 -30 -22 -56 -29 -63 -35 -163 -13 -222 36 -97 40 -88 -96 -222 -68 -66
            -175 -171 -237 -231 -126 -124 -124 -124 -243 -91 -64 18 -125 15 -216 -10
            -52 -14 -66 -15 -87 -4 -13 7 -89 76 -169 153 -79 77 -176 170 -215 208 -84
            80 -93 101 -75 177 25 108 7 260 -40 322 -72 97 -169 165 -243 173 -94 11
            -109 11 -170 5z"/>
            <path d="M8160 8609 c-92 -8 -130 -29 -220 -120 -61 -62 -68 -74 -93 -156 -32
            -106 -33 -123 -6 -199 37 -107 39 -104 -200 -342 -116 -116 -223 -218 -237
            -225 -24 -12 -36 -11 -107 10 -103 29 -149 29 -253 -3 -77 -23 -89 -31 -148
            -90 -39 -39 -70 -80 -77 -102 -6 -20 -19 -48 -28 -62 -12 -19 -16 -48 -15
            -115 0 -79 4 -98 31 -155 41 -87 114 -162 199 -205 63 -33 74 -35 161 -35 58
            0 107 5 128 14 75 32 64 39 319 -215 229 -228 236 -236 236 -275 0 -21 -7 -57
            -15 -79 -21 -58 -18 -90 13 -186 47 -143 127 -221 271 -265 96 -29 125 -28
            236 9 106 35 176 100 231 213 31 64 34 79 34 159 0 80 -3 95 -34 159 -42 86
            -116 160 -200 202 -54 26 -69 29 -165 29 -91 0 -112 -3 -146 -23 -22 -12 -47
            -22 -57 -22 -9 0 -123 106 -253 236 l-237 236 7 36 c4 20 13 49 21 64 19 36
            18 174 -1 208 -30 53 -26 60 218 305 262 265 229 245 383 223 198 -28 346 50
            430 227 35 73 36 79 32 168 -3 79 -8 101 -35 157 -39 79 -107 148 -188 188
            -67 34 -120 41 -235 31z"/>
            <path d="M6015 6573 c-42 -12 -130 -68 -175 -114 -27 -27 -63 -79 -82 -116
            -30 -63 -33 -75 -33 -164 0 -73 4 -102 18 -122 39 -59 34 -66 -211 -310 -126
            -125 -235 -227 -243 -227 -8 0 -41 7 -74 14 -108 25 -157 28 -237 12 -116 -22
            -207 -94 -268 -212 -30 -58 -32 -68 -32 -169 0 -103 2 -110 35 -174 41 -79 88
            -130 147 -162 23 -13 52 -29 63 -36 31 -18 156 -26 229 -15 130 20 258 138
            292 270 19 72 20 128 4 222 l-12 71 239 239 c262 262 253 256 340 225 77 -28
            115 -28 209 -1 48 14 97 26 109 26 26 0 462 -432 476 -471 7 -22 5 -36 -11
            -66 -17 -30 -22 -57 -22 -123 -1 -73 3 -94 28 -150 40 -89 96 -153 175 -200
            55 -33 78 -40 141 -45 93 -8 184 6 234 37 72 43 154 128 173 177 9 25 23 57
            30 71 17 34 17 178 -1 212 -8 14 -19 41 -25 60 -16 48 -81 122 -143 164 -39
            26 -74 40 -132 51 -71 13 -88 13 -183 -3 l-105 -17 -234 234 c-131 130 -237
            245 -241 259 -3 13 1 45 10 71 23 64 21 117 -8 213 -22 71 -33 90 -82 143 -37
            38 -82 74 -123 95 -59 30 -74 33 -160 35 -52 1 -104 -1 -115 -4z"/>
            <path d="M2080 4010 c-20 -20 -21 -30 -18 -361 3 -396 -2 -375 102 -366 32 3
            63 10 69 16 5 5 12 56 15 113 6 137 27 178 52 102 7 -20 25 -61 41 -91 16 -30
            29 -61 29 -68 0 -7 16 -27 35 -44 33 -28 42 -31 106 -31 68 0 71 1 104 38 19
            20 35 42 35 47 0 6 15 42 34 80 19 39 39 83 45 99 21 52 35 14 41 -113 4 -75
            11 -125 19 -135 19 -23 133 -22 152 1 11 13 14 83 14 358 0 275 -3 345 -14
            358 -10 13 -30 17 -82 17 -61 0 -72 -3 -102 -30 -20 -17 -39 -47 -46 -72 -7
            -23 -22 -53 -32 -67 -10 -13 -19 -29 -19 -36 0 -7 -13 -39 -30 -71 -16 -32
            -36 -75 -45 -94 -9 -19 -29 -60 -44 -90 l-28 -55 -22 35 c-12 19 -33 60 -47
            90 -14 30 -30 62 -35 70 -5 8 -16 31 -24 50 -9 19 -29 62 -44 95 -16 33 -32
            69 -35 80 -3 11 -21 37 -40 58 -34 36 -38 37 -100 37 -53 0 -70 -4 -86 -20z"/>
            <path d="M3129 4013 c-21 -24 -20 -692 0 -717 13 -15 39 -17 267 -14 288 3
            281 1 290 84 5 42 3 52 -16 69 -20 18 -39 20 -184 23 -91 2 -166 8 -173 14
            -21 17 -16 76 6 88 11 5 69 10 130 10 150 0 171 12 171 95 0 63 -29 75 -177
            75 -131 0 -143 5 -143 55 0 52 10 55 171 55 173 0 206 8 214 54 9 47 -7 99
            -36 113 -17 9 -94 13 -265 13 -213 0 -243 -2 -255 -17z"/>
            <path d="M3826 4008 c-14 -19 -16 -66 -16 -348 0 -242 4 -331 13 -350 l13 -25
            244 -2 c282 -3 290 -2 303 66 10 52 3 86 -20 97 -10 4 -94 10 -188 13 l-170 6
            -3 39 c-2 21 2 44 8 50 6 6 67 13 146 16 159 6 167 11 162 95 -4 67 -21 75
            -166 75 -62 0 -122 5 -133 10 -22 12 -27 71 -6 88 7 6 84 12 179 14 118 2 171
            7 180 16 7 7 12 35 12 68 -2 91 6 89 -288 92 l-254 3 -16 -23z"/>
            <path d="M4499 4019 c-28 -10 -39 -40 -39 -106 0 -29 5 -36 35 -49 20 -8 67
            -14 115 -14 129 0 120 21 120 -273 0 -301 -1 -297 89 -297 99 0 95 -11 99 287
            2 159 8 263 14 270 7 9 41 13 102 13 125 0 141 11 133 94 -4 41 -11 64 -23 73
            -22 16 -603 17 -645 2z"/>
            <path d="M5425 4020 c-86 -39 -160 -129 -160 -194 0 -62 16 -76 86 -76 59 0
            60 0 91 45 34 48 73 68 118 58 44 -8 53 -26 48 -87 -4 -52 -8 -58 -64 -112
            -32 -31 -93 -78 -134 -104 -41 -27 -92 -63 -112 -80 -36 -31 -38 -35 -38 -95
            0 -98 -9 -95 264 -95 170 0 237 3 249 13 10 7 19 33 23 68 9 74 -2 84 -103 92
            -117 9 -141 23 -83 47 17 7 61 44 99 81 61 61 71 76 86 134 16 57 16 72 5 126
            -15 71 -49 116 -119 161 -42 26 -52 28 -140 27 -53 0 -105 -4 -116 -9z"/>
            <path d="M6175 4023 c-11 -3 -31 -14 -44 -24 -13 -11 -30 -19 -38 -19 -29 0
            -123 -103 -156 -169 -29 -60 -32 -75 -32 -156 1 -81 4 -96 33 -155 43 -85 101
            -143 187 -187 67 -35 75 -36 175 -37 101 0 108 1 170 33 85 44 139 97 146 143
            6 35 5 36 -50 66 l-57 31 -42 -30 c-23 -16 -53 -37 -66 -47 -18 -12 -45 -17
            -101 -17 -73 0 -78 2 -119 37 -50 43 -90 118 -90 168 0 46 45 130 88 166 32
            27 41 29 121 29 70 0 91 -4 114 -20 95 -66 85 -63 135 -45 116 45 91 125 -64
            204 -67 35 -72 36 -180 35 -60 -1 -119 -4 -130 -6z"/>
            <path d="M6905 3999 c-155 -81 -227 -215 -210 -394 3 -38 15 -89 26 -112 32
            -66 103 -138 177 -179 64 -35 72 -37 163 -38 90 -1 99 1 163 34 93 47 166 129
            200 226 33 91 33 147 0 239 -32 90 -110 179 -198 225 -54 28 -67 30 -160 30
            -94 0 -105 -2 -161 -31z m213 -148 c48 -9 80 -35 124 -100 56 -84 36 -178 -55
            -258 -96 -84 -274 -35 -308 85 -42 150 37 274 181 280 8 1 34 -3 58 -7z"/>
            <path d="M7579 4011 l-24 -19 0 -335 c0 -321 1 -336 20 -357 17 -19 28 -21 77
            -18 81 6 88 15 88 112 0 73 3 85 23 104 21 20 34 22 145 22 122 0 123 0 132
            26 14 35 12 118 -2 132 -8 8 -54 12 -139 12 -146 0 -150 2 -151 80 0 79 2 80
            176 80 166 0 180 4 189 56 7 38 -7 104 -25 115 -7 5 -119 9 -249 9 -218 0
            -239 -1 -260 -19z"/>
            <path d="M8270 4010 c-20 -20 -21 -30 -18 -361 3 -324 4 -341 22 -355 23 -17
            81 -18 123 -3 35 12 43 36 43 134 0 90 8 95 157 95 138 0 141 1 150 79 5 41 2
            55 -12 71 -16 18 -31 20 -141 20 -146 0 -154 4 -154 84 0 28 5 57 12 64 8 8
            60 12 168 12 143 0 158 2 175 20 24 26 17 126 -10 146 -15 11 -73 14 -257 14
            -226 0 -239 -1 -258 -20z"/>
            <path d="M8973 4018 c-32 -15 -35 -51 -31 -400 3 -294 4 -308 23 -322 17 -13
            62 -15 261 -16 280 0 274 -2 274 92 0 85 -7 88 -186 88 -82 0 -154 4 -161 8
            -22 14 -27 61 -8 82 16 18 32 20 139 20 67 0 127 4 135 9 9 6 16 32 19 68 6
            88 -1 93 -152 93 -109 0 -125 2 -141 20 -19 21 -14 68 8 82 7 4 80 8 164 8
            180 0 183 2 183 89 0 93 5 91 -271 90 -144 0 -243 -4 -256 -11z"/>
            <path d="M9664 4016 c-18 -14 -19 -29 -19 -361 0 -332 1 -347 19 -361 16 -11
            69 -14 262 -14 240 0 243 0 258 22 10 13 16 44 16 75 0 78 -11 83 -195 83
            -162 0 -175 4 -175 50 0 51 24 60 157 60 137 0 142 3 151 75 3 31 0 52 -12 70
            -16 24 -19 25 -137 25 -139 0 -159 7 -159 53 0 54 9 57 180 57 186 0 190 2
            190 93 0 87 1 87 -280 87 -188 0 -240 -3 -256 -14z"/>
            <path d="M570 3031 l-25 -7 -3 -241 -2 -241 29 -10 c22 -8 34 -7 50 4 19 14
            21 25 21 135 0 100 3 121 16 126 22 8 80 -21 100 -52 9 -14 30 -40 48 -59 17
            -19 51 -60 76 -90 54 -66 105 -88 146 -61 l24 15 0 234 c0 232 0 233 -22 243
            -15 7 -33 7 -50 1 l-27 -10 -3 -121 -3 -121 -29 -16 c-27 -14 -29 -14 -50 14
            -25 34 -133 165 -179 217 -33 38 -73 51 -117 40z"/>
            <path d="M1228 3029 c-16 -9 -18 -32 -18 -249 0 -233 1 -240 21 -251 14 -7 75
            -10 178 -7 164 3 196 11 184 46 -12 35 -35 42 -140 42 -90 0 -106 3 -123 20
            -24 24 -25 48 -5 76 12 18 28 22 106 26 95 6 112 14 107 53 -3 18 -12 20 -98
            25 -52 3 -100 8 -106 12 -7 4 -15 24 -19 44 -5 27 -2 41 11 55 15 16 32 19
            118 19 137 0 146 3 146 50 0 37 -1 37 -46 44 -73 10 -297 6 -316 -5z"/>
            <path d="M1725 3031 c-26 -5 -30 -11 -33 -44 -2 -20 -2 -37 0 -38 2 0 40 -4
            85 -8 45 -4 89 -14 98 -21 12 -10 15 -43 15 -191 0 -168 1 -179 21 -192 20
            -15 53 -12 77 6 9 7 12 57 12 187 0 211 -2 207 105 212 l70 3 0 45 0 45 -210
            1 c-115 1 -223 -1 -240 -5z"/>
            <path d="M2316 3027 c-14 -11 -15 -19 -2 -77 7 -36 22 -83 33 -105 12 -22 24
            -60 28 -85 4 -25 16 -61 27 -80 10 -20 25 -60 31 -90 12 -51 14 -55 48 -62 42
            -8 90 2 99 23 20 41 54 130 67 179 17 64 28 80 55 80 34 0 64 -42 77 -109 12
            -63 41 -130 69 -163 42 -49 133 8 146 92 4 24 15 58 26 75 10 16 23 50 30 75
            6 25 20 60 31 78 24 42 51 154 39 166 -10 10 -75 10 -90 1 -4 -3 -11 -24 -15
            -48 -4 -23 -15 -57 -26 -75 -10 -17 -25 -58 -33 -89 -8 -31 -22 -63 -30 -71
            -14 -14 -19 -11 -50 23 -29 31 -39 54 -53 118 -22 102 -59 157 -106 157 -54
            -1 -90 -44 -108 -132 -11 -50 -71 -172 -91 -184 -14 -9 -36 25 -49 81 -6 28
            -18 59 -25 70 -8 10 -19 45 -25 76 -6 31 -14 61 -18 66 -10 16 -67 23 -85 10z"/>
            <path d="M3357 3030 c-23 -7 -68 -38 -100 -68 -4 -4 -22 -29 -39 -55 -28 -45
            -31 -56 -31 -132 0 -76 3 -87 32 -131 65 -101 156 -141 276 -122 73 11 102 26
            151 80 54 59 72 136 54 235 -12 65 -15 71 -76 129 -47 46 -74 63 -102 68 -50
            8 -131 6 -165 -4z m133 -90 c39 0 88 -44 113 -99 24 -56 23 -77 -4 -142 -23
            -54 -46 -70 -121 -89 -40 -10 -50 -9 -101 14 -73 32 -97 69 -97 149 0 65 9 88
            53 131 27 28 86 48 115 40 8 -2 26 -4 42 -4z"/>
            <path d="M3865 3032 l-30 -7 0 -245 0 -245 30 -6 c40 -7 65 15 65 56 0 40 17
            55 69 62 37 5 43 2 72 -30 17 -20 37 -46 43 -58 14 -28 69 -42 103 -26 13 6
            22 13 20 16 -1 3 -15 32 -30 64 l-27 58 41 56 c38 51 42 60 42 119 0 59 -3 67
            -38 109 -59 73 -69 77 -207 81 -68 1 -136 0 -153 -4z m261 -126 c43 -43 44
            -74 3 -121 -29 -33 -35 -35 -93 -35 -88 0 -106 15 -106 89 0 84 16 99 109 100
            48 1 56 -2 87 -33z"/>
            <path d="M4412 3028 c-16 -16 -17 -460 -2 -489 12 -22 62 -26 77 -6 6 6 13 31
            16 55 3 26 15 53 29 67 12 14 31 34 41 45 15 18 20 19 50 7 17 -7 42 -29 54
            -48 12 -19 32 -47 43 -64 12 -16 27 -38 33 -48 17 -25 101 -27 125 -4 10 11
            12 17 4 17 -6 0 -19 14 -28 32 -9 17 -39 61 -67 96 -56 73 -83 142 -66 173 5
            11 37 51 70 90 46 52 56 70 45 74 -9 3 -23 7 -33 10 -28 9 -80 -15 -107 -49
            -41 -54 -146 -156 -161 -156 -19 0 -35 62 -35 131 0 61 -11 79 -50 79 -14 0
            -31 -5 -38 -12z"/>
            <path d="M5052 3028 c-17 -17 -17 -479 0 -496 17 -17 54 -15 72 4 14 13 16 50
            16 249 0 221 -1 235 -19 245 -26 13 -54 13 -69 -2z"/>
            <path d="M5315 3030 l-30 -5 0 -245 0 -245 30 -6 c56 -10 65 9 65 137 0 150 7
            165 59 127 44 -33 150 -150 184 -204 39 -60 118 -87 150 -51 15 16 17 48 17
            247 0 253 0 254 -64 247 l-33 -4 -5 -124 c-3 -79 -9 -129 -18 -139 -16 -19
            -46 -20 -57 -1 -4 8 -23 32 -40 53 -18 21 -64 76 -103 123 -74 88 -95 101
            -155 90z"/>
            <path d="M6097 3030 c-15 -5 -41 -20 -58 -34 -17 -14 -34 -26 -39 -26 -4 0
            -24 -28 -45 -62 -60 -102 -60 -161 3 -274 52 -94 165 -133 319 -110 52 8 116
            47 137 84 11 20 13 163 2 180 -5 8 -41 12 -112 12 -116 0 -131 -8 -100 -55 13
            -19 25 -25 54 -25 39 0 49 -5 71 -33 20 -25 -7 -51 -76 -73 -53 -17 -57 -17
            -109 1 -61 21 -116 78 -128 132 -10 44 9 101 49 148 l34 40 85 4 c62 2 93 -1
            116 -13 28 -14 34 -14 66 1 42 20 43 38 4 58 -16 9 -30 19 -30 24 0 25 -177
            41 -243 21z"/>
            <path d="M6778 3029 c-16 -9 -18 -32 -18 -243 0 -209 2 -234 18 -248 13 -11
            25 -13 50 -6 31 8 32 10 32 62 0 68 16 116 40 116 23 0 35 -16 50 -66 7 -23
            29 -61 49 -84 l37 -43 57 7 c51 7 59 11 67 34 6 15 16 38 24 52 9 14 27 49 40
            78 15 32 31 52 38 50 20 -7 37 -67 37 -133 1 -34 6 -66 13 -73 19 -19 66 -15
            78 7 15 29 14 473 -2 489 -27 27 -138 -5 -138 -40 0 -7 -15 -44 -34 -83 -18
            -38 -41 -86 -50 -105 -25 -51 -46 -92 -64 -120 l-15 -24 -43 48 c-23 27 -47
            67 -54 92 -7 24 -18 49 -26 55 -7 6 -18 27 -25 47 -6 20 -27 61 -46 90 -29 45
            -38 52 -66 52 -18 0 -40 -5 -49 -11z"/>
            <path d="M7751 3014 c-20 -17 -36 -44 -46 -77 -8 -29 -24 -65 -35 -82 -11 -16
            -20 -37 -20 -46 0 -10 -13 -43 -30 -74 -16 -31 -30 -62 -30 -69 0 -7 -12 -36
            -26 -65 -28 -55 -26 -64 17 -75 21 -4 33 0 55 23 41 42 73 51 175 51 98 0 140
            -13 178 -53 19 -21 30 -25 55 -20 44 9 48 22 22 68 -13 22 -29 58 -36 80 -7
            22 -24 60 -37 84 -12 24 -23 51 -23 60 0 9 -9 30 -20 46 -11 17 -27 54 -35 83
            -26 87 -103 118 -164 66z m127 -231 c18 -58 19 -63 3 -78 -24 -21 -114 -20
            -136 1 -16 17 -15 27 11 101 12 34 22 45 47 52 42 11 51 1 75 -76z"/>
            <path d="M8258 3034 l-28 -5 0 -245 0 -244 26 -10 c33 -13 179 -12 268 0 53 8
            74 16 92 35 13 14 27 25 32 25 5 0 24 24 43 53 32 49 34 57 33 133 0 74 -3 85
            -32 128 -17 27 -32 51 -34 55 -2 4 -29 22 -60 39 -54 31 -62 33 -185 37 -70 2
            -140 1 -155 -1z m268 -105 c16 -6 44 -28 63 -50 29 -35 33 -45 33 -98 0 -54
            -4 -65 -37 -105 -40 -49 -70 -59 -174 -58 -77 1 -81 8 -81 163 0 156 2 159 99
            159 38 0 81 -5 97 -11z"/>
            <path d="M8872 3028 c-9 -9 -12 -78 -12 -248 0 -170 3 -239 12 -248 8 -8 57
            -12 154 -12 202 0 224 7 210 64 -6 23 -9 24 -127 28 -104 4 -123 7 -135 23 -8
            10 -14 29 -14 40 0 39 29 52 122 57 48 2 90 7 93 10 3 3 7 18 8 34 l2 29 -95
            3 c-105 3 -130 16 -130 71 0 52 9 56 147 61 l128 5 3 41 c3 41 2 41 -35 47
            -70 12 -318 8 -331 -5z"/>
            <path d="M9599 3033 c-36 -6 -39 -25 -39 -273 0 -181 2 -209 17 -221 12 -10
            60 -15 183 -17 144 -3 168 -1 180 13 10 12 11 24 4 43 -9 27 -11 27 -115 32
            -113 6 -159 23 -159 59 0 37 37 56 121 60 71 3 81 6 100 29 19 25 19 27 3 39
            -10 7 -45 13 -81 13 -86 0 -129 19 -138 60 -12 54 9 65 128 68 141 4 147 5
            147 45 0 54 -9 57 -174 56 -83 -1 -163 -4 -177 -6z"/>
            <path d="M10315 3028 c-33 -19 -53 -50 -65 -100 -7 -26 -18 -52 -25 -58 -8 -7
            -21 -37 -30 -68 -9 -31 -25 -67 -36 -80 -10 -14 -19 -33 -19 -42 0 -10 -13
            -43 -29 -73 -16 -30 -26 -59 -22 -64 3 -6 20 -13 37 -16 25 -5 36 -1 55 20 37
            40 80 53 171 53 104 0 144 -11 180 -50 22 -25 32 -29 55 -24 15 4 31 9 36 11
            12 7 8 40 -7 53 -8 6 -22 35 -32 63 -9 29 -25 66 -34 82 -10 17 -24 51 -30 77
            -7 26 -19 53 -26 59 -8 6 -21 36 -30 65 -24 85 -91 126 -149 92z m93 -195 c6
            -16 17 -48 23 -72 12 -39 11 -45 -6 -57 -27 -20 -119 -18 -136 2 -10 13 -10
            24 0 62 19 71 36 92 75 92 27 0 36 -5 44 -27z"/>
            <path d="M10819 3031 c-14 -3 -43 -20 -64 -38 -35 -30 -39 -37 -43 -92 -4 -56
            -2 -61 29 -95 23 -24 51 -41 84 -50 86 -25 156 -53 173 -70 16 -15 15 -19 -3
            -54 -17 -31 -26 -38 -55 -40 -43 -4 -126 39 -135 69 -6 17 -14 20 -48 17 -39
            -3 -42 -5 -45 -36 -3 -27 3 -38 38 -70 50 -45 127 -63 215 -51 122 16 151 50
            146 173 -2 43 -71 102 -130 111 -56 8 -149 52 -163 78 -23 43 56 77 132 57 22
            -6 45 -20 50 -31 9 -16 20 -19 53 -17 41 3 42 3 39 38 -2 19 -9 37 -15 39 -6
            2 -21 15 -33 28 -12 13 -37 28 -55 33 -37 11 -129 11 -170 1z"/>
            <path d="M11203 3033 c-29 -5 -29 -23 -2 -54 11 -13 28 -37 36 -54 9 -16 22
            -37 30 -45 65 -71 116 -179 122 -264 7 -79 22 -97 68 -80 27 9 28 12 34 99 6
            82 22 145 39 145 3 0 16 17 28 38 11 21 30 46 42 57 11 10 20 24 20 32 0 7 9
            22 19 32 11 11 27 34 36 50 14 28 14 31 -4 41 -51 27 -105 -11 -154 -107 -19
            -36 -86 -95 -99 -87 -8 5 -19 21 -80 112 -31 46 -79 92 -96 91 -9 -1 -27 -4
            -39 -6z"/>
            </g>
            </svg> -->

            

            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
                <p>&nbsp;</p>
                <h1>
                    Don’t let the isolation stop us from networking! 😎
                    <p>&nbsp;</p>
                    <x-jet-label for="intro" value="{{ __('Fill out the information about yourself, and we will send you an e-mail once a week with the contact information of a person you are matched with based on your interests. Communication between you and your partner takes place in a 15-minute Zoom call.') }}" />
                </h1>
                <p>&nbsp;</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                
                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>

        

        <div class="flex items-center justify-center mt-4">
            </br></br></br>
            <x-jet-button>
                <a href="{{ route('register') }}">
                    {{ __('Create New Account') }}
                </a>
            </x-jet-button>
        </div>

        <div class="flex items-center justify-center mt-4">

                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('about') }}">
                    {{ __('About Us') }}
                </a>

                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('privacy-policy') }}">
                    {{ __('Privacy Policy & Imprint') }}
                </a>
        </div>


    </x-jet-authentication-card>
</x-guest-layout>
