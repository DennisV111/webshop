@extends('frontend.app')

@section('content')
    <div class="basket-container">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="list-inline list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class='active'>Shopping Cart</li>
                    </ul>
                </div><!-- /.breadcrumb-inner -->
            </div><!-- /.container -->
        </div><!-- /.breadcrumb -->

        <div class="body-content outer-top-xs">
            <div class="container">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Cart::count() > 0)
                    <h4>{{ Cart::count() }} item in Shopping Cart</h4>

                    <div class="row ">
                        <div class="shopping-cart">
                            <div class="shopping-cart-table ">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-romove item">Remove</th>
                                                <th class="cart-description item">Image</th>
                                                <th class="cart-product-name item">The Book</th>
                                                <th class="cart-edit item">Edit</th>
                                                <th class="cart-qty item">Quantity</th>
                                                <th class="cart-sub-total item text-center">Subtotal</th>
                                                <th class="cart-total last-item">Price</th>
                                            </tr>
                                        </thead><!-- /thead -->
                                        <tfoot>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="shopping-cart-btn">
                                                        <span class="">
                                                            <a href="{{ route('item.showItemPage') }}"
                                                                class=" btn-upper btn-primary outer-left-xs"><i
                                                                    class="fa fa-angle-left"></i>Continue
                                                                Shopping</a>
                                                            <a href="#"
                                                                class=" btn-upper btn-primary pull-right outer-right-xs">Update
                                                                shopping cart</a>
                                                        </span>
                                                    </div><!-- /.shopping-cart-btn -->
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach (Cart::content() as $item)
                                                <tr>
                                                    <td class="romove-item">
                                                        <form action="{{ route('orderItem.destroy', $item->rowId) }}"
                                                            method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button style="border: none; background-color: transparent"
                                                                type="submit"><a title="cancel" class="icon"><i
                                                                        class="fa fa-trash-o"></i></a></button>
                                                        </form>
                                                    </td>
                                                    <td class="cart-image">
                                                        <a class="entry-thumbnail" href="#">
                                                            <img src="{{ asset('frontend/assets/img/' . $item->model->image_name) }}"
                                                                alt="">
                                                        </a>

                                                    </td>

                                                    <td class="cart-product-name-info">
                                                        <h4 class='cart-product-description'><a
                                                                href="#">{{ $item->model->title }}</a>
                                                        </h4>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="rating rateit-small"></div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="reviews">
                                                                    (06 Reviews)
                                                                </div>
                                                            </div>
                                                        </div><!-- /.row -->
                                                        <div class="cart-product-info">
                                                            <span
                                                                class="product-color">Author:<span>{{ $item->model->author }}</span></span>
                                                        </div>
                                                    </td>

                                                    <td class="cart-product-edit"><a href="#"
                                                            class="product-edit">Edit</a>
                                                    </td>
                                                    <td class="cart-product-quantity">
                                                        <select class="quantity" data-id="{{ $item->rowId }}"
                                                            data-productQuantity="{{ $item->model->quantity }}">
                                                            @for ($i = 1; $i < 5 + 1; $i++)
                                                                <option {{ $item->quantity == $i ? 'selected' : '' }}>
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </td>

                                                    <td class="cart-product-sub-total"><span
                                                            class="cart-sub-total-price">&euro;{{ $item->price }}</span>
                                                    </td>

                                                    <td class="cart-product-grand-total"><span
                                                            class="cart-grand-total-price">&euro;{{ $item->price }}</span>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody><!-- /tbody -->
                                    </table><!-- /table -->
                                </div>
                            </div><!-- /.shopping-cart-table -->
                            <div class="col-md-4 col-sm-12 estimate-ship-tax">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="estimate-title">Estimate shipping and tax</span>
                                                <p>Enter your destination to get shipping and tax.</p>
                                            </th>
                                        </tr>
                                    </thead><!-- /thead -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label class="info-title control-label">Country <span>*</span></label>
                                                    <select class="form-control unicase-form-control selectpicker">
                                                        <option>--Select options--</option>
                                                        <option>Netherlands</option>
                                                        <option>EU</option>
                                                        <option>united kingdom</option>
                                                        <option>USA</option>
                                                        <option>united arab emirates</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title control-label">State/Province
                                                        <span>*</span></label>
                                                    <select class="form-control unicase-form-control selectpicker">
                                                        <option>--Select options--</option>
                                                        <option>Groningen</option>
                                                        <option>Amsterdam</option>
                                                        <option>The Hague</option>
                                                        <option>Eindhoven</option>
                                                        <option>Maastricht</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title control-label">Zip/Postal Code</label>
                                                    <input type="text"
                                                        class="form-control unicase-form-control text-input" placeholder="">
                                                </div>
                                                <div class="pull-right">
                                                    <button type="submit" class="btn-upper  btn-primary">GET A
                                                        QOUTE</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.estimate-ship-tax -->

                            <div class="col-md-4 col-sm-12 estimate-ship-tax">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="estimate-title">Discount Code</span>
                                                <p>Enter your coupon code if you have one..</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text"
                                                        class="form-control unicase-form-control text-input"
                                                        placeholder="You Coupon..">
                                                </div>
                                                <div class="clearfix pull-right">
                                                    <button type="submit" class="btn-upper btn-primary">APPLY
                                                        COUPON</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody><!-- /tbody -->
                                </table><!-- /table -->
                            </div><!-- /.estimate-ship-tax -->

                            <div class="col-md-4 col-sm-12 cart-shopping-total">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="cart-sub-total">
                                                    Subtotal<span
                                                        class="inner-left-md">&euro;{{ Cart::Subtotal() }}</span>
                                                </div>
                                                <div class="cart-sub-total">
                                                    Tax (21%)<span class="inner-left-md">&euro;{{ Cart::Tax() }}</span>
                                                </div>
                                                <div class="cart-grand-total">
                                                    Grand Total<span
                                                        class="inner-left-md">&euro;{{ Cart::Total() }}</span>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead><!-- /thead -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="cart-checkout-btn pull-right">

                                                    <form action="{{ route('orderItem.store') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('POST') }}
                                                        <button type="submit" class=" btn-primary checkout-btn"><a
                                                                href="{{ route('checkout.index') }}"> PROCCED
                                                                TO
                                                                CHEKOUT</a></button>
                                                    </form>

                                                    <span class="">Checkout with multiples address!</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody><!-- /tbody -->
                                </table><!-- /table -->
                            </div><!-- /.cart-shopping-total -->
                        </div><!-- /.shopping-cart -->
                    </div> <!-- /.row -->
            </div><!-- /.body-content -->
        </div>
    </div>
@else
    <h3>No items in The Cart</h3>
    <br>
    <a href="{{ route('item.showItemPage') }}" class=" btn-primary">Continue Shopping</a>
    @endif

@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function() {
            const classname = document.querySelectorAll('.quantity');

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {

                    axios.patch('frontend/shopping-cart/5', {
                            quantity: 3
                        })
                        .then(function(response) {
                            console.log(response);
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                    // alert('You just updated the quantity of the product');
                });
            });


        })();
    </script>
@endsection
