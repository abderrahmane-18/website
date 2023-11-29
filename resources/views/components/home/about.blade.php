<!-- ====== Hero Section Start -->
<section id="about" >
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
  <div class="container">

    <div class="flex flex-wrap -mx-4">
      <div class="w-full lg:w-9/12 px-4">
        <div class="hero-content">
          <h1
          class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
         id="zoom">
        <!--
        "text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
        -->
            My Name is Abderrahmane   <br>           
             I'am <span class="rounded-md text-amber-600 " id="element" ></span>
          </h1>
          <p class="text-base mb-8 max-w-[790px] " id ="zoom1">
            Back End  Developer with a computer science degree, showcasing good analytical and problem-solving skills in software engineering. I learn better by building projects. here a list of the projects both in college and as side projects, driven by a passion for knowledge sharing. Achieved 2nd place in the Algerian Collegiate Programming Contest 2023, qualifying for the Africa and Arab Collegiate Programming Championship in Egypt.<br>
            <a
              class="text-primary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-primary"
              href="#portfolio">.take a look for My Projects</a>. <br>
          </p>
          <ul class="flex flex-wrap items-center  " id="ul">
            <li style="margin-right:15px" class="li">
              <x-button-link href="https://github.com/abderrahmane-18" target="_blank" variant="primary" class="rounded-lg " >
                My Github
              </x-button-link>
            </li>
          
            <li >
              <x-button-link href="{{url('/files/abderrahmane-cv.pdf')}}" download="abderrahmane Resume.pdf" target="_blank" variant="primary" class="rounded-lg ">
                Download CV
              </x-button-link>
            </li>
          </ul>
          
          
          
          
          <div class="clients pt-16">
            <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
              Follow me on social media
              <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
            </h6>
            <x-social-icons></x-social-icons>
          </div>
        </div>
      </div>
      
     
    </div>
  </div>
</div>
</section>
<style>
 
 @media (max-width: 355px) {
  #ul {
    flex-direction: column;
  }
  .li {
    margin-bottom: 15px;
  }
} @media screen and (min-width: 541px) and  (max-width: 712px)
{
  #element,#zoom{
    font-size: 1.4rem;
  }
}
@media screen and  (min-width: 712px) and  (max-width: 730px)
{
  #element,#zoom{
    font-size: 2rem;
  }
}
@media screen and (min-width: 386px) and   (max-width: 540px) 
{
  #element,#zoom{
    font-size: 1.3rem;
  }
}
@media screen and (max-width: 386px) {
  #element,#zoom,#zoom1{
    font-size: 1rem;
  }
}

</style>
<!-- ====== Hero Section End -->
