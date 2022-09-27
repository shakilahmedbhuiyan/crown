<x-guest-layout>
    <div class="pt-10">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-auth-card-logo />
            </div>

            <div class="w-full mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $eula !!}
            </div>
        </div>
    </div>
</x-guest-layout>
