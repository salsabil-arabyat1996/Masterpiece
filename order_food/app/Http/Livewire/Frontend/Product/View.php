<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Product;

class View extends Component
{
    public $category;
    public $product;
    public $quantityCount;

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
        $this->quantityCount = 1;
    }

    public function incrementQuantity()
    {
        if($this->product->quantity > 0){
            $this->quantityCount++;
        }

    }

    public function decrementQuantity()
    {
        $this->quantityCount = max(1, $this->quantityCount - 1);
    }




    public function addToCart(int $productId)
    {
        if (Auth::check()) {
            if ($this->product->where('id', $productId)->where('status', '0')->exists()) {
                if (Cart::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()) {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Product Already Added',
                        'type' => 'warning',
                        'status' => 200
                    ]);
                } else {
                    if ($this->product->quantity > 0) {
                        if ($this->product->quantity > $this->quantityCount) {
                            Cart::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $productId,
                                'quantity' => $this->quantityCount
                            ]);
                            $this->emit('CartAddedUpdated');
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Product Added to Cart',
                                'type' => 'success',
                                'status' => 200
                            ]);
                        } else {
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Only ' . $this->product->quantity . ' Quantity Available',
                                'type' => 'warning',
                                'status' => 404
                            ]);
                        }
                    }
                }
            } else {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product does not exist.',
                    'type' => 'warning',
                    'status' => 404
                ]);
            }
        } else {
            session()->flash('message', 'Please log in.');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please log in to add to cart.',
                'type' => 'info',
                'status' => 401
            ]);
        }
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product,
        ]);
    }
}
