<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="flex justify-between space-x-4">
				<div class="w-4/5">

					<div class="flex justify-between my-2">
						<h1 class="text-xl font-bold">Absolutely Non-Extraordinary Artist</h1>
						<div class="grid gap-2 grid-cols-4">
							@for($i=0;$i < 4;$i++)
							<span class="bg-gray-300 rounded-md px-2 py-1">Tag</span>
							@endfor
						</div>
					</div>

					<div class="group flex relative rounded-lg bg-gray-100 overflow-hidden shadow-md items-center">
						<div class="absolute bg-opacity-30 duration-75 group-hover:bg-opacity-100 bg-white rounded-full p-2 mx-2 left-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
							</svg>
						</div>
						<div style="background-image: url(https://fabianoo.net/projects/assets/img/Sailor-Moon.jg); height: 500px;" class="w-full bg-cover flex justify-center items-end">
							<div class="flex space-x-2 py-4">
								<span class="block bg-white h-4 w-4 bg-opacity-30 group-hover:bg-opacity-100 duration-75 rounded-full"></span>
								<span class="block bg-gray-400 h-4 w-4 bg-opacity-30 group-hover:bg-opacity-100 duration-75 rounded-full"></span>
								<span class="block bg-gray-400 h-4 w-4 bg-opacity-30 group-hover:bg-opacity-100 duration-75 rounded-full"></span>
								<span class="block bg-gray-400 h-4 w-4 bg-opacity-30 group-hover:bg-opacity-100 duration-75 rounded-full"></span>
							</div>
						</div>
						<div class="absolute bg-opacity-30 duration-75 group-hover:bg-opacity-100 bg-white rounded-full p-2 mx-2 right-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
							</svg>
						</div>
					</div>

					<div class="bg-white p-3 h-auto sm:rounded-lg shadow-md my-4">
						<div class="flex space-x-4 items-center">
							<button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
								<img class="h-16 w-16 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
							</button>
							<div class="flex flex-col justify-center">
								<div class="flex items-center space-x-1">
									<h1 class="font-bold text-lg">Fray Dalton</h1>
									<abbr title="This user is verified creator">
										<svg xmlns="http://www.w3.org/2000/svg" class="relative h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
									</abbr>
								</div>
								<p>I don't give a fuck.</p>
								<div class="flex">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path d="M12 14l9-5-9-5-9 5 9 5z" />
										<path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
									</svg>
								</div>
							</div>
						</div>
						<span class="block bg-gray-300 mx-auto my-4 h-px w-full"></span>
						<div class="py-2 px-4">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
					<div class="bg-gray-300 h-96">
						Comment
					</div>

				</div>
				<div class="sticky top-4 w-1/5 h-96">

					@livewire('place-order')

					<div class="sm:rounded-lg shadow-md p-3 bg-white mt-4">
						<h1 class="font-bold">Another cool things</h1>
						<div class="grid grid-cols-3 gap-2 my-2 justify-items-center">
							<span class="block rounded-lg bg-gray-300 w-16 h-16"></span>
							<span class="block rounded-lg bg-gray-300 w-16 h-16"></span>
							<span class="block rounded-lg bg-gray-300 w-16 h-16"></span>
							<span class="block rounded-lg bg-gray-300 w-16 h-16"></span>
							<span class="block rounded-lg bg-gray-300 w-16 h-16"></span>
							<span class="block rounded-lg bg-gray-300 w-16 h-16"></span>
						</div>
						<span class="block flex justify-center items-center rounded-lg bg-gray-300 w-full h-8">More</span>
					</div>
				</div>
			</div>
        </div>
    </div>
</x-app-layout>
