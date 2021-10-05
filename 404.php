<?php
include 'header.php';
?>

<!-- main sections starts -->
<main class="flex flex-col gap-3 px-2 mt-16 mb-12">
 
  <div class="flex items-center flex-col gap-3 m-6">
    <div class="">
        <img draggable="false" loading="lazy" class="w-full h-full object-contain" src="assets/images/error-500.png" alt="">
    </div>
    <span class="text-lg text-center">Unfortunately the page you are looking for has been moved or deleted</span>
    <a href="index.php" class="bg-primary-blue text-sm text-white px-12 py-2.5 rounded-sm shadow-lg mt-3">GO TO HOMEPAGE</a>
  </div>

</main>
<!-- main sections starts -->

<?php
include 'partials/_footer.php';
?>