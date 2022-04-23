<style type="text/css">
html{scroll-behavior: smooth;}
*{
    margin: 0;padding: 0; box-sizing: border-box;font-family: 'Roboto', sans-serif;
}
.nav_style{
    background-color:purple;
}
.nav_style a{color:white}

.main_header{
     height: 500px;
     width: 100%;
}
.corona_rot img{
      animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
    0%{transform: rotate(0);}
    100%{transform: rotate(360deg);}
}

.leftside img{animation:heartbeat 5s linear infinite;}
@keyframes heartbeat {
    0%{transform: scale(.75);}
    20%{transform: scale(1);}
    40%{transform: scale(.75);}
    60%{transform: scale(1);}
   80%{transform: scale(.75);}
    100%{transform: scale(.75);}
    
}

 /*corona updates*/
 .corona_updates{
     margin:0 0 30px 0;

 }
 .corona_update h3{  color: #ff7675;} 
 .corona_update h1{ font-size: 2rem; text-align: center;}

 /*about section*/
.sub_section{
    background-color: #fdfafd;
}

 /*footer*/
.footer_style{
   background-color: #ff7675;
}

</style>