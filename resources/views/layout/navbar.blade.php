<!-- ====== Navbar Section Start -->
<!DOCTYPE html>
<html lang="en" id="moon">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  .switch {
    position: fixed;
    right: 21px;
    top: 29px;
    z-index: 10000;
    cursor: pointer;
    font-size: 25px;
}
    {
      padding: 0;
      margin: 0;
      box-sizing: border-box
    }
  </style>
</head>
<body>
  
  <header
  x-data="{navbarOpen: false}"
  class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-cyan-950 h-24"
  
>
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="pr-4 w-60 max-w-full">
        <a href="#" class="w-full flex items-center py-2" id="logo"  >
         
       
          <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white ml-2">BOUKHEZAR</span>
        </a>
      </div>
      <div class="flex px-4 justify-end items-center w-full">
        <div>
          <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                     x-bind:class="navbarOpen && 'navbarTogglerActive'" style="margin-right:30px"></x-layout.navbar-hamburger>
          <nav
            :class="!navbarOpen && 'hidden' "
            id="navbarCollapse"
            class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-cyan-950 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
          >
            <ul class="block lg:flex lg:items-center" id="zoom5">
              @foreach($navigationItems as $item)
            
                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
              @endforeach
             
            </ul>

          
            
          </nav>
          <div class="switch" id="st">
            <i class="fa-solid fa-sun"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<script>
  
  document.getElementById("logo").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default link behavior
  console.log("hello");
    var targetUrl = "/";
    window.history.replaceState({}, document.title, targetUrl); // Update the URL without fragments

    // Scroll to the top of the page
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });

 const toggleMode =document.getElementById("st");
 const icon=document.querySelector('.switch i');
 toggleMode.addEventListener("click", function(){
  document.getElementById("moon").classList.toggle('dark');
  if(document.getElementById("moon").classList.contains('dark'))
  {
    icon.classList.add('fa-sun');
    icon.classList.remove('fa-moon');
  }
  else 
  {
    icon.classList.add('fa-moon');
    icon.classList.remove('fa-sun');
  }
 // icon.classList.toggle('fa-sun');
  console.log('dz');
});



</script>


<!-- ====== Navbar Section End -->
</body>
</html>
<style>
      @media screen and (min-width:965px) and (max-width:1048px)

  {
    #zoom5
{
      margin-right: 43px;
    }
  }
  @media screen and (min-width:1140px) and (max-width:1250px)
  {
    #zoom5
{
      margin-right: 35px;
    }
  }
  @media screen and (min-width:959px) and (max-width:966px)
  {
    #zoom5
{
      margin-right: 41px;
    }
  }
  @media screen and (min-width:1320px) and (max-width:1388px)
  {
    #zoom5
{
      margin-right: 52px;
    }
  }


</style>

