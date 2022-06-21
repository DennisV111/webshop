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
                                        <tr>
                                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                                        class="fa fa-trash-o"></i></a></td>
                                            <td class="cart-image">
                                                <a class="entry-thumbnail" href="detail.html">
                                                    <img src="assets/img/Architect/Architect5.jpg" alt="">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class='cart-product-description'><a href="detail.html">European
                                                        Architecture</a></h4>
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
                                                    <span class="product-color">Auther:<span>Michelle Morris</span></span>
                                                </div>
                                            </td>
                                            <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a>
                                            </td>
                                            <td class="cart-product-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i
                                                                    class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i
                                                                    class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1">
                                                </div>
                                            </td>
                                            <td class="cart-product-sub-total"><span
                                                    class="cart-sub-total-price">&euro;50.00</span></td>
                                            <td class="cart-product-grand-total"><span
                                                    class="cart-grand-total-price">&euro;50.00</span></td>
                                        </tr>
                                        <tr>
                                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                                        class="fa fa-trash-o"></i></a></td>
                                            <td class="cart-image">
                                                <a class="entry-thumbnail" href="detail.html">
                                                    <img src="assets/img/Graphic-Design/GraphicDesign7.jpg" alt="">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class='cart-product-description'><a href="detail.html">Color Theory For
                                                        Beginners</a></h4>
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
                                                    <span class="product-color">Auther:<span>Jennifer Jones</span></span>
                                                </div>
                                            </td>
                                            <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a>
                                            </td>
                                            <td class="cart-product-quantity">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <div class="arrows">
                                                            <div class="arrow plus gradient"><span class="ir"><i
                                                                        class="icon fa fa-sort-asc"></i></span></div>
                                                            <div class="arrow minus gradient"><span class="ir"><i
                                                                        class="icon fa fa-sort-desc"></i></span></div>
                                                        </div>
                                                        <input type="text" value="1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-product-sub-total"><span
                                                    class="cart-sub-total-price">&euro;50.00</span></td>
                                            <td class="cart-product-grand-total"><span
                                                    class="cart-grand-total-price">&euro;50.00</span></td>
                                        </tr>
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
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    placeholder="">
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
                                                <input type="text" class="form-control unicase-form-control text-input"
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
                                                Subtotal<span class="inner-left-md">&euro;100.00</span>
                                            </div>
                                            <div class="cart-grand-total">
                                                Grand Total<span class="inner-left-md">&euro;100.00</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead><!-- /thead -->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-checkout-btn pull-right">
                                                <button type="submit" class=" btn-primary checkout-btn">PROCCED TO
                                                    CHEKOUT</button>
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

        <table id="basket" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:10%">Image</th>
                    <th style="width:40%">The Book</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                @if (session('basket'))
                    @foreach (session('basket') as $id => $infos)
                        <?php $total += $infos['price'] * $infos['item_qty']; ?>
                        <tr>
                            <td data-th="Item">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="{{ $infos['item_img'] }}" width="100"
                                            height="100" class="img-responsive" /></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $infos['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">${{ $infos['price'] }}</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $infos['item_qty'] }}" class="form-control item_qty" />
                            </td>
                            <td data-th="Subtotal" class="text-center">${{ $infos['price'] * $infos['item_qty'] }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm update-basket" data-id="{{ $id }}"><i
                                        class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm remove-from-basket" data-id="{{ $id }}"><i
                                        class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total {{ $total }}</strong></td>
                </tr>
                <tr>
                    <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                            Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
                </tr>
            </tfoot>
        </table>


    @endsection

    @section('scripts')
        <script type="text/javascript">
            $(".update-basket").click(function(e) {
                e.preventDefault();
                var ele = $(this);
                $.ajax({
                    url: '{{ url('update-basket') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id"),
                        item_qty: ele.parents("tr").find(".item_qty").val()
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });
            $(".remove-from-basket").click(function(e) {
                e.preventDefault();
                var ele = $(this);
                if (confirm("Are you sure")) {
                    $.ajax({
                        url: '{{ url('remove-from-basket') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.attr("data-id")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        </script>
    @endsection
