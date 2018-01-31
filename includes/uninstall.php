<?php
/**
 * Delete various options when uninstalling the plugin.
 *
 * @return void
 */
function tmp_admin_user_uninstall() {

	// Include our action so that we may add to this later.
	do_action( 'tmp_admin_user_uninstall_process' );

	// And flush our rewrite rules.
	flush_rewrite_rules();
}
register_uninstall_hook( TMP_ADMIN_USER_FILE, 'tmp_admin_user_uninstall' );

