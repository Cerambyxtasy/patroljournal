<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/8aeb694')) {
                // _assetic_8aeb694
                if ($pathinfo === '/js/8aeb694.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8aeb694',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8aeb694',);
                }

                // _assetic_8aeb694_0
                if ($pathinfo === '/js/8aeb694_part_1_jquery.sprite.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8aeb694',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8aeb694_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/d0910f8')) {
                // _assetic_d0910f8
                if ($pathinfo === '/js/d0910f8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0910f8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d0910f8',);
                }

                // _assetic_d0910f8_0
                if ($pathinfo === '/js/d0910f8_tiny.editor.packed_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0910f8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d0910f8_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/b135e72')) {
                // _assetic_b135e72
                if ($pathinfo === '/js/b135e72.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b135e72',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b135e72',);
                }

                // _assetic_b135e72_0
                if ($pathinfo === '/js/b135e72_part_1_HexagonTools_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b135e72',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b135e72_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/ad439e6')) {
                // _assetic_ad439e6
                if ($pathinfo === '/js/ad439e6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ad439e6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ad439e6',);
                }

                if (0 === strpos($pathinfo, '/js/ad439e6_part_1_')) {
                    // _assetic_ad439e6_0
                    if ($pathinfo === '/js/ad439e6_part_1_Grid_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ad439e6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ad439e6_0',);
                    }

                    // _assetic_ad439e6_1
                    if ($pathinfo === '/js/ad439e6_part_1_HexCalcs_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ad439e6',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ad439e6_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/9cb803f')) {
                // _assetic_9cb803f
                if ($pathinfo === '/js/9cb803f.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9cb803f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9cb803f',);
                }

                if (0 === strpos($pathinfo, '/js/9cb803f_part_1_')) {
                    // _assetic_9cb803f_0
                    if ($pathinfo === '/js/9cb803f_part_1_config_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9cb803f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9cb803f_0',);
                    }

                    // _assetic_9cb803f_1
                    if ($pathinfo === '/js/9cb803f_part_1_listeners_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9cb803f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9cb803f_1',);
                    }

                    // _assetic_9cb803f_2
                    if ($pathinfo === '/js/9cb803f_part_1_plugins_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9cb803f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_9cb803f_2',);
                    }

                    // _assetic_9cb803f_3
                    if ($pathinfo === '/js/9cb803f_part_1_utils_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9cb803f',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_9cb803f_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/33e3f27')) {
                // _assetic_33e3f27
                if ($pathinfo === '/js/33e3f27.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '33e3f27',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_33e3f27',);
                }

                // _assetic_33e3f27_0
                if ($pathinfo === '/js/33e3f27_part_1_main_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '33e3f27',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_33e3f27_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/3e0e169')) {
                // _assetic_3e0e169
                if ($pathinfo === '/css/3e0e169.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3e0e169',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3e0e169',);
                }

                if (0 === strpos($pathinfo, '/css/3e0e169_part_1_')) {
                    // _assetic_3e0e169_0
                    if ($pathinfo === '/css/3e0e169_part_1_ie_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3e0e169',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3e0e169_0',);
                    }

                    // _assetic_3e0e169_1
                    if ($pathinfo === '/css/3e0e169_part_1_main_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3e0e169',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3e0e169_1',);
                    }

                    // _assetic_3e0e169_2
                    if ($pathinfo === '/css/3e0e169_part_1_print_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3e0e169',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_3e0e169_2',);
                    }

                    // _assetic_3e0e169_3
                    if ($pathinfo === '/css/3e0e169_part_1_screen_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3e0e169',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_3e0e169_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/9884273')) {
                // _assetic_9884273
                if ($pathinfo === '/css/9884273.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 9884273,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9884273',);
                }

                // _assetic_9884273_0
                if ($pathinfo === '/css/9884273_part_1_tinyeditor_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 9884273,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9884273_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

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

        // fos_user_registration_register
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // fos_user_registration_check_email
            if ($pathinfo === '/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ($pathinfo === '/confirmed') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // ajax_map_grabber
        if (0 === strpos($pathinfo, '/ajax') && preg_match('#^/ajax/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_map_grabber')), array (  '_controller' => 'Cerambyxtasy\\Oltree\\MainBundle\\Controller\\AjaxController::indexAction',));
        }

        // journal
        if ($pathinfo === '/journal') {
            return array (  '_controller' => 'Cerambyxtasy\\Oltree\\MainBundle\\Controller\\JournalController::indexAction',  '_route' => 'journal',);
        }

        // default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default');
            }

            return array (  '_controller' => 'Cerambyxtasy\\Oltree\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'default',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
