@extends('frontend.app')



@section('content')
    <div class="search-result-container">

        <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active" id="grid-container">

                <div class="item-product">
                    <div class="row">
                        <div class="breadcrumb">
                            <div class="container">
                                <div class="breadcrumb-inner">
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li class="active">Shop</li>

                                    </ul>
                                </div>
                                <div>
                                    {{-- @include('frontend.body.search') --}}
                                </div>
                                <!-- /.breadcrumb-inner -->
                            </div>
                            <!-- /.container -->
                        </div>

                        @include('item')

                        {{ $items->links() }}
                    @endsection
