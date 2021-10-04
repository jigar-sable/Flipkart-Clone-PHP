<?php
ob_start();
include 'header.php';
include 'partials/_categories_img_nav.php';
?>

<!-- main sections starts -->
<main class="flex flex-col gap-3 px-2 mt-2">

<?php
include 'partials/_banner.php';
include 'partials/_top_selection.php';

if(isset($_SESSION['login'])){
include 'partials/_suggested_for_you.php';
}

include 'partials/_discounts_for_you.php';

if(isset($_SESSION['login'])){
    include 'partials/_recommended_items.php';
}

include 'partials/_top_rated.php';

if(isset($_SESSION['login'])){
include 'partials/_you_may_like.php';
}

include 'partials/_discounts_for_you.php';

include 'partials/_top_selection.php';

if(isset($_SESSION['login'])){
    include 'partials/_suggested_for_you.php';
}

include 'partials/_discounts_for_you.php';
?>

</main>

<?php
include 'partials/_long_links.php';
include 'partials/_long_desc.php';
include 'partials/_footer.php';
?>