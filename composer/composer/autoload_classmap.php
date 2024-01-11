<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = $vendorDir;

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'OCA\\Richdocuments\\AppConfig' => $baseDir . '/../lib/AppConfig.php',
    'OCA\\Richdocuments\\AppInfo\\Application' => $baseDir . '/../lib/AppInfo/Application.php',
    'OCA\\Richdocuments\\Backgroundjobs\\Cleanup' => $baseDir . '/../lib/Backgroundjobs/Cleanup.php',
    'OCA\\Richdocuments\\Backgroundjobs\\ObtainCapabilities' => $baseDir . '/../lib/Backgroundjobs/ObtainCapabilities.php',
    'OCA\\Richdocuments\\Capabilities' => $baseDir . '/../lib/Capabilities.php',
    'OCA\\Richdocuments\\Command\\ActivateConfig' => $baseDir . '/../lib/Command/ActivateConfig.php',
    'OCA\\Richdocuments\\Command\\ConvertToBigInt' => $baseDir . '/../lib/Command/ConvertToBigInt.php',
    'OCA\\Richdocuments\\Command\\InstallDefaultFonts' => $baseDir . '/../lib/Command/InstallDefaultFonts.php',
    'OCA\\Richdocuments\\Command\\UpdateEmptyTemplates' => $baseDir . '/../lib/Command/UpdateEmptyTemplates.php',
    'OCA\\Richdocuments\\Controller\\AssetsController' => $baseDir . '/../lib/Controller/AssetsController.php',
    'OCA\\Richdocuments\\Controller\\Attribute\\RestrictToWopiServer' => $baseDir . '/../lib/Controller/Attribute/RestrictToWopiServer.php',
    'OCA\\Richdocuments\\Controller\\DirectViewController' => $baseDir . '/../lib/Controller/DirectViewController.php',
    'OCA\\Richdocuments\\Controller\\DocumentAPIController' => $baseDir . '/../lib/Controller/DocumentAPIController.php',
    'OCA\\Richdocuments\\Controller\\DocumentController' => $baseDir . '/../lib/Controller/DocumentController.php',
    'OCA\\Richdocuments\\Controller\\DocumentTrait' => $baseDir . '/../lib/Controller/DocumentTrait.php',
    'OCA\\Richdocuments\\Controller\\FederationController' => $baseDir . '/../lib/Controller/FederationController.php',
    'OCA\\Richdocuments\\Controller\\OCSController' => $baseDir . '/../lib/Controller/OCSController.php',
    'OCA\\Richdocuments\\Controller\\SettingsController' => $baseDir . '/../lib/Controller/SettingsController.php',
    'OCA\\Richdocuments\\Controller\\TargetController' => $baseDir . '/../lib/Controller/TargetController.php',
    'OCA\\Richdocuments\\Controller\\TemplatesController' => $baseDir . '/../lib/Controller/TemplatesController.php',
    'OCA\\Richdocuments\\Controller\\WopiController' => $baseDir . '/../lib/Controller/WopiController.php',
    'OCA\\Richdocuments\\Db\\Asset' => $baseDir . '/../lib/Db/Asset.php',
    'OCA\\Richdocuments\\Db\\AssetMapper' => $baseDir . '/../lib/Db/AssetMapper.php',
    'OCA\\Richdocuments\\Db\\Direct' => $baseDir . '/../lib/Db/Direct.php',
    'OCA\\Richdocuments\\Db\\DirectMapper' => $baseDir . '/../lib/Db/DirectMapper.php',
    'OCA\\Richdocuments\\Db\\Wopi' => $baseDir . '/../lib/Db/Wopi.php',
    'OCA\\Richdocuments\\Db\\WopiMapper' => $baseDir . '/../lib/Db/WopiMapper.php',
    'OCA\\Richdocuments\\Events\\BeforeFederationRedirectEvent' => $baseDir . '/../lib/Events/BeforeFederationRedirectEvent.php',
    'OCA\\Richdocuments\\Events\\DocumentOpenedEvent' => $baseDir . '/../lib/Events/DocumentOpenedEvent.php',
    'OCA\\Richdocuments\\Exceptions\\ExpiredTokenException' => $baseDir . '/../lib/Exceptions/ExpiredTokenException.php',
    'OCA\\Richdocuments\\Exceptions\\UnknownTokenException' => $baseDir . '/../lib/Exceptions/UnknownTokenException.php',
    'OCA\\Richdocuments\\Helper' => $baseDir . '/../lib/Helper.php',
    'OCA\\Richdocuments\\Listener\\AddContentSecurityPolicyListener' => $baseDir . '/../lib/Listener/AddContentSecurityPolicyListener.php',
    'OCA\\Richdocuments\\Listener\\AddFeaturePolicyListener' => $baseDir . '/../lib/Listener/AddFeaturePolicyListener.php',
    'OCA\\Richdocuments\\Listener\\BeforeFetchPreviewListener' => $baseDir . '/../lib/Listener/BeforeFetchPreviewListener.php',
    'OCA\\Richdocuments\\Listener\\FileCreatedFromTemplateListener' => $baseDir . '/../lib/Listener/FileCreatedFromTemplateListener.php',
    'OCA\\Richdocuments\\Listener\\LoadViewerListener' => $baseDir . '/../lib/Listener/LoadViewerListener.php',
    'OCA\\Richdocuments\\Listener\\ReferenceListener' => $baseDir . '/../lib/Listener/ReferenceListener.php',
    'OCA\\Richdocuments\\Listener\\ShareLinkListener' => $baseDir . '/../lib/Listener/ShareLinkListener.php',
    'OCA\\Richdocuments\\Middleware\\WOPIMiddleware' => $baseDir . '/../lib/Middleware/WOPIMiddleware.php',
    'OCA\\Richdocuments\\Migration\\InstallDefaultFonts' => $baseDir . '/../lib/Migration/InstallDefaultFonts.php',
    'OCA\\Richdocuments\\Migration\\Version2060Date20200302131958' => $baseDir . '/../lib/Migration/Version2060Date20200302131958.php',
    'OCA\\Richdocuments\\Migration\\Version2060Date20200302132145' => $baseDir . '/../lib/Migration/Version2060Date20200302132145.php',
    'OCA\\Richdocuments\\Migration\\Version30704Date20200626072306' => $baseDir . '/../lib/Migration/Version30704Date20200626072306.php',
    'OCA\\Richdocuments\\Migration\\Version30709Date20201111104147' => $baseDir . '/../lib/Migration/Version30709Date20201111104147.php',
    'OCA\\Richdocuments\\Migration\\Version30717Date20210310164901' => $baseDir . '/../lib/Migration/Version30717Date20210310164901.php',
    'OCA\\Richdocuments\\Migration\\Version50200Date20211220212457' => $baseDir . '/../lib/Migration/Version50200Date20211220212457.php',
    'OCA\\Richdocuments\\PermissionManager' => $baseDir . '/../lib/PermissionManager.php',
    'OCA\\Richdocuments\\Preview\\EMF' => $baseDir . '/../lib/Preview/EMF.php',
    'OCA\\Richdocuments\\Preview\\MSExcel' => $baseDir . '/../lib/Preview/MSExcel.php',
    'OCA\\Richdocuments\\Preview\\MSWord' => $baseDir . '/../lib/Preview/MSWord.php',
    'OCA\\Richdocuments\\Preview\\OOXML' => $baseDir . '/../lib/Preview/OOXML.php',
    'OCA\\Richdocuments\\Preview\\Office' => $baseDir . '/../lib/Preview/Office.php',
    'OCA\\Richdocuments\\Preview\\OpenDocument' => $baseDir . '/../lib/Preview/OpenDocument.php',
    'OCA\\Richdocuments\\Preview\\Pdf' => $baseDir . '/../lib/Preview/Pdf.php',
    'OCA\\Richdocuments\\Reference\\OfficeTargetReferenceProvider' => $baseDir . '/../lib/Reference/OfficeTargetReferenceProvider.php',
    'OCA\\Richdocuments\\Service\\CapabilitiesService' => $baseDir . '/../lib/Service/CapabilitiesService.php',
    'OCA\\Richdocuments\\Service\\ConnectivityService' => $baseDir . '/../lib/Service/ConnectivityService.php',
    'OCA\\Richdocuments\\Service\\DemoService' => $baseDir . '/../lib/Service/DemoService.php',
    'OCA\\Richdocuments\\Service\\DiscoveryService' => $baseDir . '/../lib/Service/DiscoveryService.php',
    'OCA\\Richdocuments\\Service\\FederationService' => $baseDir . '/../lib/Service/FederationService.php',
    'OCA\\Richdocuments\\Service\\FileTargetService' => $baseDir . '/../lib/Service/FileTargetService.php',
    'OCA\\Richdocuments\\Service\\FontService' => $baseDir . '/../lib/Service/FontService.php',
    'OCA\\Richdocuments\\Service\\InitialStateService' => $baseDir . '/../lib/Service/InitialStateService.php',
    'OCA\\Richdocuments\\Service\\RemoteService' => $baseDir . '/../lib/Service/RemoteService.php',
    'OCA\\Richdocuments\\Service\\UserScopeService' => $baseDir . '/../lib/Service/UserScopeService.php',
    'OCA\\Richdocuments\\Settings\\Admin' => $baseDir . '/../lib/Settings/Admin.php',
    'OCA\\Richdocuments\\Settings\\Personal' => $baseDir . '/../lib/Settings/Personal.php',
    'OCA\\Richdocuments\\Settings\\Section' => $baseDir . '/../lib/Settings/Section.php',
    'OCA\\Richdocuments\\TemplateManager' => $baseDir . '/../lib/TemplateManager.php',
    'OCA\\Richdocuments\\Template\\CollaboraTemplateProvider' => $baseDir . '/../lib/Template/CollaboraTemplateProvider.php',
    'OCA\\Richdocuments\\TokenManager' => $baseDir . '/../lib/TokenManager.php',
    'OCA\\Richdocuments\\UploadException' => $baseDir . '/../lib/UploadException.php',
    'OCA\\Richdocuments\\WOPI\\Parser' => $baseDir . '/../lib/WOPI/Parser.php',
);
