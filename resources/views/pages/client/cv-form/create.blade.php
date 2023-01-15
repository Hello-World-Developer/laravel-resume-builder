<x-layout.app-layout>
    <x-slot:libraries>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <link href="{{ asset('ckeditor/styles.css') }}"
              rel="stylesheet">
    </x-slot:libraries>
    <div class="flex">
        <div class="h-screen overflow-y-auto flex-1 p-10">
            <form action="{{ route('client.cv-form.store') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  autocomplete="off">
                @csrf
                @method('POST')
                @if ($cvInfo = session('cv-info'))
                    <input type="hidden" name="form_id" value="{{ $cvInfo->id }}">
                @endif
                <x-client.cv-form.personal-detail />
                <x-client.cv-form.education />
                <x-client.cv-form.skill />
                <x-client.cv-form.language />
                <div class="flex justify-end items-center">
                    <x-common.button.primary type="submit" class="mt-3">
                        Submit
                    </x-common.button.primary>
                </div>
            </form>
        </div>
        <div class="h-screen overflow-y-auto flex-1">
            <div class="flex justify-center mt-10">
                <div class="max-w-[600px] w-full border shadow-lg">
                    <header class="bg-[#303745] flex min-h-[50px]">
                        @if ($cvInfo = session('cv-info'))
                            <div class=" w-[80px] h-[80px] bg-cover bg-center bg-no-repeat"
                                 id="preview-cv-profile"
                                 style="background-image: url('{{ $cvInfo->userDetail->image }}')">
                            </div>
                            <div class="ml-5 mt-2 leading-[0]">
                                <h2 class="text-white text-lg font-semi-bold ">
                                    <span id="preview-first-name">{{ $cvInfo->userDetail->first_name }}</span>
                                    <span id="preview-last-name">{{ $cvInfo->userDetail->last_name }}</span>
                                </h2>
                                <p class="text-[0.4rem] font-bold leading-[3px] text-gray-400"
                                   id="preview-head-line">
                                    {{ $cvInfo->userDetail->head_line }}
                                </p>
                                <div class="mt-3 flex items-center -mx-2">
                                    <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                        Ph no:
                                        <span class="ml-1 leading-3"
                                              id="preview-phone-number">
                                            {{ $cvInfo->userDetail->phone_number }}
                                        </span>
                                    </p>
                                    <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                        email:
                                        <span class="ml-1 leading-3"
                                              id="preview-email">
                                            {{ $cvInfo->userDetail->email }}
                                        </span>
                                    </p>
                                    <p class="mx-2 flex items-center text-[0.5rem] font-bold text-gray-400">
                                        Address:
                                        <span class="ml-1 leading-3"
                                              id="preview-post-code">
                                            {{ $cvInfo->userDetail->post_code }}
                                        </span>
                                        <span class="ml-1 leading-3"
                                              id="preview-city">
                                            {{ $cvInfo->userDetail->city }}
                                        </span>
                                        <span class="ml-1 leading-3 mr-2"
                                              id="preview-address">
                                            {{ $cvInfo->userDetail->address }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        @endif
                    </header>
                    <div class="p-5 flex min-h-[75vh]">
                        <div class="w-[65%] border-r h-[auto]">
                            <div class="p-3">
                                @if ($cvInfo = session('cv-info'))
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
                                @endif
                            </div>
                        </div>
                        <div class="w-[35%]">
                            <div class="p-3"
                                 id="preview-skill-container">
                                @if ($cvInfo = session('cv-info'))
                                    <h2 class="font-semi-bold text-xs text-gray-700">Skills</h2>
                                    @foreach ($cvInfo->skills as $skill)
                                        <span class="text-[0.6rem] text-gray-700 font-semibold">
                                            {{ $skill->name }}
                                        </span>
                                        <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                                            <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                                                 style="width: {{ $skill->range }}%"></div>
                                        </div>
                                    @endforeach
                                    <hr class="mt-3" />
                                @endif
                            </div>
                            <div class="p-3"
                                 id="language-container">
                                @if ($cvInfo = session('cv-info'))
                                    <h2 class="font-semi-bold text-xs text-gray-700">Languages</h2>
                                    @foreach ($cvInfo->languages as $language)
                                        <span class="text-[0.6rem] text-gray-700 font-semibold">
                                            {{ $language->name }}
                                        </span>
                                        <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                                            <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                                                 style="width: {{ $language->level }}%"></div>
                                        </div>
                                    @endforeach
                                    <hr class="mt-3" />
                                @endif
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-client.template.template-01/>
    <x-slot:scripts>
        <script>
            const $oldSkills = @json(old('skills',[]));
            const $oldSkillErrors = @json($errors->get('skills.*'));
            const $oldLanguages = @json(old('languages', []));
            const $oldLanguageErrors = @json($errors->get('languages.*'));
        </script>
        @vite(['resources/js/client/cv-form-create.js', 'resources/js/client/js-pdf.js'])
    </x-slot:scripts>
</x-layout.app-layout>
