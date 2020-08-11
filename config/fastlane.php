<?php

return [
    'asset_logo_img'           => 'vendor/fastlane/img/app-logo.png',
    'asset_login_bg'           => 'vendor/fastlane/img/login-bg-black.jpg',

    /**
     * Middleware use by the Control Panel routes.
     */
    'control_panel_middleware' => ['web'],

    /**
     * Enabled Entry Types.
     */
    'entry_types'              => [
        //
    ],

    /**
     * Class responsible for building the control panel menu.
     */
    'menu'                     => \CbtechLtd\Fastlane\Support\Menu\MenuBuilder::class,

    /*
     * Minimum length of models Hash IDs.
     */
    'hashid_min_length'        => 5,

    /*
     * Determine whether the Super Admin role is enabled in the system.
     */
    'super_admin'              => true,

    /*
     * Determine the storage disk to be used fot file attachments.
     */
    'attachment_disk'          => 'public',

    /**
     * URL to process images using Thumbor.
     */

    'image_uploader' => [
        'class' => CbtechLtd\Fastlane\FileUpload\StorageDiskImageUploader::class,
        'disk'  => 's3',
    ],
];
