    <!-- top rated section -->
    <section id="topSelection" class="bg-white w-full shadow overflow-hidden">
        <!-- header -->
        <div class="flex px-6 py-3 justify-between items-center">
            <h1 class="text-xl font-medium">Top Rated</h1>
            <a href="#" class="bg-primary-blue text-xs font-medium text-white px-5 py-2.5 rounded-sm shadow-lg">VIEW ALL</a>
        </div>
        <hr>
        <!-- header -->
        
        <!-- products container -->
        <div class="flex items-center justify-between owl-carousel owl-theme relative">

            <?php
            shuffle($top_selection_array);
            foreach($top_selection_array as $item):
            ?>
            <!-- one product -->
            <a class="flex flex-col items-center gap-2 p-6" href="<?php echo $item['url']; ?>">
                <div class="w-36 h-36 transform hover:scale-110 transition-transform duration-100 ease-out">
                    <img draggable="false" loading="lazy" class="w-full h-full object-contain" src="assets/images/top_selection/<?php echo $item['img']; ?>.png" alt="<?php echo $item['img_alt']; ?>">
                </div>
                <h2 class="font-medium text-sm mt-2"><?php echo $item['title']; ?></h2>
                <span class="text-primary-green text-sm"><?php echo $item['tag']; ?></span>
            </a>

            <?php
            endforeach;
            ?>

        </div>
        <!-- products container -->
    </section>
    <!-- top rated section -->