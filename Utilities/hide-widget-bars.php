/**
 * Hide the dashboard widgets wrap.
 */
function wpturbo_hide_dashboard_widgets() {
    echo '<style>#dashboard-widgets-wrap { display: none !important; }</style>';
}
add_action('admin_head', 'wpturbo_hide_dashboard_widgets');