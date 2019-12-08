<header id="header" class="fixed z-10 w-full bg-white shadow">
  <div class="header__top bg-teal text-white py-1 text-right px-4">
    {{-- <div class="container"> --}}
      <div class="max-w-hd mx-auto meta-info text-sm">
        <span class="meta__phone">(250) 218-0826</span> | <span class="meta__email"><a href="mailto:trisha@horticurious.ca">trisha@horticurious.ca</a></span>
      </div>
    {{-- </div> --}}
  </div>
  <div class="header__bottom">
    <div class="flex justify-between items-center py-2 md:py-4 pr-4 pl-2 max-w-hd mx-auto">
      <div class="site__logo">
        <a href="/" class="flex items-center text-green text-lg md:text-2xl">
          <img src="/svg/logo.svg" alt="Site logo" class="h-10 w-10md:h-12 md:w-12">
          <span class="site__name ml-2 md:ml-0"><span>H</span>orticurious</span>
        </a>
      </div>

      <div class="menu-wrapper">
        <nav id="menu-main" role="navigation" class="hidden md:block">
          <ul class="flex text-lg lg:text-xl uppercase">
            <li><a href="#services" class="pr-4 lg:pr-8 hover:text-teal">Services</a></li>
            <li><a href="#portfolio" class="px-4 lg:px-8 hover:text-teal">Portfolio</a></li>
            <li><a href="#horticulture" class="px-4 lg:px-8 hover:text-teal">Horticulture</a></li>
            <li><a href="#contact" class="pl-4 lg:pl-8 hover:text-teal">Contact</a></li>
          </ul>
        </nav>

        <nav role="navigation" class="block md:hidden">
          <menu-tree :menu-items='{!! json_encode($menu_items) !!}'></menu-tree>
        </nav>
      </div>
    </div>
  </div>

</header>
