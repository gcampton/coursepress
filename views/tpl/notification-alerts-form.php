<script type="text/template" id="coursepress-notification-alerts-form-tpl">

	<div class="cp-flex cp-box">
		<input type="hidden" name="alert_id" id="alert-id">

		<div class="cp-div">
			<h3 class="label"><?php esc_html_e( 'Select a course to display an alert on', 'cp' ); ?></h3>
			<label class="label label-small"><?php esc_html_e( 'Pick course', 'cp' ); ?></label>
			<select name="course" id="cp-alert-course">
				<option value="all"><?php esc_html_e( 'All Courses', 'cp' ); ?></option>
				<?php if ( ! empty( $courses ) ) : ?>
					<?php foreach ( $courses as $course ) : ?>
						<?php if ( CoursePress_Data_Capabilities::can_add_notification( $course->ID ) ) : ?>
							<option value="<?php echo esc_attr( $course->ID ); ?>"><?php echo esc_html( $course->post_title ); ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</select>
		</div>
	</div>

	<div class="cp-flex cp-box">
		<div class="cp-div inactive" id="cp-receivers-div">
			<label class="label label-small"><?php esc_html_e( 'Receivers', 'cp' ); ?></label>
			<select name="receivers" id="cp-alert-receivers">
				<option value="enrolled"><?php esc_html_e( 'Enrolled students of this course', 'cp' ); ?></option>
				<option value="passed"><?php esc_html_e( 'All students who pass this course', 'cp' ); ?></option>
				<option value="failed"><?php esc_html_e( 'All students who failed this course', 'cp' ); ?></option>
			</select>
		</div>
	</div>

	<div class="cp-box-content">
		<div class="box-label-area">
			<div class="cp-div">
				<label class="label"><?php esc_html_e( 'Alert title', 'cp' ); ?></label>
			</div>
		</div>
		<div class="box-inner-content">
			<input type="text" class="widefat" name="alert_title" id="alert-title" required="required">
		</div>
	</div>

	<div class="cp-box-content">
		<div class="box-label-area">
			<div class="cp-div">
				<label class="label"><?php esc_html_e( 'Alert body', 'cp' ); ?></label>
			</div>
		</div>
		<div class="box-inner-content">
			<div id="alert_content"></div>
		</div>
	</div>

	<div class="course-footer">
		<button type="button" class="cp-btn cp-btn-cancel cp-alert-cancel" data-page="alerts" data-tab="alerts"><?php esc_html_e( 'Cancel', 'cp' ); ?></button>
		<button type="button" class="cp-btn cp-btn-active cp-alert-submit"><i class="fa fa-circle-o-notch fa-spin"></i><?php esc_html_e( 'Publish', 'cp' ); ?></button>
	</div>

</script>
