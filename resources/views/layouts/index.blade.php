@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">

            <div id="myCarousel" class="carousel slide bg-inverse w-1550 ml-auto mr-auto" data-ride="carousel"
                 align="center">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox" height="100px">
                    <div class="carousel-item active">
                        <img class="d-block" src="{{ URL::asset('images/iphone.jpg') }}" alt="First slide"/>
                    </div>
                <div class="carousel-item">
                    <img class="d-block " src="{{ URL::asset('images/joker.jpg') }}" alt="Second slide"/>
                </div>
                <div class="carousel-item">
                    <img class="d-block " src="{{ URL::asset('images/nature.jpg') }}" alt="Third slide"/>

                </div>
                <div class="carousel-item">
                    <img class="d-block " src="{{ URL::asset('images/fifa17.jpg') }}" alt="Third slide"/>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{ URL::asset('images/cod.jpg') }}" alt="Third slide"/>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    </div>


    <br/>
    <br/>

    <h5 style="margin-left: 50px">Electronics &nbsp;
        <small><a style="color: #373a48" href="{{ route('ProductDetails.electronicproducts') }}">see more..</a></small>
    </h5>
    <div class="col-sm-12 col-sm-offset-3">

        <div class="carousel slide" id="myCarouse" data-ride="carousel">
            <div class="carousel-inner" role="listbox" height="100px" >

                @if(count($electronicproducts)>0)
                    <?php $a = 1?>

                    @foreach($electronicproducts->chunk(4) as $key=>$product)
                        <div class="carousel-item {{ $key==0 ? 'active' : '' }}">
                            <div class="row">

                                @foreach($product as $pro)
                                    <div class="col-sm-3">
                                        <div class="text-center">
                                            <a href="{{ route('ProductDetails.index',['id'=>$pro->id])}}">
                                                <img src="{{ $pro->productimages->first()->image_url }}" width="300px"
                                                     height="250px" class="img-fluid">
                                            </a>
                                            <p><strong>{{ $pro->Product_name }} </strong></p>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                            <?php $a++;?>
                        </div>

                    @endforeach

                @endif
            </div>


            <a class="carousel-control-prev" href="#myCarouse" role="button" data-slide="prev">

                <i class="fa fa-caret-square-o-left fa-3x"></i>
                <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>-->
            </a>


            <a class="carousel-control-next" href="#myCarouse" role="button" data-slide="next">

                <i class="fa fa-caret-square-o-right fa-3x"></i>

                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span> -->
            </a>

        </div>
    </div>
<br/>
    <br/>
    <h5 style="margin-left: 50px;">Clothing and Apparel&nbsp;
        <small><a style="color: #373a48" href="{{ route('ProductDetails.clothingproducts') }}">see more..</a></small>
    </h5>

    <br/>

    <div class="col-sm-12 col-sm-offset-3">

        <div class="carousel slide" id="myCarousell" data-ride="carousel">
            <div class="carousel-inner" role="listbox" height="100px">

                @if(count($clothingproducts)>0)
                    <?php $a = 1?>

                    @foreach($clothingproducts->chunk(4) as $key=>$clothingproduct)
                        <div class="carousel-item {{ $key==0 ? 'active' : '' }}">
                            <div class="row">

                                @foreach($clothingproduct as $pro)
                                    <div class="col-sm-3">
                                        <div class="text-center">
                                            <a href="{{ route('ProductDetails.index',['id'=>$pro->id])}}">
                                                <img src="{{ $pro->productimages->first()->image_url }}" width="300px"
                                                     height="250px" class="img-fluid">
                                            </a>
                                            <p><strong>{{ $pro->Product_name }} </strong></p>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                            <?php $a++;?>
                        </div>

                    @endforeach

                @endif
            </div>


            <a class="carousel-control-prev" href="#myCarousell" role="button" data-slide="prev">

                <i class="fa fa-caret-square-o-left fa-3x"></i>
                <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>-->
            </a>


            <a class="carousel-control-next" href="#myCarousell" role="button" data-slide="next">

                <i class="fa fa-caret-square-o-right fa-3x"></i>

                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span> -->
            </a>

        </div>
    </div>
@endsection