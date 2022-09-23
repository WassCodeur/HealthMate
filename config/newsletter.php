<?php

return [

    /*
     * The driver to use to interact with MailChimp API.
     * You may use "log" or "null" to prevent calling the
     * API directly from your environment.
     */

    /*
     * The API key of a MailChimp account. You can find yours at
     * https://us10.admin.mailchimp.com/account/api-key-popup/.
     */
    'apiKey' => env('b0940f1452104e9eaaf9ca89f0076118-us17'),

    /*
     * The listName to use when no listName has been specified in a method.
     */
    'defaultListName' => 'newsletter',

    /*
     * Here you can define properties of the lists.
     */
    'lists' => [

        /*
         * This key is used to identify this list. It can be used
         * as the listName parameter provided in the various methods.
         *
         * You can set it to any string you want and you can add
         * as many lists as you want.
         */
        'newsletter' => [

            /*
             * A MailChimp list id. Check the MailChimp docs if you don't know
             * how to get this value:
             * http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id.
             */
            'id' => env('e3fb078996'),

            /*
             * The GDPR marketing permissions of this audience.
             * You can get a list of your permissions with this command: "php artisan newsletter:permissions"
             */

        ],
    ],

    /*
     * If you're having trouble with https connections, set this to false.
     */
    'ssl' => true,

];
