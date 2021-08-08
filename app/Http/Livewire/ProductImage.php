<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProductImage extends Component
{
	use WithFileUploads;

	public $files = [];

	/**
     * The component's state.
     *
     * @var array
     */
    public $state = [];

	protected $rules = [
	];

	/**
	 * Prepare the component.
	 *
	 * @return void
	 */
	public function mount()
	{
	}

	/**
     * Add the product information.
     *
     * @return void
     */
    public function addProduct()
    {


		$this->resetErrorBag();

        $this->emit('saved');

        $this->emit('refresh-navigation-menu');

		return redirect(route('product.list'));
    }

    public function render()
    {
        return view('products.form.product-image', [

		]);
    }

	public function updatedFiles()
    {
		$this->validate([
            'files' => 'image|max:1024', // 1MB Max
        ]);

        $this->files->store('thumbnail');
    }
}
