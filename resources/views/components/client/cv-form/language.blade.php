@props([
    'id' => 'default',
])

<div class="mt-4"
    id="language">
    <input class="peer/show-language hidden"
        id="show-language"
        type="checkbox"
        checked>
    <div class="sm:flex items-center justify-between w-full">
        <h2 class="flex items-center font-semibold text-gray-600 text-2xl">
            Language</h2>
        <div class="flex">
            <label
                class="cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                for="show-language"
                type="button">
                <x-icon.top-arrow />
            </label>
        </div>
    </div>
    <div class="hidden mt-4 peer-checked/show-language:block">
        <div id="language-container">
            <div class="border p-4">
                <div class="">
                    <label class="text-md text-gray-500 mb-2 inline-block"
                        for="language[{{ $id }}][name]">
                        Language
                    </label>
                    <input
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="language[{{ $id }}][name]"
                        name="language[{{ $id }}][name]"
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
                                class="skill-range flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                                name="language[{{ $id }}][name]"
                                type="range"
                                value="0">
                            <div class="ml-4 flex-1">
                                Basic
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-5 justify-end">
                    <button
                        class="cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                        type="button">
                        <x-icon.trash />
                    </button>
                    <button
                        class="ml-2 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="button">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
