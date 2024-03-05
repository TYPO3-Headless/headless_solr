<?php
defined('TYPO3') || die();

call_user_func(function () {
    /**
     * Default TypoScript for Headless Solr
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'headless_solr',
        'Configuration/TypoScript',
        'Headless Solr'
    );
});
