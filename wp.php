<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/navbar.css">
<style>
/* fixed social*/
#wp {
   position: fixed;
   
       bottom: 0px;
   right:0px;
     z-index: 99999;
     display:none;
}


#wp a {
   color: #fff;
   border-top: 1px solid #fff;
   display: block;
   height: 40px;
   position: relative;
   text-align: center;
    line-height: 40px;
   width: 200px;
   margin-bottom: 1px;
  
}
#wp a:hover>span{
	visibility: visible;
 right: 41px;
  opacity: 1;
} 
#wp a span {
	line-height: 40px;
    right: 60px;
    position: absolute;
    text-align: center;
    width: 120px;
    visibility: hidden;
    transition-duration: 0.5s;
    z-index: 1;
    opacity: 0;
}


#cll {
   position: fixed;
   
       bottom: 0px;
   left:0px;
       z-index: 99999;
     display:none;
}


#cll a {
   color: #fff;
   border-top: 1px solid #fff;
   display: block;
   height: 40px;
   position: relative;
   text-align: center;
    line-height: 40px;
   width: 200px;
   margin-bottom: 1px;
  
}
#cll a:hover>span{
  visibility: visible;
 right: 41px;
  opacity: 1;
} 
#cll a span {
  line-height: 40px;
    right: 60px;
    position: absolute;
    text-align: center;
    width: 120px;
    visibility: hidden;
    transition-duration: 0.5s;
    z-index: 1;
    opacity: 0;
}




 .whatapp{
   background-color:var(--secondry-color);
 }
 .whatapp span{
  background-color:var(--secondry-color);
 }
 
 .insta{
  background-color:var(--secondry-color);

 }
 .insta span{
   background-color:var(--secondry-color);
 }
 
 



 #fixed-social1 {
   position: fixed;
   top: 250px;
   left:0px;
     z-index: 99;
	
}


#fixed-social1 a {
   color: #fff;
   
   height: 40px;
   position: relative;
   text-align: center;
    line-height: 40px;
   width: 40px;
   margin-bottom: 1px;
   border-radius:0px 50px 50px 0px;
   
  
}
#fixed-social1 a:hover>span{
	visibility: visible;
 left: 41px;
  opacity: 1;
} 

#fixed-social1 a span {
	line-height: 40px;
    left: 60px;
    position: absolute;
    text-align: center;
    width: 120px;
    visibility: hidden;
    transition-duration: 0.5s;
    z-index: 1;
    opacity: 0;
	 border-radius:50px 50px 50px 50px;
}
 
 .whatapp{
   background-color:var(--secondry-color);
 }
 .whatapp span{
  background-color:var(--secondry-color);
 }
 @media only screen and (max-width: 767px) {

#wp{
 display: block;
}
#cll{
 display: block;
}
}

/*end fixed social*/
</style>
<body>

<div id="wp">
  
  <div>
    <a href="https://wa.me/+91-7669966992" class="whatapp" target="_blank"><i class="fa fa-whatsapp"></i> Whatsapp<span>Whatsapp</span></a>
  </div>
</div>
<div id="cll">

  <div>
    <a href="tel:+91-7669966992" class="insta" target="_blank"><i class="fa fa-phone"></i> Call Us <span>Call US</span></a>
  </div>
</div>


</body>
</html> 
