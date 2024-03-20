<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(static function () {
    /**
     * Default TypoScript for Headless_solr
     */
    ExtensionManagementUtility::addStaticFile(
        'headless_solr',
        'Configuration/TypoScript',
        'Headless Solr'
    );
});
