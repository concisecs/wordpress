// r

function admin_default_page() {
  return '/location-after-root-goes-here';
}

add_filter('login_redirect', 'admin_default_page');
