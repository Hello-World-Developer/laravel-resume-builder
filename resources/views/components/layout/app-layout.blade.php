@props([
    'title' => null,
    'scripts' => null,
    'libraries' => null,
])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>{{ $title }}</title>
    <style>
        .loader-01 {
            transform: rotateZ(45deg);
            perspective: 1000px;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            color: rgb(45, 22, 224);
        }

        .loader-01:before,
        .loader-01:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: inherit;
            height: inherit;
            border-radius: 50%;
            transform: rotateX(70deg);
            animation: 0.8s spin linear infinite;
        }

        .loader-01:after {
            color: #FF3D00;
            transform: rotateY(70deg);
            animation-delay: .4s;
        }

        @keyframes rotate {
            0% {
                transform: translate(-50%, -50%) rotateZ(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotateZ(360deg);
            }
        }

        @keyframes rotateccw {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(-360deg);
            }
        }

        @keyframes spin {

            0%,
            100% {
                box-shadow: .2em 0px 0 0px currentcolor;
            }

            12% {
                box-shadow: .2em .2em 0 0 currentcolor;
            }

            25% {
                box-shadow: 0 .2em 0 0px currentcolor;
            }

            37% {
                box-shadow: -.2em .2em 0 0 currentcolor;
            }

            50% {
                box-shadow: -.2em 0 0 0 currentcolor;
            }

            62% {
                box-shadow: -.2em -.2em 0 0 currentcolor;
            }

            75% {
                box-shadow: 0px -.2em 0 0 currentcolor;
            }

            87% {
                box-shadow: .2em -.2em 0 0 currentcolor;
            }
        }
        #loader-01 {
            background:rgba(1, 2, 21, 0.2); 
        }
    </style>
    @vite('resources/js/app.js')
    {{ $libraries }}
</head>

<body {{ $attributes->merge(['class' => 'overflow-y-auto']) }}>
    <div class="fixed min-h-full w-full flex justify-center items-center z-50"
         id="loader-01">
        <x-common.loader.loader-01 />
    </div>
    <x-layout.nav-bar />
    <div>
        {{ $slot }}
    </div>

    {{ $scripts }}
</body>

</html>
