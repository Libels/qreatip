<x-app-layout>
    <div class="py-3">
        <div class="flex">
			<div class="mx-auto  sm:pl-3 lg:pl-4">
	            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
					@for($i = 0; $i < 50; $i++)
					<a href="{{ route('product.view', ['id' => $i]) }}">
						<div class="bg-white sm:rounded-lg overflow-hidden shadow-md h-56 w-56 sm:h-44 sm:w-44 flex justify-center items-center">
							Product {{ $i }}
						</div>
					</a>
					@endfor
	            </div>
	        </div>
			<div class="hidden sm:flex flex-col sticky top-4 right-0 bg-white w-56 h-screen">
				Sidebar
				<div class="hidden sm:block">
					sm
				</div>
				<div class="hidden md:block">
					md
				</div>
				<div class="hidden lg:block">
					lg
				</div>
				<div class="hidden xl:block">
					xl
				</div>
				<div class="hidden 2xl:block">
					2xl
				</div>
			</div>
        </div>
    </div>

	<div class="bg-indigo-600 fixed bottom-0 w-screen">
		<div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
			<div class="flex items-center justify-between flex-wrap">
				<div class="w-0 flex-1 flex items-center">
					<span class="flex p-2 rounded-lg bg-indigo-800">
						<!-- Heroicon name: outline/speakerphone -->
						<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
						</svg>
					</span>
					<p class="ml-3 font-medium text-white truncate">
						<span class="md:hidden">
							Promosikan dirimu!
						</span>
						<span class="hidden md:inline">
							Ikut promosikan diri bersama ratusan orang lainnya.
						</span>
					</p>
				</div>
				<div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
					<a href="{{ route('product.create') }}" class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50">
						Mulai sekarang
					</a>
				</div>
				<div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
					<button type="button" class="-mr-1 flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
						<span class="sr-only">Dismiss</span>
						<!-- Heroicon name: outline/x -->
						<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>
			</div>
		</div>
	</div>

</x-app-layout>
