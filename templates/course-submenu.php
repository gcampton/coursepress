<?php
/**
 * Course submenu template.
 *
 * @since 3.0
 * @package CoursePress
 */
?>
<div class="submenu-main-container course-submenu-container">
	<ul id="submenu-main" class="submenu course-submenu">
<?php
$menu = coursepress_get_course_submenu();
if ( $menu ) {
        foreach ( $menu as $menu_id => $menu_item ) {
?>
			<li class="<?php echo esc_attr( implode( ' ', $menu_item['classes'] ) ); ?>">
				<a href="<?php echo esc_url( $menu_item['url'] ); ?>"><?php echo esc_html( $menu_item['label'] ); ?></a>
			</li>
<?php
        }
}
?>
	</ul>
</div>
