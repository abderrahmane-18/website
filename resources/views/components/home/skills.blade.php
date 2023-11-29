<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <!--  <script src="https://kit.fontawesome.com/b4d31fb6ac.js" crossorigin="anonymous"></script>-->

   <style>
    /*
   .sk {
  background-color: white;
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
justify-content: space-around;


    }
    .sk .item {
  background-color: #b83232;
  width: 20%;
  padding: 10px 0;
}
*/
.sk{

  display: grid;
  grid-template-columns: repeat(auto-fill,minmax(200px,1fr));
  gap:6px;
}
.sk .item {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  background-color: rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
  backdrop-filter: blur(20px);
  border-radius: 5px;
}
.sk .item i:not(.cp) {
  font-size: 35px;

  padding: 15px 5px;
  margin-left: 15px;
}
.item span:not(.cp) {
font-size: 16px;
font-weight: 500;
margin-left: 15px;

}
   </style>
</head>
<body>
    <section id="skills" class="dark:bg-slate-800 pt-14 pb-16" style="scroll-behavior: smooth">
        <div class="container">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
              <div class="text-center mx-auto mb-[60px] ]">
                <h2 class="font-bold text-3xl text-dark dark:text-gray-300 mb-12 ">
                  My Skills
                </h2>
             
               
                <div class="sk">
                    
                    <div class="item">
                      <i class="fa-brands fa-html5" style="color: #fb5200;"></i>
                        <span> Html</span>
                    </div>
                    <div class="item">
                      <i class="fa-brands fa-css3-alt" style="color: #1a2bc6;"></i>
                        <span> Css</span>
                    </div>
                    
                    <div class="item">
                      <img src="{{url('/img/java-scripts.png')}}" alt="" srcset="" style="height:67px;padding: 15px 5px;
                      margin-left: 6px" loading="lazy"> 
                       <span> JavaScript</span>
                   </div>
                    <div class="item">
                      <i class="fa-brands fa-vuejs "style="  color:#3d9878;" ></i>
                        <span> Vue js</span>
                    </div>
                    <div class="item">
                      <img src="{{url('/img/r2.png')}}" alt="" srcset="" style="height:67px;padding: 15px 5px;
                      margin-left: 6px"  loading="lazy"> 
                      <span>Rest Api</span>
                    </div>
                    <div class="item">
                      <i class="fa-brands fa-laravel" style="color: #ff0000;"></i>
                        <span> Laravel</span>
                    </div>
                    <div class="item">
                      <img src="{{url('/img/php_5968332.png')}}" alt="" srcset="" style="height:67px;padding: 15px 5px;
                      margin-left: 6px"  loading="lazy"> 
                        <span> PHP</span>
                        
                    </div>
                     <div class="item">
                      <img src="{{url('/img/mysql1.png')}}" alt="" srcset="" style="height:67px;padding: 15px 5px;
                      margin-left: 6px"  loading="lazy"> 
                      <span>MySql</span>
                    </div>

                    <div class="item">
                      <img src="{{url('/img/postman-icon.png')}}" alt="" srcset="" style="height:67px;padding: 15px 5px;
                      margin-left: 6px"  loading="lazy"> 
                        <span> Postman</span>
                    </div>
                    
                    <div class="item">
                      <svg fill="none"   style="height: 49px;
                      padding: 15px 5px;
                      margin-left: 3px;
                      max-width: 100%;" viewBox="1.069 54 198.26 91.221"  xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill-rule="evenodd"><path d="m155.271 54 44.058 44.002-44.058 44.001-44.057-44.001z" fill="#77c1d2"/><path d="m45.127 54 91.337 91.221h-88.115l-47.28-47.22z" fill="#2d3441"/></g></svg>
                      <span> Alpine js</span>
                    
                  </div>
                  <div class="item">
                    <svg  preserveAspectRatio="xMidYMid"  style="height: 53px;
                    padding: 15px 5px;
                    margin-left: 6px;
                    max-width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 153.6"><linearGradient id="a" x1="-2.778%" y1="32%" y2="67.556%"><stop offset="0" stop-color="#2298bd"/><stop offset="1" stop-color="#0ed7b5"/></linearGradient><path d="M128 0C93.867 0 72.533 17.067 64 51.2 76.8 34.133 91.733 27.733 108.8 32c9.737 2.434 16.697 9.499 24.401 17.318C145.751 62.057 160.275 76.8 192 76.8c34.133 0 55.467-17.067 64-51.2-12.8 17.067-27.733 23.467-44.8 19.2-9.737-2.434-16.697-9.499-24.401-17.318C174.249 14.743 159.725 0 128 0zM64 76.8C29.867 76.8 8.533 93.867 0 128c12.8-17.067 27.733-23.467 44.8-19.2 9.737 2.434 16.697 9.499 24.401 17.318C81.751 138.857 96.275 153.6 128 153.6c34.133 0 55.467-17.067 64-51.2-12.8 17.067-27.733 23.467-44.8 19.2-9.737-2.434-16.697-9.499-24.401-17.318C110.249 91.543 95.725 76.8 64 76.8z" fill="url(#a)"/></svg>
                    <span> Tailwind css</span>
                </div>
                <div class="item">
                  <img src="{{url('/img/CPP.png')}}" alt="" srcset="" style="height:67px;padding: 15px 5px;
                  margin-left: 6px" loading="lazy"> 
                <span> C++</span>
                </div>  
                <div class="item">
                  <img src="{{url('/img/java.png')}}" alt="" srcset="" style="height:67px;padding: 15px 5px;
                  margin-left: 6px"  loading="lazy"> 
                   <span> Java</span>
                </div>
                <div class="item">
                  <img src="{{url('/img/programming.png')}}"  class="cop1"alt="" srcset="" style="height:67px;padding: 19px 5px;
                  margin-left: 6px"  loading="lazy"> 
                   <span style=" margin-left: -33px;" class="cp"> Competitive Programming </span>
                </div>
                <div class="item">
                  <img src="{{url('/img/idea.png')}}" alt="" srcset="" style="height:67px;padding: 15px 2px;
                  margin-left: 3px;  max-width: 100%;"  loading="lazy"> 
                    <span style="padding: 0;
                    margin: 0;
                    margin-left: 7px">Problem solving</span>
             
              </div>
              <div class="item">
                <img src="{{url('/img/diagramd.png')}}" alt="" srcset="" style="    height: 68px;
                padding: 19px 5px;
                margin-left: 7px;
            "  loading="lazy"> 
                  <span style=" margin-left: 2px"> Data Structures and Algorithms </span>
           
            </div>
            <div class="item">
              <img src="{{url('/img/git.png')}}" alt="" srcset="" style="height:70px;padding: 15px 5px;
              margin-left: 6px"  loading="lazy"> 
                <span> Git</span>
            </div>

            <div class="item">
              <img src="{{url('/img/python1.png')}}" alt="" srcset="" style="height:70px;padding: 15px 5px;
              margin-left: 6px"  loading="lazy"> 
                <span> Python</span>
            </div>
          
              </div>
            </div>
          </div>
        </div>
        </div>
        
    </section>
        <style>
        @media screen and  (min-width: 540px)and  (max-width: 720px) {
/* Insérez vos propriétés CSS ici, avec vos sélecteurs*/
.cp{
  color: greenyellow;
margin-right:22px;
}

}
@media screen and   (min-width: 336px) and (max-width: 540px)
{
  .cop1{
    margin-right:55px;
  }
}
@media screen and   (min-width: 335px) and (max-width: 336px)
{
  .cop1{
    margin-right:53px;
  }
}
@media screen and  (min-width: 320px) and (max-width: 335px)
{
  .cop1{
    margin-right:41px;
  }
}
@media screen and  (min-width: 312px) and  (max-width: 320px)  
{
  .cop1{
    margin-right:30px;
  }
}
@media screen and  (max-width: 312px)  
{
  .cop1{
    margin-right:27px;
   
  }
}
       </style>
</body>
<script>

</script>
</html>


     