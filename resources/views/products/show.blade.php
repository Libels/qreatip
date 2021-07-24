<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="flex justify-between space-x-4">
				<div class="w-4/5">
					<div class="bg-white h-96">
						Showcase
					</div>
					<div class="bg-gray-300 h-48">
						Description
					</div>
					<div class="bg-white h-96">
						Comment
					</div>

				</div>
				<div class="sticky top-4 bg-white h-96 w-1/5 sm:rounded-lg shadow-md border-gray-500 p-3">
					<h1 class="font-bold text-right">Pilih Varian</h1>
					<select required id="opsi" wire:model.defer="state.opsi" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
						<option selected="selected" disabled>Varian</option>
						<option wire:key="0" value="0">Face</option>
						<option wire:key="1" value="1">Half Body</option>
						<option wire:key="2" value="2">Full Body</option>
					</select>
					<div class="font-extrabold text-center text-lg">
						Rp. 169,1173.00
					</div>
					<x-jet-button>
						Wishlist
					</x-jet-button>
				</div>
			</div>
        </div>
    </div>
</x-app-layout>
