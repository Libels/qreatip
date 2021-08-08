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
</x-app-layout>
