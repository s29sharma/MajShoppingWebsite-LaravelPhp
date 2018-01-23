@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-2" id="scroller">
       <div class="text-center">
           <div class="filterheading">
           <p class="content">Filters</p>
           </div>
       </div>
        <div class="text-center">
            <div class="filterheading">
        <p class="content">PRICE</p>
                <div class="seperator">
                <div id="nonlinear">

                </div>
                </div>

                <form action="{{ route('ProductDetails.electronicproducts') }}" method="post" id="myform">

              <label for="lower-value">Min:</label><input type="text" class="form-control" name="lower-value" id="lower-value" value="@if(@isset($minprice)){{ $minprice }} @else {{ '0' }}@endif" style="text-align: center">
                <label for="upper-value" class="lower-label">Max:</label> <input type="text" class="form-control" name="upper-value" id="upper-value" value="@if(@isset($maxprice)){{ $maxprice }} @else {{ '10000' }}@endif" style="text-align: center">
                    <br/>
                    <div class="text-center">
                        <p class="content">Brand: </p>
                    @foreach($categories as $category)
                        <div class="text-left" style="margin-left: 30px;">
                        <p class="content">
                            <input type="checkbox" name="selectedbrands[]" value="{{ $category->Product_brand }}" @isset($selectedbrands) @if (is_array($selectedbrands) && in_array($category->Product_brand,$selectedbrands)) checked @endif  @endisset> &nbsp; {{ $category->Product_brand }}
                        </p>
                        </div>
                        @endforeach

                    </div>
                    <br/>
                    <div class="text-center">
                        <p class="content">Discounts: </p>
                        <div class="text-left" style="margin-left: 30px;">
                            <p class="content">
                            <input type="checkbox" name="discounts[]" value="10" @isset($discounts) @if (is_array($discounts) && in_array(10,$discounts))  {{ 'checked' }} @endif @endisset> &nbsp;10% or more
                            </p>
                            <p class="content">
                            <input type="checkbox" name="discounts[]" value="20" @isset($discounts) @if (is_array($discounts) && in_array(20,$discounts)) {{ 'checked' }} @endif @endisset> &nbsp;20% or more
                            </p>
                            <p class="content">
                            <input type="checkbox" name="discounts[]" value="30" @isset($discounts) @if (is_array($discounts) && in_array(30,$discounts)) {{ 'checked' }} @endif @endisset> &nbsp;30% or more
                            </p>
                            <p class="content">
                            <input type="checkbox" name="discounts[]" value="40" @isset($discounts) @if (is_array($discounts) && in_array(40,$discounts)) {{ 'checked' }} @endif @endisset> &nbsp;40% or more
                            </p>
                            <p class="content">
                            <input type="checkbox" name="discounts[]" value="50" @isset($discounts) @if (is_array($discounts) && in_array(50,$discounts)) {{ 'checked' }} @endif @endisset> &nbsp;50% or more
                            </p>
                    </div>
                    </div>
                            {{ csrf_field() }}
                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
        <div class="col-sm-10">
            @foreach($electronics->chunk(4) as $elecproduct)
                <div class="row" style="margin-bottom: 50px;">
                    @foreach($elecproduct as $pro)
                        <div class="col-sm-3">
                            <div class="text-center">
                                <a href="{{ route('ProductDetails.index',['id'=>$pro->id]) }}">
                                    <img src="{{ URL::asset($pro->productimages->first()->image_url) }}" width="300px"
                                         height="250px" class="img-fluid">
                                </a>
                                <p><strong>{{ $pro->Product_name }} </strong></p>
                                <!--<div class="dealheading">Deal of the day</div>-->
                                <span class="prodiscount">-{{ $pro->Product_discount }}% <span class="cutoff">{{$pro->Product_price}}</span></span>
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
    </div>
    <div class="row">
        <div class="col-sm-12">
            {{ $electronics->links() }}

        </div>
    </div>
    </div>
    @endsection