@extends('home.layout.home')

@section('content')
<!-- Blog Cards -->
<div class="row gap-y">
@foreach ($products as $product)
<div class="col-md-6 col-lg-4">
    <div class="card">
        @if ($product->image_cover)
            <img class="img-card-top" src="{{ $product->image_cover }}">
        @else
            <img class="img-card-top" src="{{ asset('anchor/assets/img/demo/blog3.jpg')}}">
        @endif
        <div class="card-body text-center">
            <a href="#">
            <h5 class="card-title text-dark">{{ $product->name }}</h5>
            <h6 class="card-title text-dark">{{ number_format($product->price, 2) }}</h6>
            </a>
            <form action="{{ route('cart.add') }}" method="post">
                @csrf
                <input type="hidden" name="productId" value="{{ $product->id }}">
                <span class="card-text text-muted inline-block">
                    <input type="number" class="input-round" min="1" max="200" name="quantity" value="1">
                <button type="submit"><span class="iconbox iconsmall rounded-circle bg-primary text-white shadow border-0"><i class="fas fa-cart-arrow-down"></i></span> </button></span>
            </form>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection

@push('index-toastr')
    <script>
        @if (session('success'))
            toastr.success("{{ session()->get('success') }}")
        @endif
    </script>
@endpush
