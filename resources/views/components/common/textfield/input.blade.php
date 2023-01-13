@props([
    'error' => null,
])
<input
       {{ $attributes->merge([
           'type' => 'text',
           'class' =>
               'bg-gray-100 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 border-gray-300 ' .
               ($error
                   ? 'focus:ring-red-500 border-red-500  focus:border-red-500'
                   : 'focus:ring-blue-500 border-gray-300  focus:border-blue-500') .
               ' block  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
       ]) }}>
