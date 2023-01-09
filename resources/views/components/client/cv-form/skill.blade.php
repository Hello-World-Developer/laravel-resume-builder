@props([
    'id' => 'default',
])
<div class="mt-4"
    id="skill">
    <input class="peer/show-skill hidden"
        id="show-skill"
        type="checkbox"
        checked>
    <div class="sm:flex items-center justify-between w-full">
        <h2 class="flex items-center font-semibold text-gray-600 text-2xl">
            Skill</h2>
        <div class="flex">
            <label
                class="cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                for="show-skill"
                type="button">
                <x-icon.top-arrow />
            </label>
        </div>
    </div>
    <div class="hidden peer-checked/show-skill:block">
        <div id="skill-container">
            <div class="border mt-4 p-4"
                id="skill-{{ $id }}">
                <div class="">
                    <label class="text-md text-gray-500 inline-block mb-1"
                        for="skill_name_{{ $id }}">
                        Skill
                    </label>
                    <input
                        onkeyup="handleSkill(this)"
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="skill_name_{{ $id }}"
                        name="skill[{{ $id }}][name]"
                        type="text"
                        required>
                </div>
                <div class="flex mt-3">
                    <div class="flex-1">
                        <label class="block mb-1 text-sm text-md text-gray-500 dark:text-white"
                            for="default-range">
                            Level</label>
                        <div class="flex items-center w-full">
                            <input
                                onchange="handleSkill(this)"
                                class="skill-range flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                                id="skill_range_{{ $id }}"
                                name="skill[{{ $id }}][range]"
                                type="range"
                                value="0">
                            <div class="ml-4 flex-1">
                                Basic
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-5 justify-end">
                    <x-common.button.outline-dark-icon data-target="#skill-{{ $id }}"
                        onclick="removeSkillField(this.dataset.target)">
                        <x-icon.trash />
                    </x-common.button.outline-dark-icon>
                    <x-common.button.primary>
                        Done
                    </x-common.button.primary>
                </div>
            </div>
        </div>
        <x-common.button.outline-dark class="flex items-center mt-5"
            onclick="addSkill()">
            <x-icon.circle-plus /> <span class="ml-2">Add Skill</span>
        </x-common.button.outline-dark>
    </div>
</div>
