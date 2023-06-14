<section class="side_section">
    <div class="sidebar">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>All Catagory</button>

                @foreach($product as $products)
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{{$products->catagory}}</button>

                @endforeach
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

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

                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">

                    </div>

                </div>
        </div>
    </div>
</section>
<!-- <section style="font-family:'Courier New', Courier, monospace; font-weight:800;"class="product_section layout_padding">
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
      </section> -->
      <!-- end product section -->
