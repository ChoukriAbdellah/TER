<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'user_registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], []],
        'request_resetting' => [[], ['_controller' => 'App\\Controller\\ResettingController::request'], [], [['text', '/renouvellement-mot-de-passe/requete']], [], []],
        'resetting' => [['id', 'token'], ['_controller' => 'App\\Controller\\ResettingController::resetting'], [], [['variable', '/', '[^/]++', 'token', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/renouvellement-mot-de-passe']], [], []],
        'security' => [[], ['_controller' => 'App\\Controller\\SecurityController::connexion'], [], [['text', '/security']], [], []],
        'index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'connexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::connexion'], [], [['text', '/connexion/']], [], []],
        'inscription' => [[], ['_controller' => 'App\\Controller\\Registration::register'], [], [['text', '/inscription/']], [], []],
        'dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard/']], [], []],
        'new-project' => [[], ['_controller' => 'App\\Controller\\ProjectController::newProject'], [], [['text', '/dashboard/new-project/']], [], []],
        'gros-oeuvre' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::view'], [], [['text', '/gros-oeuvre'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'second-oeuvre' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::view'], [], [['text', '/second-oeuvre'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'etude-sol' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::etudeSol'], [], [['text', '/gros-oeuvre/etude-sol'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'excavation' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::excavation'], [], [['text', '/gros-oeuvre/excavation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'vrd' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::vrd'], [], [['text', '/gros-oeuvre/vrd'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'fondation' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::fondation'], [], [['text', '/gros-oeuvre/fondations'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'plancher' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::plancher'], [], [['text', '/gros-oeuvre/plancher'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'prep-terrain' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::PreparationEtAcces'], [], [['text', '/gros-oeuvre/prep-terrain'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'soubassement' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::Soubassement'], [], [['text', '/gros-oeuvre/soubassement'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'elevation' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::Elevation'], [], [['text', '/gros-oeuvre/elevation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'charpente' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::charpente'], [], [['text', '/gros-oeuvre/charpente'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'toiture' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::toiture'], [], [['text', '/gros-oeuvre/toiture'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'menuiserie' => [['id'], ['_controller' => 'App\\Controller\\GrosOeuvreController::menuiserie'], [], [['text', '/menuiserie'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'climatisation' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::climatisation'], [], [['text', '/climatisation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'domotique' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::domotique'], [], [['text', '/domotique'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'ventilation' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::ventilation'], [], [['text', '/second-oeuvre/ventilation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'cloisons' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::cloison'], [], [['text', '/second-oeuvre/cloisons'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'evacuation' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::evacuation'], [], [['text', '/second-oeuvre/evacuation-fumees'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'menuiseriesInt' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::menuiseriesInt'], [], [['text', '/second-oeuvre/menuiseries-interieures'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'escaliers' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::escaliers'], [], [['text', '/second-oeuvre/escaliers'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'plomberie' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::plomberie'], [], [['text', '/second-oeuvre/plomberie'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'electricite' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::electricite'], [], [['text', '/second-oeuvre/electricite'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'enduit' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::enduit'], [], [['text', '/second-oeuvre/enduit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'isolation' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::isolation'], [], [['text', '/second-oeuvre/isolation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'revetement' => [['id'], ['_controller' => 'App\\Controller\\SecondOeuvreController::revetement'], [], [['text', '/second-oeuvre/revetement'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/my-project']], [], []],
        'listeAdmin' => [[], ['_controller' => 'App\\Controller\\AdminController::projetAdmin'], [], [['text', '/dashboard/projetsAdmin']], [], []],
        'listeMembreAdmin' => [[], ['_controller' => 'App\\Controller\\AdminController::listeMembreAdmin'], [], [['text', '/dashboard/membresAdmin']], [], []],
        'logout' => [[], [], [], [['text', '/deconnexion']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
