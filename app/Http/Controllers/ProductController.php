<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Auth;

class ProductController extends Controller{
        public function getProducts(Request $request){
            $electronicproducts = Product::with('productimages')->where('Product_category', '=', 'electronics')
                ->orderBy('created_at', 'desc')->take(10)->get();
            $clothingproducts = Product::with('productimages')->where('Product_category', '=', 'clothing')->orderBy('created_at', 'desc')->get();
            $productimages = ProductImage::all();
            return view('layouts.index', ['electronicproducts' => $electronicproducts, 'productimages' => $productimages, 'clothingproducts' => $clothingproducts]);

        }

        public function getProduct($id){
            $individualproduct=Product::with('productimages')->where('id',$id)->first();
            $productimages=ProductImage::all();
            return view('ProductDetails.index',['individualproduct'=>$individualproduct,'productimages'=>$productimages]);
        }

        public function getDeals(){
            $product=Product::with('productimages')->where([['Product_discount','>','9']])->orderBy('created_at','desc')->paginate(8);
            return view('ProductDetails.deals',['product'=>$product]);
        }

        public function getClothingCategory(){
            $categories=Product::select('Product_brand')->where('Product_category', '=', 'clothing')->groupBy('Product_brand')->get();
            $clothing=Product::with('productimages')->where('Product_category','=','clothing')->orderBy('created_at','desc')->paginate(8);
            return view('ProductDetails.clothingproducts',['clothing'=>$clothing,'categories'=>$categories]);
        }

        public function postClothingCategory(Request $request){
        $this->validate($request,['lower-value'=>'required','upper-value'=>'required']);
        $categories=Product::select('Product_brand')->where('Product_category', '=', 'clothing')->groupBy('Product_brand')->get();
        $selectedbrands = $request->input('selectedbrands');
        $discounts=$request->input('discounts');
        $minprice = (int)$request->input('lower-value');
        $maxprice = (int)$request->input('upper-value');
        if(isset($selectedbrands) && isset($discounts)) {
            if(in_array(10,$discounts)) {
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','10')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
            }
            elseif (in_array(20,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','20')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
            }
            elseif (in_array(30,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','30')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
            }
            elseif (in_array(40,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','40')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
            }
            elseif (in_array(50,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','50')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
            }
        }
        elseif (isset($discounts)){
            if(in_array(10,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','10')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);
            }
            elseif (in_array(20,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','20')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);
            }
            elseif (in_array(30,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','30')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);
            }
            elseif (in_array(40,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','40')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);

            }
            elseif (in_array(50,$discounts)){
                $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','50')->orderBy('created_at', 'desc')->paginate(8);
                return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);
            }
        }
        elseif (isset($selectedbrands)){
            $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->orderBy('created_at', 'desc')->paginate(8);
            return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands]);
        }
        else{
            $clothing = Product::with('productimages')->where([['Product_category', '=', 'clothing'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->orderBy('created_at', 'desc')->paginate(8);
            return view('ProductDetails.clothingproducts', ['clothing' => $clothing, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories]);
        }
    }


        public function getElectronicsCategory()
        {
            $categories=Product::select('Product_brand')->where('Product_category', '=', 'electronics')->groupBy('Product_brand')->get();
            $electronics = Product::with('productimages')->where('Product_category', '=', 'electronics')->orderBy('created_at', 'desc')->paginate(8);
            return view('ProductDetails.electronicproducts', ['electronics' => $electronics,'categories'=>$categories]);
        }

        public function postElectronicsCategory(Request $request){
                $this->validate($request,['lower-value'=>'required','upper-value'=>'required']);
                $categories=Product::select('Product_brand')->where('Product_category', '=', 'electronics')->groupBy('Product_brand')->get();
                $selectedbrands = $request->input('selectedbrands');
                $discounts=$request->input('discounts');
                $minprice = (int)$request->input('lower-value');
                $maxprice = (int)$request->input('upper-value');
                if(isset($selectedbrands) && isset($discounts)) {
                    if(in_array(10,$discounts)) {
                    $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','10')->orderBy('created_at', 'desc')->paginate(8);
                    return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
                    }
                    elseif (in_array(20,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','20')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
                    }
                    elseif (in_array(30,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','30')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
                    }
                    elseif (in_array(40,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','40')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
                    }
                    elseif (in_array(50,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->where('Product_discount','>=','50')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands,'discounts'=>$discounts]);
                    }
                }
                elseif (isset($discounts)){
                    if(in_array(10,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','10')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);
                    }
                    elseif (in_array(20,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','20')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);
                    }
                    elseif (in_array(30,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','30')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);
                    }
                    elseif (in_array(40,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','40')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);

                    }
                    elseif (in_array(50,$discounts)){
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->where('Product_discount','>=','50')->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'discounts'=>$discounts]);
                    }
                }
                elseif (isset($selectedbrands)){
                    $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->whereIn('Product_brand', $selectedbrands)->orderBy('created_at', 'desc')->paginate(8);
                    return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories,'selectedbrands'=>$selectedbrands]);
                    }
                else{
                        $electronics = Product::with('productimages')->where([['Product_category', '=', 'electronics'], ['Product_price', '>=', $minprice], ['Product_price', '<=', $maxprice]])->orderBy('created_at', 'desc')->paginate(8);
                        return view('ProductDetails.electronicproducts', ['electronics' => $electronics, 'minprice' => $minprice, 'maxprice' => $maxprice, 'categories' => $categories]);
                        }
                }


        public function getBooksCategory(){
        $books=Product::with('productimages')->where('Product_category','=','clothing')->orderBy('created_at','desc')->paginate(8);
        return view('ProductDetails.bookproducts',['books'=>$books]);
        }

        public function getHKPCategory(){
        $hkp=Product::with('productimages')->where('Product_category','=','clothing')->orderBy('created_at','desc')->paginate(8);
        return view('ProductDetails.hkpproducts',['hkp'=>$hkp]);
        }

        public function getJewelryCategory(){
        $jewelry=Product::with('productimages')->where('Product_category','=','jewelry')->orderBy('created_at','desc')->paginate(8);
        return view('ProductDetails.jewelryproducts',['clothing'=>$jewelry]);
        }


}
