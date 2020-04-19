<header id="header" class="fixed z-50 w-full bg-white shadow">
  <div class="header__top bg-teal   text-white py-1 text-right">
    <div class="meta-info text-sm max-w-container mx-auto px-4">
      <a href="tel:+1 (250) 218-0826">(250) 218-0826</a>
      <span>|</span>
      <span class="meta__email"><a href="mailto:trisha@horticurious.ca">trisha@horticurious.ca</a></span>
    </div>
  </div>
  <div class="header__bottom">
    <div class="flex justify-between items-center py-2 md:py-4 pr-4 pl-2 max-w-container mx-auto px-4">
      <div class="site__logo">
        <a href="/" class="flex items-center text-green text-lg md:text-2xl">
          <img src="/svg/logo.svg" alt="Site logo" class="h-10 w-10md:h-12 md:w-12">
          <span class="site__name ml-2 md:ml-0"><span>H</span>orticurious</span>
        </a>
      </div>

      <div class="menu-wrapper">
        <nav id="menu-main" role="navigation" class="hidden md:block">
          <ul class="flex text-lg lg:text-xl uppercase">
            <li><a href="#services" @click.prevent="scrollTo('services')" class="pr-4 lg:pr-8 hover:text-teal">Services</a></li>
            <li><a href="#portfolio" @click.prevent="scrollTo('portfolio')" class="px-4 lg:px-8 hover:text-teal">Portfolio</a></li>
            <li><a href="#horticulture" @click.prevent="scrollTo('horticulture')" class="px-4 lg:px-8 hover:text-teal">Horticulture</a></li>
            <li><a href="#contact" @click.prevent="scrollTo('contact')" class="pl-4 lg:pl-8 hover:text-teal">Contact</a></li>
          </ul>
        </nav>

        <nav role="navigation" class="block md:hidden">
          <menu-mobile :menu-items='{!! json_encode($menu_items) !!}'></menu-mobile>
        </nav>
      </div>
    </div>
  </div>

</header>
