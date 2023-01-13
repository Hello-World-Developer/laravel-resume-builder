@if (!request()->routeIs('client.login'))
    <nav>
        <header class="flex shadow-sm justify-between p-3">
            <a class="text-white mx-3 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
               href="{{ route('client.cv-form.create', ['new' => true]) }}">
                Back
            </a>
            <div class="flex justify-center items-center">
                <a class="text-white mx-3 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                   href="{{ route('client.cv-form.create', ['new' => true]) }}">Create New</a>
                @if (session('cv-info'))
                    <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="button" onclick="downloadPdf()">Download</button>
                @endif
            </div>
        </header>
    </nav>
@endif
