<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    @if ($cvInfo)
        <div class="container flex justify-center">
            <div class="flex justify-center">
                <div class="shadow-lg min-w-[8.27in]" id="export">
                    <header class="bg-[#303745] flex min-h-[50px]">
                        <img class="w-[80px] h-[80px]" src="{{ $cvInfo->userDetail->image }}" alt="img">
                        <div class="ml-5 mt-2 leading-[0]">
                            <h2 class="text-white text-lg font-semi-bold ">
                                <span id="preview-first-name">{{ $cvInfo->userDetail->first_name }}</span>
                                <span id="preview-last-name">{{ $cvInfo->userDetail->last_name }}</span>
                            </h2>
                            <p class="text-[0.4rem] font-bold leading-[3px] text-gray-400" id="preview-head-line">
                                {{ $cvInfo->userDetail->head_line }}
                            </p>
                            <div class="mt-3 flex items-center -mx-2">
                                <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                    <span class="ml-1 leading-3" id="preview-phone-number">
                                        <i class="fa-solid fa-phone"></i>
                                        {{ $cvInfo->userDetail->phone_number }}
                                    </span>
                                </p>
                                <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                    <span class="ml-1 leading-3" id="preview-email">
                                        <i class="fa-solid fa-envelope"></i>
                                        {{ $cvInfo->userDetail->email }}
                                    </span>
                                </p>
                                <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                    <i class="fa-solid fa-location-pin"></i>
                                    <span class="ml-1 leading-3" id="preview-post-code">
                                        {{ $cvInfo->userDetail->post_code }}
                                    </span>
                                    <span class="ml-1 leading-3" id="preview-city">
                                        {{ $cvInfo->userDetail->city }}
                                    </span>
                                    <span class="ml-1 leading-3 mr-2" id="preview-address">
                                        {{ $cvInfo->userDetail->address }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </header>
                    <div class="p-5 flex">
                        <div class="w-[65%] border-r h-[calc(11in_-_50px)]">
                            <div class="p-3">
                                {{-- eductaion section --}}
                                <h2 class="font-semi-bold text-xs text-gray-700">Education</h2>
                                <div
                                     class="flex justify-between items-center text-[0.5rem] font-semibold text-gray-700">
                                    <span id="preview-edu-degree">
                                        {{ $cvInfo->education->degree }}
                                    </span>
                                    <div class="text-[0.5rem]">
                                        <span id="preview-edu-start-date">
                                            {{ $cvInfo->education->start_date }}
                                        </span>
                                        <span> - </span>
                                        <span id="preview-edu-end-date">
                                            {{ $cvInfo->education->end_date }}
                                        </span>
                                    </div>
                                </div>
                                <div class="text-[0.6rem] my-1 font-semibold text-gray-500">
                                    <span id="preview-edu-school">
                                        {{ $cvInfo->education->school }}
                                    </span>
                                    <span id="preview-edu-city-edu">
                                        {{ $cvInfo->education->city }}
                                    </span>
                                </div>
                                <div class="preview-edu-descriptio text-[0.6rem]  text-gray-700">
                                    {!! $cvInfo->education->description !!}
                                </div>
                                <hr class="mt-3">
                            </div>
                        </div>
                        <div class="w-[35%]">
                            <div class="p-3" id="preview-skill-container">
                                <h2 class="font-semi-bold text-xs text-gray-700">Skills</h2>
                                @foreach ($cvInfo->skills as $skill)
                                    <span class="text-[0.6rem] text-gray-700 mb-2 font-semibold inline-block">
                                        {{ $skill->name }}
                                    </span>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                                             style="width: {{ $skill->range }}%"></div>
                                    </div>
                                @endforeach
                                <hr class="mt-3" />
                            </div>
                            <div class="p-3" id="language-container">
                                <h2 class="font-semi-bold text-xs text-gray-700">Languages</h2>
                                @foreach ($cvInfo->languages as $language)
                                    <span class="text-[0.6rem] text-gray-700 font-semibold mb-2 inline-block">
                                        {{ $language->name }}
                                    </span>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                                             style="width: {{ $language->level }}%"></div>
                                    </div>
                                @endforeach
                                <hr class="mt-3" />
                            </div>
                        </div>
                        <div>
                            {{-- language section --}}

                            {{-- <h2 class="font-semi-bold text-xs text-gray-700">Languages</h2>
                            <div id="preview-language-container">
                                <div>
                                    <span class="text-[0.6rem] text-gray-700 font-semibold">English</span>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                                            style="width: 70%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[0.6rem] text-gray-700 font-semibold">France</span>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                                            style="width: 70%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[0.6rem] text-gray-700 font-semibold">Japanese</span>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                                            style="width: 80%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[0.6rem] text-gray-700 font-semibold">Japanese</span>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                                            style="width: 76%"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-3"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const cvInfo = @json($cvInfo)
        </script>
        @vite(['resources/js/client/js-pdf.js'])
    @endif
</body>

</html>
