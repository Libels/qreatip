<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-1/2">
				<div class="m-4">
					<div class="flex space-x-2">
						<span class="font-bold text-md">Ferry Budiman:</span>
						<span>Hello</span>
					</div>
				</div>
            </div>
        </div>
    </div>
</x-app-layout>
