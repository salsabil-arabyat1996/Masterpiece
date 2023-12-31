
    <div>
        <div class="py-3 py-md-4 checkout">
            <div class="container">
                <h4>Checkout</h4>
                <hr>

                @if ($this->totalProductAmount !='0')


                <div class="row">
                    <div class="col-md-12 mb-4" >
                        <div class="shadow bg-white p-3" >
                            <h4 class="text-primary" >
                             Item Total Amount :
                                <span class="float-end" style="color: orangered" >JOD{{$this->totalProductAmount}}</span>
                            </h4>
                            <hr>
                            <h4>**Order at least 1- 2  days ahead. Please specify the time & day in a note on checkout or  text on WhatsApp: 079 653 6681</h4>
                            <br/>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="shadow bg-white p-3">
                            <h4 class="text-primary" >
                                <h4 style="color: orangered" >Basic Information</h4>
                            </h4>
                            <hr>

                            {{-- <form action="" method="POST"> --}}
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Full Name</label>
                                        <input type="text" wire:model.defer="fullname" class="form-control" placeholder="Enter Full Name" />
                                        @error('fullname') <small class="text-danger">{{$message}}</small> @enderror


                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Phone Number</label>
                                        <input type="number" wire:model.defer="phone" class="form-control" placeholder="Enter Phone Number" />
                                        @error('phone') <small class="text-danger">{{$message}}</small> @enderror

                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Email Address</label>
                                        <input type="email" wire:model.defer="email" class="form-control" placeholder="Enter Email Address" />
                                        @error('email') <small class="text-danger">{{$message}}</small> @enderror

                                    </div>
                                    {{-- <div class="col-md-6 mb-3">
                                        <label>Date</label>
                                        <input type="date" wire:model.defer="order_created_at" class="form-control" placeholder="Enter Date" />
                                        @error('order_created_at') <small class="text-danger">{{$message}}</small> @enderror

                                    </div> --}}
                                    <div class="col-md-12 mb-3">
                                        <label>Full Address + Receipt date and time</label>
                                        <textarea wire:model.defer="address" class="form-control" rows="2"></textarea>
                                        @error('address') <small class="text-danger">{{$message}}</small> @enderror

                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Select Payment Mode: </label>
                                        <div class="d-md-flex align-items-start">
                                            <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link fw-bold" id="cashOnDeliveryTab-tab" data-bs-toggle="pill" data-bs-target="#cashOnDeliveryTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true">Cash on Delivery</button>
                                                <button class="nav-link fw-bold" id="onlinePayment-tab" data-bs-toggle="pill" data-bs-target="#onlinePayment" type="button" role="tab" aria-controls="onlinePayment" aria-selected="false">Online Payment</button>
                                            </div>
                                            <div class="tab-content col-md-9" id="v-pills-tabContent" >
                                                <div class="tab-pane fade" id="cashOnDeliveryTab" role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0" >
                                                    <h6 >Cash on Delivery Mode</h6>
                                                    <hr/>
                                                    <button type="button" wire:click="codOrder" class="btn btn-primary">Place Order (Cash on Delivery)</button>

                                                </div>
                                                <div class="tab-pane fade" id="onlinePayment" role="tabpanel" aria-labelledby="onlinePayment-tab" tabindex="0">
                                                    <h6 >Online Payment Mode</h6>
                                                    <hr/>
                                                    <button type="button" class="btn btn-warning">Pay Now (Online Payment)</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            {{-- </form> --}}

                        </div>
                    </div>

                </div>
                @else
              <div class="card card-body shadon text-center p-md-5">
                <h4>No item in cart to checkout</h4>
                <a href="{{url('collections')}}" class="btn btn-warning">shop Now</a>
              </div>
                @endif
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> --}}

