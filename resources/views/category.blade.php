<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="flex flex-col justify-between h-hs">
				<div class="grid sm:grid-cols-2 w-full sm:gap-4">
					@for($i = 0; $i < 8; $i++)
					<a href="{{ route('products') }}">
						<div class="flex justify-center items-center sm:rounded-lg overflow-hidden shadow-md bg-white w-full h-24">
							Sub-Category {{ $i }}
						</div>
					</a>
					@endfor
				</div>
				<div class="bg-white w-full h-24 flex justify-center items-center sm:rounded-lg overflow-hidden shadow-md">
					Explore more
				</div>
			</div>
        </div>
    </div>
</x-app-layout>
