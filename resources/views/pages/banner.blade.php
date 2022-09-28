



  <!--Slider-->
  <div id="slider">
  <div class="slide" >
    <img src="https://ecdn.game4v.com/g4v-content/uploads/2022/03/13193845/GAM-4-1647175124-76.jpg" >
  </div>

  <div class="slide" >
     <img src="https://viresa.org.vn/uploads/medium_image_47fd411c03.png" >
  </div>

  <div class="slide" >
    <img src="https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt02bc53e67a09d6e8/5ff67a60a703d10ab87eb727/WR_Esports_Announcement_Banner.jpg" >
  </div>

  <div class="slide" >
    <img src="https://image.lag.vn/upload/news/22/02/02/Valorant_01_JEEX.jpg" >
  </div>

  <!--Controlling arrows-->
  <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</span>
  <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</span>
</div>
  <div id="dots-con">
 <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
 </div>

 <script>
    var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var index = 0;


function prevSlide(n){
  index+=n;
  console.log("prevSlide is called");
  changeSlide();
}

function nextSlide(n){
  index+=n;
  changeSlide();
}

changeSlide();

function changeSlide(){

  if(index>slides.length-1)
    index=0;

  if(index<0)
    index=slides.length-1;



    for(let i=0;i<slides.length;i++){
      slides[i].style.display = "none";

      dots[i].classList.remove("active");


    }

    slides[index].style.display = "block";
    dots[index].classList.add("active");



}



 </script>
