<div id="personal-detail">
    <input class="peer/show-profile hidden"
        id="show-profile"
        type="checkbox"
        checked>
    <div class="sm:flex items-center justify-between w-full">
        <h2 class="flex items-center font-semibold text-gray-600 text-2xl">
            Personal Details</h2>
        <div class="flex">
            <button
                class="cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                type="button">
                <svg class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                    </path>
                </svg>
            </button>
            <label
                class="ml-2 cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                for="show-profile"
                type="button">
                <x-icon.top-arrow />
            </label>
        </div>
    </div>
    <div class="hidden peer-checked/show-profile:block">
        <div class="mt-4 flex">
            <div class="flex-col mr-2">
                <label class="text-md mb=1 text-gray-500"
                    for="profile">Photo</label>
                <input id="profile"
                    name="profile"
                    type="file"
                    accept="image/*"
                    hidden>
                <label
                    class="bg-gray-100 border  w-[120px] h-[120px] flex justify-center items-center bg-center bg-no-repeat bg-cover"
                    id="upload-profile-btn"
                    for="profile">
                    <svg class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                        </path>
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 13a3 3 0 11-6 0 3 3 0 016 0z">
                        </path>
                    </svg>
                </label>
            </div>
            <div class="flex-col flex w-full flex-wrap justify-between">
                <div class="flex w-full">
                    <div class="flex-1 mx-1">
                        <label class="text-md mb-1 text-gray-500"
                            for="first-name">
                            First Name
                        </label>
                        <input
                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            id="first-name"
                            name="first_name"
                            type="text"
                            required>
                    </div>
                    <div class="flex-1 mx-1">
                        <label class="text-md mb-1 text-gray-500"
                            for="last-name">Last
                            Name</label>
                        <input
                            class="bg-gray-100  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            id="last-name"
                            name="last-name"
                            type="text"
                            required>
                    </div>
                </div>
                <div class="mx-1">
                    <label class="text-md mb-1 text-gray-500"
                        for="email">
                        Email
                    </label>
                    <input
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="email"
                        name="email"
                        type="text"
                        required>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label class="text-md mb-1 text-gray-500"
                for="head-line">
                Head Line
            </label>
            <input
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="head-line"
                type="text"
                required>
        </div>
        <div class="mt-3">
            <label class="text-md mb-1 text-gray-500"
                for="phone-number">
                Phone Number
            </label>
            <input
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="phone-number"
                name="phone_number"
                type="text"
                required>
        </div>
        <div class="mt-3">
            <label class="text-md mb-1 text-gray-500"
                for="address">
                Address
            </label>
            <input
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="address"
                name="address"
                type="text"
                required>
        </div>
        <div class="mt-3">
            <div class="flex -mx-2">
                <div class="flex-1 mx-2">
                    <label class="text-md mb-1 text-gray-500"
                        for="post-code">
                        Post Code
                    </label>
                    <input
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="post-code"
                        name="post_code"
                        type="text"
                        required>
                </div>
                <div class="flex-1 mx-2">
                    <label class="text-md mb-1 text-gray-500"
                        for="city">
                        City
                    </label>
                    <input
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="city"
                        name="city"
                        type="text"
                        required>
                </div>
            </div>
        </div>
    </div>
</div>
