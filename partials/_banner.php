<!-- banner section -->
<section class="h-44 sm:h-72 w-full rounded-sm shadow owl-carousel owl-theme relative overflow-hidden" id="banner">

    <?php
    foreach($product->getData('banner') as $banner):
    ?>

    <img class="h-44 sm:h-72 w-full object-cover" src="assets/images/banner/<?php echo $banner['id']; ?>.png" alt="<?php echo $banner['banner_img_alt']; ?>">
    <img class="h-44 sm:h-72 w-full object-cover" src="assets/images/banner/<?php echo $banner['id']; ?>.png" alt="<?php echo $banner['banner_img_alt']; ?>">
    <img class="h-44 sm:h-72 w-full object-cover" src="assets/images/banner/<?php echo $banner['id']; ?>.png" alt="<?php echo $banner['banner_img_alt']; ?>">
    <img class="h-44 sm:h-72 w-full object-cover" src="assets/images/banner/<?php echo $banner['id']; ?>.png" alt="<?php echo $banner['banner_img_alt']; ?>">
    <img class="h-44 sm:h-72 w-full object-cover" src="assets/images/banner/<?php echo $banner['id']; ?>.png" alt="<?php echo $banner['banner_img_alt']; ?>">
    <img class="h-44 sm:h-72 w-full object-cover" src="assets/images/banner/<?php echo $banner['id']; ?>.png" alt="<?php echo $banner['banner_img_alt']; ?>">
    <img class="h-44 sm:h-72 w-full object-cover" src="assets/images/banner/<?php echo $banner['id']; ?>.png" alt="<?php echo $banner['banner_img_alt']; ?>">
    <img class="h-44 sm:h-72 w-full object-cover" src="assets/images/banner/<?php echo $banner['id']; ?>.png" alt="<?php echo $banner['banner_img_alt']; ?>">

    <?php
    endforeach;
    ?>
</section>
<!-- banner section -->