<div class="mt-4"
    id="education">
    <input class="peer/show-education hidden"
        id="show-education"
        type="checkbox"
        checked>
    <div class="sm:flex items-center justify-between w-full">
        <h2 class="flex items-center font-semibold text-gray-600 text-2xl">
            Eductaion</h2>
        <div class="flex">
            <label
                class="cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                for="show-education"
                type="button">
                <x-icon.top-arrow />
            </label>
        </div>
    </div>
    <div class="hidden mt-4 peer-checked/show-education:block">
        <div class="border p-4">
            <div class="">
                <label class="text-md text-gray-500 mb-1"
                    for="degree">
                    Degree
                </label>
                <input
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    id="degree"
                    name="degree"
                    type="text"
                    required>
            </div>
            <div class="mt-3 flex -mx-1">
                <div class="flex-1 mx-1">
                    <label class="text-md text-gray-500 mb-1"
                        for="school">
                        School
                    </label>
                    <input
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="school"
                        name="school"
                        type="text"
                        required>
                </div>
                <div class="flex-1 mx-1">
                    <label class="text-md text-gray-500 mb-1"
                        for="city-edu">
                        City
                    </label>
                    <input
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="city-edu"
                        type="text"
                        name="school_city"
                        required>
                </div>
            </div>
            <div class="mt-3 flex -mx-1">
                <div class="flex-1 mx-1">
                    <label class="text-md text-gray-500 mb-1"
                        for="start-date">
                        Start Date
                    </label>
                    <input
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="start-date"
                        type="date"
                        name="start_date"
                        placeholder="John"
                        required>
                </div>
                <div class="flex-1 mx-1">
                    <label class="text-md text-gray-500 mb-1"
                        for="end-date">
                        End Date
                    </label>
                    <input
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="end-date"
                        type="date"
                        placeholder="John"
                        name="end_date"
                        required>
                </div>
            </div>
            <div class="mt-3">
                <label for="description"
                    class="block mb-1 text-md font-medium text-gray-500 dark:text-white">Description</label>
                    <textarea id="description"
                        name="description""
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here..."></textarea>
            </div>
        </div>
    </div>
</div>
