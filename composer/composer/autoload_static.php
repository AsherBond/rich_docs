<?php
/**
 * SPDX-FileCopyrightText: 2023 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
namespace Composer\Autoload;

class ComposerStaticInitRichdocuments
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\Richdocuments\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\Richdocuments\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OCA\\Richdocuments\\AppConfig' => __DIR__ . '/..' . '/../lib/AppConfig.php',
        'OCA\\Richdocuments\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\Richdocuments\\Backgroundjobs\\Cleanup' => __DIR__ . '/..' . '/../lib/Backgroundjobs/Cleanup.php',
        'OCA\\Richdocuments\\Backgroundjobs\\ObtainCapabilities' => __DIR__ . '/..' . '/../lib/Backgroundjobs/ObtainCapabilities.php',
        'OCA\\Richdocuments\\Capabilities' => __DIR__ . '/..' . '/../lib/Capabilities.php',
        'OCA\\Richdocuments\\Command\\ActivateConfig' => __DIR__ . '/..' . '/../lib/Command/ActivateConfig.php',
        'OCA\\Richdocuments\\Command\\ConvertToBigInt' => __DIR__ . '/..' . '/../lib/Command/ConvertToBigInt.php',
        'OCA\\Richdocuments\\Command\\InstallDefaultFonts' => __DIR__ . '/..' . '/../lib/Command/InstallDefaultFonts.php',
        'OCA\\Richdocuments\\Command\\UpdateEmptyTemplates' => __DIR__ . '/..' . '/../lib/Command/UpdateEmptyTemplates.php',
        'OCA\\Richdocuments\\Controller\\AssetsController' => __DIR__ . '/..' . '/../lib/Controller/AssetsController.php',
        'OCA\\Richdocuments\\Controller\\Attribute\\RestrictToWopiServer' => __DIR__ . '/..' . '/../lib/Controller/Attribute/RestrictToWopiServer.php',
        'OCA\\Richdocuments\\Controller\\DirectViewController' => __DIR__ . '/..' . '/../lib/Controller/DirectViewController.php',
        'OCA\\Richdocuments\\Controller\\DocumentAPIController' => __DIR__ . '/..' . '/../lib/Controller/DocumentAPIController.php',
        'OCA\\Richdocuments\\Controller\\DocumentController' => __DIR__ . '/..' . '/../lib/Controller/DocumentController.php',
        'OCA\\Richdocuments\\Controller\\DocumentTrait' => __DIR__ . '/..' . '/../lib/Controller/DocumentTrait.php',
        'OCA\\Richdocuments\\Controller\\FederationController' => __DIR__ . '/..' . '/../lib/Controller/FederationController.php',
        'OCA\\Richdocuments\\Controller\\OCSController' => __DIR__ . '/..' . '/../lib/Controller/OCSController.php',
        'OCA\\Richdocuments\\Controller\\SettingsController' => __DIR__ . '/..' . '/../lib/Controller/SettingsController.php',
        'OCA\\Richdocuments\\Controller\\TargetController' => __DIR__ . '/..' . '/../lib/Controller/TargetController.php',
        'OCA\\Richdocuments\\Controller\\TemplatesController' => __DIR__ . '/..' . '/../lib/Controller/TemplatesController.php',
        'OCA\\Richdocuments\\Controller\\WopiController' => __DIR__ . '/..' . '/../lib/Controller/WopiController.php',
        'OCA\\Richdocuments\\Db\\Asset' => __DIR__ . '/..' . '/../lib/Db/Asset.php',
        'OCA\\Richdocuments\\Db\\AssetMapper' => __DIR__ . '/..' . '/../lib/Db/AssetMapper.php',
        'OCA\\Richdocuments\\Db\\Direct' => __DIR__ . '/..' . '/../lib/Db/Direct.php',
        'OCA\\Richdocuments\\Db\\DirectMapper' => __DIR__ . '/..' . '/../lib/Db/DirectMapper.php',
        'OCA\\Richdocuments\\Db\\Wopi' => __DIR__ . '/..' . '/../lib/Db/Wopi.php',
        'OCA\\Richdocuments\\Db\\WopiMapper' => __DIR__ . '/..' . '/../lib/Db/WopiMapper.php',
        'OCA\\Richdocuments\\Events\\BeforeFederationRedirectEvent' => __DIR__ . '/..' . '/../lib/Events/BeforeFederationRedirectEvent.php',
        'OCA\\Richdocuments\\Events\\DocumentOpenedEvent' => __DIR__ . '/..' . '/../lib/Events/DocumentOpenedEvent.php',
        'OCA\\Richdocuments\\Exceptions\\ExpiredTokenException' => __DIR__ . '/..' . '/../lib/Exceptions/ExpiredTokenException.php',
        'OCA\\Richdocuments\\Exceptions\\UnknownTokenException' => __DIR__ . '/..' . '/../lib/Exceptions/UnknownTokenException.php',
        'OCA\\Richdocuments\\Helper' => __DIR__ . '/..' . '/../lib/Helper.php',
        'OCA\\Richdocuments\\Listener\\AddContentSecurityPolicyListener' => __DIR__ . '/..' . '/../lib/Listener/AddContentSecurityPolicyListener.php',
        'OCA\\Richdocuments\\Listener\\AddFeaturePolicyListener' => __DIR__ . '/..' . '/../lib/Listener/AddFeaturePolicyListener.php',
        'OCA\\Richdocuments\\Listener\\BeforeFetchPreviewListener' => __DIR__ . '/..' . '/../lib/Listener/BeforeFetchPreviewListener.php',
        'OCA\\Richdocuments\\Listener\\BeforeTemplateRenderedListener' => __DIR__ . '/..' . '/../lib/Listener/BeforeTemplateRenderedListener.php',
        'OCA\\Richdocuments\\Listener\\FileCreatedFromTemplateListener' => __DIR__ . '/..' . '/../lib/Listener/FileCreatedFromTemplateListener.php',
        'OCA\\Richdocuments\\Listener\\LoadAdditionalListener' => __DIR__ . '/..' . '/../lib/Listener/LoadAdditionalListener.php',
        'OCA\\Richdocuments\\Listener\\LoadViewerListener' => __DIR__ . '/..' . '/../lib/Listener/LoadViewerListener.php',
        'OCA\\Richdocuments\\Listener\\ReferenceListener' => __DIR__ . '/..' . '/../lib/Listener/ReferenceListener.php',
        'OCA\\Richdocuments\\Listener\\RegisterTemplateFileCreatorListener' => __DIR__ . '/..' . '/../lib/Listener/RegisterTemplateFileCreatorListener.php',
        'OCA\\Richdocuments\\Listener\\ShareLinkListener' => __DIR__ . '/..' . '/../lib/Listener/ShareLinkListener.php',
        'OCA\\Richdocuments\\Middleware\\WOPIMiddleware' => __DIR__ . '/..' . '/../lib/Middleware/WOPIMiddleware.php',
        'OCA\\Richdocuments\\Migration\\InstallDefaultFonts' => __DIR__ . '/..' . '/../lib/Migration/InstallDefaultFonts.php',
        'OCA\\Richdocuments\\Migration\\Version2060Date20200302131958' => __DIR__ . '/..' . '/../lib/Migration/Version2060Date20200302131958.php',
        'OCA\\Richdocuments\\Migration\\Version2060Date20200302132145' => __DIR__ . '/..' . '/../lib/Migration/Version2060Date20200302132145.php',
        'OCA\\Richdocuments\\Migration\\Version30704Date20200626072306' => __DIR__ . '/..' . '/../lib/Migration/Version30704Date20200626072306.php',
        'OCA\\Richdocuments\\Migration\\Version30709Date20201111104147' => __DIR__ . '/..' . '/../lib/Migration/Version30709Date20201111104147.php',
        'OCA\\Richdocuments\\Migration\\Version30717Date20210310164901' => __DIR__ . '/..' . '/../lib/Migration/Version30717Date20210310164901.php',
        'OCA\\Richdocuments\\Migration\\Version50200Date20211220212457' => __DIR__ . '/..' . '/../lib/Migration/Version50200Date20211220212457.php',
        'OCA\\Richdocuments\\PermissionManager' => __DIR__ . '/..' . '/../lib/PermissionManager.php',
        'OCA\\Richdocuments\\Preview\\EMF' => __DIR__ . '/..' . '/../lib/Preview/EMF.php',
        'OCA\\Richdocuments\\Preview\\MSExcel' => __DIR__ . '/..' . '/../lib/Preview/MSExcel.php',
        'OCA\\Richdocuments\\Preview\\MSWord' => __DIR__ . '/..' . '/../lib/Preview/MSWord.php',
        'OCA\\Richdocuments\\Preview\\OOXML' => __DIR__ . '/..' . '/../lib/Preview/OOXML.php',
        'OCA\\Richdocuments\\Preview\\Office' => __DIR__ . '/..' . '/../lib/Preview/Office.php',
        'OCA\\Richdocuments\\Preview\\OpenDocument' => __DIR__ . '/..' . '/../lib/Preview/OpenDocument.php',
        'OCA\\Richdocuments\\Preview\\Pdf' => __DIR__ . '/..' . '/../lib/Preview/Pdf.php',
        'OCA\\Richdocuments\\Reference\\OfficeTargetReferenceProvider' => __DIR__ . '/..' . '/../lib/Reference/OfficeTargetReferenceProvider.php',
        'OCA\\Richdocuments\\Service\\CapabilitiesService' => __DIR__ . '/..' . '/../lib/Service/CapabilitiesService.php',
        'OCA\\Richdocuments\\Service\\ConnectivityService' => __DIR__ . '/..' . '/../lib/Service/ConnectivityService.php',
        'OCA\\Richdocuments\\Service\\DemoService' => __DIR__ . '/..' . '/../lib/Service/DemoService.php',
        'OCA\\Richdocuments\\Service\\DiscoveryService' => __DIR__ . '/..' . '/../lib/Service/DiscoveryService.php',
        'OCA\\Richdocuments\\Service\\FederationService' => __DIR__ . '/..' . '/../lib/Service/FederationService.php',
        'OCA\\Richdocuments\\Service\\FileTargetService' => __DIR__ . '/..' . '/../lib/Service/FileTargetService.php',
        'OCA\\Richdocuments\\Service\\FontService' => __DIR__ . '/..' . '/../lib/Service/FontService.php',
        'OCA\\Richdocuments\\Service\\InitialStateService' => __DIR__ . '/..' . '/../lib/Service/InitialStateService.php',
        'OCA\\Richdocuments\\Service\\RemoteService' => __DIR__ . '/..' . '/../lib/Service/RemoteService.php',
        'OCA\\Richdocuments\\Service\\UserScopeService' => __DIR__ . '/..' . '/../lib/Service/UserScopeService.php',
        'OCA\\Richdocuments\\Settings\\Admin' => __DIR__ . '/..' . '/../lib/Settings/Admin.php',
        'OCA\\Richdocuments\\Settings\\Personal' => __DIR__ . '/..' . '/../lib/Settings/Personal.php',
        'OCA\\Richdocuments\\Settings\\Section' => __DIR__ . '/..' . '/../lib/Settings/Section.php',
        'OCA\\Richdocuments\\TemplateManager' => __DIR__ . '/..' . '/../lib/TemplateManager.php',
        'OCA\\Richdocuments\\Template\\CollaboraTemplateProvider' => __DIR__ . '/..' . '/../lib/Template/CollaboraTemplateProvider.php',
        'OCA\\Richdocuments\\TokenManager' => __DIR__ . '/..' . '/../lib/TokenManager.php',
        'OCA\\Richdocuments\\UploadException' => __DIR__ . '/..' . '/../lib/UploadException.php',
        'OCA\\Richdocuments\\WOPI\\Parser' => __DIR__ . '/..' . '/../lib/WOPI/Parser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitRichdocuments::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitRichdocuments::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitRichdocuments::$classMap;

        }, null, ClassLoader::class);
    }
}
