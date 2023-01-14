@props([
    'id' => uniqid(),
])
<div class="mt-4"
     id="skill">
    <input class="peer/show-skill hidden"
           id="show-skill"
           type="checkbox"
           x-data
           @click="$dispatch('skill-dropdown', $el)"
           checked>
    <div class="sm:flex items-center justify-between w-full">
        <h2 class="flex items-center font-semibold text-gray-600 text-2xl">
            Skill</h2>
        <div class="flex">
            <label class="cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                   for="show-skill"
                   type="button">
                <x-icon.top-arrow />
            </label>
        </div>
    </div>
    <div class="hidden peer-checked/show-skill:block"
         x-data="cvSkill"
         @skill-dropdown.window="skillDropdown($event.detail)">
        <div id="skill-container">
            <template x-for="skill in skills" :key="skill.id">
                <div class="border mt-4 p-4"
                     x-ref="skill.id">
                    <div class="">
                        <label class="text-md text-gray-500 inline-block mb-1"
                               x-bind:for="skill.labelForName">
                            Skill
                        </label>
                        <input class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               type="text"
                               x-bind:class="{ 'border-red-300 focus:border-red-500 focus:ring-red-500': skill.error.message }"
                               x-bind:value="skill.name"
                               x-bind:name="skill.attr.name"
                               x-bind:id="skill.labelForName"
                               @click="skill.done = false">
                        <x-common.helper.error>
                            <span x-text="skill.error.message"></span>
                        </x-common.helper.error>
                    </div>
                    <div x-show="!skill.done"
                         x-transition>
                        <div class="flex mt-3">
                            <div class="flex-1">
                                <label class="block mb-1 text-sm text-md text-gray-500 dark:text-white"
                                       for="default-range">
                                    Level</label>
                                <div class="flex items-center w-full">
                                    <input class="skill-range flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                                           type="range"
                                           x-bind:id="skill.labelForRange"
                                           x-bind:name="skill.attr.range"
                                           x-bind:value="skill.range">
                                    <div class="ml-4 flex-1">
                                        Basic
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-5 justify-end">
                            <x-common.button.outline-dark-icon @click="removeSkill(skill.id)">
                                <x-icon.trash />
                            </x-common.button.outline-dark-icon>
                            <x-common.button.primary @click="skill.done = true">
                                Done
                            </x-common.button.primary>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <x-common.button.outline-dark class="flex items-center mt-5"
                                      @click="addSkill">
            <x-icon.circle-plus /> <span class="ml-2">Add Skill</span>
        </x-common.button.outline-dark>
    </div>
</div>
