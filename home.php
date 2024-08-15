<?php get_header() ?>

<section id="hero" class="relative flex items-center justify-center w-full h-full-without-header-mobile md:h-full-without-header-desktop">
    <div class="relative h-[90%] w-full max-w-screen-xl flex items-center justify-center overflow-hidden rounded-xl">
        <!-- Video background -->
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop>
            <source src="<?= PORTFOLIOKAROL_DIR_URI ?>/assets/videos/satoru-blue-glowing-eye.1920x1080.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay with blurred background for text -->
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
            <div class="bg-gray-800 bg-opacity-70 p-8 text-center w-full h-[60%] md:h-[50%] flex justify-center items-center">
                <div>
                    <h1 class="text-white text-4xl font-bold mb-4">Welcome to Our Anime Store</h1>
                    <p class="text-white text-lg">Explore the latest products and exclusive offers. Shop now and enjoy amazing deals.</p>
                    <p class="text-white text-xl mt-4">Figurines up to <span class="text-[#5CC05C]">50% OFF!</span></p>
                    <div class="flex justify-center items-center mt-10">
                        <a class="h-12 w-28 bg-yellow-theme text-white font-semibold flex justify-center items-center rounded-xl" href="#shop">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










<?php get_footer() ?>