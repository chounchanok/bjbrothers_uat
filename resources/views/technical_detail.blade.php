<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('inc_header')
</head>
<body>
    <div class="thetop"></div>
    @include('inc_topmenu')
    
    <!--------------- N A V - B A R --------------->
    <div class="navBK">
        <div class="container-fluid">
            <div class="wrap-pad">
                <div class="row">
                    <div class="col">
                        <ul class="bread-crumb">
                            <li><a href="/">หน้าแรก</a></li>
                            <li><a href="/technical#techPage">เกร็ดความรู้ : Technical Tips</a></li>
                            <li><a href="/technical/cate/{{$cate->id}}">{{$cate->technical_category_name}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!---------- T E C H N I C A L :: D E T A I L ---------->
    <div class="content-padding pad-foot">
        <div class="container-fluid">
            <div class="wrap-pad">
                <div class="row">
                    <div class="col">
                        <h3 class="text-center mb-5">{{$technical->technical_name}}</h3>
                    </div>
                </div>

                {!! str_replace('<h6>','<div style="display: flex;">',$technical->technical_detail) !!}    
                        

                <div class="w-100">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-center mb-5">สินค้าแนะนำ</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="product-page bottom-none">
                                @foreach ($recommand_product as $recommand)
                                <li>
                                    <a class="productBox-BD" href="{{url('product/'.$recommand->product_name.'___'.$recommand->id)}}">
                                        <div class="productBox">
                                            <div class="product-img"><img src="{{URL::asset('upload/product/'.$recommand->product_image)}}"></div>
                                            <ul class="productBox-name">
                                                <li>
                                                    <p>{{$recommand->product_name}}</p>
                                                </li>
                                                <li>{{$recommand->product_code}}</li>
                                                @if($recommand->product_price > 0)
                                                <li>฿ {{number_format($recommand->product_price,2)}}</li>
                                                @else
                                                <li><p class="price sale" style="color:#f32836;font-size: 15px;"><i>สอบถามราคาเพิ่มเติม</i></p></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </a> 
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="doubleBD">
                            <div class="content-center">
                                <a style="display: block !important;" class="buttonBK" href="{{url('technical/cate').'/'.$technical->ref_category_id}}">ย้อนกลับ</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                
        </div>
    </div>
    
    @include('inc_topbutton')
    @include('inc_footer')
    
</body>
</html>