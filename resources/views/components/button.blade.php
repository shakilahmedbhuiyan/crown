<button {{ $attributes->merge(['type' => 'submit',
'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-br from-pink-700 to-orange-400 hover:bg-gradient-to-bl
rounded-full font-semibold text-xs text-white  uppercase tracking-widest drop-shadow-md
focus:outline-none disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
