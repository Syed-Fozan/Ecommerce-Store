<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>  
<title>Ecommerce Store</title>
<body>
    {{View::make('components.header')}}
    @yield('content')
    {{View::make('components.footer')}}

</body>
<style>
    .custom-login{
        height: 500px;;
        padding-top: 100px;
    }
    .custom-product{
        height: 1000px;
        padding-top: 0%;
    }
    .header-height{
        height: 50px;
    }
    img.slider-img{
        height:600px !important;
        width: 100% !important;
        margin: 0%;
        padding: 02%;
    }
    .carousel-caption{
        color:black;
    }
     .trending-image{ 
         height:100px ; 
         width: 200px ; 
         
     } 
     .trending-side{
        float: left;
     }
     h1{
        height: 100px;
        text-align: center;
     }
     .details-img{
        height:200px;
        width:400px;
      
     }
     .container{
        margin-top: 4%;
     }
     .search-box{
        width: 200px !important;

     }
     .nav-link
     {
        color:white !important;
     }
</style>
</html>