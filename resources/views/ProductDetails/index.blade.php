@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-1" style="margin-left: 50px;">

            <div class="row">
                <div class="col-sm-12">
                    @foreach($individualproduct->productimages as $proimage)
                        <div class="row">
                            <div id="thumbs">
                                <img src="{{ URL::asset($proimage->image_url) }}"
                                     style="border: 1px solid black; margin-top: 15px;" class="img-thumbnail">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="largeimage">
                    <img id="largeImage" src="{{ URL::asset($individualproduct->productimages->first()->image_url) }}"
                         width="400px" height="400px" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col-sm-3" id="seperatedetail">
            <div class="row">
                <div id="productheading">
                    <h4>{{ $individualproduct->Product_name }}</h4>
                    <br/>
                    @if($individualproduct->reviews->isEmpty())
                    <div class="row">


                            <p>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                <a href="#" class="insidestar">O Reviews </a> </p>
                    </div>
                            <p class="productprice">Price: ${{ $individualproduct->Product_price }} &nbsp; &nbsp;
                                -{{ $individualproduct->Product_discount }}%</p>
                            <p class="updatedprice">New price: {{ $individualproduct->Product_price-($individualproduct->Product_price * ($individualproduct->Product_discount/100))}}
                                & <strong>{{ $individualproduct->Product_shippingcost }}</strong></p>
                            <p class="save">You save :
                                ${{ ($individualproduct->Product_price *  ($individualproduct->Product_discount/100) ) }}</p>
                            <p class="stockupdate">
                                @if($individualproduct->Product_instock>1)
                                    In Stock
                                @else
                                    out of stock

                                @endif
                            </p>
                    @else
                        <div class="row">
                        @foreach($individualproduct->reviews as $review)

                        @endforeach
                        <p class="starrating">&nbsp;&nbsp; Rating: <a href="#" class="insidestar">{{ $review->sum('Product_rating')/count($individualproduct->reviews) }}
                                /5 </a>&nbsp; &nbsp;</p>
                        <!--if block starts-->
                        @if($review->sum('Product_rating')/count($individualproduct->reviews)<1)
                            <i class="fa star-half-o" aria-hidden="true"></i>
                        @elseif($review->sum('Product_rating')/count($individualproduct->reviews)==1)
                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($review->sum('Product_rating')/count($individualproduct->reviews)>1 && $review->sum('Product_rating')/count($individualproduct->reviews)<2)
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                            @elseif($review->sum('Product_rating')/count($individualproduct->reviews)==2)
                                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                            @elseif($review->sum('Product_rating')/count($individualproduct->reviews)>2 && $review->sum('Product_rating')/count($individualproduct->reviews)<3)
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                            @elseif($review->sum('Product_rating')/count($individualproduct->reviews)==3)
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                            @elseif($review->sum('Product_rating')/count($individualproduct->reviews)>3 && $review->sum('Product_rating')/count($individualproduct->reviews)<4)
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                            @elseif($review->sum('Product_rating')/count($individualproduct->reviews)==4)
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                            @elseif($review->sum('Product_rating')/count($individualproduct->reviews)>4 && $review->sum('Product_rating')/count($individualproduct->reviews)<5)
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>
                            @elseif($review->sum('Product_rating')/count($individualproduct->reviews)==5)
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                        @endif
                        <!--if block ends-->


                    </div>
                    <p class="productprice">Price: ${{ $individualproduct->Product_price }} &nbsp; &nbsp;
                        -{{ $individualproduct->Product_discount }}%</p>
                    <p class="updatedprice"> &nbsp;&nbsp;New
                        price: {{ $individualproduct->Product_price-($individualproduct->Product_price * ($individualproduct->Product_discount/100))}}
                        & <strong>{{ $individualproduct->Product_shippingcost }}</strong></p>
                    <p class="save">You save :
                        ${{ ($individualproduct->Product_price *  ($individualproduct->Product_discount/100) ) }}</p>
                    <p class="stockupdate">
                        @if($individualproduct->Product_instock>1)
                            In Stock

                        @else
                            out of stock

                        @endif
                    </p>
                    @endif
                </div>
            </div>
        </div>
            <form action="{{ route('checkout.cart',['id'=>$individualproduct->id]) }} " method="post" id="quantityform">
                @if($individualproduct->Product_instock >1)
        <div class="col-sm-2">
            <div class="adding">
                <select name="quantity" id="quantity" class="custom-select">
                    <option disabled selected>Select Quantity</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <br>
                @foreach($errors->all() as $error)
                <p style="color: #ef1a1a; font-size: 12px;">{{ $error }}</p>
                @endforeach
                <br/>
                <br/>
                <button type="submit" class="btn btn-primary" role="button" style="margin-left: 20px;">Add to Cart</button>

                <br/>
                <br/>
                <a href="#" class="btn btn-secondary" value="Add to wishlist" style="margin-left: 10px">Add to wishlist</a>
            </div>
        </div>
        @else
                    <div class="col-sm-2">
                        <div class="adding">
                    <button type="submit" class="btn btn-secondary" value="Add to wishlist" style="margin-left: 10px">Add to wishlist</button>
            </div>
    </div>

        @endif
                    {{ csrf_field() }}
            </form>
        <div class="col-sm-1">

        </div>
    </div>


    <br/>
    <br/><br/>
    <br/>

    <div class="row">

        <div class="col-sm-1">

        </div>
        <div class="container">
            <div class="accordion-option">
                <a href="javascript:void(0)" class="toggle-accordion active" id="accordion"></a>
            </div>
            <div class="clearfix"></div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a style="color: #383737" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                Product Description
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="movecollapseleft">
                                {{ $individualproduct->Product_description }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a style="color: #383737" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Product Specification
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="movecollapseleft">
                                {{ $individualproduct->Product_specification }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a style="color: #383737" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Product Reviews
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="movecollapseleft">
                                @if($individualproduct->reviews->isEmpty())
                                    <p>No customer reviews yet</p>
                                @else
                                @foreach($individualproduct->reviews as $review)
                                    <div id="row">
                                        @if($review->Product_rating<1)
                                            <i class="fa star-half-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating==1)
                                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating>1 && $review->Product_rating<2)
                                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating==2)
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating>2 && $review->Product_rating<3)
                                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating==3)
                                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating>3 && $review->Product_rating<4)
                                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating==4)
                                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating>4 && $review->Product_rating<5)
                                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        @elseif($review->Product_rating==5)
                                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        @endif

                                        {{ $review->Review_heading }}
                                        <p id="reviewusername">By {{ $review->Review_Username}}
                                            on {{ date('F d, Y', strtotime($review->created_at)) }} <strong id="thick">-Published
                                                on MAJ</strong></p>
                                        <p id="purchaseverification"> {{ $review->Review_verification }} </p>
                                        <p>{{ $review->Review_content }}</p>
                                        <br/>
                                        <br/>

                                    </div>
                                @endforeach
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-1">

        </div>
    </div>

    <br/>
    <br/>
@endsection