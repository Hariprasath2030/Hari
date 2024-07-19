<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> IT-Department Main page</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
<script>!function(e){"undefined"==typeof module?this.charming=e:module.exports=e}(function(e,n){"use strict";n=n||{};var t=n.tagName||"span",o=null!=n.classPrefix?n.classPrefix:"char",r=1,a=function(e){for(var n=e.parentNode,a=e.nodeValue,c=a.length,l=-1;++l<c;){var d=document.createElement(t);o&&(d.className=o+r,r++),d.appendChild(document.createTextNode(a[l])),n.insertBefore(d,e)}n.removeChild(e)};return function c(e){for(var n=[].slice.call(e.childNodes),t=n.length,o=-1;++o<t;)c(n[o]);e.nodeType===Node.TEXT_NODE&&a(e)}(e),e});
</script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<style> body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  .nav-container {
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
    background-color: black;
    padding: 10px;
  }

  .nav-container button {
    background-color: #444;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
  }

  .nav-container button.left-arrow {
    left: 10px;
  }

  .nav-container button.right-arrow {
    right: 10px;
  }

  .nav-items {
    display: flex;
    transition: transform 0.3s ease;
    padding: 0 20px;
  }

  .nav-item {
    display: inline-block;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    transition: background-color 0.3s;
  }

  .nav-item:hover {
    background-color: cyan;
    text-decoration: none;
  }
    section {
  width: 100%;
  height: 100vh;
  
}

.swiper-container {
  width: 100%;
  height: 100%;
}

.slide {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  text-align: center;
  font-size: 18px;
  background: #fff;
  overflow: hidden;
}
.slide-image {
  position: absolute;
  top: -200px;
  left: -200px;
  width: calc(100% + 400px);
  height: calc(100% + 400px);
  background-position: 50% 50%;
  background-size: cover;
}
.slide-title {
  font-size: 4rem;
  line-height: 1;
  max-width: 50%;
  white-space: normal;
  word-break: break-word;
  color: #FFF;
  z-index: 100;
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase;
  font-weight: normal;
}
@media (min-width: 45em) {
  .slide-title {
    font-size: 7vw;
    max-width: none;
  }
}
.slide-title span {
  white-space: pre;
  display: inline-block;
  opacity: 0;
}

.slideshow {
  position: relative;
  
}
.slideshow-pagination {
  position: absolute;
  bottom: 5rem;
  left: 0;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  transition: .3s opacity;
  z-index: 10;
}
.slideshow-pagination-item {
  display: flex;
  align-items: center;
}
.slideshow-pagination-item .pagination-number {
  opacity: 0.5;
}
.slideshow-pagination-item:hover, .slideshow-pagination-item:focus {
  cursor: pointer;
}
.slideshow-pagination-item:last-of-type .pagination-separator {
  width: 0;
}
.slideshow-pagination-item.active .pagination-number {
  opacity: 1;
}
.slideshow-pagination-item.active .pagination-separator {
  width: 10vw;
}
.slideshow-navigation-button {
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 5rem;
  z-index: 1000;
  transition: all .3s ease;
  color: #FFF;
}
.slideshow-navigation-button:hover, .slideshow-navigation-button:focus {
  cursor: pointer;
  background: rgba(0, 0, 0, 0.5);
}
.slideshow-navigation-button.prev {
  left: 0;
}
.slideshow-navigation-button.next {
  right: 0;
}

.pagination-number {
  font-size: 1.8rem;
  color: #FFF;
  font-family: 'Oswald', sans-serif;
  padding: 0 0.5rem;
}

.pagination-separator {
  display: none;
  position: relative;
  width: 40px;
  height: 2px;
  background: rgba(255, 255, 255, 0.25);
  transition: all .3s ease;
}
@media (min-width: 45em) {
  .pagination-separator {
    display: block;
  }
}
.pagination-separator-loader {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #FFFFFF;
  transform-origin: 0 0;
}


nav:after{
  content: '';
  clear: both;
  display: table;
}
nav .logo{
  float: left;
  color: white;
  font-size: 27px;
  font-weight: 600;
  line-height: 70px;
  padding-left: 60px;
}
nav ul{
  float: right;
  margin-right: 40px;
  list-style: none;
  position: relative;
}
nav ul li{
  float: left;
  display: inline-block;
  background: #1b1b1b;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  line-height: 70px;
  text-decoration: none;
  font-size: 18px;
  padding: 8px 15px;
}
nav ul li a:hover{
  color: cyan;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
  0 0 10px #66ffff;
  text-decoration: none;
  
}
nav ul ul li a:hover{
  box-shadow: none;
}
nav ul ul{
  position: absolute;
  top: 90px;
  border-top: 3px solid cyan;
  opacity: 0;
  visibility: hidden;
  transition: top .3s;
}
nav ul ul ul{
  border-top: none;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
  
}
nav ul ul li{
  position: relative;
  margin: 0px;
  width: 150px;
  float: none;
  display: list-item;
  border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a{
  line-height: 50px;
}
nav ul ul ul li{
  position: relative;
  top: -60px;
  left: 150px;
}
.show-1,.icon{
  display: none;
}
.fa-plus{
  font-size: 15px;
  margin-left: 40px;
}
@media all and (max-width: 968px) {
  nav ul{
    margin-right: 0px;
    float: left;
  }
  nav .logo{
    padding-left: 30px;
    width: 100%;
  }
  .show-1 + a, ul{
    display: none;
  }
  nav ul li,nav ul ul li{
    display: block;
    width: 100%;
  }
  nav ul li a:hover{
    box-shadow: none;
  }
  .show-1{
    display: block;
    color: white;
    font-size: 18px;
    padding: 0 20px;
    line-height: 70px;
    cursor: pointer;
  }
  .show-1:hover{
    color: cyan;
    
  }
  .icon{
    display: block;
    color: white;
    position: absolute;
    top: 0;
    right: 40px;
    line-height: 70px;
    cursor: pointer;
    font-size: 25px;
  }
  nav ul ul{
    top: 70px;
    border-top: 0px;
    float: none;
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
  }
  nav ul ul a{
    padding-left: 40px;
    
  }
  nav ul ul ul a{
    padding-left: 80px;
  }
  nav ul ul ul li{
    position: static;
  }
  [id^=btn]:checked + ul{
    display: block;
  }
  nav ul ul li{
    border-bottom: 0px;
  }
  span.cancel:before{
    content: '\f00d';
  }
}
.content{
  z-index: -1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}
header{
  font-size: 35px;
  font-weight: 600;
  padding: 10px 0;
}
p{
  font-size: 30px;
  font-weight: 500;
}

</style>
</head>
<body style="overflow: hidden;">
<nav style=" background: #1b1b1b;">
<div class="nav-container">
  <button class="left-arrow" id="left-arrow">&#9664;</button>
  <div class="nav-items" id="nav-items">
    <a class="nav-item" href="#">2010</a>
    <a class="nav-item" href="#">2011</a>
    <a class="nav-item" href="#">2012</a>
    <a class="nav-item" href="#">2013</a>
    <a class="nav-item" href="#">2014</a>
    <a class="nav-item" href="#">2015</a>
    <a class="nav-item" href="#">2016</a>
    <a class="nav-item" href="#">2017</a>
    <a class="nav-item" href="#">2018</a>
    <a class="nav-item" href="#">2019</a>
    <a class="nav-item" href="#">2020</a>
    <a class="nav-item" href="#">2021</a>
    <a class="nav-item" href="#">2022</a>
    <a class="nav-item" href="#">2023</a>
    <a class="nav-item" href="/project/first1.php">2024</a>
    <a class="nav-item" href="#">2025</a>
    <a class="nav-item" href="#">2026</a>
    <a class="nav-item" href="#">2027</a>
    <a class="nav-item" href="#">2028</a>
    <a class="nav-item" href="#">2029</a>
    <a class="nav-item" href="#">2030</a>
    <a class="nav-item" href="#">2031</a>
    <a class="nav-item" href="#">2032</a>
    <a class="nav-item" href="#">2033</a>
    <a class="nav-item" href="#">2034</a>
    <a class="nav-item" href="#">2035</a>
    <a class="nav-item" href="#">2036</a>
    <a class="nav-item" href="#">2037</a>
    <a class="nav-item" href="#">2038</a>
    <a class="nav-item" href="#">2039</a>
    <a class="nav-item" href="#">2040</a>
    <a class="nav-item" href="#">2041</a>
    <a class="nav-item" href="#">2042</a>
    <a class="nav-item" href="#">2043</a>
    <a class="nav-item" href="#">2044</a>
    <a class="nav-item" href="#">2045</a>
    <a class="nav-item" href="#">2046</a>
    <a class="nav-item" href="#">2047</a>
    <a class="nav-item" href="#">2048</a>
    <a class="nav-item" href="#">2049</a>
    <a class="nav-item" href="#">2050</a>
    <a class="nav-item" href="#">2051</a>
    <a class="nav-item" href="#">2052</a>
    <a class="nav-item" href="#">2053</a>
    <a class="nav-item" href="#">2054</a>
    <a class="nav-item" href="#">2055</a>
    <a class="nav-item" href="#">2056</a>
    <a class="nav-item" href="#">2057</a>
    <a class="nav-item" href="#">2058</a>
    <a class="nav-item" href="#">2059</a>
    <a class="nav-item" href="#">2060</a>
    <a class="nav-item" href="#">2061</a>
    <a class="nav-item" href="#">2062</a>
    <a class="nav-item" href="#">2063</a>
    <a class="nav-item" href="#">2064</a>
    <a class="nav-item" href="#">2065</a>
    <a class="nav-item" href="#">2066</a>
    <a class="nav-item" href="#">2067</a>
    <a class="nav-item" href="#">2068</a>
    <a class="nav-item" href="#">2069</a>
    <a class="nav-item" href="#">2070</a>
    <a class="nav-item" href="#">2071</a>
    <a class="nav-item" href="#">2072</a>
    <a class="nav-item" href="#">2073</a>
    <a class="nav-item" href="#">2074</a>
    <a class="nav-item" href="#">2075</a>
    <a class="nav-item" href="#">2076</a>
    <a class="nav-item" href="#">2077</a>
    <a class="nav-item" href="#">2078</a>
    <a class="nav-item" href="#">2079</a>
    <a class="nav-item" href="#">2080</a>
    <a class="nav-item" href="#">2081</a>
    <a class="nav-item" href="#">2082</a>
    <a class="nav-item" href="#">2083</a>
    <a class="nav-item" href="#">2084</a>
    <a class="nav-item" href="#">2085</a>
    <a class="nav-item" href="#">2086</a>
    <a class="nav-item" href="#">2087</a>
    <a class="nav-item" href="#">2088</a>
    <a class="nav-item" href="#">2089</a>
    <a class="nav-item" href="#">2090</a>
  </div>
  <button class="right-arrow" id="right-arrow">&#9654;</button>
</div>

<script>
  const leftArrow = document.getElementById('left-arrow');
  const rightArrow = document.getElementById('right-arrow');
  const navItems = document.getElementById('nav-items');
  let scrollAmount = 0;

  leftArrow.addEventListener('click', () => {
    navItems.style.transform = `translateX(${scrollAmount += 100}px)`;
  });

  rightArrow.addEventListener('click', () => {
    navItems.style.transform = `translateX(${scrollAmount -= 100}px)`;
  });
</script>
      <div class="logo">IT-DEPARTMENT - 2024 Batch</div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <ul>
        <li>
          <label for="btn-1" class="show-1">INTERNAL MARKS+</label>
          <a href="internal-marks/filesearch.php">INTERNAL MARKS</a>
        </li>
        <li>
          <label for="btn-2" class="show-1">SEMESTER MARKS+</label>
          <a href="semester-marks/semexam.php">SEMESTER MARKS</a>
        </li>
        <li>
          <label for="btn-1" class="show-1">ATTENDANCE+</label>
          <a href="attendance/attendance.php">ATTENDANCE</a>
        </li>
        <li>
          <label for="btn-1" class="show-1">CURRICULAM+</label>
          <a href="Curriculum/cir1.php">CURRICULAM</a>
        </li>
        <li>
          <label for="btn-1" class="show-1">PROJECT+</label>
          <a href="projects/sem-projects.php">PROJECT</a>
         </li>
       <li>
          <label for="btn-1" class="show-1">Back</label>
          <a href="/project/index.html">Back</a>
        </li>
      </ul>
    </nav>
<section>

    <div class="swiper-container slideshow">
  
      <div class="swiper-wrapper">
  
        <div class="swiper-slide slide">
          <div class="slide-image" style="background-image:url(uuuu.jpg)"></div>
          <a href="internal-marks/filesearch.php" class="slide-title-button"><span class="slide-title">Internal marks</span></a>
        </div>
  
        <div class="swiper-slide slide">
          <div class="slide-image" style="background-image:url(mmmm.jpeg)"></div>
          <a href="semester-marks/semexam.php" class="slide-title-button"><span class="slide-title">Semester - Marks</span></a>
        </div>
  
        <div class="swiper-slide slide">
          <div class="slide-image" style = "background-image: url(rrrr.jpg)"></div>
          <a href="attendance/attendance.php" class="slide-title-button"><span class="slide-title">Semester - Attendance</span></a>
        </div>

        <div class="swiper-slide slide">
            <div class="slide-image" style="background-image: url(dddd.jpg)"></div>
            <a href="Curriculum/cir1.php" class="slide-title-button"><span class="slide-title">Semester - Curriculum</span></a>
          </div>

          <div class="swiper-slide slide">
            <div class="slide-image" style="background-image: url(eeee.jpg)"></div>
            <a href="projects/sem-projects.php" class="slide-title-button"><span class="slide-title">Semester - Project</span></a>
          </div>
  
      </div>
  
      <div class="slideshow-pagination"></div>
  
      <div class="slideshow-navigation">
        <div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
        <div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
      </div>
  
    </div>
  
  </section>
  <script>
      // The Slideshow class.
  class Slideshow {
      constructor(el) {
          
          this.DOM = {el: el};
        
          this.config = {
            slideshow: {
              delay: 3000,
              pagination: {
                duration: 3,
              }
            }
          };
          
          // Set the slideshow
          this.init();
        
      }
      init() {
        
        var self = this;
        
        // Charmed title
        this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
        this.DOM.slideTitle.forEach((slideTitle) => {
          charming(slideTitle);
        });
        
        // Set the slider
        this.slideshow = new Swiper (this.DOM.el, {
            
            loop: true,
            autoplay: {
              delay: this.config.slideshow.delay,
              disableOnInteraction: false,
            },
            speed: 500,
            preloadImages: true,
            updateOnImagesReady: true,
            
            // lazy: true,
            // preloadImages: false,
  
            pagination: {
              el: '.slideshow-pagination',
              clickable: true,
              bulletClass: 'slideshow-pagination-item',
              bulletActiveClass: 'active',
              clickableClass: 'slideshow-pagination-clickable',
              modifierClass: 'slideshow-pagination-',
              renderBullet: function (index, className) {
                
                var slideIndex = index,
                    number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);
                
                var paginationItem = '<span class="slideshow-pagination-item">';
                paginationItem += '<span class="pagination-number">' + number + '</span>';
                paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
                paginationItem += '</span>';
              
                return paginationItem;
                
              },
            },
  
            // Navigation arrows
            navigation: {
              nextEl: '.slideshow-navigation-button.next',
              prevEl: '.slideshow-navigation-button.prev',
            },
  
            // And if we need scrollbar
            scrollbar: {
              el: '.swiper-scrollbar',
            },
          
            on: {
              init: function() {
                self.animate('next');
              },
            }
          
          });
        
          // Init/Bind events.
          this.initEvents();
          
      }
      initEvents() {
          
          this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
          //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());
  
          this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));
          
          this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));
              
      }
      animate(direction = 'next') {
        
          // Get the active slide
          this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
          this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
          this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
          this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');
        
          // Reverse if prev  
          this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();
        
          // Get old slide
          this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
          if (this.DOM.oldSlide) {
            // Get parts
            this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
            this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span'); 
            // Animate
            this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
              TweenMax.to(letter, .3, {
                ease: Quart.easeIn,
                delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
                y: '50%',
                opacity: 0
              });
            });
          }
        
          // Animate title
          this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
                      TweenMax.to(letter, .6, {
                          ease: Back.easeOut,
                          delay: pos*.05,
                          startAt: {y: '50%', opacity: 0},
                          y: '0%',
                          opacity: 1
                      });
                  });
        
          // Animate background
          TweenMax.to(this.DOM.activeSlideImg, 1.5, {
              ease: Expo.easeOut,
              startAt: {x: direction === 'next' ? 200 : -200},
              x: 0,
          });
        
          //this.animatePagination()
      
      }
      animatePagination(swiper, paginationEl) {
              
        // Animate pagination
        this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
        this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
        this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');
        
        console.log(swiper.pagination);
        // console.log(swiper.activeIndex);
        
        // Reset and animate
          TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
          TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
            startAt: {scaleX: 0},
            scaleX: 1,
          });
        
        
      }
      
  }
  
  const slideshow = new Slideshow(document.querySelector('.slideshow'));
  
  </script>
  </body>
</html>