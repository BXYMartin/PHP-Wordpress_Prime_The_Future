<?php

/* Clean WordPress
---------------------------------------------------------------------------------------------------- */

require_once(get_template_directory() . '/functions/wordpress-setup.php');

/* Enqueue
---------------------------------------------------------------------------------------------------- */

require_once(get_template_directory() . '/functions/enqueue-styles.php');
require_once(get_template_directory() . '/functions/enqueue-scripts.php');


/* Widgets
---------------------------------------------------------------------------------------------------- */

require_once(get_template_directory() . '/functions/widgets.php');


/* Menus
---------------------------------------------------------------------------------------------------- */

require_once(get_template_directory() . '/functions/menus.php');


/* Navigation
---------------------------------------------------------------------------------------------------- */

require_once(get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php');


/* Comments
---------------------------------------------------------------------------------------------------- */

require_once(get_template_directory() . '/functions/class-wp-comment-walker.php');