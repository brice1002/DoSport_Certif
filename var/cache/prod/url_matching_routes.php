<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte/addresses' => [[['_route' => 'account_address', '_controller' => 'App\\Controller\\AccountAddressController::index'], null, null, null, false, false, null]],
        '/compte/ajouter-une-adresse' => [[['_route' => 'account_address_add', '_controller' => 'App\\Controller\\AccountAddressController::add'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/mes-commandes' => [[['_route' => 'account_order', '_controller' => 'App\\Controller\\AccountOrderController::index'], null, null, null, false, false, null]],
        '/compte/modifier-mon-password' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, true, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'remove_my_cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/nous-contacter' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/qui_sommes_nous' => [[['_route' => 'nous', '_controller' => 'App\\Controller\\HomeController::nous'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'order_recap', '_controller' => 'App\\Controller\\OrderController::add'], null, null, null, false, false, null]],
        '/nos-produits' => [[['_route' => 'products', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegisterController::verifyUserEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|om(?'
                        .'|pte/(?'
                            .'|m(?'
                                .'|odifier\\-une\\-adresse/([^/]++)(*:58)'
                                .'|es\\-commandes/([^/]++)(*:87)'
                            .')'
                            .'|supprimer\\-une\\-adresse/([^/]++)(*:127)'
                        .')'
                        .'|mande/(?'
                            .'|erreur/([^/]++)(*:160)'
                            .'|merci/([^/]++)(*:182)'
                            .'|create\\-session/([^/]++)(*:214)'
                        .')'
                    .')'
                    .'|art/(?'
                        .'|add/([^/]++)(*:243)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:269)'
                            .'|crease/([^/]++)(*:292)'
                        .')'
                    .')'
                .')'
                .'|/produ(?'
                    .'|it/([^/]++)(*:323)'
                    .'|ct/list/([^/]++)(*:347)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        58 => [[['_route' => 'account_address_edit', '_controller' => 'App\\Controller\\AccountAddressController::edit'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'account_order_show', '_controller' => 'App\\Controller\\AccountOrderController::show'], ['reference'], null, null, false, true, null]],
        127 => [[['_route' => 'account_address_delete', '_controller' => 'App\\Controller\\AccountAddressController::delete'], ['id'], null, null, false, true, null]],
        160 => [[['_route' => 'order_cancel', '_controller' => 'App\\Controller\\OrderCancelController::index'], ['stripeSessionId'], null, null, false, true, null]],
        182 => [[['_route' => 'order_success', '_controller' => 'App\\Controller\\OrderSuccessController::index'], ['stripeSessionId'], null, null, false, true, null]],
        214 => [[['_route' => 'stripe_create_session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        243 => [[['_route' => 'add-to-cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'delete_to_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        292 => [[['_route' => 'decrease_to_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null]],
        347 => [
            [['_route' => 'products_category', '_controller' => 'App\\Controller\\ProductController::productsCategory'], ['category'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
