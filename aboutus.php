<?php
require_once __DIR__ . '/inc/bootstrap.php';
//requireAuth(); 
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/inc/nav.php';

if(request()->cookies->has('access_token')){

  echo "you are logged in";
}

?>
    <main>

        <h2 class="section-title">About The School</h2>

        <img class="" src="img/pdx.jpg" alt="The School logo">
        <p>Located just outside the beautiful City of Bulawayo</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue porttitor mattis. Etiam vel dui sit amet mauris dignissim ullamcorper. In lacus dolor, aliquam vel gravida sed, porttitor id enim. Phasellus vulputate consequat dictum. Sed leo enim, condimentum quis elementum eu, rhoncus sed ipsum. Mauris feugiat porta sapien eu consequat. Duis ante dui, convallis et lacinia eget, elementum non libero. Suspendisse luctus, .</p>

        <div>

            <h4>Our Motto</h4>
            <p>Nulla accumsan varius erat, vitae posuere dui eleifend maximus. Quisque non metus tellus. Maecenas lobortis, dolor facilisis condimentum mattis, purus mi efficitur ex, in sodales sapien magna a elit</p>

            <h4>Our Vision</h4>
            <p>Nulla accumsan varius erat, vitae posuere dui eleifend maximus. Quisque non metus tellus. Maecenas lobortis, dolor facilisis condimentum mattis, purus mi efficitur ex, in sodales sapien magna a elit</p>

            <h4>Our Mission</h4>
            <p>Pellentesque cursus nulla ac ipsum ullamcorper, quis ornare erat ultricies. Donec non elementum nibh. Morbi tristique et nulla vitae gravida. Nunc volutpat odio consequat, fermentum orci sagittis, tincidunt nibh.</p>

            <h4>Our Values</h4>
            <div>
                <li UBUNTU: Respect for all Human beings</li>
                <li Transparency: Pellentesque habitant morb</li>
                <li Nulla: Nulla accumsan varius era</li>
                <li Quisque: Quisque non metus tellus</li>
                <li Donec: Donec non elementum nibh. Morbi</li>
                <li Praesent: Praesent nec laoreet metus</li>
            </div>
        </div>


    </main>

    <?php
	require_once __DIR__ . '/inc/aside.php';
?>

        <?php require_once __DIR__ . '/inc/footer.php'; ?>
