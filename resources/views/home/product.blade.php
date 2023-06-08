<section style="font-family:'Courier New', Courier, monospace; font-weight:800;"class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
                @foreach($product as $products)
               <div class=" product_section col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('details',$products->id)}}" class="option1">
                             Details
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                     <img style="margin:auto;"  src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5  style="color:#283618">
                          {{$products->title}}
                        </h5>

                        @if($products->discount_price!=null)
                            <h6 style="color:#283618">
                            Rs.{{$products->discount_price}}
                            </h6>

                            <h6 style="text-decoration:line-through; color:#bc6c25;">
                            Rs.{{$products->price}}
                            </h6>

                        @else
                            <h6 style=" color:#bc6c25;">
                            Rs.{{$products->price}}
                            </h6>

                        @endif
                     </div>
                  </div>
               </div>
               @endforeach

               <span style="padding:25px;margin:auto;">
               {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
               </span>

            </div>

         </div>
      </section>
      <!-- end product section -->
