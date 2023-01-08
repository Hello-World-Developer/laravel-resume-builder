<x-layout.app-layout>
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
            <div class="flex justify-center mt-20">
                <div class="max-w-[600px] w-full">
                    <header class="bg-[#303745] flex min-h-[50px]">
                        <div class="w-[80px] h-[80px] bg-cover bg-center bg-no-repeat"
                            id="preview-cv-profile"
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
                                    <x-icon.mobile-phone class="w-[0.5rem] h-[0.5rem]" />
                                    <span class="ml-1 leading-3"
                                        id="preview-phone-number"></span>
                                </p>
                                <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                    <x-icon.envelope class="w-[0.5rem] h-[0.5rem]" />
                                    <span class="ml-1 leading-3"
                                        id="preview-email"></span>
                                </p>
                                <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                    <x-icon.location class="w-[0.5rem] h-[0.5rem]" />
                                    <span class="ml-1 leading-3"
                                        id="preview-address"></span>
                                </p>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <x-slot:scripts>
        @vite('resources/js/client/cv-form-create.js')
    </x-slot:scripts>
</x-layout.app-layout>
