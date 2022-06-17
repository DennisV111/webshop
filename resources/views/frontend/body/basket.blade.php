<div class="container">

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i> Cart <span
                        class="badge badge-pill badge-danger">{{ count((array) session('basket')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span
                                class="badge badge-pill badge-danger">{{ count((array) session('basket')) }}</span>
                        </div>

                        <?php $total = 0; ?>
                        @foreach ((array) session('basket') as $id => $infos)
                            <?php $total += $infos['price'] * $infos['item_qty']; ?>
                        @endforeach

                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>

                    @if (session('basket'))
                        @foreach (session('basket') as $id => $infos)
                            <div class="row basket-info">
                                <div class="col-lg-4 col-sm-4 col-4 basket-info-img">
                                    <img src="{{ $infos['item_img'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 basket-info-item">
                                    <p>{{ $infos['name'] }}</p>
                                    <span class="price text-info"> ${{ $infos['price'] }}</span> <span class="count">
                                        Quantity:{{ $infos['item_qty'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('basket') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
