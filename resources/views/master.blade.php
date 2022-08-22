<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script></head>  
<title>Ecommerce Store</title>
<body>
    {{View::make('components.header')}}
    @yield('content')
    {{View::make('components.footer')}}
    

</body>
<style>
    .login{
     background-image: url(../img/contact_g.jpg);
     background-repeat: no-repeat;
     background-size: 100% 100%;
     padding: 90px 0;
    }
    .register{
    background: url(../img/contact_g.jpg);
     background-repeat: no-repeat;
     background-size: 100% 100%;
     padding: 90px 0;
    }
    .contact {
     background: url(../img/contact_g.jpg);
     background-repeat: no-repeat;
     background-size: 100% 100%;
     padding: 90px 0;
}

.contact .titlepage h2 {
     color: #fff;
     text-align: center;
}

.main_form {
     padding: 70px 50px;
     border: #fff solid 2px;
     margin: 0 50px;
}

.main_form .contactus {
     border: #fff solid 2px;
     padding: 0px 15px;
     margin-bottom: 25px;
     width: 100%;
     height: 57px;
     background: transparent;
     color: #fff;
     font-size: 18px;
     font-weight: normal;
}

.main_form .textarea {
     border: #fff solid 2px;
     padding: 0px 15px;
     margin-bottom: 25px;
     width: 100%;
     background: transparent;
     color: #fff;
     font-size: 18px;
     font-weight: normal;
     padding-top: 56px;
     height: 151px;
}

.main_form .send_btn {
     font-size: 22px;
     transition: ease-in all 0.5s;
     background-color: #48ca95;
     text-transform: uppercase;
     color: #fff;
     padding: 15px 0px;
     max-width: 226px;
     width: 100%;
     display: block;
     margin-top: 30px !important;
     margin: 0 auto;
     border-radius: 40px;
     font-weight: 500;
}

.main_form .send_btn:hover {
     background-color: #000;
     transition: ease-in all 0.5s;
     color: #fff;
}

#request *::placeholder {
     color: #fff;
     opacity: 1;
}
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
        height:300px !important;
        width: 100% !important;
        margin: 0%;
        padding: 0%;
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
        height: 0px;
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
     .footer {
     background: url(../img/footer.jpg);
     background-repeat: no-repeat;
     background-size: 100% 100%;
     padding-top: 115px;
     text-align: center;
}

.footer .titlepage {
     text-align: left;
     padding-bottom: 0px;
}

.footer .titlepage h2 {
     color: #fff;
     margin: inherit;
     border-bottom: #fff solid 1px;
}

.logo1 {
     float: left;
     margin-top: -30px;
}

ul.social_icon {
     padding-top: 37px;
     width: 100%;
     float: left;
     text-align: left;
}

ul.social_icon li {
     display: inline-block;
}

ul.social_icon li a {
     background: #fff;
     width: 40px;
     height: 40px;
     display: flex;
     align-items: center;
     justify-content: center;
     font-size: 25px;
     border-radius: 30px;
     margin: 0 3px;
}

ul.social_icon li a:hover {
     background-color: #48ca95;
     color: #fff;
}

.footer h3 {
     font-weight: 600;
     font-size: 25px;
     line-height: 25px;
     text-align: left;
     color: #fff;
     padding-bottom: 15px;
}

.about_us li {
     color: #fff;
     font-size: 17px;
     text-align: left;
}

.conta li {
     color: #fff;
     font-size: 17px;
     text-align: left;
}

.bottom_form h3 {
     font-weight: 600;
     font-size: 25px;
     line-height: 25px;
     text-align: left;
     color: #fff;
     padding-bottom: 15px;
}

.bottom_form .enter {
     border: inherit;
     padding: 0px 19px;
     width: 100%;
     height: 45px;
     background: #fffffff2;
     color: #ccc8c8;
     font-size: 17px;
     font-weight: 600;
     float: left;
     border-radius: 10px;
     margin-bottom: 20px;
}

.sub_btn {
     font-size: 17px;
     transition: ease-in all 0.5s;
     background-color: #48ca95;
     color: #fff;
     padding: 10px 0px;
     max-width: 147px;
     border-radius: 10px;
     width: 100%;
     display: block;
     font-weight: 500;
     text-transform: uppercase;
}

.sub_btn:hover {
     background-color: #000;
     transition: ease-in all 0.5s;
     color: #fff;
}

.copyright {
     margin-top: 80px;
     padding-bottom: 20px;
}

.copyright p {
     color: #ddd;
     font-size: 18px;
     line-height: 22px;
     text-align: center;
     border-top: #ddd solid 1px;
     padding-top: 25px;
     font-weight: normal;
}

.copyright a {
     color: #ddd;
}

.copyright a:hover {
     color: #48ca95;
}

</style>
</html>