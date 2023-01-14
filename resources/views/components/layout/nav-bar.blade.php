@if (!request()->routeIs('client.auth.signIn') && !request()->routeIs('client.auth.signUp'))
    <nav class="sticky top-0 bg-white z-30">
        <header class="flex shadow-sm justify-between p-3">
            <form action="{{ route('client.auth.logout') }}"
                  method="POST">
                @csrf
                @method('POST')
                <button class="text-white mx-3 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="submit">
                    Logout
                </button>
            </form>
            <div class="flex justify-center items-center">
                <a class="text-white mx-3 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                   href="{{ route('client.cv-form.create', ['new' => true]) }}">Create New</a>
                @if (session('cv-info'))
                    <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="button"
                            onclick="downloadPdf()">Download</button>
                @endif
            </div>
        </header>
    </nav>
@endif
