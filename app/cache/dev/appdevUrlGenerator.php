<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'mr_hello' => true,
       'mr_hello_fallback' => true,
       'mr_hello_serializer' => true,
       'mr_hello_facebook' => true,
       'mr_hello_exception' => true,
       'mr_hello_validation_failure' => true,
       'mr_hello_facebook_check' => true,
       'mr_hello_facebook_logout' => true,
       'mr_hello_phpcr' => true,
       'mr_hello_vie_article' => true,
       'mr_hello_hyphenator' => true,
       'mr_hello_custom_handler' => true,
       '_security_logout' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
       'sonata_admin_dashboard' => true,
       'sonata_admin_retrieve_form_element' => true,
       'sonata_admin_append_form_element' => true,
       'sonata_admin_short_object_information' => true,
       'admin_mr_start_mruser_list' => true,
       'admin_mr_start_mruser_create' => true,
       'admin_mr_start_mruser_batch' => true,
       'admin_mr_start_mruser_edit' => true,
       'admin_mr_start_mruser_delete' => true,
       'admin_mr_start_mruser_show' => true,
       'admin_mr_start_mrgroup_list' => true,
       'admin_mr_start_mrgroup_create' => true,
       'admin_mr_start_mrgroup_batch' => true,
       'admin_mr_start_mrgroup_edit' => true,
       'admin_mr_start_mrgroup_delete' => true,
       'admin_mr_start_mrgroup_show' => true,
       'admin_mr_start_mruserstep_list' => true,
       'admin_mr_start_mruserstep_create' => true,
       'admin_mr_start_mruserstep_batch' => true,
       'admin_mr_start_mruserstep_edit' => true,
       'admin_mr_start_mruserstep_delete' => true,
       'admin_mr_start_mruserstep_show' => true,
       'admin_mr_start_mrarea_list' => true,
       'admin_mr_start_mrarea_create' => true,
       'admin_mr_start_mrarea_batch' => true,
       'admin_mr_start_mrarea_edit' => true,
       'admin_mr_start_mrarea_delete' => true,
       'admin_mr_start_mrarea_show' => true,
       'admin_mr_start_mrjob_list' => true,
       'admin_mr_start_mrjob_create' => true,
       'admin_mr_start_mrjob_batch' => true,
       'admin_mr_start_mrjob_edit' => true,
       'admin_mr_start_mrjob_delete' => true,
       'admin_mr_start_mrjob_show' => true,
       'admin_mr_start_mrdiploma_list' => true,
       'admin_mr_start_mrdiploma_create' => true,
       'admin_mr_start_mrdiploma_batch' => true,
       'admin_mr_start_mrdiploma_edit' => true,
       'admin_mr_start_mrdiploma_delete' => true,
       'admin_mr_start_mrdiploma_show' => true,
       'admin_mr_start_mrdiplomatype_list' => true,
       'admin_mr_start_mrdiplomatype_create' => true,
       'admin_mr_start_mrdiplomatype_batch' => true,
       'admin_mr_start_mrdiplomatype_edit' => true,
       'admin_mr_start_mrdiplomatype_delete' => true,
       'admin_mr_start_mrdiplomatype_show' => true,
       'admin_mr_start_mrdiplomalevel_list' => true,
       'admin_mr_start_mrdiplomalevel_create' => true,
       'admin_mr_start_mrdiplomalevel_batch' => true,
       'admin_mr_start_mrdiplomalevel_edit' => true,
       'admin_mr_start_mrdiplomalevel_delete' => true,
       'admin_mr_start_mrdiplomalevel_show' => true,
       'admin_mr_start_mrlocation_list' => true,
       'admin_mr_start_mrlocation_create' => true,
       'admin_mr_start_mrlocation_batch' => true,
       'admin_mr_start_mrlocation_edit' => true,
       'admin_mr_start_mrlocation_delete' => true,
       'admin_mr_start_mrlocation_show' => true,
       'admin_mr_start_mrcity_list' => true,
       'admin_mr_start_mrcity_create' => true,
       'admin_mr_start_mrcity_batch' => true,
       'admin_mr_start_mrcity_edit' => true,
       'admin_mr_start_mrcity_delete' => true,
       'admin_mr_start_mrcity_show' => true,
       'admin_mr_start_mrprovince_list' => true,
       'admin_mr_start_mrprovince_create' => true,
       'admin_mr_start_mrprovince_batch' => true,
       'admin_mr_start_mrprovince_edit' => true,
       'admin_mr_start_mrprovince_delete' => true,
       'admin_mr_start_mrprovince_show' => true,
       'admin_mr_start_mrcountry_list' => true,
       'admin_mr_start_mrcountry_create' => true,
       'admin_mr_start_mrcountry_batch' => true,
       'admin_mr_start_mrcountry_edit' => true,
       'admin_mr_start_mrcountry_delete' => true,
       'admin_mr_start_mrcountry_show' => true,
       'admin_mr_start_mrcontinent_list' => true,
       'admin_mr_start_mrcontinent_create' => true,
       'admin_mr_start_mrcontinent_batch' => true,
       'admin_mr_start_mrcontinent_edit' => true,
       'admin_mr_start_mrcontinent_delete' => true,
       'admin_mr_start_mrcontinent_show' => true,
       'admin_mr_graph_mrmap_list' => true,
       'admin_mr_graph_mrmap_create' => true,
       'admin_mr_graph_mrmap_batch' => true,
       'admin_mr_graph_mrmap_edit' => true,
       'admin_mr_graph_mrmap_delete' => true,
       'admin_mr_graph_mrmap_show' => true,
       'admin_mr_graph_mrgraph_list' => true,
       'admin_mr_graph_mrgraph_create' => true,
       'admin_mr_graph_mrgraph_batch' => true,
       'admin_mr_graph_mrgraph_edit' => true,
       'admin_mr_graph_mrgraph_delete' => true,
       'admin_mr_graph_mrgraph_show' => true,
       'hello' => true,
       'hello_fallback' => true,
       'hello_serializer' => true,
       'hello_facebook' => true,
       'hello_exception' => true,
       'hello_validation_failure' => true,
       'hello_facebook_check' => true,
       'hello_facebook_logout' => true,
       'hello_phpcr' => true,
       '_extra_noname' => true,
       '_extra_name' => true,
       'liip_hello_rest_get_article' => true,
       'liip_hello_rest_post_articles' => true,
       'liip_hello_rest_get_new_articles' => true,
       'liip_hello_rest_get_articles' => true,
       'hello_vie_article' => true,
       'hello_hyphenator' => true,
       'hello_custom_handler' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getmr_helloRouteInfo()
    {
        return array(array (  0 => 'name',  1 => '_format',), array (  '_controller' => 'mr_hello.world.controller:indexAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^\\.]+?',    3 => '_format',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/mr/hello',  ),));
    }

    private function getmr_hello_fallbackRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'mr_hello.world.controller:indexAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/mr/hello',  ),));
    }

    private function getmr_hello_serializerRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'mr_hello.world.controller:serializerAction',  '_format' => 'json',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/mr/serializer',  ),));
    }

    private function getmr_hello_facebookRouteInfo()
    {
        return array(array (), array (  '_controller' => 'mr_hello.world.controller:facebookAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mr/facebook',  ),));
    }

    private function getmr_hello_exceptionRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'mr_hello.world.controller:exceptionAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/mr/exception',  ),));
    }

    private function getmr_hello_validation_failureRouteInfo()
    {
        return array(array (), array (  '_controller' => 'mr_hello.world.controller:validationFailureAction',  '_format' => 'json',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mr/validation_failure.json',  ),));
    }

    private function getmr_hello_facebook_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'mr_hello.world.controller:facebookAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mr/facebook-check',  ),));
    }

    private function getmr_hello_facebook_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'mr_hello.world.controller:facebookAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mr/facebook-logout',  ),));
    }

    private function getmr_hello_phpcrRouteInfo()
    {
        return array(array (  0 => 'title',), array (  '_controller' => 'mr_hello.phpcr.controller:indexAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'title',  ),  1 =>   array (    0 => 'text',    1 => '/mr/phpcr',  ),));
    }

    private function getmr_hello_vie_articleRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'mr_hello.vie.controller:articleAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/mr/hello/vie',  ),));
    }

    private function getmr_hello_hyphenatorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'mr_hello.world.controller:hyphenatorAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mr/hyphenator',  ),));
    }

    private function getmr_hello_custom_handlerRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'mr_hello.world.controller:customHandlerAction',  '_format' => 'rss',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/mr/customHandler',  ),));
    }

    private function get_security_logoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/change-password/change-password',  ),));
    }

    private function getsonata_admin_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/dashboard',  ),));
    }

    private function getsonata_admin_retrieve_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::retrieveFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-form-field-element',  ),));
    }

    private function getsonata_admin_append_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::appendFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/append-form-field-element',  ),));
    }

    private function getsonata_admin_short_object_informationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::getShortObjectDescriptionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-short-object-description',  ),));
    }

    private function getadmin_mr_start_mruser_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruser/list',  ),));
    }

    private function getadmin_mr_start_mruser_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruser/create',  ),));
    }

    private function getadmin_mr_start_mruser_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruser/batch',  ),));
    }

    private function getadmin_mr_start_mruser_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruser',  ),));
    }

    private function getadmin_mr_start_mruser_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruser',  ),));
    }

    private function getadmin_mr_start_mruser_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruser',  ),));
    }

    private function getadmin_mr_start_mrgroup_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrgroup/list',  ),));
    }

    private function getadmin_mr_start_mrgroup_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrgroup/create',  ),));
    }

    private function getadmin_mr_start_mrgroup_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrgroup/batch',  ),));
    }

    private function getadmin_mr_start_mrgroup_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrgroup',  ),));
    }

    private function getadmin_mr_start_mrgroup_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrgroup',  ),));
    }

    private function getadmin_mr_start_mrgroup_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrgroup',  ),));
    }

    private function getadmin_mr_start_mruserstep_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruserstep/list',  ),));
    }

    private function getadmin_mr_start_mruserstep_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruserstep/create',  ),));
    }

    private function getadmin_mr_start_mruserstep_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruserstep/batch',  ),));
    }

    private function getadmin_mr_start_mruserstep_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruserstep',  ),));
    }

    private function getadmin_mr_start_mruserstep_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruserstep',  ),));
    }

    private function getadmin_mr_start_mruserstep_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mruserstep',  ),));
    }

    private function getadmin_mr_start_mrarea_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrarea/list',  ),));
    }

    private function getadmin_mr_start_mrarea_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrarea/create',  ),));
    }

    private function getadmin_mr_start_mrarea_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrarea/batch',  ),));
    }

    private function getadmin_mr_start_mrarea_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrarea',  ),));
    }

    private function getadmin_mr_start_mrarea_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrarea',  ),));
    }

    private function getadmin_mr_start_mrarea_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrarea',  ),));
    }

    private function getadmin_mr_start_mrjob_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrjob/list',  ),));
    }

    private function getadmin_mr_start_mrjob_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrjob/create',  ),));
    }

    private function getadmin_mr_start_mrjob_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrjob/batch',  ),));
    }

    private function getadmin_mr_start_mrjob_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrjob',  ),));
    }

    private function getadmin_mr_start_mrjob_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrjob',  ),));
    }

    private function getadmin_mr_start_mrjob_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrjob',  ),));
    }

    private function getadmin_mr_start_mrdiploma_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiploma/list',  ),));
    }

    private function getadmin_mr_start_mrdiploma_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiploma/create',  ),));
    }

    private function getadmin_mr_start_mrdiploma_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiploma/batch',  ),));
    }

    private function getadmin_mr_start_mrdiploma_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiploma',  ),));
    }

    private function getadmin_mr_start_mrdiploma_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiploma',  ),));
    }

    private function getadmin_mr_start_mrdiploma_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiploma',  ),));
    }

    private function getadmin_mr_start_mrdiplomatype_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomatype/list',  ),));
    }

    private function getadmin_mr_start_mrdiplomatype_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomatype/create',  ),));
    }

    private function getadmin_mr_start_mrdiplomatype_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomatype/batch',  ),));
    }

    private function getadmin_mr_start_mrdiplomatype_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomatype',  ),));
    }

    private function getadmin_mr_start_mrdiplomatype_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomatype',  ),));
    }

    private function getadmin_mr_start_mrdiplomatype_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomatype',  ),));
    }

    private function getadmin_mr_start_mrdiplomalevel_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomalevel/list',  ),));
    }

    private function getadmin_mr_start_mrdiplomalevel_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomalevel/create',  ),));
    }

    private function getadmin_mr_start_mrdiplomalevel_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomalevel/batch',  ),));
    }

    private function getadmin_mr_start_mrdiplomalevel_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomalevel',  ),));
    }

    private function getadmin_mr_start_mrdiplomalevel_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomalevel',  ),));
    }

    private function getadmin_mr_start_mrdiplomalevel_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrdiplomalevel',  ),));
    }

    private function getadmin_mr_start_mrlocation_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrlocation/list',  ),));
    }

    private function getadmin_mr_start_mrlocation_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrlocation/create',  ),));
    }

    private function getadmin_mr_start_mrlocation_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrlocation/batch',  ),));
    }

    private function getadmin_mr_start_mrlocation_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrlocation',  ),));
    }

    private function getadmin_mr_start_mrlocation_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrlocation',  ),));
    }

    private function getadmin_mr_start_mrlocation_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrlocation',  ),));
    }

    private function getadmin_mr_start_mrcity_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcity/list',  ),));
    }

    private function getadmin_mr_start_mrcity_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcity/create',  ),));
    }

    private function getadmin_mr_start_mrcity_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcity/batch',  ),));
    }

    private function getadmin_mr_start_mrcity_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcity',  ),));
    }

    private function getadmin_mr_start_mrcity_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcity',  ),));
    }

    private function getadmin_mr_start_mrcity_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcity',  ),));
    }

    private function getadmin_mr_start_mrprovince_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrprovince/list',  ),));
    }

    private function getadmin_mr_start_mrprovince_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrprovince/create',  ),));
    }

    private function getadmin_mr_start_mrprovince_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrprovince/batch',  ),));
    }

    private function getadmin_mr_start_mrprovince_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrprovince',  ),));
    }

    private function getadmin_mr_start_mrprovince_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrprovince',  ),));
    }

    private function getadmin_mr_start_mrprovince_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrprovince',  ),));
    }

    private function getadmin_mr_start_mrcountry_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcountry/list',  ),));
    }

    private function getadmin_mr_start_mrcountry_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcountry/create',  ),));
    }

    private function getadmin_mr_start_mrcountry_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcountry/batch',  ),));
    }

    private function getadmin_mr_start_mrcountry_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcountry',  ),));
    }

    private function getadmin_mr_start_mrcountry_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcountry',  ),));
    }

    private function getadmin_mr_start_mrcountry_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcountry',  ),));
    }

    private function getadmin_mr_start_mrcontinent_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcontinent/list',  ),));
    }

    private function getadmin_mr_start_mrcontinent_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcontinent/create',  ),));
    }

    private function getadmin_mr_start_mrcontinent_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcontinent/batch',  ),));
    }

    private function getadmin_mr_start_mrcontinent_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcontinent',  ),));
    }

    private function getadmin_mr_start_mrcontinent_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcontinent',  ),));
    }

    private function getadmin_mr_start_mrcontinent_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/start/mrcontinent',  ),));
    }

    private function getadmin_mr_graph_mrmap_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::listAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrmap/list',  ),));
    }

    private function getadmin_mr_graph_mrmap_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::createAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrmap/create',  ),));
    }

    private function getadmin_mr_graph_mrmap_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::batchAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrmap/batch',  ),));
    }

    private function getadmin_mr_graph_mrmap_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::editAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrmap',  ),));
    }

    private function getadmin_mr_graph_mrmap_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::deleteAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrmap',  ),));
    }

    private function getadmin_mr_graph_mrmap_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::showAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrmap',  ),));
    }

    private function getadmin_mr_graph_mrgraph_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::listAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrgraph/list',  ),));
    }

    private function getadmin_mr_graph_mrgraph_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::createAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrgraph/create',  ),));
    }

    private function getadmin_mr_graph_mrgraph_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::batchAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrgraph/batch',  ),));
    }

    private function getadmin_mr_graph_mrgraph_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::editAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrgraph',  ),));
    }

    private function getadmin_mr_graph_mrgraph_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::deleteAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrgraph',  ),));
    }

    private function getadmin_mr_graph_mrgraph_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::showAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/mr/graph/mrgraph',  ),));
    }

    private function gethelloRouteInfo()
    {
        return array(array (  0 => 'name',  1 => '_format',), array (  '_controller' => 'liip_hello.world.controller:indexAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^\\.]+?',    3 => '_format',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/liip/hello',  ),));
    }

    private function gethello_fallbackRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'liip_hello.world.controller:indexAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/liip/hello',  ),));
    }

    private function gethello_serializerRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'liip_hello.world.controller:serializerAction',  '_format' => 'json',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/liip/serializer',  ),));
    }

    private function gethello_facebookRouteInfo()
    {
        return array(array (), array (  '_controller' => 'liip_hello.world.controller:facebookAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'text',    1 => '/liip/facebook',  ),));
    }

    private function gethello_exceptionRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'liip_hello.world.controller:exceptionAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/liip/exception',  ),));
    }

    private function gethello_validation_failureRouteInfo()
    {
        return array(array (), array (  '_controller' => 'liip_hello.world.controller:validationFailureAction',  '_format' => 'json',), array (), array (  0 =>   array (    0 => 'text',    1 => '/liip/validation_failure.json',  ),));
    }

    private function gethello_facebook_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'liip_hello.world.controller:facebookAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'text',    1 => '/liip/facebook-check',  ),));
    }

    private function gethello_facebook_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'liip_hello.world.controller:facebookAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'text',    1 => '/liip/facebook-logout',  ),));
    }

    private function gethello_phpcrRouteInfo()
    {
        return array(array (  0 => 'title',), array (  '_controller' => 'liip_hello.phpcr.controller:indexAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'title',  ),  1 =>   array (    0 => 'text',    1 => '/liip/phpcr',  ),));
    }

    private function get_extra_nonameRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_format' => 'html',  '_controller' => 'liip_hello.extra.controller:indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/liip/extra',  ),));
    }

    private function get_extra_nameRouteInfo()
    {
        return array(array (  0 => 'name',  1 => '_format',), array (  '_format' => 'html',  '_controller' => 'liip_hello.extra.controller:indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^\\.]+?',    3 => '_format',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'name',  ),  2 =>   array (    0 => 'text',    1 => '/liip/extra',  ),));
    }

    private function getliip_hello_rest_get_articleRouteInfo()
    {
        return array(array (  0 => 'article',  1 => '_format',), array (  '_controller' => 'liip_hello.rest.controller:getArticleAction',  '_format' => 'json',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^\\.]+?',    3 => '_format',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'article',  ),  2 =>   array (    0 => 'text',    1 => '/liip/hello/rest/articles',  ),));
    }

    private function getliip_hello_rest_post_articlesRouteInfo()
    {
        return array(array (  0 => 'request',  1 => '_format',), array (  '_controller' => 'liip_hello.rest.controller:postArticlesAction',  '_format' => 'json',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^\\.]+?',    3 => '_format',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'request',  ),  2 =>   array (    0 => 'text',    1 => '/liip/hello/rest/articles',  ),));
    }

    private function getliip_hello_rest_get_new_articlesRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'liip_hello.rest.controller:getNewArticlesAction',  '_format' => 'json',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/liip/hello/rest/new/articles',  ),));
    }

    private function getliip_hello_rest_get_articlesRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'liip_hello.rest.controller:getArticlesAction',  '_format' => 'json',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/liip/hello/rest/articles',  ),));
    }

    private function gethello_vie_articleRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'liip_hello.vie.controller:articleAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/liip/hello/vie',  ),));
    }

    private function gethello_hyphenatorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'liip_hello.world.controller:hyphenatorAction',  '_format' => 'html',), array (), array (  0 =>   array (    0 => 'text',    1 => '/liip/hyphenator',  ),));
    }

    private function gethello_custom_handlerRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'liip_hello.world.controller:customHandlerAction',  '_format' => 'rss',), array (), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/liip/customHandler',  ),));
    }
}
