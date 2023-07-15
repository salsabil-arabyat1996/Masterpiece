

<div>
    <div class="py-3 py-md-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if($product->productImages)
                        <img src="{{asset($product->productImages[0]->image)}}" class="w-100" alt="Img">
                        @else
                        No Image Added
                        @endif

                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{$product->name}}
                            {{-- <label class="label-stock bg-success">In Stock</label> --}}
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{$product->Category->name }}/{{$product->name }}
                        </p>
                        <div>
                            <span class="selling-price">{{$product->selling_price }}</span>
                            <span class="original-price">{{$product->original_price }}</span>
                        </div>

                        <div class="mt-2">
                            <div class="input-group">
                                {{-- @if($product->quantity) --}}
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount"  value="{{$this->quantityCount}}" class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                            {{-- @endif --}}
                        </div>


                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{$product->id}})"  class="btn btn1">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>
                            {{-- <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a> --}}
                        </div>
                        <div class="mt-3">
                            <h3 class="mb-0">Small Description</h3>
                            <p>
                                {!!$product->small_description !!}
                                      </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h2>Description</h2>
                        </div>
                        <div class="card-body">
                            <p>
                                {!!$product->description !!}
                                  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
