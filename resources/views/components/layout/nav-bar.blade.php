<nav class="absolute w-screen">
    <header class="flex justify-between p-2">
        <h1></h1>
        <div>
            @if (!request()->routeIs('client.login'))
            <button
                type="button"
                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2"
            >Login</button>
            @endif
        </div>
    </header>
</nav>
