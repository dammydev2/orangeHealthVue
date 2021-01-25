<template>
  <div class="" id="top" data-spy="scroll" data-target=".navbar-collapse">
    <nav class="navbar navbar-expand-sm navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse"
          >
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>
            <div class="element-inline">
                    <a href="#" class="navbar-brand content-inline"><img :src="'/images/OREANGE HEALTH LOGO.jpg'" alt="orange logo" class="img img-responsive" width="50"> </a>
                    <a href="" class="navbar-brand content-inline"> &nbsp;&nbsp;Orange Health</a>
                </div>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul> -->
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a
                href="#top"
                onclick='document.getElementById("top").scrollIntoView({behavior: "smooth"});'
                class="smoothScroll"
                >HOME</a
              >
            </li>
            <li>
              <a
                href="#features"
                onclick='document.getElementById("features").scrollIntoView({behavior: "smooth"});'
                class="smoothScroll"
                >VISION</a
              >
            </li>
            <li>
              <a
                href="#about"
                onclick='document.getElementById("about").scrollIntoView({behavior: "smooth"});'
                class="smoothScroll"
                >ABOUT</a
              >
            </li>
            <li>
              <a
                href="#team"
                onclick='document.getElementById("team").scrollIntoView({behavior: "smooth"});'
                class="smoothScroll"
                >OUR PROGRAMMES</a
              >
            </li>
            <li>
              <a
                href="#portfolio"
                onclick='document.getElementById("portfolio").scrollIntoView({behavior: "smooth"});'
                class="smoothScroll"
                >RECENT PROJECT</a
              >
            </li>
            <li>
              <a
                href="#contact"
                class="smoothScroll"
                onclick='document.getElementById("contact").scrollIntoView({behavior: "smooth"});'
                >DONATE</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
</template>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-active {
  opacity: 0;
}
</style>

<script>
export default {};
</script>