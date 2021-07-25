<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddProduct extends Component
{
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
        return view('products.form.update-information-form', [

		]);
    }
}
