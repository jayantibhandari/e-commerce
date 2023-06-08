<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
   @include('admin.css')

    <style type="text/css">
        .div_center{
            font-family:'Courier New', Courier, monospace;
            text-align:center;
            padding-top:5%;
            font-size:30px;
            color:#283618;
            font-weight:600;
        }
        .div_center .btn{
            border: 1px solid #bc6c25;
            background-color:#bc6c25;
            font-weight:600;
        }
        .btn:hover{
            color:white;
            background-color:#283618;
            border: 1px solid #283618;
        }
        .div_center h2{
            color:#283618;
        }
        .div_center form{
            padding: 20px 0;
        }
        .div_center .section{
            height:auto;
            width: 250px;
            font-size:15px;
        }
        .main-panel .alert{
            margin:2% 10%;
            background-color:#283618;
            text-align:center;
            color:white;
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
        th, td {
            padding: 15px;
            text-align: center;
         }
        .center .btn-danger{
            background-color:#bc6c25;
            height:26px;
        }
        #container{
            display:none;
            background-color: #283618;
            position:absolute;
            height:26px;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:500px;
            height:220px;
            padding: 3%;
            text-align: center;
            box-shadow:5px 10px 18px black;
        }
        #msg{
            margin-top:2%;
            font-size:20px;
            font-weight:500;
        }
        #btn{
            border: 1px solid #bc6c25;
            background-color:#bc6c25;
            font-weight:600;
            height:28px;
            width:70px;
            margin:8% 4%;
        }
        #btn:hover{
            color:white;
            background-color:#283618;
            border: 1px solid #283618;
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
                    <h2>Add Catagory</h2>

                    <form action="{{url('/add_catagory')}}" method="POST">
                        @csrf
                        <input class="section" type="text" name="catagory" placeholder="Write Catagory Name">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Catagory">
                    </form>
                </div>

                <table class="center">
                    <tr>
                        <td>Catagory Name</td>
                        <td>Action</td>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->catagory_name}}</td>
                        <td>
                           <a onclick="return confirm('are u sure?')"
                           class="btn btn-danger" href="{{url('delete_catagory',$data->id)}}"> delete </a>
                        </td>
                      </tr>
                    @endforeach

                </table>

            </div>
        </div>

    @include('admin.script')
  </body>
</html>
