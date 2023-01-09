<x-layout.app-layout>
    <x-slot:libraries>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <link rel="stylesheet"
            href="{{ asset('ckeditor/styles.css') }}">
    </x-slot:libraries>
    <template id="clone-skill">
        <x-client.cv-form.skill />
    </template>
    <div class="flex">
        <div class="h-screen overflow-y-auto flex-1 p-10">
            <x-client.cv-form.personal-detail />
            <x-client.cv-form.education />
            <x-client.cv-form.skill />
            <x-client.cv-form.language />
        </div>
        <div class="h-screen overflow-y-auto flex-1">
            <div class="flex justify-center mt-10">
                <div class="max-w-[500px] w-full border shadow-lg">
                    <header class="bg-[#303745] flex min-h-[50px]">
                        <div class="w-[80px] h-[80px] bg-cover bg-center bg-no-repeat"
                            id="preview-cv-profile">
                        </div>
                        <div class="ml-5 mt-2 leading-[0]">
                            <h2 class="text-white text-lg font-semi-bold ">
                                <span id="preview-first-name"></span>
                                <span id="preview-last-name"></span>
                            </h2>
                            <p class="text-[0.4rem] font-bold leading-[3px] text-gray-400"
                                id="preview-head-line"></p>
                            <div class="mt-3 flex items-center -mx-2">
                                <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                    <x-icon.mobile-phone class="w-[0.5rem] h-[0.5rem] hidden" />
                                    <span class="ml-1 leading-3"
                                        id="preview-phone-number"></span>
                                </p>
                                <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                    <x-icon.envelope class="w-[0.5rem] h-[0.5rem] hidden" />
                                    <span class="ml-1 leading-3"
                                        id="preview-email"></span>
                                </p>
                                <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                    <x-icon.location class="w-[0.5rem] h-[0.5rem] hidden" />
                                    <span class="ml-1 leading-3"
                                        id="preview-post-code"></span>
                                    <span class="ml-1 leading-3"
                                        id="preview-city"></span>
                                    <span class="ml-1 leading-3"
                                        id="preview-address"></span>
                                </p>
                            </div>
                        </div>
                    </header>
                    <div class="p-5 flex min-h-[75vh]">
                        <div class="w-[65%] border-r h-[auto]">
                            <div class="p-3">
                                <h2 class="font-semi-bold text-xs text-gray-700">Education</h2>
                                <div
                                    class="flex justify-between items-center text-[0.6rem] font-semibold text-gray-700">
                                    <span id="preview-edu-degree"></span>
                                    <div class="text-[0.6rem]">
                                        <span id="preview-edu-start-date"></span>
                                        <span> - </span>
                                        <span id="preview-edu-end-date"></span>
                                    </div>
                                </div>
                                <div class="text-[0.6rem] font-semibold text-gray-500">
                                    <span id="preview-edu-school"></span>
                                    <span id="preview-edu-city-edu"></span>
                                </div>
                                <div class="preview-edu-descriptio text-[0.6rem] font-semibold text-gray-700">
                                    Hello I graduted
                                </div>
                                <hr class="mt-3">
                            </div>
                        </div>
                        <div class="w-[35%]">
                            <div class="p-3">
                                <h2 class="font-semi-bold text-xs text-gray-700">Skills</h2>
                                <div id="preview-skill-container">
                                  {{-- render skill --}}
                                </div>
                                <hr class="mt-3">
                            </div>
                            <div class="p-3">
                                <h2 class="font-semi-bold text-xs text-gray-700">Languages</h2>
                                <div id="preview-language-container">
                                    {{-- <div>
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
                                    </div> --}}
                                </div>
                                <hr class="mt-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot:scripts>
        @vite('resources/js/client/cv-form-create.js')
    </x-slot:scripts>
</x-layout.app-layout>
