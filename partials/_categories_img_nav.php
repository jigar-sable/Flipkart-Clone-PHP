<!-- categories container header -->
<section class="hidden sm:block bg-white mt-10 mb-4 min-w-full px-12 py-1 shadow overflow-hidden">

    <!-- categories container -->
    <div class="flex items-center justify-between mt-4">
            
        <?php
        foreach($product->getData('categories_thumb') as $item):
        // echo var_dump($item);
        ?>

        <!-- category -->
        <a class="flex flex-col gap-1 items-center p-2 group" href="#">
            <div class="h-16 w-16">
                <img draggable="false" loading="lazy" class="h-full w-full object-contain" src="assets/images/categories/<?php echo $item['cat_img']; ?>.webp" alt="<?php echo $item['cat_img_alt']; ?>">
            </div>
            <span class="text-sm text-gray-800 font-medium group-hover:text-primary-blue flex items-center gap-0.5"> <?php echo $item['cat_title']; ?> </span>
        </a>
        <!-- category -->

        <?php
        endforeach;
        ?>

    </div>
    <!-- categories container -->

</section>
<!-- categories container header -->