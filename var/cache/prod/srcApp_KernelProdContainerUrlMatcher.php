<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
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
                    .'|/renouvellement\\-mot\\-de\\-passe/([^/]++)/([^/]++)(*:56)'
                    .'|/dashboard/(?'
                        .'|my\\-project/([^/]++)/(?'
                            .'|gros\\-oeuvre(?'
                                .'|(*:116)'
                                .'|/(?'
                                    .'|e(?'
                                        .'|tude\\-sol(*:141)'
                                        .'|xcavation(*:158)'
                                        .'|levation(*:174)'
                                    .')'
                                    .'|vrd(*:186)'
                                    .'|fondations(*:204)'
                                    .'|p(?'
                                        .'|lancher(*:223)'
                                        .'|rep\\-terrain(*:243)'
                                    .')'
                                    .'|soubassement(*:264)'
                                    .'|charpente(*:281)'
                                    .'|toiture(*:296)'
                                .')'
                            .')'
                            .'|second\\-oeuvre(?'
                                .'|(*:323)'
                                .'|/(?'
                                    .'|ventilation(*:346)'
                                    .'|cloisons(*:362)'
                                    .'|e(?'
                                        .'|vacuation\\-fumees(*:391)'
                                        .'|scaliers(*:407)'
                                        .'|lectricite(*:425)'
                                        .'|nduit(*:438)'
                                    .')'
                                    .'|menuiseries\\-interieures(*:471)'
                                    .'|plomberie(*:488)'
                                    .'|isolation(*:505)'
                                    .'|revetement(*:523)'
                                .')'
                            .')'
                            .'|menuiserie(*:543)'
                            .'|climatisation(*:564)'
                            .'|domotique(*:581)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|modifPrix(*:611)'
                            .'|suppPrix(*:627)'
                        .')'
                        .'|my\\-project/([^/]++)/facture(?'
                            .'|(*:667)'
                            .'|\\.pdf(*:680)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            56 => [[['_route' => 'resetting', '_controller' => 'App\\Controller\\ResettingController::resetting'], ['id', 'token'], null, null, false, true, null]],
            116 => [[['_route' => 'gros-oeuvre', '_controller' => 'App\\Controller\\GrosOeuvreController::view'], ['id'], null, null, false, false, null]],
            141 => [[['_route' => 'etude-sol', '_controller' => 'App\\Controller\\GrosOeuvreController::etudeSol'], ['id'], null, null, false, false, null]],
            158 => [[['_route' => 'excavation', '_controller' => 'App\\Controller\\GrosOeuvreController::excavation'], ['id'], null, null, false, false, null]],
            174 => [[['_route' => 'elevation', '_controller' => 'App\\Controller\\GrosOeuvreController::Elevation'], ['id'], null, null, false, false, null]],
            186 => [[['_route' => 'vrd', '_controller' => 'App\\Controller\\GrosOeuvreController::vrd'], ['id'], null, null, false, false, null]],
            204 => [[['_route' => 'fondation', '_controller' => 'App\\Controller\\GrosOeuvreController::fondation'], ['id'], null, null, false, false, null]],
            223 => [[['_route' => 'plancher', '_controller' => 'App\\Controller\\GrosOeuvreController::plancher'], ['id'], null, null, false, false, null]],
            243 => [[['_route' => 'prep-terrain', '_controller' => 'App\\Controller\\GrosOeuvreController::PreparationEtAcces'], ['id'], null, null, false, false, null]],
            264 => [[['_route' => 'soubassement', '_controller' => 'App\\Controller\\GrosOeuvreController::Soubassement'], ['id'], null, null, false, false, null]],
            281 => [[['_route' => 'charpente', '_controller' => 'App\\Controller\\GrosOeuvreController::charpente'], ['id'], null, null, false, false, null]],
            296 => [[['_route' => 'toiture', '_controller' => 'App\\Controller\\GrosOeuvreController::toiture'], ['id'], null, null, false, false, null]],
            323 => [[['_route' => 'second-oeuvre', '_controller' => 'App\\Controller\\SecondOeuvreController::view'], ['id'], null, null, false, false, null]],
            346 => [[['_route' => 'ventilation', '_controller' => 'App\\Controller\\SecondOeuvreController::ventilation'], ['id'], null, null, false, false, null]],
            362 => [[['_route' => 'cloisons', '_controller' => 'App\\Controller\\SecondOeuvreController::cloison'], ['id'], null, null, false, false, null]],
            391 => [[['_route' => 'evacuation', '_controller' => 'App\\Controller\\SecondOeuvreController::evacuation'], ['id'], null, null, false, false, null]],
            407 => [[['_route' => 'escaliers', '_controller' => 'App\\Controller\\SecondOeuvreController::escaliers'], ['id'], null, null, false, false, null]],
            425 => [[['_route' => 'electricite', '_controller' => 'App\\Controller\\SecondOeuvreController::electricite'], ['id'], null, null, false, false, null]],
            438 => [[['_route' => 'enduit', '_controller' => 'App\\Controller\\SecondOeuvreController::enduit'], ['id'], null, null, false, false, null]],
            471 => [[['_route' => 'menuiseriesInt', '_controller' => 'App\\Controller\\SecondOeuvreController::menuiseriesInt'], ['id'], null, null, false, false, null]],
            488 => [[['_route' => 'plomberie', '_controller' => 'App\\Controller\\SecondOeuvreController::plomberie'], ['id'], null, null, false, false, null]],
            505 => [[['_route' => 'isolation', '_controller' => 'App\\Controller\\SecondOeuvreController::isolation'], ['id'], null, null, false, false, null]],
            523 => [[['_route' => 'revetement', '_controller' => 'App\\Controller\\SecondOeuvreController::revetement'], ['id'], null, null, false, false, null]],
            543 => [[['_route' => 'menuiserie', '_controller' => 'App\\Controller\\GrosOeuvreController::menuiserie'], ['id'], null, null, false, false, null]],
            564 => [[['_route' => 'climatisation', '_controller' => 'App\\Controller\\SecondOeuvreController::climatisation'], ['id'], null, null, false, false, null]],
            581 => [[['_route' => 'domotique', '_controller' => 'App\\Controller\\SecondOeuvreController::domotique'], ['id'], null, null, false, false, null]],
            611 => [[['_route' => 'modifPrix', '_controller' => 'App\\Controller\\AdminController::modifPrix'], ['id'], null, null, false, false, null]],
            627 => [[['_route' => 'suppPrix', '_controller' => 'App\\Controller\\AdminController::suppPrix'], ['id'], null, null, false, false, null]],
            667 => [[['_route' => 'facture', '_controller' => 'App\\Controller\\DashboardController::facture'], ['id'], null, null, false, false, null]],
            680 => [[['_route' => 'impression', '_controller' => 'App\\Controller\\DashboardController::impression'], ['id'], null, null, false, false, null]],
        ];
    }
}
