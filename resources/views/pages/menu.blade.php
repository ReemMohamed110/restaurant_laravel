@extends('layouts.app_edit')
@section('content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                @isset($categories)
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        @foreach ($categories as $category)
                            @if ($category->menuItems()->exists())
                                <li class="nav-item">
                                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3" data-bs-toggle="pill"
                                        href="#tab-{{ $category->id }}" class="category-tab"
                                        data-category-id="{{ $category->id }}">
                                        <i class="fa fa-coffee fa-2x text-primary"></i>
                                        <div class="ps-3">
                                            <small class="text-body">Popular</small>
                                            <h6 class="mt-n1 mb-0">{{ $category->name }}</h6>
                                        </div>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @else
                    <p>There are no categories.</p>
                @endisset

                <div class="tab-content">
                    @foreach ($categories as $category)
                        @if ($category->menuItems()->exists())
                            <div id="tab-{{ $category->id }}" class="tab-pane fade p-0">
                                <div class="row g-4">
                                    @php
                                        $items = $category->menuItems;
                                    @endphp
                                    @forelse ($items as $item)
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded"
                                                    src="{{ asset('assets/img/menu-1.jpg') }}" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span>{{ $item->name }}</span>
                                                        <span class="text-primary">${{ $item->price }}</span>
                                                    </h5>
                                                    <small class="fst-italic">{{ $item->description }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p>There are no items.</p>
                                    @endforelse
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>


        </div>
    </div>

    <!-- Menu End -->
@endsection
