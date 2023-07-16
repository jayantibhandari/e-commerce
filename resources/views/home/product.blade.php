<section style="font-family: 'Courier New', Courier, monospace; font-weight: 800;" class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach($categories as $category)    
                    <button class="nav-link mb-3 mt-5 mr-1 category-btn" data-category-id="{{$category->catagory_id}}" type="button">{{$category->catagory_name}}</button>
                @endforeach
            </div>
            <!-- Product Container -->
            <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                <div class="row gap-3" id="product-container">
                  @foreach($product as $products)
                  <div class="col product_section">
                     <div class="box p-3">
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
                           <p style="color:#283618">
                              {{$products->title}}
                           </p>
                           <br>
                           @if($products->discount_price!=null)
                           <p style="color:#283618">
                              Rs.{{$products->discount_price}}
                           </p>
                           <p style="text-decoration:line-through; color:#bc6c25;">
                              Rs.{{$products->price}}
                           </p>
                           @else
                           <p style=" color:#bc6c25;">
                              Rs.{{$products->price}}
                           </p>
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
            </div>
        </div>
    </div>
</section>

