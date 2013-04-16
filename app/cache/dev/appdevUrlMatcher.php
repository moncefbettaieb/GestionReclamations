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
        $pathinfo = rawurldecode($pathinfo);

        // _assetic_b82e02f
        if ($pathinfo === '/css/main.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b82e02f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b82e02f',);
        }

        // _assetic_b82e02f_0
        if ($pathinfo === '/css/main_bootstrap_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b82e02f',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_b82e02f_0',);
        }

        // _assetic_b82e02f_1
        if ($pathinfo === '/css/main_main_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b82e02f',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_b82e02f_1',);
        }

        // _assetic_90defe4
        if ($pathinfo === '/js/main.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '90defe4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_90defe4',);
        }

        // _assetic_90defe4_0
        if ($pathinfo === '/js/main_bootstrap_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '90defe4',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_90defe4_0',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
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

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/client')) {
            // espritclient_accueil
            if ($pathinfo === '/client/acceuil') {
                return array (  '_controller' => 'Esprit\\ClientBundle\\Controller\\ClientController::indexAction',  '_route' => 'espritclient_accueil',);
            }

            // espritclient_voir
            if (0 === strpos($pathinfo, '/client/client') && preg_match('#^/client/client/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\ClientBundle\\Controller\\ClientController::voirAction',)), array('_route' => 'espritclient_voir'));
            }

            // espritclient_ajouter
            if ($pathinfo === '/client/ajouter') {
                return array (  '_controller' => 'Esprit\\ClientBundle\\Controller\\ClientController::ajouterAction',  '_route' => 'espritclient_ajouter',);
            }

            // espritclient_modifier
            if (0 === strpos($pathinfo, '/client/modifier') && preg_match('#^/client/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\ClientBundle\\Controller\\ClientController::modifierAction',)), array('_route' => 'espritclient_modifier'));
            }

            // espritclient_supprimer
            if (0 === strpos($pathinfo, '/client/supprimer') && preg_match('#^/client/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\ClientBundle\\Controller\\ClientController::supprimerAction',)), array('_route' => 'espritclient_supprimer'));
            }

        }

        if (0 === strpos($pathinfo, '/manager')) {
            // espritmanager_accueil
            if ($pathinfo === '/manager/acceuil') {
                return array (  '_controller' => 'Esprit\\MangerBundle\\Controller\\MangerController::indexAction',  '_route' => 'espritmanager_accueil',);
            }

            // espritmanager_voir
            if (0 === strpos($pathinfo, '/manager/manager') && preg_match('#^/manager/manager/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\MangerBundle\\Controller\\MangerController::voirAction',)), array('_route' => 'espritmanager_voir'));
            }

            // espritmanager_ajouter
            if ($pathinfo === '/manager/ajouter') {
                return array (  '_controller' => 'Esprit\\MangerBundle\\Controller\\MangerController::ajouterAction',  '_route' => 'espritmanager_ajouter',);
            }

            // espritmanager_modifier
            if (0 === strpos($pathinfo, '/manager/modifier') && preg_match('#^/manager/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\MangerBundle\\Controller\\MangerController::modifierAction',)), array('_route' => 'espritmanager_modifier'));
            }

            // espritmanager_supprimer
            if (0 === strpos($pathinfo, '/manager/supprimer') && preg_match('#^/manager/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\MangerBundle\\Controller\\MangerController::supprimerAction',)), array('_route' => 'espritmanager_supprimer'));
            }

        }

        if (0 === strpos($pathinfo, '/collaborateur')) {
            // espritcollaborateur_accueil
            if ($pathinfo === '/collaborateur/acceuil') {
                return array (  '_controller' => 'Esprit\\CollaborateurBundle\\Controller\\CollaborateurController::indexAction',  '_route' => 'espritcollaborateur_accueil',);
            }

            // espritcollaborateur_voir
            if (0 === strpos($pathinfo, '/collaborateur/collaborateur') && preg_match('#^/collaborateur/collaborateur/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\CollaborateurBundle\\Controller\\CollaborateurController::voirAction',)), array('_route' => 'espritcollaborateur_voir'));
            }

            // espritcollaborateur_ajouter
            if ($pathinfo === '/collaborateur/ajouter') {
                return array (  '_controller' => 'Esprit\\CollaborateurBundle\\Controller\\CollaborateurController::ajouterAction',  '_route' => 'espritcollaborateur_ajouter',);
            }

            // espritcollaborateur_modifier
            if (0 === strpos($pathinfo, '/collaborateur/modifier') && preg_match('#^/collaborateur/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\CollaborateurBundle\\Controller\\CollaborateurController::modifierAction',)), array('_route' => 'espritcollaborateur_modifier'));
            }

            // espritcollaborateur_supprimer
            if (0 === strpos($pathinfo, '/collaborateur/supprimer') && preg_match('#^/collaborateur/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Esprit\\CollaborateurBundle\\Controller\\CollaborateurController::supprimerAction',)), array('_route' => 'espritcollaborateur_supprimer'));
            }

        }

        // espritadmin_accueil
        if ($pathinfo === '/admin/acceuil') {
            return array (  '_controller' => 'Esprit\\MangerBundle\\Controller\\MangerController::indexAction',  '_route' => 'espritadmin_accueil',);
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
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
