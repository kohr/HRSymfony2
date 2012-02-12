<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // mr_hello
        if (0 === strpos($pathinfo, '/mr/hello') && preg_match('#^/mr/hello/(?P<name>[^/\\.]+?)(?:\\.(?P<_format>[^\\.]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'mr_hello.world.controller:indexAction',  '_format' => 'html',)), array('_route' => 'mr_hello'));
        }

        // mr_hello_fallback
        if (0 === strpos($pathinfo, '/mr/hello') && preg_match('#^/mr/hello(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'mr_hello.world.controller:indexAction',  '_format' => 'html',)), array('_route' => 'mr_hello_fallback'));
        }

        // mr_hello_serializer
        if (0 === strpos($pathinfo, '/mr/serializer') && preg_match('#^/mr/serializer(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'mr_hello.world.controller:serializerAction',  '_format' => 'json',)), array('_route' => 'mr_hello_serializer'));
        }

        // mr_hello_facebook
        if ($pathinfo === '/mr/facebook') {
            return array (  '_controller' => 'mr_hello.world.controller:facebookAction',  '_format' => 'html',  '_route' => 'mr_hello_facebook',);
        }

        // mr_hello_exception
        if (0 === strpos($pathinfo, '/mr/exception') && preg_match('#^/mr/exception(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'mr_hello.world.controller:exceptionAction',  '_format' => 'html',)), array('_route' => 'mr_hello_exception'));
        }

        // mr_hello_validation_failure
        if ($pathinfo === '/mr/validation_failure.json') {
            return array (  '_controller' => 'mr_hello.world.controller:validationFailureAction',  '_format' => 'json',  '_route' => 'mr_hello_validation_failure',);
        }

        // mr_hello_facebook_check
        if ($pathinfo === '/mr/facebook-check') {
            return array (  '_controller' => 'mr_hello.world.controller:facebookAction',  '_format' => 'html',  '_route' => 'mr_hello_facebook_check',);
        }

        // mr_hello_facebook_logout
        if ($pathinfo === '/mr/facebook-logout') {
            return array (  '_controller' => 'mr_hello.world.controller:facebookAction',  '_format' => 'html',  '_route' => 'mr_hello_facebook_logout',);
        }

        // mr_hello_phpcr
        if (0 === strpos($pathinfo, '/mr/phpcr') && preg_match('#^/mr/phpcr/(?P<title>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'mr_hello.phpcr.controller:indexAction',  '_format' => 'html',)), array('_route' => 'mr_hello_phpcr'));
        }

        // mr_hello_vie_article
        if (0 === strpos($pathinfo, '/mr/hello/vie') && preg_match('#^/mr/hello/vie/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'mr_hello.vie.controller:articleAction',  '_format' => 'html',)), array('_route' => 'mr_hello_vie_article'));
        }

        // mr_hello_hyphenator
        if ($pathinfo === '/mr/hyphenator') {
            return array (  '_controller' => 'mr_hello.world.controller:hyphenatorAction',  '_format' => 'html',  '_route' => 'mr_hello_hyphenator',);
        }

        // mr_hello_custom_handler
        if (0 === strpos($pathinfo, '/mr/customHandler') && preg_match('#^/mr/customHandler(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'mr_hello.world.controller:customHandlerAction',  '_format' => 'rss',)), array('_route' => 'mr_hello_custom_handler'));
        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array('_route' => '_security_check');
        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array('_route' => '_security_logout');
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // admin_mr_start_mruser_list
            if ($pathinfo === '/admin/mr/start/mruser/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_list',  '_route' => 'admin_mr_start_mruser_list',);
            }

            // admin_mr_start_mruser_create
            if ($pathinfo === '/admin/mr/start/mruser/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_create',  '_route' => 'admin_mr_start_mruser_create',);
            }

            // admin_mr_start_mruser_batch
            if ($pathinfo === '/admin/mr/start/mruser/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_batch',  '_route' => 'admin_mr_start_mruser_batch',);
            }

            // admin_mr_start_mruser_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mruser') && preg_match('#^/admin/mr/start/mruser/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_edit',)), array('_route' => 'admin_mr_start_mruser_edit'));
            }

            // admin_mr_start_mruser_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mruser') && preg_match('#^/admin/mr/start/mruser/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_delete',)), array('_route' => 'admin_mr_start_mruser_delete'));
            }

            // admin_mr_start_mruser_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mruser') && preg_match('#^/admin/mr/start/mruser/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.user',  '_sonata_name' => 'admin_mr_start_mruser_show',)), array('_route' => 'admin_mr_start_mruser_show'));
            }

            // admin_mr_start_mrgroup_list
            if ($pathinfo === '/admin/mr/start/mrgroup/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_list',  '_route' => 'admin_mr_start_mrgroup_list',);
            }

            // admin_mr_start_mrgroup_create
            if ($pathinfo === '/admin/mr/start/mrgroup/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_create',  '_route' => 'admin_mr_start_mrgroup_create',);
            }

            // admin_mr_start_mrgroup_batch
            if ($pathinfo === '/admin/mr/start/mrgroup/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_batch',  '_route' => 'admin_mr_start_mrgroup_batch',);
            }

            // admin_mr_start_mrgroup_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrgroup') && preg_match('#^/admin/mr/start/mrgroup/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_edit',)), array('_route' => 'admin_mr_start_mrgroup_edit'));
            }

            // admin_mr_start_mrgroup_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrgroup') && preg_match('#^/admin/mr/start/mrgroup/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_delete',)), array('_route' => 'admin_mr_start_mrgroup_delete'));
            }

            // admin_mr_start_mrgroup_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrgroup') && preg_match('#^/admin/mr/start/mrgroup/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrGroupAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.group',  '_sonata_name' => 'admin_mr_start_mrgroup_show',)), array('_route' => 'admin_mr_start_mrgroup_show'));
            }

            // admin_mr_start_mruserstep_list
            if ($pathinfo === '/admin/mr/start/mruserstep/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_list',  '_route' => 'admin_mr_start_mruserstep_list',);
            }

            // admin_mr_start_mruserstep_create
            if ($pathinfo === '/admin/mr/start/mruserstep/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_create',  '_route' => 'admin_mr_start_mruserstep_create',);
            }

            // admin_mr_start_mruserstep_batch
            if ($pathinfo === '/admin/mr/start/mruserstep/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_batch',  '_route' => 'admin_mr_start_mruserstep_batch',);
            }

            // admin_mr_start_mruserstep_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mruserstep') && preg_match('#^/admin/mr/start/mruserstep/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_edit',)), array('_route' => 'admin_mr_start_mruserstep_edit'));
            }

            // admin_mr_start_mruserstep_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mruserstep') && preg_match('#^/admin/mr/start/mruserstep/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_delete',)), array('_route' => 'admin_mr_start_mruserstep_delete'));
            }

            // admin_mr_start_mruserstep_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mruserstep') && preg_match('#^/admin/mr/start/mruserstep/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrUserStepAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.userstep',  '_sonata_name' => 'admin_mr_start_mruserstep_show',)), array('_route' => 'admin_mr_start_mruserstep_show'));
            }

            // admin_mr_start_mrarea_list
            if ($pathinfo === '/admin/mr/start/mrarea/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_list',  '_route' => 'admin_mr_start_mrarea_list',);
            }

            // admin_mr_start_mrarea_create
            if ($pathinfo === '/admin/mr/start/mrarea/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_create',  '_route' => 'admin_mr_start_mrarea_create',);
            }

            // admin_mr_start_mrarea_batch
            if ($pathinfo === '/admin/mr/start/mrarea/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_batch',  '_route' => 'admin_mr_start_mrarea_batch',);
            }

            // admin_mr_start_mrarea_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrarea') && preg_match('#^/admin/mr/start/mrarea/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_edit',)), array('_route' => 'admin_mr_start_mrarea_edit'));
            }

            // admin_mr_start_mrarea_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrarea') && preg_match('#^/admin/mr/start/mrarea/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_delete',)), array('_route' => 'admin_mr_start_mrarea_delete'));
            }

            // admin_mr_start_mrarea_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrarea') && preg_match('#^/admin/mr/start/mrarea/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrAreaAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.area',  '_sonata_name' => 'admin_mr_start_mrarea_show',)), array('_route' => 'admin_mr_start_mrarea_show'));
            }

            // admin_mr_start_mrjob_list
            if ($pathinfo === '/admin/mr/start/mrjob/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_list',  '_route' => 'admin_mr_start_mrjob_list',);
            }

            // admin_mr_start_mrjob_create
            if ($pathinfo === '/admin/mr/start/mrjob/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_create',  '_route' => 'admin_mr_start_mrjob_create',);
            }

            // admin_mr_start_mrjob_batch
            if ($pathinfo === '/admin/mr/start/mrjob/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_batch',  '_route' => 'admin_mr_start_mrjob_batch',);
            }

            // admin_mr_start_mrjob_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrjob') && preg_match('#^/admin/mr/start/mrjob/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_edit',)), array('_route' => 'admin_mr_start_mrjob_edit'));
            }

            // admin_mr_start_mrjob_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrjob') && preg_match('#^/admin/mr/start/mrjob/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_delete',)), array('_route' => 'admin_mr_start_mrjob_delete'));
            }

            // admin_mr_start_mrjob_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrjob') && preg_match('#^/admin/mr/start/mrjob/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrJobAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.job',  '_sonata_name' => 'admin_mr_start_mrjob_show',)), array('_route' => 'admin_mr_start_mrjob_show'));
            }

            // admin_mr_start_mrdiploma_list
            if ($pathinfo === '/admin/mr/start/mrdiploma/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_list',  '_route' => 'admin_mr_start_mrdiploma_list',);
            }

            // admin_mr_start_mrdiploma_create
            if ($pathinfo === '/admin/mr/start/mrdiploma/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_create',  '_route' => 'admin_mr_start_mrdiploma_create',);
            }

            // admin_mr_start_mrdiploma_batch
            if ($pathinfo === '/admin/mr/start/mrdiploma/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_batch',  '_route' => 'admin_mr_start_mrdiploma_batch',);
            }

            // admin_mr_start_mrdiploma_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiploma') && preg_match('#^/admin/mr/start/mrdiploma/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_edit',)), array('_route' => 'admin_mr_start_mrdiploma_edit'));
            }

            // admin_mr_start_mrdiploma_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiploma') && preg_match('#^/admin/mr/start/mrdiploma/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_delete',)), array('_route' => 'admin_mr_start_mrdiploma_delete'));
            }

            // admin_mr_start_mrdiploma_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiploma') && preg_match('#^/admin/mr/start/mrdiploma/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.diploma',  '_sonata_name' => 'admin_mr_start_mrdiploma_show',)), array('_route' => 'admin_mr_start_mrdiploma_show'));
            }

            // admin_mr_start_mrdiplomatype_list
            if ($pathinfo === '/admin/mr/start/mrdiplomatype/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_list',  '_route' => 'admin_mr_start_mrdiplomatype_list',);
            }

            // admin_mr_start_mrdiplomatype_create
            if ($pathinfo === '/admin/mr/start/mrdiplomatype/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_create',  '_route' => 'admin_mr_start_mrdiplomatype_create',);
            }

            // admin_mr_start_mrdiplomatype_batch
            if ($pathinfo === '/admin/mr/start/mrdiplomatype/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_batch',  '_route' => 'admin_mr_start_mrdiplomatype_batch',);
            }

            // admin_mr_start_mrdiplomatype_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiplomatype') && preg_match('#^/admin/mr/start/mrdiplomatype/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_edit',)), array('_route' => 'admin_mr_start_mrdiplomatype_edit'));
            }

            // admin_mr_start_mrdiplomatype_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiplomatype') && preg_match('#^/admin/mr/start/mrdiplomatype/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_delete',)), array('_route' => 'admin_mr_start_mrdiplomatype_delete'));
            }

            // admin_mr_start_mrdiplomatype_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiplomatype') && preg_match('#^/admin/mr/start/mrdiplomatype/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaTypeAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.diplomatype',  '_sonata_name' => 'admin_mr_start_mrdiplomatype_show',)), array('_route' => 'admin_mr_start_mrdiplomatype_show'));
            }

            // admin_mr_start_mrdiplomalevel_list
            if ($pathinfo === '/admin/mr/start/mrdiplomalevel/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_list',  '_route' => 'admin_mr_start_mrdiplomalevel_list',);
            }

            // admin_mr_start_mrdiplomalevel_create
            if ($pathinfo === '/admin/mr/start/mrdiplomalevel/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_create',  '_route' => 'admin_mr_start_mrdiplomalevel_create',);
            }

            // admin_mr_start_mrdiplomalevel_batch
            if ($pathinfo === '/admin/mr/start/mrdiplomalevel/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_batch',  '_route' => 'admin_mr_start_mrdiplomalevel_batch',);
            }

            // admin_mr_start_mrdiplomalevel_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiplomalevel') && preg_match('#^/admin/mr/start/mrdiplomalevel/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_edit',)), array('_route' => 'admin_mr_start_mrdiplomalevel_edit'));
            }

            // admin_mr_start_mrdiplomalevel_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiplomalevel') && preg_match('#^/admin/mr/start/mrdiplomalevel/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_delete',)), array('_route' => 'admin_mr_start_mrdiplomalevel_delete'));
            }

            // admin_mr_start_mrdiplomalevel_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrdiplomalevel') && preg_match('#^/admin/mr/start/mrdiplomalevel/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrDiplomaLevelAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.diplomalevel',  '_sonata_name' => 'admin_mr_start_mrdiplomalevel_show',)), array('_route' => 'admin_mr_start_mrdiplomalevel_show'));
            }

            // admin_mr_start_mrlocation_list
            if ($pathinfo === '/admin/mr/start/mrlocation/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_list',  '_route' => 'admin_mr_start_mrlocation_list',);
            }

            // admin_mr_start_mrlocation_create
            if ($pathinfo === '/admin/mr/start/mrlocation/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_create',  '_route' => 'admin_mr_start_mrlocation_create',);
            }

            // admin_mr_start_mrlocation_batch
            if ($pathinfo === '/admin/mr/start/mrlocation/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_batch',  '_route' => 'admin_mr_start_mrlocation_batch',);
            }

            // admin_mr_start_mrlocation_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrlocation') && preg_match('#^/admin/mr/start/mrlocation/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_edit',)), array('_route' => 'admin_mr_start_mrlocation_edit'));
            }

            // admin_mr_start_mrlocation_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrlocation') && preg_match('#^/admin/mr/start/mrlocation/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_delete',)), array('_route' => 'admin_mr_start_mrlocation_delete'));
            }

            // admin_mr_start_mrlocation_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrlocation') && preg_match('#^/admin/mr/start/mrlocation/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrLocationAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.location',  '_sonata_name' => 'admin_mr_start_mrlocation_show',)), array('_route' => 'admin_mr_start_mrlocation_show'));
            }

            // admin_mr_start_mrcity_list
            if ($pathinfo === '/admin/mr/start/mrcity/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_list',  '_route' => 'admin_mr_start_mrcity_list',);
            }

            // admin_mr_start_mrcity_create
            if ($pathinfo === '/admin/mr/start/mrcity/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_create',  '_route' => 'admin_mr_start_mrcity_create',);
            }

            // admin_mr_start_mrcity_batch
            if ($pathinfo === '/admin/mr/start/mrcity/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_batch',  '_route' => 'admin_mr_start_mrcity_batch',);
            }

            // admin_mr_start_mrcity_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcity') && preg_match('#^/admin/mr/start/mrcity/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_edit',)), array('_route' => 'admin_mr_start_mrcity_edit'));
            }

            // admin_mr_start_mrcity_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcity') && preg_match('#^/admin/mr/start/mrcity/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_delete',)), array('_route' => 'admin_mr_start_mrcity_delete'));
            }

            // admin_mr_start_mrcity_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcity') && preg_match('#^/admin/mr/start/mrcity/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCityAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.city',  '_sonata_name' => 'admin_mr_start_mrcity_show',)), array('_route' => 'admin_mr_start_mrcity_show'));
            }

            // admin_mr_start_mrprovince_list
            if ($pathinfo === '/admin/mr/start/mrprovince/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_list',  '_route' => 'admin_mr_start_mrprovince_list',);
            }

            // admin_mr_start_mrprovince_create
            if ($pathinfo === '/admin/mr/start/mrprovince/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_create',  '_route' => 'admin_mr_start_mrprovince_create',);
            }

            // admin_mr_start_mrprovince_batch
            if ($pathinfo === '/admin/mr/start/mrprovince/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_batch',  '_route' => 'admin_mr_start_mrprovince_batch',);
            }

            // admin_mr_start_mrprovince_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrprovince') && preg_match('#^/admin/mr/start/mrprovince/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_edit',)), array('_route' => 'admin_mr_start_mrprovince_edit'));
            }

            // admin_mr_start_mrprovince_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrprovince') && preg_match('#^/admin/mr/start/mrprovince/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_delete',)), array('_route' => 'admin_mr_start_mrprovince_delete'));
            }

            // admin_mr_start_mrprovince_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrprovince') && preg_match('#^/admin/mr/start/mrprovince/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrProvinceAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.province',  '_sonata_name' => 'admin_mr_start_mrprovince_show',)), array('_route' => 'admin_mr_start_mrprovince_show'));
            }

            // admin_mr_start_mrcountry_list
            if ($pathinfo === '/admin/mr/start/mrcountry/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_list',  '_route' => 'admin_mr_start_mrcountry_list',);
            }

            // admin_mr_start_mrcountry_create
            if ($pathinfo === '/admin/mr/start/mrcountry/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_create',  '_route' => 'admin_mr_start_mrcountry_create',);
            }

            // admin_mr_start_mrcountry_batch
            if ($pathinfo === '/admin/mr/start/mrcountry/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_batch',  '_route' => 'admin_mr_start_mrcountry_batch',);
            }

            // admin_mr_start_mrcountry_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcountry') && preg_match('#^/admin/mr/start/mrcountry/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_edit',)), array('_route' => 'admin_mr_start_mrcountry_edit'));
            }

            // admin_mr_start_mrcountry_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcountry') && preg_match('#^/admin/mr/start/mrcountry/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_delete',)), array('_route' => 'admin_mr_start_mrcountry_delete'));
            }

            // admin_mr_start_mrcountry_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcountry') && preg_match('#^/admin/mr/start/mrcountry/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrCountryAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.country',  '_sonata_name' => 'admin_mr_start_mrcountry_show',)), array('_route' => 'admin_mr_start_mrcountry_show'));
            }

            // admin_mr_start_mrcontinent_list
            if ($pathinfo === '/admin/mr/start/mrcontinent/list') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::listAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_list',  '_route' => 'admin_mr_start_mrcontinent_list',);
            }

            // admin_mr_start_mrcontinent_create
            if ($pathinfo === '/admin/mr/start/mrcontinent/create') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::createAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_create',  '_route' => 'admin_mr_start_mrcontinent_create',);
            }

            // admin_mr_start_mrcontinent_batch
            if ($pathinfo === '/admin/mr/start/mrcontinent/batch') {
                return array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::batchAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_batch',  '_route' => 'admin_mr_start_mrcontinent_batch',);
            }

            // admin_mr_start_mrcontinent_edit
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcontinent') && preg_match('#^/admin/mr/start/mrcontinent/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::editAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_edit',)), array('_route' => 'admin_mr_start_mrcontinent_edit'));
            }

            // admin_mr_start_mrcontinent_delete
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcontinent') && preg_match('#^/admin/mr/start/mrcontinent/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::deleteAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_delete',)), array('_route' => 'admin_mr_start_mrcontinent_delete'));
            }

            // admin_mr_start_mrcontinent_show
            if (0 === strpos($pathinfo, '/admin/mr/start/mrcontinent') && preg_match('#^/admin/mr/start/mrcontinent/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\StartBundle\\Controller\\MrContinentAdminController::showAction',  '_sonata_admin' => 'mr.start.admin.continent',  '_sonata_name' => 'admin_mr_start_mrcontinent_show',)), array('_route' => 'admin_mr_start_mrcontinent_show'));
            }

            // admin_mr_graph_mrmap_list
            if ($pathinfo === '/admin/mr/graph/mrmap/list') {
                return array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::listAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_list',  '_route' => 'admin_mr_graph_mrmap_list',);
            }

            // admin_mr_graph_mrmap_create
            if ($pathinfo === '/admin/mr/graph/mrmap/create') {
                return array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::createAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_create',  '_route' => 'admin_mr_graph_mrmap_create',);
            }

            // admin_mr_graph_mrmap_batch
            if ($pathinfo === '/admin/mr/graph/mrmap/batch') {
                return array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::batchAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_batch',  '_route' => 'admin_mr_graph_mrmap_batch',);
            }

            // admin_mr_graph_mrmap_edit
            if (0 === strpos($pathinfo, '/admin/mr/graph/mrmap') && preg_match('#^/admin/mr/graph/mrmap/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::editAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_edit',)), array('_route' => 'admin_mr_graph_mrmap_edit'));
            }

            // admin_mr_graph_mrmap_delete
            if (0 === strpos($pathinfo, '/admin/mr/graph/mrmap') && preg_match('#^/admin/mr/graph/mrmap/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::deleteAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_delete',)), array('_route' => 'admin_mr_graph_mrmap_delete'));
            }

            // admin_mr_graph_mrmap_show
            if (0 === strpos($pathinfo, '/admin/mr/graph/mrmap') && preg_match('#^/admin/mr/graph/mrmap/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrMapAdminController::showAction',  '_sonata_admin' => 'mr.graph.admin.map',  '_sonata_name' => 'admin_mr_graph_mrmap_show',)), array('_route' => 'admin_mr_graph_mrmap_show'));
            }

            // admin_mr_graph_mrgraph_list
            if ($pathinfo === '/admin/mr/graph/mrgraph/list') {
                return array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::listAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_list',  '_route' => 'admin_mr_graph_mrgraph_list',);
            }

            // admin_mr_graph_mrgraph_create
            if ($pathinfo === '/admin/mr/graph/mrgraph/create') {
                return array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::createAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_create',  '_route' => 'admin_mr_graph_mrgraph_create',);
            }

            // admin_mr_graph_mrgraph_batch
            if ($pathinfo === '/admin/mr/graph/mrgraph/batch') {
                return array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::batchAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_batch',  '_route' => 'admin_mr_graph_mrgraph_batch',);
            }

            // admin_mr_graph_mrgraph_edit
            if (0 === strpos($pathinfo, '/admin/mr/graph/mrgraph') && preg_match('#^/admin/mr/graph/mrgraph/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::editAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_edit',)), array('_route' => 'admin_mr_graph_mrgraph_edit'));
            }

            // admin_mr_graph_mrgraph_delete
            if (0 === strpos($pathinfo, '/admin/mr/graph/mrgraph') && preg_match('#^/admin/mr/graph/mrgraph/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::deleteAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_delete',)), array('_route' => 'admin_mr_graph_mrgraph_delete'));
            }

            // admin_mr_graph_mrgraph_show
            if (0 === strpos($pathinfo, '/admin/mr/graph/mrgraph') && preg_match('#^/admin/mr/graph/mrgraph/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mr\\GraphBundle\\Controller\\MrGraphAdminController::showAction',  '_sonata_admin' => 'mr.graph.admin.graph',  '_sonata_name' => 'admin_mr_graph_mrgraph_show',)), array('_route' => 'admin_mr_graph_mrgraph_show'));
            }

        }

        // hello
        if (0 === strpos($pathinfo, '/liip/hello') && preg_match('#^/liip/hello/(?P<name>[^/\\.]+?)(?:\\.(?P<_format>[^\\.]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.world.controller:indexAction',  '_format' => 'html',)), array('_route' => 'hello'));
        }

        // hello_fallback
        if (0 === strpos($pathinfo, '/liip/hello') && preg_match('#^/liip/hello(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.world.controller:indexAction',  '_format' => 'html',)), array('_route' => 'hello_fallback'));
        }

        // hello_serializer
        if (0 === strpos($pathinfo, '/liip/serializer') && preg_match('#^/liip/serializer(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.world.controller:serializerAction',  '_format' => 'json',)), array('_route' => 'hello_serializer'));
        }

        // hello_facebook
        if ($pathinfo === '/liip/facebook') {
            return array (  '_controller' => 'liip_hello.world.controller:facebookAction',  '_format' => 'html',  '_route' => 'hello_facebook',);
        }

        // hello_exception
        if (0 === strpos($pathinfo, '/liip/exception') && preg_match('#^/liip/exception(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.world.controller:exceptionAction',  '_format' => 'html',)), array('_route' => 'hello_exception'));
        }

        // hello_validation_failure
        if ($pathinfo === '/liip/validation_failure.json') {
            return array (  '_controller' => 'liip_hello.world.controller:validationFailureAction',  '_format' => 'json',  '_route' => 'hello_validation_failure',);
        }

        // hello_facebook_check
        if ($pathinfo === '/liip/facebook-check') {
            return array (  '_controller' => 'liip_hello.world.controller:facebookAction',  '_format' => 'html',  '_route' => 'hello_facebook_check',);
        }

        // hello_facebook_logout
        if ($pathinfo === '/liip/facebook-logout') {
            return array (  '_controller' => 'liip_hello.world.controller:facebookAction',  '_format' => 'html',  '_route' => 'hello_facebook_logout',);
        }

        // hello_phpcr
        if (0 === strpos($pathinfo, '/liip/phpcr') && preg_match('#^/liip/phpcr/(?P<title>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.phpcr.controller:indexAction',  '_format' => 'html',)), array('_route' => 'hello_phpcr'));
        }

        // _extra_noname
        if (0 === strpos($pathinfo, '/liip/extra') && preg_match('#^/liip/extra(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_format' => 'html',  '_controller' => 'liip_hello.extra.controller:indexAction',)), array('_route' => '_extra_noname'));
        }

        // _extra_name
        if (0 === strpos($pathinfo, '/liip/extra') && preg_match('#^/liip/extra/(?P<name>[^/\\.]+?)(?:\\.(?P<_format>[^\\.]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_format' => 'html',  '_controller' => 'liip_hello.extra.controller:indexAction',)), array('_route' => '_extra_name'));
        }

        // liip_hello_rest_get_article
        if (0 === strpos($pathinfo, '/liip/hello/rest/articles') && preg_match('#^/liip/hello/rest/articles/(?P<article>[^/\\.]+?)(?:\\.(?P<_format>[^\\.]+?))?$#x', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_liip_hello_rest_get_article;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.rest.controller:getArticleAction',  '_format' => 'json',)), array('_route' => 'liip_hello_rest_get_article'));
        }
        not_liip_hello_rest_get_article:

        // liip_hello_rest_post_articles
        if (0 === strpos($pathinfo, '/liip/hello/rest/articles') && preg_match('#^/liip/hello/rest/articles/(?P<request>[^/\\.]+?)(?:\\.(?P<_format>[^\\.]+?))?$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_liip_hello_rest_post_articles;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.rest.controller:postArticlesAction',  '_format' => 'json',)), array('_route' => 'liip_hello_rest_post_articles'));
        }
        not_liip_hello_rest_post_articles:

        // liip_hello_rest_get_new_articles
        if (0 === strpos($pathinfo, '/liip/hello/rest/new/articles') && preg_match('#^/liip/hello/rest/new/articles(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_liip_hello_rest_get_new_articles;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.rest.controller:getNewArticlesAction',  '_format' => 'json',)), array('_route' => 'liip_hello_rest_get_new_articles'));
        }
        not_liip_hello_rest_get_new_articles:

        // liip_hello_rest_get_articles
        if (0 === strpos($pathinfo, '/liip/hello/rest/articles') && preg_match('#^/liip/hello/rest/articles(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_liip_hello_rest_get_articles;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.rest.controller:getArticlesAction',  '_format' => 'json',)), array('_route' => 'liip_hello_rest_get_articles'));
        }
        not_liip_hello_rest_get_articles:

        // hello_vie_article
        if (0 === strpos($pathinfo, '/liip/hello/vie') && preg_match('#^/liip/hello/vie/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.vie.controller:articleAction',  '_format' => 'html',)), array('_route' => 'hello_vie_article'));
        }

        // hello_hyphenator
        if ($pathinfo === '/liip/hyphenator') {
            return array (  '_controller' => 'liip_hello.world.controller:hyphenatorAction',  '_format' => 'html',  '_route' => 'hello_hyphenator',);
        }

        // hello_custom_handler
        if (0 === strpos($pathinfo, '/liip/customHandler') && preg_match('#^/liip/customHandler(?:\\.(?P<_format>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_hello.world.controller:customHandlerAction',  '_format' => 'rss',)), array('_route' => 'hello_custom_handler'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
