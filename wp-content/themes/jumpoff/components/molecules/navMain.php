<?php
wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => '',
        'menu_class'        => 'navMain grid-row',
        'fallback_cb'       => 'Clean_Walker_Nav::fallback',
        'walker'            => new Clean_Walker_Nav())
);
?>


<!--<ul class="navMain grid-row">
	<li><a href="#">Our Work</a>
        <ul>
            <li><a href="#">Drop down 1</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
        </ul>
    </li>
    <li><a href="#">Support Us</a>
        <ul>
            <li><a href="#">Drop down 2</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
        </ul>
    </li>
    <li><a href="#">Get Involved</a>
        <ul>
            <li><a href="#">Drop down 3</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
        </ul>
    </li>
	<li><a href="#">About</a></li>
    <li class="navMain__right navMain__donate"><a href="#">Donate</a></li>
	<li class="navMain__right navMain__sign"><a href="#">Sign Up</a></li>
</ul>-->