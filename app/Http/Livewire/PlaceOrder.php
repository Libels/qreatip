<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PlaceOrder extends Component
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
     * Indicates if order is being placed.
     *
     * @var bool
     */
    public $confirmingOrder = false;

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
    public function placeOrder()
    {
		$this->resetErrorBag();

		$this->confirmingOrder = true;

		// return redirect(route('product.list'));
    }

	/**
     * Proccess to checkout
     *
     * @return void
     */
    public function continueCheckout()
    {
        $this->resetErrorBag();

        $this->confirmingOrder = false;

		return redirect(route('invoice.list'));
    }

    public function render()
    {
        return view('products.form.order-form', [

		]);
    }
}
