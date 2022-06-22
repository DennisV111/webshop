@extends('frontend.app')

@section('title', 'Search Results')


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
                        <h1>Search Results</h1>
                        <p>3 result(s) for '{{ request->input('query') }}'</p>


                        {{ $items->links() }}
                    @endsection
