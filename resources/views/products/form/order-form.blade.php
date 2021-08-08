<div class="sm:rounded-lg shadow-md p-3 bg-white">
	<div class="flex flex-col justify-center items-center">
		<div class="flex">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
				<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
				<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
				<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
				<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
			</svg>
		</div>
	</div>
	<span class="block w-full h-0.5 bg-gray-200 my-4"></span>
	<h1 class="font-bold">Pilih Varian</h1>
	<div class="flex flex-col space-y-2">
		<select class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="">
			<option value="">Face Only</option>
			<option value="">Half Body</option>
			<option value="">Full Body</option>
		</select>
		<span class="text-gray-500">Short description goes here.</span>
	</div>
	<span class="block w-full h-0.5 bg-gray-200 my-4"></span>
	<div class="flex justify-between items-center">
		<span class="text-sm">Subtotal</span>
		<span class="text-lg font-extrabold">Rp. 169,1173.00</span>
	</div>

	<div class="flex justify-end my-2">
		<x-jet-button wire:click="placeOrder" wire:loading.attr="disabled">
			Order
		</x-jet-button>

		<x-jet-action-message class="ml-3" on="orderPlaced">
			{{ __('Done.') }}
		</x-jet-action-message>
	</div>

	<!-- Order Confirmed Modal -->
	<x-jet-dialog-modal wire:model="confirmingOrder">
		<x-slot name="title">
			{{ __('Confirming Order') }}
		</x-slot>

		<x-slot name="content">
			{{ __('Complete the purchase to the checkout.') }}
		</x-slot>

		<x-slot name="footer">
			<x-jet-secondary-button wire:click="$toggle('confirmingOrder')" wire:loading.attr="disabled">
				{{ __('Cancel') }}
			</x-jet-secondary-button>

			<x-jet-button class="ml-2"
						wire:click="continueCheckout"
						wire:loading.attr="disabled">
				{{ __('Checkout') }}
			</x-jet-button>
		</x-slot>
	</x-jet-dialog-modal>

	<span class="block w-full h-0.5 bg-gray-200 my-4"></span>
	<div class="flex border-gray-50 text-sm -mt-3 items-center justify-evenly space-x-2">
		<div class="flex items-center space-x-2 p-2 rounded-md duration-75 hover:bg-gray-100">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
			</svg>
			<span>Wishlist</span>
		</div>
		<div class="flex items-center space-x-2 p-2 rounded-md duration-75 hover:bg-gray-100">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
			</svg>
			<span>Share</span>
		</div>
	</div>
</div>
