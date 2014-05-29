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
        $context = $this->context;
        $request = $this->request;

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

        // chapeau
        if ($pathinfo === '/AsblSoleil') {
            return array (  '_controller' => 'emh\\cmsPrincipalBundle\\Controller\\RubriqueController::chapeauAction',  '_route' => 'chapeau',);
        }

        // emh_dons_homepage
        if (0 === strpos($pathinfo, '/dons/hello') && preg_match('#^/dons/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_dons_homepage')), array (  '_controller' => 'emhDonsBundle:Default:index',));
        }

        // emh_agenda_homepage
        if (preg_match('#^/(?P<slug>[^/]++)/agenda/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_agenda_homepage')), array (  '_controller' => 'emhAgendaBundle:Default:index',));
        }

        // emh_ecommerce_liste_produits
        if (preg_match('#^/(?P<slug>[^/]++)/produit/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'emh_ecommerce_liste_produits');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_ecommerce_liste_produits')), array (  '_controller' => 'emh\\EcommerceBundle\\Controller\\ProduitController::listeAction',));
        }

        // emh_ecommerce_detail_produit
        if (preg_match('#^/(?P<slug>[^/]++)/produit/produit/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_ecommerce_detail_produit')), array (  '_controller' => 'emh\\EcommerceBundle\\Controller\\ProduitController::detailAction',));
        }

        // emh_membres_achat
        if (preg_match('#^/(?P<slug>[^/]++)/produit/achat/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_membres_achat')), array (  '_controller' => 'emh\\EcommerceBundle\\Controller\\AchatController::addAction',));
        }

        // emh_membres_delachat
        if (preg_match('#^/(?P<slug>[^/]++)/produit/rendre/poduit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_membres_delachat')), array (  '_controller' => 'emhEcommerceBundle:Achat::delete',));
        }

        // emh_formation
        if (preg_match('#^/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'emh_formation');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_formation')), array (  '_controller' => 'emh\\InscriptionBundle\\Controller\\FormationController::listeAction',));
        }

        // emh_formation_detail
        if (preg_match('#^/(?P<slug>[^/]++)/formation/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_formation_detail')), array (  '_controller' => 'emh\\InscriptionBundle\\Controller\\FormationController::detailAction',));
        }

        // emh_membres_inscription
        if (preg_match('#^/(?P<slug>[^/]++)/inscription/formation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_membres_inscription')), array (  '_controller' => 'emh\\InscriptionBundle\\Controller\\InscriptionController::addAction',));
        }

        // emh_membres_desinscription
        if (preg_match('#^/(?P<slug>[^/]++)/desinscription/formation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_membres_desinscription')), array (  '_controller' => 'emhInscriptionBundle:Inscription::delete',));
        }

        // emh_membres_profil
        if (preg_match('#^/(?P<slug>[^/]++)/membre/profile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emh_membres_profil')), array (  '_controller' => 'emh\\MembresBundle\\Controller\\MembreController::testAction',));
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

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
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

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/emh')) {
                if (0 === strpos($pathinfo, '/admin/emh/membres/membres')) {
                    // admin_emh_membres_membres_list
                    if ($pathinfo === '/admin/emh/membres/membres/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.membres',  '_sonata_name' => 'admin_emh_membres_membres_list',  '_route' => 'admin_emh_membres_membres_list',);
                    }

                    // admin_emh_membres_membres_create
                    if ($pathinfo === '/admin/emh/membres/membres/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.membres',  '_sonata_name' => 'admin_emh_membres_membres_create',  '_route' => 'admin_emh_membres_membres_create',);
                    }

                    // admin_emh_membres_membres_batch
                    if ($pathinfo === '/admin/emh/membres/membres/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.membres',  '_sonata_name' => 'admin_emh_membres_membres_batch',  '_route' => 'admin_emh_membres_membres_batch',);
                    }

                    // admin_emh_membres_membres_edit
                    if (preg_match('#^/admin/emh/membres/membres/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_membres_membres_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.membres',  '_sonata_name' => 'admin_emh_membres_membres_edit',));
                    }

                    // admin_emh_membres_membres_delete
                    if (preg_match('#^/admin/emh/membres/membres/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_membres_membres_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.membres',  '_sonata_name' => 'admin_emh_membres_membres_delete',));
                    }

                    // admin_emh_membres_membres_show
                    if (preg_match('#^/admin/emh/membres/membres/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_membres_membres_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.membres',  '_sonata_name' => 'admin_emh_membres_membres_show',));
                    }

                    // admin_emh_membres_membres_export
                    if ($pathinfo === '/admin/emh/membres/membres/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.membres',  '_sonata_name' => 'admin_emh_membres_membres_export',  '_route' => 'admin_emh_membres_membres_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/emh/cmsprincipal')) {
                    if (0 === strpos($pathinfo, '/admin/emh/cmsprincipal/rubriques')) {
                        // admin_emh_cmsprincipal_rubriques_list
                        if ($pathinfo === '/admin/emh/cmsprincipal/rubriques/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_emh_cmsprincipal_rubriques_list',  '_route' => 'admin_emh_cmsprincipal_rubriques_list',);
                        }

                        // admin_emh_cmsprincipal_rubriques_create
                        if ($pathinfo === '/admin/emh/cmsprincipal/rubriques/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_emh_cmsprincipal_rubriques_create',  '_route' => 'admin_emh_cmsprincipal_rubriques_create',);
                        }

                        // admin_emh_cmsprincipal_rubriques_batch
                        if ($pathinfo === '/admin/emh/cmsprincipal/rubriques/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_emh_cmsprincipal_rubriques_batch',  '_route' => 'admin_emh_cmsprincipal_rubriques_batch',);
                        }

                        // admin_emh_cmsprincipal_rubriques_edit
                        if (preg_match('#^/admin/emh/cmsprincipal/rubriques/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_cmsprincipal_rubriques_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_emh_cmsprincipal_rubriques_edit',));
                        }

                        // admin_emh_cmsprincipal_rubriques_delete
                        if (preg_match('#^/admin/emh/cmsprincipal/rubriques/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_cmsprincipal_rubriques_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_emh_cmsprincipal_rubriques_delete',));
                        }

                        // admin_emh_cmsprincipal_rubriques_show
                        if (preg_match('#^/admin/emh/cmsprincipal/rubriques/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_cmsprincipal_rubriques_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_emh_cmsprincipal_rubriques_show',));
                        }

                        // admin_emh_cmsprincipal_rubriques_export
                        if ($pathinfo === '/admin/emh/cmsprincipal/rubriques/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_emh_cmsprincipal_rubriques_export',  '_route' => 'admin_emh_cmsprincipal_rubriques_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/emh/cmsprincipal/articles')) {
                        // admin_emh_cmsprincipal_articles_list
                        if ($pathinfo === '/admin/emh/cmsprincipal/articles/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_emh_cmsprincipal_articles_list',  '_route' => 'admin_emh_cmsprincipal_articles_list',);
                        }

                        // admin_emh_cmsprincipal_articles_create
                        if ($pathinfo === '/admin/emh/cmsprincipal/articles/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_emh_cmsprincipal_articles_create',  '_route' => 'admin_emh_cmsprincipal_articles_create',);
                        }

                        // admin_emh_cmsprincipal_articles_batch
                        if ($pathinfo === '/admin/emh/cmsprincipal/articles/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_emh_cmsprincipal_articles_batch',  '_route' => 'admin_emh_cmsprincipal_articles_batch',);
                        }

                        // admin_emh_cmsprincipal_articles_edit
                        if (preg_match('#^/admin/emh/cmsprincipal/articles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_cmsprincipal_articles_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_emh_cmsprincipal_articles_edit',));
                        }

                        // admin_emh_cmsprincipal_articles_delete
                        if (preg_match('#^/admin/emh/cmsprincipal/articles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_cmsprincipal_articles_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_emh_cmsprincipal_articles_delete',));
                        }

                        // admin_emh_cmsprincipal_articles_show
                        if (preg_match('#^/admin/emh/cmsprincipal/articles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_cmsprincipal_articles_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_emh_cmsprincipal_articles_show',));
                        }

                        // admin_emh_cmsprincipal_articles_export
                        if ($pathinfo === '/admin/emh/cmsprincipal/articles/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_emh_cmsprincipal_articles_export',  '_route' => 'admin_emh_cmsprincipal_articles_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/emh/inscription')) {
                    if (0 === strpos($pathinfo, '/admin/emh/inscription/formationsateliers')) {
                        // admin_emh_inscription_formationsateliers_list
                        if ($pathinfo === '/admin/emh/inscription/formationsateliers/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.formation',  '_sonata_name' => 'admin_emh_inscription_formationsateliers_list',  '_route' => 'admin_emh_inscription_formationsateliers_list',);
                        }

                        // admin_emh_inscription_formationsateliers_create
                        if ($pathinfo === '/admin/emh/inscription/formationsateliers/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.formation',  '_sonata_name' => 'admin_emh_inscription_formationsateliers_create',  '_route' => 'admin_emh_inscription_formationsateliers_create',);
                        }

                        // admin_emh_inscription_formationsateliers_batch
                        if ($pathinfo === '/admin/emh/inscription/formationsateliers/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.formation',  '_sonata_name' => 'admin_emh_inscription_formationsateliers_batch',  '_route' => 'admin_emh_inscription_formationsateliers_batch',);
                        }

                        // admin_emh_inscription_formationsateliers_edit
                        if (preg_match('#^/admin/emh/inscription/formationsateliers/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_inscription_formationsateliers_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.formation',  '_sonata_name' => 'admin_emh_inscription_formationsateliers_edit',));
                        }

                        // admin_emh_inscription_formationsateliers_delete
                        if (preg_match('#^/admin/emh/inscription/formationsateliers/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_inscription_formationsateliers_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.formation',  '_sonata_name' => 'admin_emh_inscription_formationsateliers_delete',));
                        }

                        // admin_emh_inscription_formationsateliers_show
                        if (preg_match('#^/admin/emh/inscription/formationsateliers/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_inscription_formationsateliers_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.formation',  '_sonata_name' => 'admin_emh_inscription_formationsateliers_show',));
                        }

                        // admin_emh_inscription_formationsateliers_export
                        if ($pathinfo === '/admin/emh/inscription/formationsateliers/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.formation',  '_sonata_name' => 'admin_emh_inscription_formationsateliers_export',  '_route' => 'admin_emh_inscription_formationsateliers_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/emh/inscription/inscriptions')) {
                        // admin_emh_inscription_inscriptions_list
                        if ($pathinfo === '/admin/emh/inscription/inscriptions/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.inscriptions',  '_sonata_name' => 'admin_emh_inscription_inscriptions_list',  '_route' => 'admin_emh_inscription_inscriptions_list',);
                        }

                        // admin_emh_inscription_inscriptions_create
                        if ($pathinfo === '/admin/emh/inscription/inscriptions/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.inscriptions',  '_sonata_name' => 'admin_emh_inscription_inscriptions_create',  '_route' => 'admin_emh_inscription_inscriptions_create',);
                        }

                        // admin_emh_inscription_inscriptions_batch
                        if ($pathinfo === '/admin/emh/inscription/inscriptions/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.inscriptions',  '_sonata_name' => 'admin_emh_inscription_inscriptions_batch',  '_route' => 'admin_emh_inscription_inscriptions_batch',);
                        }

                        // admin_emh_inscription_inscriptions_edit
                        if (preg_match('#^/admin/emh/inscription/inscriptions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_inscription_inscriptions_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.inscriptions',  '_sonata_name' => 'admin_emh_inscription_inscriptions_edit',));
                        }

                        // admin_emh_inscription_inscriptions_delete
                        if (preg_match('#^/admin/emh/inscription/inscriptions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_inscription_inscriptions_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.inscriptions',  '_sonata_name' => 'admin_emh_inscription_inscriptions_delete',));
                        }

                        // admin_emh_inscription_inscriptions_show
                        if (preg_match('#^/admin/emh/inscription/inscriptions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_inscription_inscriptions_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.inscriptions',  '_sonata_name' => 'admin_emh_inscription_inscriptions_show',));
                        }

                        // admin_emh_inscription_inscriptions_export
                        if ($pathinfo === '/admin/emh/inscription/inscriptions/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.inscriptions',  '_sonata_name' => 'admin_emh_inscription_inscriptions_export',  '_route' => 'admin_emh_inscription_inscriptions_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/emh/ecommerce')) {
                    if (0 === strpos($pathinfo, '/admin/emh/ecommerce/produits')) {
                        // admin_emh_ecommerce_produits_list
                        if ($pathinfo === '/admin/emh/ecommerce/produits/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.produits',  '_sonata_name' => 'admin_emh_ecommerce_produits_list',  '_route' => 'admin_emh_ecommerce_produits_list',);
                        }

                        // admin_emh_ecommerce_produits_create
                        if ($pathinfo === '/admin/emh/ecommerce/produits/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.produits',  '_sonata_name' => 'admin_emh_ecommerce_produits_create',  '_route' => 'admin_emh_ecommerce_produits_create',);
                        }

                        // admin_emh_ecommerce_produits_batch
                        if ($pathinfo === '/admin/emh/ecommerce/produits/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.produits',  '_sonata_name' => 'admin_emh_ecommerce_produits_batch',  '_route' => 'admin_emh_ecommerce_produits_batch',);
                        }

                        // admin_emh_ecommerce_produits_edit
                        if (preg_match('#^/admin/emh/ecommerce/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_ecommerce_produits_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.produits',  '_sonata_name' => 'admin_emh_ecommerce_produits_edit',));
                        }

                        // admin_emh_ecommerce_produits_delete
                        if (preg_match('#^/admin/emh/ecommerce/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_ecommerce_produits_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.produits',  '_sonata_name' => 'admin_emh_ecommerce_produits_delete',));
                        }

                        // admin_emh_ecommerce_produits_show
                        if (preg_match('#^/admin/emh/ecommerce/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_ecommerce_produits_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.produits',  '_sonata_name' => 'admin_emh_ecommerce_produits_show',));
                        }

                        // admin_emh_ecommerce_produits_export
                        if ($pathinfo === '/admin/emh/ecommerce/produits/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.produits',  '_sonata_name' => 'admin_emh_ecommerce_produits_export',  '_route' => 'admin_emh_ecommerce_produits_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/emh/ecommerce/achats')) {
                        // admin_emh_ecommerce_achats_list
                        if ($pathinfo === '/admin/emh/ecommerce/achats/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.achats',  '_sonata_name' => 'admin_emh_ecommerce_achats_list',  '_route' => 'admin_emh_ecommerce_achats_list',);
                        }

                        // admin_emh_ecommerce_achats_create
                        if ($pathinfo === '/admin/emh/ecommerce/achats/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.achats',  '_sonata_name' => 'admin_emh_ecommerce_achats_create',  '_route' => 'admin_emh_ecommerce_achats_create',);
                        }

                        // admin_emh_ecommerce_achats_batch
                        if ($pathinfo === '/admin/emh/ecommerce/achats/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.achats',  '_sonata_name' => 'admin_emh_ecommerce_achats_batch',  '_route' => 'admin_emh_ecommerce_achats_batch',);
                        }

                        // admin_emh_ecommerce_achats_edit
                        if (preg_match('#^/admin/emh/ecommerce/achats/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_ecommerce_achats_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.achats',  '_sonata_name' => 'admin_emh_ecommerce_achats_edit',));
                        }

                        // admin_emh_ecommerce_achats_delete
                        if (preg_match('#^/admin/emh/ecommerce/achats/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_ecommerce_achats_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.achats',  '_sonata_name' => 'admin_emh_ecommerce_achats_delete',));
                        }

                        // admin_emh_ecommerce_achats_show
                        if (preg_match('#^/admin/emh/ecommerce/achats/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_ecommerce_achats_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.achats',  '_sonata_name' => 'admin_emh_ecommerce_achats_show',));
                        }

                        // admin_emh_ecommerce_achats_export
                        if ($pathinfo === '/admin/emh/ecommerce/achats/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.achats',  '_sonata_name' => 'admin_emh_ecommerce_achats_export',  '_route' => 'admin_emh_ecommerce_achats_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/emh/agenda/agendas')) {
                    // admin_emh_agenda_agendas_list
                    if ($pathinfo === '/admin/emh/agenda/agendas/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.agenda',  '_sonata_name' => 'admin_emh_agenda_agendas_list',  '_route' => 'admin_emh_agenda_agendas_list',);
                    }

                    // admin_emh_agenda_agendas_create
                    if ($pathinfo === '/admin/emh/agenda/agendas/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.agenda',  '_sonata_name' => 'admin_emh_agenda_agendas_create',  '_route' => 'admin_emh_agenda_agendas_create',);
                    }

                    // admin_emh_agenda_agendas_batch
                    if ($pathinfo === '/admin/emh/agenda/agendas/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.agenda',  '_sonata_name' => 'admin_emh_agenda_agendas_batch',  '_route' => 'admin_emh_agenda_agendas_batch',);
                    }

                    // admin_emh_agenda_agendas_edit
                    if (preg_match('#^/admin/emh/agenda/agendas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_agenda_agendas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.agenda',  '_sonata_name' => 'admin_emh_agenda_agendas_edit',));
                    }

                    // admin_emh_agenda_agendas_delete
                    if (preg_match('#^/admin/emh/agenda/agendas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_agenda_agendas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.agenda',  '_sonata_name' => 'admin_emh_agenda_agendas_delete',));
                    }

                    // admin_emh_agenda_agendas_show
                    if (preg_match('#^/admin/emh/agenda/agendas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_agenda_agendas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.agenda',  '_sonata_name' => 'admin_emh_agenda_agendas_show',));
                    }

                    // admin_emh_agenda_agendas_export
                    if ($pathinfo === '/admin/emh/agenda/agendas/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.agenda',  '_sonata_name' => 'admin_emh_agenda_agendas_export',  '_route' => 'admin_emh_agenda_agendas_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/emh/dons/dons')) {
                    // admin_emh_dons_dons_list
                    if ($pathinfo === '/admin/emh/dons/dons/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.dons',  '_sonata_name' => 'admin_emh_dons_dons_list',  '_route' => 'admin_emh_dons_dons_list',);
                    }

                    // admin_emh_dons_dons_create
                    if ($pathinfo === '/admin/emh/dons/dons/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.dons',  '_sonata_name' => 'admin_emh_dons_dons_create',  '_route' => 'admin_emh_dons_dons_create',);
                    }

                    // admin_emh_dons_dons_batch
                    if ($pathinfo === '/admin/emh/dons/dons/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.dons',  '_sonata_name' => 'admin_emh_dons_dons_batch',  '_route' => 'admin_emh_dons_dons_batch',);
                    }

                    // admin_emh_dons_dons_edit
                    if (preg_match('#^/admin/emh/dons/dons/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_dons_dons_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.dons',  '_sonata_name' => 'admin_emh_dons_dons_edit',));
                    }

                    // admin_emh_dons_dons_delete
                    if (preg_match('#^/admin/emh/dons/dons/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_dons_dons_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.dons',  '_sonata_name' => 'admin_emh_dons_dons_delete',));
                    }

                    // admin_emh_dons_dons_show
                    if (preg_match('#^/admin/emh/dons/dons/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_emh_dons_dons_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.dons',  '_sonata_name' => 'admin_emh_dons_dons_show',));
                    }

                    // admin_emh_dons_dons_export
                    if ($pathinfo === '/admin/emh/dons/dons/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.dons',  '_sonata_name' => 'admin_emh_dons_dons_export',  '_route' => 'admin_emh_dons_dons_export',);
                    }

                }

            }

        }

        // cms_principal_contact
        if (preg_match('#^/(?P<slug>[^/]++)/contact$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_principal_contact')), array (  '_controller' => 'emh\\cmsPrincipalBundle\\Controller\\ContactController::indexAction',));
        }

        // cms_principal_page
        if (preg_match('#^/(?P<slug>[^/]++)/(?P<slugFr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_principal_page')), array (  '_controller' => 'emh\\cmsPrincipalBundle\\Controller\\RubriqueController::detailAction',));
        }

        // cms_principal_article
        if (preg_match('#^/(?P<slug>[^/]++)/(?P<id>[^/]++)/(?P<slugFr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_principal_article')), array (  '_controller' => 'emh\\cmsPrincipalBundle\\Controller\\ArticleController::detailAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
