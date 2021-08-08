<x-jet-form-section submit="updateProfileInformation">
	<x-slot name="title">
		{{ __('Product Images') }}
	</x-slot>

	<x-slot name="description">
		{{ __('Upload your images.') }}
	</x-slot>

	<x-slot name="form">
		<!-- File Uploader -->
		<div class="col-span-6" x-data="dropFile()">
			<div class="mt-1 flex flex-col items-center justify-center px-6 pt-5 pb-6 border-2 border-dashed rounded-md"
				x-bind:class="dropingFile ? 'border-gray-400' : 'border-gray-300'"
				x-on:drop="dropingFile = false"
            	x-on:drop.prevent="handleFileDrop($event)"
				x-on:click="document.getElementById('files').click()"
            	x-on:dragover.prevent="dropingFile = true"
            	x-on:dragleave.prevent="dropingFile = false"
				<div class="space-y-1 text-center">
					<svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
						<path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<div class="flex text-sm text-gray-600">
						<label for="files" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
							<span>Upload a file</span>
							<input id="files" name="files" type="file" class="sr-only" x-on:change.prevent="handleFileDrop($event)">
						</label>
						<p class="pl-1">or drag and drop</p>
					</div>
					<p class="text-xs text-gray-500">
						PNG, JPG, GIF up to 10MB
					</p>
				</div>
			</div>
			<div class="col-span-6 flex space-x-4 my-2">
				@for ($i = 0; $i < 5; $i++)
					<div class="flex justify-end w-12 h-12 bg-gray-100 rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 -mr-1 -mt-1 bg-white rounded-full shadow-sm" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
					</div>
				@endfor
			</div>
		</div>
		<script type="text/javascript">
			function dropFile() {
				return {
					dropingFile: false,
					handleFileDrop(e) {
						if ((typeof e.dataTransfer !== 'undefined') && (e.dataTransfer.files.length > 0)) {
							const files = e.dataTransfer.files;
							@this.uploadMultiple(
								'files',
								files,
								(uploadedFilename) => {
									alert(uploadedFilename)
								},
								() => {},
								(event) => {
									console.log(event)
								}
							)
						} else if ((typeof e.target !== 'undefined') && (e.target.files.length > 0)) {
							const files = e.target.files;
							@this.uploadMultiple(
								'files',
								files,
								(uploadedFilename) => {
									alert(uploadedFilename)
								},
								() => {},
								(event) => {
									console.log(event)
								}
							)
						}
					}
				};
			}
		</script>
	</x-slot>
</x-jet-form-section>
