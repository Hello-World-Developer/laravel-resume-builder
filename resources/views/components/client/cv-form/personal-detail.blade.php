<div id="personal-detail">
    <input class="peer/show-profile hidden"
           id="show-profile"
           type="checkbox"
           checked>
    <div class="sm:flex items-center justify-between w-full">
        <h2 class="flex items-center font-semibold text-gray-600 text-2xl">
            Personal Details</h2>
        <div class="flex">
            <button class="cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
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
            <label class="ml-2 cursor-pointer text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-[0.4rem] py-2 text-center   dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
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
                <label class="bg-gray-100 border @error('profile') border-red-500  @enderror w-[140px] h-[140px] align-baseline flex justify-center items-center bg-center bg-no-repeat bg-cover"
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
                        <x-common.textfield.input id="first-name"
                                                  name="first_name"
                                                  value="{{ old('first_name') }}"
                                                  :error="$errors->has('first_name')" />
                        @error('first_name')
                            <x-common.helper.error :error="$message" />
                        @enderror
                    </div>
                    <div class="flex-1 mx-1">
                        <label class="text-md mb-1 text-gray-500"
                               for="last-name">Last
                            Name</label>
                        <x-common.textfield.input id="last-name"
                                                  name="last_name"
                                                  value="{{ old('last_name') }}"
                                                  :error="$errors->has('last_name')" />
                        @error('last_name')
                            <x-common.helper.error :error="$message" />
                        @enderror
                    </div>
                </div>
                <div class="mx-1">
                    <label class="text-md mb-1 text-gray-500"
                           for="email">
                        Email
                    </label>
                    <x-common.textfield.input id="email"
                                              name="email"
                                              type="text"
                                              value="{{ old('email') }}"
                                              :error="$errors->has('email')" />
                    @error('email')
                        <x-common.helper.error :error="$message" />
                    @enderror
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label class="text-md mb-1 text-gray-500"
                   for="head-line">
                Head Line
            </label>
            <x-common.textfield.input id="head-line"
                                      name="head_line"
                                      value="{{ old('head_line') }}"
                                      :error="$errors->has('head_line')" />
            @error('head_line')
                <x-common.helper.error :error="$message" />
            @enderror
        </div>
        <div class="mt-3">
            <label class="text-md mb-1 text-gray-500"
                   for="phone-number">
                Phone Number
            </label>
            <x-common.textfield.input id="phon-number"
                                      name="phone_number"
                                      value="{{ old('phone_number') }}"
                                      :error="$errors->has('phone_number')" />
            @error('phone_number')
                <x-common.helper.error :error="$message" />
            @enderror
        </div>
        <div class="mt-3">
            <label class="text-md mb-1 text-gray-500"
                   for="address">
                Address
            </label>
            <x-common.textfield.input id="address"
                                      name="address"
                                      value="{{ old('address') }}"
                                      :error="$errors->has('address')" />
            @error('address')
                <x-common.helper.error :error="$message" />
            @enderror
        </div>
        <div class="mt-3">
            <div class="flex -mx-2">
                <div class="flex-1 mx-2">
                    <label class="text-md mb-1 text-gray-500"
                           for="post-code">
                        Post Code
                    </label>
                    <x-common.textfield.input id="post-code"
                                              name="post_code"
                                              :error="$errors->has('post_code')" />
                    @error('post_code')
                        <x-common.helper.error :error="$message" />
                    @enderror
                </div>
                <div class="flex-1 mx-2">
                    <label class="text-md mb-1 text-gray-500"
                           for="city">
                        City
                    </label>
                    <x-common.textfield.input id="city"
                                              name="city"
                                              value="{{ old('city') }}"
                                              :error="$errors->has('city')" />
                    @error('city')
                        <x-common.helper.error :error="$message" />
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>