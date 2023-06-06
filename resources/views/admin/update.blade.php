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
    <link rel="shortcut icon" href="images/logo-mini.png" >

    <base href="/public">

    <style type="text/css">
        .div_center{
            font-family:'Courier New', Courier, monospace;
            text-align:center;
            padding-top:5%;
            font-size:30px;
            color:#283618;
            font-weight:600;
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
            width:210px;
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
                    <h2>Add Product </h2>

                    <form class="div_form" action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input class="btn btn-primary" type="submit" name="submit" value="Add title"  >
                        <input class="section" type="text" name="title" placeholder="Write title" Required=''> <br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Add description">
                        <input class="section" type="text" name="description" placeholder="Write description"><br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Add quantity">
                        <input class="section" type="number" name="quantity" placeholder="Write quantity" Required=''><br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Add price">
                        <input class="section" type="number" name="price" placeholder="Write price" Required=''><br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Add discount price">
                        <input class="section" type="number" name="discount price" placeholder="Write discount price"><br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Add image">
                        <input class="section" type="file" name="image" placeholder="Write image" Required=''><br>


                        <input class="btn btn-primary" type="submit" name="submit" value="Add Catagory">
                        <select name="catagory" id="">
                            <option value=""><a href="{{url('/add_catagory')}}">Add catagory</a></option>


                        </select>
                       <br>



                        <input class="btn btn-primary btn-secondary" type="submit" name="submit" value="Submit Product">
                    </form>

                </div>

            </div>
        </div>
    @include('admin.script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
