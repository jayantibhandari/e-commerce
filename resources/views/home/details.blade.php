<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/resources">
   @include('home.css')

   <style>
    .img_box{
        float:right;
        /* height:300px; */
    }
    .slider_section{
        margin:3%;
    }
    .options{
        margin-top:5%;
    }
    .slider_bg_box{
        left:0;
    }
   </style>
</head>
<body>

 @include('home.header')

      <!-- slider section -->
      <section class="slider_section ">
            <div class="slider_bg_box">
            <img style="margin:auto;" height="600px" src="product/{{$product->image}}" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                 {{$product->title}}
                                 </h1>
                                 <h2>
                                 {{$product->description}}
                                </h2>


                                @if($product->discount_price!=null)
                                <h2 style="color:#283618">
                                    Rs.{{$product->discount_price}}
                                </h2>

                                    <h2 style="text-decoration:line-through; color:#bc6c25;">
                                         Rs.{{$product->price}}
                                    </h2>

                                @else
                                    <h2 style=" color:#bc6c25;">
                                         Rs.{{$product->price}}
                                    </h2>

                                @endif
                                 <div class="option_container">
                        <div class="options">
                           <a href="{{url('details',$product->id)}}" class="option1">
                             Add to Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

            </div>
         </section>
         <!-- end slider section -->







 @include('home.footer')
</body>
</html>
