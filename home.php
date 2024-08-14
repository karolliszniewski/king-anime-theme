<?php get_header() ?>

<section id="hero" class="h-full-without-header-mobile md:h-full-without-header-desktop relative flex items-center justify-center w-full">
  <div class="h-[90%] w-full max-w-screen-xl flex items-center justify-center overflow-hidden rounded-xl">
    <div class="carousel h-[100%] w-[90%]  flex items-center justify-center bg-red-100">
      
      <div style="background-image: url('<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/wallpapper1.jpeg');" class="bg-cover bg-right md:bg-center h-[100vh] w-full"></div>
      
      <div style="background-image: url('<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/wallpapper2.png');" class="bg-cover bg-center h-[100vh] w-full"></div>
      
      <div style="background-image: url('<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/wallpapper3.jpg');" class="bg-cover bg-center h-[100vh] w-full"></div>
    
    </div>
  </div>
</section>





<!-- Coding projects -->
<?php get_template_part('template-parts/projects-coding'); ?>


<!-- Social Media projects -->

<?php get_template_part('template-parts/projects-social'); ?>






<section id="Experience" class="bg-[#2F2F33]">
  <div class="mx-10">
    <div id="experience" class="max-w-screen-xl mx-auto ">
      <div class="w-full h-20 flex items-center  ">
        <h2 class="text-yellow-theme font-bold text-3xl h-full flex items-center ml-1">WORK EXPERIENCE</h2>
      </div>

      <div class="border-with-circle relative h-auto pb-14 border-l border-yellow-theme">
        <div id="experience-date1" class="text-[#959596] ml-14 relative -top-3 translate-x-10 translate-y-10">01/2016 – Present</div>
        <div id="experience-title1" class="text-white ml-14 mt-2 text-2xl translate-x-16"> <img alt="UK flag" class="w-[1rem] mr-2" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/ukflag.webp" /> Online Sales (Dropshipping)</div>
        <div id="experience-company1" class="relative text-[#959596] ml-14 top-1 text-sm -translate-x-16 translate-y-10">Self-Employed</div>
      </div>


      <div class="border-with-circle relative h-auto pb-14 border-l border-yellow-theme">
        <div id="experience-date2" class="text-[#959596] ml-14 relative -top-3 translate-x-10 translate-y-10">05/2014 - 10/2014</div>
        <div id="experience-title2" class="text-white ml-14 mt-2 text-2xl translate-x-15 -translate-y-10"><img alt="UK flag" class="w-[1rem] mr-2" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/ukflag.webp" /> WAREHOUSE OPERATIVE</div>
        <div id="experience-company2" class="relative text-[#959596] ml-14 top-1 text-sm -translate-x-16 translate-y-10">TAILORED RECRUITMENT SVS LTD </div>
      </div>

      <div class="border-with-circle relative h-auto pb-14 border-l border-yellow-theme">
        <div id="experience-date3" class="text-[#959596] ml-14 relative -top-3 translate-x-10 translate-y-10">05/2013 – 07/2013</div>
        <div id="experience-title3" class="text-white ml-14 mt-2 text-2xl translate-x-15 -translate-y-10"><img alt="UK flag" class="w-[1rem] mr-2" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/ukflag.webp" /> WAREHOUSE OPERATIVE</div>
        <div id="experience-company3" class="relative text-[#959596] ml-14 top-1 text-sm -translate-x-16 translate-y-10">ASSIST RESOURCING UK LTD</div>
      </div>

      <div class="border-with-circle relative h-auto pb-14 border-l border-yellow-theme">
        <div id="experience-date4" class="text-[#959596] ml-14 relative -top-3 translate-x-10 translate-y-10">04/2013 – 05/2013</div>
        <div id="experience-title4" class="text-white ml-14 mt-2 text-2xl translate-x-15 -translate-y-10"><img alt="UK flag" class="w-[1rem] mr-2" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/ukflag.webp" /> DEPARTMENT INDUSTRY </div>
        <div id="experience-company4" class="relative text-[#959596] ml-14 top-1 text-sm -translate-x-16 translate-y-10">GAP PERSONNEL</div>
      </div>

      <div class="border-with-circle relative h-auto pb-14 border-l border-yellow-theme">
        <div id="experience-date5" class="text-[#959596] ml-14 relative -top-3 translate-x-10 translate-y-10">08/2012 - 11/2012</div>
        <div id="experience-title5" class="text-white ml-14 mt-2 text-2xl translate-x-15 -translate-y-10"><img alt="Poland flag" class="w-[1rem] mr-2" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/polandflag.webp" /> SEO Specialist (Internship)</div>
        <div id="experience-company5" class="relative text-[#959596] ml-14 top-1 text-sm -translate-x-16 translate-y-10">Trader Team Sp. z o.o - Internet Marketing/Web design </div>
      </div>
    </div>
  </div>
  </div>
</section>


<!-- Section 3 -->
<section id="Myskills" class="h-auto">
  <div class="mx-10">
    <div class="max-w-screen-xl mx-auto ">
      <div class="w-full h-20 flex items-center  ">
        <h2 class="text-yellow-theme font-bold text-3xl h-full flex items-center ml-1">MY SKILLS</h2>


      </div>

      <div class="h-auto w-full flex flex-wrap  justify-center mb-10 md:mb-0">

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="Wordpress Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>\assets\img\skillsWebp\wordpresslogo.webp" />
          </div>
          <p class="skills__text">Wordpress</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="WooCommerce Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/woocommerce.webp" />
          </div>
          <p class="skills__text">WooCommerce</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[6rem]" alt="PHP Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/phpLogo.webp" />
          </div>
          <p class="skills__text">PHP</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[5rem]" alt="MySQL Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/Mysqllogo.webp" />
          </div>
          <p class="skills__text">Mysql</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="phpMyAdmin Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/phpmyadminLogo.webp" />
          </div>
          <p class="skills__text">phpMyAdmin</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[8rem]" alt="Laravel Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/LaravelLogo.webp" />
          </div>
          <p class="skills__text">Laravel</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="React Native Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/reactlogo.webp" />
          </div>
          <p class="skills__text">React Native</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[5rem]" alt="Jquery Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/jqueryLogo2.webp" />
          </div>
          <p class="skills__text">Jquery</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[3rem]" alt="JavaScript Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/JavaScriptLogo.webp" />
          </div>
          <p class="skills__text">JavaScript</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="NPM Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/npmLogo.webp" />
          </div>
          <p class="skills__text">NPM</p>
        </div>


        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="Vue Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/VueLogo.webp" />
          </div>
          <p class="skills__text">Vue</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="Webpack Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/webpacklogo.webp" />
          </div>
          <p class="skills__text">Webpack</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="Vite Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/viteLogo.webp" />
          </div>
          <p class="skills__text">Vite</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[3rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/cssLogo.webp" />
          </div>
          <p class="skills__text">CSS</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[3.5rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/htmlLogo.webp" />
          </div>
          <p class="skills__text">HTML</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[2.5rem]" alt="Figma Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/figma.webp" />
          </div>
          <p class="skills__text">Figma</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[7rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/CsharpLogo.webp" />
          </div>
          <p class="skills__text">Csharp</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[3rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/seleniumLogo.webp" />
          </div>
          <p class="skills__text">Selenium</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[7rem]" alt="SEO Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/seoLogo.webp" />
          </div>
          <p class="skills__text">SEO</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" alt="Ubuntu Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/ubuntuLogo.webp" />
          </div>
          <p class="skills__text">Ubuntu</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[5rem]" alt="Visual Studio Code Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/vscodeLogo.webp" />
          </div>
          <p class="skills__text">VS Code</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[3.5rem]" alt="VSCodium Logo" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/vscodium.webp" />
          </div>
          <p class="skills__text">VSCodium</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[3rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/facebookadsLogo.webp" />
          </div>
          <p class="skills__text">Facebook ADS</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[6rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/searchConsoleLogo.webp" />
          </div>
          <p class="skills__text">Search Console</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[3.5rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/githubWhiteLogo.webp" />
          </div>
          <p class="skills__text">Github</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/ServerManagement.webp" />
          </div>
          <p class="skills__text">Server Management</p>
        </div>

        <div class="skills__border">
          <div class="skills__container">
            <img class="w-[4rem]" src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/img/skillsWebp/WebsiteMigration.webp" />
          </div>
          <p class="skills__text">Website Migration</p>
        </div>

      </div>
    </div>
  </div>
</section>





<?php get_footer() ?>