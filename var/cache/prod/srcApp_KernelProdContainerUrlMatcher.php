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
            '/dashboard/membresAdmin' => [[['_route' => 'listeMembreAdmin', '_controller' => 'App\\Controller\\AdminController::listeMembreAdmin'], null, null, null, false, false, null]],
            '/deconnexion' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/renouvellement\\-mot\\-de\\-passe/([^/]++)/([^/]++)(*:56)'
                    .'|/dashboard/my\\-project/([^/]++)/(?'
                        .'|gros\\-oeuvre(?'
                            .'|(*:113)'
                            .'|/(?'
                                .'|e(?'
                                    .'|tude\\-sol(*:138)'
                                    .'|xcavation(*:155)'
                                    .'|levation(*:171)'
                                .')'
                                .'|vrd(*:183)'
                                .'|fondations(*:201)'
                                .'|p(?'
                                    .'|lancher(*:220)'
                                    .'|rep\\-terrain(*:240)'
                                .')'
                                .'|soubassement(*:261)'
                                .'|charpente(*:278)'
                                .'|toiture(*:293)'
                            .')'
                        .')'
                        .'|second\\-oeuvre(?'
                            .'|(*:320)'
                            .'|/(?'
                                .'|ventilation(*:343)'
                                .'|cloisons(*:359)'
                                .'|e(?'
                                    .'|vacuation\\-fumees(*:388)'
                                    .'|scaliers(*:404)'
                                    .'|lectricite(*:422)'
                                    .'|nduit(*:435)'
                                .')'
                                .'|menuiseries\\-interieures(*:468)'
                                .'|plomberie(*:485)'
                                .'|isolation(*:502)'
                                .'|revetement(*:520)'
                            .')'
                        .')'
                        .'|menuiserie(*:540)'
                        .'|climatisation(*:561)'
                        .'|domotique(*:578)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            56 => [[['_route' => 'resetting', '_controller' => 'App\\Controller\\ResettingController::resetting'], ['id', 'token'], null, null, false, true, null]],
            113 => [[['_route' => 'gros-oeuvre', '_controller' => 'App\\Controller\\GrosOeuvreController::view'], ['id'], null, null, false, false, null]],
            138 => [[['_route' => 'etude-sol', '_controller' => 'App\\Controller\\GrosOeuvreController::etudeSol'], ['id'], null, null, false, false, null]],
            155 => [[['_route' => 'excavation', '_controller' => 'App\\Controller\\GrosOeuvreController::excavation'], ['id'], null, null, false, false, null]],
            171 => [[['_route' => 'elevation', '_controller' => 'App\\Controller\\GrosOeuvreController::Elevation'], ['id'], null, null, false, false, null]],
            183 => [[['_route' => 'vrd', '_controller' => 'App\\Controller\\GrosOeuvreController::vrd'], ['id'], null, null, false, false, null]],
            201 => [[['_route' => 'fondation', '_controller' => 'App\\Controller\\GrosOeuvreController::fondation'], ['id'], null, null, false, false, null]],
            220 => [[['_route' => 'plancher', '_controller' => 'App\\Controller\\GrosOeuvreController::plancher'], ['id'], null, null, false, false, null]],
            240 => [[['_route' => 'prep-terrain', '_controller' => 'App\\Controller\\GrosOeuvreController::PreparationEtAcces'], ['id'], null, null, false, false, null]],
            261 => [[['_route' => 'soubassement', '_controller' => 'App\\Controller\\GrosOeuvreController::Soubassement'], ['id'], null, null, false, false, null]],
            278 => [[['_route' => 'charpente', '_controller' => 'App\\Controller\\GrosOeuvreController::charpente'], ['id'], null, null, false, false, null]],
            293 => [[['_route' => 'toiture', '_controller' => 'App\\Controller\\GrosOeuvreController::toiture'], ['id'], null, null, false, false, null]],
            320 => [[['_route' => 'second-oeuvre', '_controller' => 'App\\Controller\\SecondOeuvreController::view'], ['id'], null, null, false, false, null]],
            343 => [[['_route' => 'ventilation', '_controller' => 'App\\Controller\\SecondOeuvreController::ventilation'], ['id'], null, null, false, false, null]],
            359 => [[['_route' => 'cloisons', '_controller' => 'App\\Controller\\SecondOeuvreController::cloison'], ['id'], null, null, false, false, null]],
            388 => [[['_route' => 'evacuation', '_controller' => 'App\\Controller\\SecondOeuvreController::evacuation'], ['id'], null, null, false, false, null]],
            404 => [[['_route' => 'escaliers', '_controller' => 'App\\Controller\\SecondOeuvreController::escaliers'], ['id'], null, null, false, false, null]],
            422 => [[['_route' => 'electricite', '_controller' => 'App\\Controller\\SecondOeuvreController::electricite'], ['id'], null, null, false, false, null]],
            435 => [[['_route' => 'enduit', '_controller' => 'App\\Controller\\SecondOeuvreController::enduit'], ['id'], null, null, false, false, null]],
            468 => [[['_route' => 'menuiseriesInt', '_controller' => 'App\\Controller\\SecondOeuvreController::menuiseriesInt'], ['id'], null, null, false, false, null]],
            485 => [[['_route' => 'plomberie', '_controller' => 'App\\Controller\\SecondOeuvreController::plomberie'], ['id'], null, null, false, false, null]],
            502 => [[['_route' => 'isolation', '_controller' => 'App\\Controller\\SecondOeuvreController::isolation'], ['id'], null, null, false, false, null]],
            520 => [[['_route' => 'revetement', '_controller' => 'App\\Controller\\SecondOeuvreController::revetement'], ['id'], null, null, false, false, null]],
            540 => [[['_route' => 'menuiserie', '_controller' => 'App\\Controller\\GrosOeuvreController::menuiserie'], ['id'], null, null, false, false, null]],
            561 => [[['_route' => 'climatisation', '_controller' => 'App\\Controller\\SecondOeuvreController::climatisation'], ['id'], null, null, false, false, null]],
            578 => [[['_route' => 'domotique', '_controller' => 'App\\Controller\\SecondOeuvreController::domotique'], ['id'], null, null, false, false, null]],
        ];
    }
}
