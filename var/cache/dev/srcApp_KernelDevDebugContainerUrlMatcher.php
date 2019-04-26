<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/inscription' => [
                [['_route' => 'user_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
                [['_route' => 'inscription', '_controller' => 'App\\Controller\\Registration::register'], null, null, null, true, false, null],
            ],
            '/renouvellement-mot-de-passe/requete' => [[['_route' => 'request_resetting', '_controller' => 'App\\Controller\\ResettingController::request'], null, null, null, false, false, null]],
            '/security' => [[['_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, true, false, null]],
            '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, true, false, null]],
            '/dashboard/new-project' => [[['_route' => 'new-project', '_controller' => 'App\\Controller\\ProjectController::newProject'], null, null, null, true, false, null]],
            '/dashboard/projetsAdmin' => [[['_route' => 'listeAdmin', '_controller' => 'App\\Controller\\AdminController::projetAdmin'], null, null, null, false, false, null]],
            '/dashboard/creer-un-membre' => [[['_route' => 'createMember', '_controller' => 'App\\Controller\\AdminController::createMember'], null, null, null, false, false, null]],
            '/dashboard/membresAdmin' => [[['_route' => 'listeMembreAdmin', '_controller' => 'App\\Controller\\AdminController::listeMembreAdmin'], null, null, null, false, false, null]],
            '/dashboard/tablePrix' => [[['_route' => 'listePrix', '_controller' => 'App\\Controller\\AdminController::tablePrix'], null, null, null, false, false, null]],
            '/dashboard/ajoutPrix' => [[['_route' => 'ajoutPrix', '_controller' => 'App\\Controller\\AdminController::ajoutPrix'], null, null, null, false, false, null]],
            '/deconnexion' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/renouvellement\\-mot\\-de\\-passe/([^/]++)/([^/]++)(*:218)'
                    .'|/dashboard/(?'
                        .'|my\\-project/([^/]++)/(?'
                            .'|gros\\-oeuvre(?'
                                .'|(*:279)'
                                .'|/(?'
                                    .'|e(?'
                                        .'|tude\\-sol(*:304)'
                                        .'|xcavation(*:321)'
                                        .'|levation(*:337)'
                                    .')'
                                    .'|vrd(*:349)'
                                    .'|fondations(*:367)'
                                    .'|p(?'
                                        .'|lancher(*:386)'
                                        .'|rep\\-terrain(*:406)'
                                    .')'
                                    .'|soubassement(*:427)'
                                    .'|charpente(*:444)'
                                    .'|toiture(*:459)'
                                .')'
                            .')'
                            .'|second\\-oeuvre(?'
                                .'|(*:486)'
                                .'|/(?'
                                    .'|ventilation(*:509)'
                                    .'|cloisons(*:525)'
                                    .'|e(?'
                                        .'|vacuation\\-fumees(*:554)'
                                        .'|scaliers(*:570)'
                                        .'|lectricite(*:588)'
                                        .'|nduit(*:601)'
                                    .')'
                                    .'|menuiseries\\-interieures(*:634)'
                                    .'|plomberie(*:651)'
                                    .'|isolation(*:668)'
                                    .'|revetement(*:686)'
                                .')'
                            .')'
                            .'|menuiserie(*:706)'
                            .'|climatisation(*:727)'
                            .'|domotique(*:744)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|modifPrix(*:774)'
                            .'|suppPrix(*:790)'
                        .')'
                        .'|my\\-project/([^/]++)/facture(?'
                            .'|(*:830)'
                            .'|\\.pdf(*:843)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            218 => [[['_route' => 'resetting', '_controller' => 'App\\Controller\\ResettingController::resetting'], ['id', 'token'], null, null, false, true, null]],
            279 => [[['_route' => 'gros-oeuvre', '_controller' => 'App\\Controller\\GrosOeuvreController::view'], ['id'], null, null, false, false, null]],
            304 => [[['_route' => 'etude-sol', '_controller' => 'App\\Controller\\GrosOeuvreController::etudeSol'], ['id'], null, null, false, false, null]],
            321 => [[['_route' => 'excavation', '_controller' => 'App\\Controller\\GrosOeuvreController::excavation'], ['id'], null, null, false, false, null]],
            337 => [[['_route' => 'elevation', '_controller' => 'App\\Controller\\GrosOeuvreController::Elevation'], ['id'], null, null, false, false, null]],
            349 => [[['_route' => 'vrd', '_controller' => 'App\\Controller\\GrosOeuvreController::vrd'], ['id'], null, null, false, false, null]],
            367 => [[['_route' => 'fondation', '_controller' => 'App\\Controller\\GrosOeuvreController::fondation'], ['id'], null, null, false, false, null]],
            386 => [[['_route' => 'plancher', '_controller' => 'App\\Controller\\GrosOeuvreController::plancher'], ['id'], null, null, false, false, null]],
            406 => [[['_route' => 'prep-terrain', '_controller' => 'App\\Controller\\GrosOeuvreController::PreparationEtAcces'], ['id'], null, null, false, false, null]],
            427 => [[['_route' => 'soubassement', '_controller' => 'App\\Controller\\GrosOeuvreController::Soubassement'], ['id'], null, null, false, false, null]],
            444 => [[['_route' => 'charpente', '_controller' => 'App\\Controller\\GrosOeuvreController::charpente'], ['id'], null, null, false, false, null]],
            459 => [[['_route' => 'toiture', '_controller' => 'App\\Controller\\GrosOeuvreController::toiture'], ['id'], null, null, false, false, null]],
            486 => [[['_route' => 'second-oeuvre', '_controller' => 'App\\Controller\\SecondOeuvreController::view'], ['id'], null, null, false, false, null]],
            509 => [[['_route' => 'ventilation', '_controller' => 'App\\Controller\\SecondOeuvreController::ventilation'], ['id'], null, null, false, false, null]],
            525 => [[['_route' => 'cloisons', '_controller' => 'App\\Controller\\SecondOeuvreController::cloison'], ['id'], null, null, false, false, null]],
            554 => [[['_route' => 'evacuation', '_controller' => 'App\\Controller\\SecondOeuvreController::evacuation'], ['id'], null, null, false, false, null]],
            570 => [[['_route' => 'escaliers', '_controller' => 'App\\Controller\\SecondOeuvreController::escaliers'], ['id'], null, null, false, false, null]],
            588 => [[['_route' => 'electricite', '_controller' => 'App\\Controller\\SecondOeuvreController::electricite'], ['id'], null, null, false, false, null]],
            601 => [[['_route' => 'enduit', '_controller' => 'App\\Controller\\SecondOeuvreController::enduit'], ['id'], null, null, false, false, null]],
            634 => [[['_route' => 'menuiseriesInt', '_controller' => 'App\\Controller\\SecondOeuvreController::menuiseriesInt'], ['id'], null, null, false, false, null]],
            651 => [[['_route' => 'plomberie', '_controller' => 'App\\Controller\\SecondOeuvreController::plomberie'], ['id'], null, null, false, false, null]],
            668 => [[['_route' => 'isolation', '_controller' => 'App\\Controller\\SecondOeuvreController::isolation'], ['id'], null, null, false, false, null]],
            686 => [[['_route' => 'revetement', '_controller' => 'App\\Controller\\SecondOeuvreController::revetement'], ['id'], null, null, false, false, null]],
            706 => [[['_route' => 'menuiserie', '_controller' => 'App\\Controller\\GrosOeuvreController::menuiserie'], ['id'], null, null, false, false, null]],
            727 => [[['_route' => 'climatisation', '_controller' => 'App\\Controller\\SecondOeuvreController::climatisation'], ['id'], null, null, false, false, null]],
            744 => [[['_route' => 'domotique', '_controller' => 'App\\Controller\\SecondOeuvreController::domotique'], ['id'], null, null, false, false, null]],
            774 => [[['_route' => 'modifPrix', '_controller' => 'App\\Controller\\AdminController::modifPrix'], ['id'], null, null, false, false, null]],
            790 => [[['_route' => 'suppPrix', '_controller' => 'App\\Controller\\AdminController::suppPrix'], ['id'], null, null, false, false, null]],
            830 => [[['_route' => 'facture', '_controller' => 'App\\Controller\\DashboardController::facture'], ['id'], null, null, false, false, null]],
            843 => [[['_route' => 'impression', '_controller' => 'App\\Controller\\DashboardController::impression'], ['id'], null, null, false, false, null]],
        ];
    }
}
