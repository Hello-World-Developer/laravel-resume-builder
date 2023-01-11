<x-layout.app-layout>
    <template id="clone-skill">
        <x-client.cv-form.skill />
    </template>
    <div class="flex">
        <div class="h-screen overflow-y-auto flex-1 p-10">
            <form action="{{ route('client.cv-form.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-client.cv-form.personal-detail />
                <x-client.cv-form.education />
                <x-client.cv-form.skill />
                <x-client.cv-form.language />
                <button>Submit</button>
            </form>
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
                                <span>Wai Yan </span>
                                <span>Lin</span>
                            </h2>
                            <p class="text-[0.4rem] font-bold leading-[3px] text-gray-400">Web Developer</p>
                            <div class="mt-3 flex -mx-2">
                                <p class="mx-2 text-[0.4rem] leading-4 font-bold text-gray-400"
                                    id="preview-email">
                                    wai@gmail.com
                                </p>
                                <p class="mx-2 text-[0.4rem] leading-4 font-bold text-gray-400"
                                    id="preview-email">
                                    phone
                                </p>
                                <p class="mx-2 text-[0.4rem] leading-4 font-bold text-gray-400"
                                    id="preview-email">
                                    address
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
