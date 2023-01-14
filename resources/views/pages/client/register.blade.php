<x-layout.app-layout>
    <div class="flex h-screen container justify-center items-center">
        <div class="w-[350px]">
            
            <div
                 class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <form class="space-y-6 -mt-3"
                      action="{{ route('client.auth.register') }}" method="POST">
                      @csrf
                      @method('POST')
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign up to our platform</h5>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                               for="email">Your email</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               id="email"
                               name="email"
                               type="email"
                               value="{{ old('email') }}"
                               placeholder="name@company.com">
                        @error('email')
                            <x-common.helper.error :error="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                               for="password">Your password</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               id="password"
                               name="password"
                               type="password"
                               placeholder="••••••••">
                        @error('password')
                            <x-common.helper.error :error="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                               for="password">Repeat Your password</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               id="confirm_password"
                               name="confirm_password"
                               type="password"
                               placeholder="••••••••">
                        @error('confirm_password')
                            <x-common.helper.error :error="$message" />
                        @enderror
                    </div>
                    <button class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="submit">Singn up to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Already registered? <a class="text-blue-700 hover:underline dark:text-blue-500"
                           href="{{ route('client.auth.signIn') }}">Go to login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app-layout>
