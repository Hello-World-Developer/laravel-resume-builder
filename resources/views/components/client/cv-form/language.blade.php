@props([
    'id' => 'default',
])
<div class="mt-4"
     id="language">
    <input class="peer/show-language hidden"
           id="show-language"
           type="checkbox"
           x-data
           @change="$dispatch('language-dropdown', $el)"
           checked>
    <div class="sm:flex items-center justify-between w-full">
        <h2 class="flex items-center font-semibold text-gray-600 text-2xl">
            language</h2>
        <div class="flex">
            <label class="cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                   for="show-language"
                   type="button">
                <x-icon.top-arrow />
            </label>
        </div>
    </div>
    <div class="hidden peer-checked/show-language:block"
         x-data="cvLanguage">
        <div id="language-container">
            <template x-for="language in languages" x-bind:key="language.id">
                <div class="border mt-4 p-4"
                     x-bind:id="language.id"
                     @language-dropdown.window="languageDropdown($event.detail)">
                    <div class="">
                        <label class="text-md text-gray-500 inline-block mb-1"
                               x-bind:for="language.labelForName">
                            language
                        </label>
                        <input class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               type="text"
                               @click="language.done = false"
                               x-bind:id="language.labelForName"
                               x-bind:name="language.name">
                    </div>
                    <div x-show="!language.done" x-transition>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <label class="block mb-1 text-sm text-md text-gray-500 dark:text-white"
                                       x-bind:for="language.labelForLevel">
                                    Level</label>
                                <div class="flex items-center w-full">
                                    <input class="language-range flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                                           type="range"
                                           value="0"
                                           x-bind:id="language.labelForLevel"
                                           x-bind:name="language.level">
                                    <div class="ml-4 flex-1">
                                        Basic
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-5 justify-end">
                            <x-common.button.outline-dark-icon @click="removeLanguage(language.id)">
                                <x-icon.trash />
                            </x-common.button.outline-dark-icon>
                            <x-common.button.primary @click="language.done = true">
                                Done
                            </x-common.button.primary>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <x-common.button.outline-dark class="flex items-center mt-5" @click="addLanguage">
            <x-icon.circle-plus /> <span class="ml-2">Add language</span>
        </x-common.button.outline-dark>
    </div>
</div>
