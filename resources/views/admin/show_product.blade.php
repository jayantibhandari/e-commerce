<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/logo-mini.png" />
    <style type="text/css">

        .div_center{
            font-family:'Courier New', Courier, monospace;
            text-align:center;
            padding-top:5%;
            color:#283618;
        }
        .div_center h2{
            color:#283618;
            font-size:30px;
            font-weight:1000;
        }
        .center{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #283618;
            margin:auto;
            width:90%;
            text-align:center;
            margin-top:30px;
            /* border:4px solid #a3b18a; */
            box-shadow:5px 10px 18px black;
        }
        .center .img_size{
            width:auto;
            height:130px;
        }
        .center .tr_color{
            background-color: #a3b18a;
        }
        th, td {
            padding: 15px;
            text-align: center;
         }
         td{
            border:1px solid #a3b18a;
         }
         .div_center .btn{
            border: 1px solid #bc6c25;
            background-color:#bc6c25;
            font-weight:600;
            width:auto;
        }
        .btn:hover{
            color:white;
            background-color:#a3b18a;
            border: 1px solid #283618;
        }
        .main-panel .alert{
            margin:2% 10%;
            background-color:#283618;
            text-align:center;
            color:white;
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
                    <h2>Show Product </h2>
                <table class="center">
                    <tr class="tr_color">
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Catagory</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product Image</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>

                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->catagory}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td><img class="img_size" src="/product/{{$product->image}}" alt=""></td>
                        <td>
                            <a onclick="return confirm('are u sure?')" class="btn btn-primary" href="{{url('delete_product',$product->id)}}"> Delete</a>

                        </td>
                        <td>
                        <a onclick="return confirm('are u sure?')" class="btn btn-primary" href="{{url('update',$product->id)}}"> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
    </div>
            </div>
        </div>

    @include('admin.script')
  </body>
</html>
