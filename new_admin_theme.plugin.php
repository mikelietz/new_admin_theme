<?php

class NewAdminThemePlugin extends Plugin
{
	public function filter_admin_theme_dir( $theme_dir )
	{
		$theme_dir = dirname( __FILE__ ) . '/admin/';
		return $theme_dir;
	}

	public function filter_site_url_admin_theme( $url )
	{
		// Replace the system portion in the url with the plugin directory (without trailing slash).
		return str_replace( Site::get_url( 'system' ), $this->get_url(false), $url );
	}
}
?>
