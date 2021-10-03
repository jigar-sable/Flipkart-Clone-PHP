    <!-- categories container header -->
    <section class="hidden sm:block bg-white w-full px-2 sm:px-12 overflow-hidden border-b mt-14">

        <!-- categories container -->
        <div class="flex items-center justify-between p-0.5">
        <?php
        foreach($product->getData('category_nav') as $category):
        ?>
            <!-- categories -->
            <a  href="<?php echo $category['cat_url']; ?>" class="text-sm p-2 text-gray-800 font-medium hover:text-primary-blue flex items-center gap-0.5 group"><?php echo $category['cat_title']; ?></a>
        <?php
        endforeach;
        ?>

        </div>
    </section>
    <!-- categories container header -->