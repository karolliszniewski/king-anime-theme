<header class="h-12 md:h-20 flex justify-center items-center">
        <div class="bg-stone-gray h-full w-full max-w-screen-xl mx-10 shadow-sm flex justify-between">
        <div class="h-[100%] flex">
            <div
              class="w-16 md:w-20 bg-yellow-theme flex justify-center items-center h-[100%]"
            >
              <span
                class="logo text-2xl md:text-5xl right-1 relative select-none"
                >A</span
              >
            </div>
            <div
              class="relative font-bold text-white text-1xl md:text-2xl ml-4 h-full flex items-center select-none"
            >
              Anime Kingdom
            </div>
          </div>

            <div  class="justify-center items-center w-[50%] open_HamburgerContainer .blur-background hidden md:flex">
                <?php
  wp_nav_menu(array(
    'theme_location' => 'header-menu',
    'menu_class' => 'flex w-full justify-between open_ul',
    'container' => '',
    'walker' => new KarolPortfolio\inc\Customwalker(),
  ));
                ?>
            </div>

            <div
            id="mobile_open"
            class="w-16 md:w-20 bg-yellow-theme flex justify-center items-center h-[100%] hover:filter hover:brightness-110 transition duration-300 cursor-pointer"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="black"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-8 md:h-16"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </div>
        </div>
    </header>