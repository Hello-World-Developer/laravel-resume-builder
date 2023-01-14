@props([
    'error' => null
])
<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
{{ $error ?? $slot ?? null }}
</p>
