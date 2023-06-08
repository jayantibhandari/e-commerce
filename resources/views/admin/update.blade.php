<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Required meta tags -->

     <base href="/public">
     @include('admin.css')

    <style type="text/css">
        .div_center{
            font-family:'Courier New', Courier, monospace;
            text-align:center;
            padding-top:5%;
            font-size:30px;
            color:#283618;
            font-weight:600;
            margin-bottom:15%;
        }
        .main-panel .alert{
            margin:2% 10%;
            background-color:#283618;
            text-align:center;
            color:white;

        }

        .div_center .btn{
            border: 1px solid #bc6c25;
            background-color:#bc6c25;
            font-weight:600;
            width:290px;
        }
        .btn-secondary{
            margin-top:3%;
            height:30px;

        }
        .btn-secondary:hover{
            color:white;
            background-color:#283618;
            border: 1px solid #283618;
        }
        .div_center h2{
            color:#283618;
        }
        .div_center .section{
            height:auto;
            width: 310px;
            font-size:16px;
        }
        .div_form{
            margin-top:3%;
        }
        .center{
            background-color: #283618;
            margin:auto;
            width:50%;
            text-align:center;
            margin-top:30px;
            border:3px solid #283618;
            /* color:#283618; */
            box-shadow:5px 10px 18px black;
        }



      </style>

<script>
    setTimeout(function() {
        $('.alert').fadeOut();
        }, 2000);

</script>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sider')
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

        <div class="main-panel">
            <div class="content_wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
            @endif
                <div class="div_center">
                    <h2>Update Product </h2>

                    <form class="div_form" action="{{url('update_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input class="btn btn-primary" type="submit" name="submit" value="Update current title"  >
                        <input class="section" type="text" name="title" value="{{$product->title}}" placeholder="Write title" > <br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Update current description">
                        <input class="section" type="text" name="description" value="{{$product->description}}" placeholder="Write description"><br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Update current quantity">
                        <input class="section" type="number" name="quantity" value="{{$product->quantity}}" placeholder="Write quantity" ><br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Update current price">
                        <input class="section" type="number" name="price" value="{{$product->price}}" placeholder="Write price" ><br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Update current discount price">
                        <input class="section" type="number" name="discount price" value="{{$product->discount_price}}"placeholder="Write discount price"><br>



                        <input class="btn btn-primary" type="submit" name="submit" value="Update current image">
                        <input class="section" type="file" name="image"  placeholder="Change image" value="image">
                        <img style="margin:auto;" height="100px" width="30%" src="/product/{{$product->image}}" alt="">
                        <br>


                        <input class="btn btn-primary" type="submit" name="submit" value="Update current Catagory">
                        <select name="catagory" id="">
                            <option value="{{$product->catagory}}">{{$product->catagory}}</option>

                            @foreach($catagory as $catagory)
                            <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                            @endforeach

                        </select>
                       <br>



                        <input class="btn btn-primary btn-secondary" type="submit" name="submit" value="Update Product">
                    </form>

                </div>

            </div>
        </div>
    @include('admin.script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
