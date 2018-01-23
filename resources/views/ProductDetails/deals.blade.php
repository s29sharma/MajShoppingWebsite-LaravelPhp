@extends('layouts.master')

@section('content')
    @foreach($product->chunk(4) as $producty)
        <div class="row" style="margin-bottom: 50px;">
                @foreach($producty as $pro)
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a href="{{ route('ProductDetails.index',['id'=>$pro->id]) }}">
                                <img src="{{ URL::asset($pro->productimages->first()->image_url) }}" width="300px"
                                     height="250px" class="img-fluid">
                            </a>
                            <p><strong>{{ $pro->Product_name }} </strong></p>
                            <div class="text-center" id="dealheading">Deal of the day</div>
                            <div class="text-center">
                            <span class="prodiscount">-{{ $pro->Product_discount }}% <span class="cutoff">{{$pro->Product_price}}</span></span>
                            </div>
                            <p class="proprice">${{ $pro->Product_price-($pro->Product_price * ($pro->Product_discount/100)) }}</p>
                            @if($pro->reviews->isEmpty())

                                    <p class="goldstar">&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </p>
                            @else

                                    @foreach($pro->reviews as $review)

                                    @endforeach
                                    <!--if block starts-->
                                    <p class="goldstar">
                                    @if($review->sum('Product_rating')/count($pro->reviews)<1)
                                        <i class="fa star-half-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)==1)
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)>1 && $review->sum('Product_rating')/count($pro->reviews)<2)
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)==2)
                                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)>2 && $review->sum('Product_rating')/count($pro->reviews)<3)
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)==3)
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)>3 && $review->sum('Product_rating')/count($pro->reviews)<4)
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)==4)
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)>4 && $review->sum('Product_rating')/count($pro->reviews)<5)
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    @elseif($review->sum('Product_rating')/count($pro->reviews)==5)
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                @endif
                                <!--if block ends-->

                                    </p>
                                @endif
                        </div>
                    </div>
                @endforeach
            </div>
    @endforeach

    <div class="row">
        <div class="col-sm-12">
            {{ $product->links() }}

        </div>
    </div>
    @endsection