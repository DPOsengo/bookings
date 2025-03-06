<button {{ $attributes->merge(['class' => 'px-4 py-2 text-white rounded-lg hover:bg-blue-700']) }}>
    {{ $slot }}
</button>