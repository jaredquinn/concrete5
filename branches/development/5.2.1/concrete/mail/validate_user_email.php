<?

defined('C5_EXECUTE') or die(_("Access Denied."));

$from = array('info@concrete5.org', t('Validate Email Address'));
$subject = SITE . " " . t("Registration - Validate Email Address");
$body = t("

You must click the following URL in order to activate your account for %s:

%s 

Thanks for your interest in %s

", SITE, BASE_URL . DIR_REL . View::url('/login', 'v', $uHash), SITE);

?>