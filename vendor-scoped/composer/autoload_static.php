<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

use Composer\AutoloadAvatarPrivacy\ClassLoader as ClassLoaderAvatarPrivacy;


class ComposerStaticInitAvatarPrivacy
{
    public static $files = array (
        '9225a0386d6ac51467d73ac98777af38' => __DIR__ . '/../..' . '/includes/avatar-privacy-functions.php',
        '96cc9366f0f8a682f3b272c65c21b84f' => __DIR__ . '/../..' . '/includes/avatar-privacy/functions.php',
        '664e375fee598657b31fb4bcd80b6963' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
        ),
        'A' => 
        array (
            'Avatar_Privacy\\Vendor\\splitbrain\\RingIcon\\' => 42,
            'Avatar_Privacy\\Vendor\\Jdenticon\\' => 32,
            'Avatar_Privacy\\Vendor\\Dice\\' => 27,
            'Avatar_Privacy\\Vendor\\Colors\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Avatar_Privacy\\Vendor\\splitbrain\\RingIcon\\' => 
        array (
            0 => __DIR__ . '/..' . '/splitbrain/php-ringicon/src',
        ),
        'Avatar_Privacy\\Vendor\\Jdenticon\\' => 
        array (
            0 => __DIR__ . '/..' . '/jdenticon/jdenticon/src',
        ),
        'Avatar_Privacy\\Vendor\\Dice\\' => 
        array (
            0 => __DIR__ . '/..' . '/level-2/dice',
        ),
        'Avatar_Privacy\\Vendor\\Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
    );

    public static $classMap = array (
        'Avatar_Privacy\\Avatar_Handlers\\Avatar_Handler' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/class-avatar-handler.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Abstract_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/class-abstract-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Custom_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/class-custom-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generated_Icons\\Bird_Avatar_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generated-icons/class-bird-avatar-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generated_Icons\\Cat_Avatar_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generated-icons/class-cat-avatar-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generated_Icons\\Identicon_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generated-icons/class-identicon-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generated_Icons\\Monster_ID_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generated-icons/class-monster-id-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generated_Icons\\Retro_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generated-icons/class-retro-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generated_Icons\\Rings_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generated-icons/class-rings-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generated_Icons\\Robohash_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generated-icons/class-robohash-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generated_Icons\\Wavatar_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generated-icons/class-wavatar-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generating_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/class-generating-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generator' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/class-generator.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Bird_Avatar' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-bird-avatar.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Cat_Avatar' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-cat-avatar.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Jdenticon' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-jdenticon.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Monster_ID' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-monster-id.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\PNG_Parts_Generator' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-png-parts-generator.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Parts_Generator' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-parts-generator.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Retro' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-retro.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Rings' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-rings.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Robohash' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-robohash.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Generators\\Wavatar' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/generators/class-wavatar.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/class-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\SVG_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/class-svg-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Static_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/class-static-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Static_Icons\\Bowling_Pin_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/static-icons/class-bowling-pin-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Static_Icons\\Mystery_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/static-icons/class-mystery-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Static_Icons\\Silhouette_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/static-icons/class-silhouette-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons\\Static_Icons\\Speech_Bubble_Icon_Provider' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/default-icons/static-icons/class-speech-bubble-icon-provider.php',
        'Avatar_Privacy\\Avatar_Handlers\\Default_Icons_Handler' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/class-default-icons-handler.php',
        'Avatar_Privacy\\Avatar_Handlers\\Gravatar_Cache_Handler' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/class-gravatar-cache-handler.php',
        'Avatar_Privacy\\Avatar_Handlers\\Legacy_Icon_Handler' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/class-legacy-icon-handler.php',
        'Avatar_Privacy\\Avatar_Handlers\\User_Avatar_Handler' => __DIR__ . '/../..' . '/includes/avatar-privacy/avatar-handlers/class-user-avatar-handler.php',
        'Avatar_Privacy\\CLI\\Abstract_Command' => __DIR__ . '/../..' . '/includes/avatar-privacy/cli/class-abstract-command.php',
        'Avatar_Privacy\\CLI\\Command' => __DIR__ . '/../..' . '/includes/avatar-privacy/cli/class-command.php',
        'Avatar_Privacy\\CLI\\Cron_Command' => __DIR__ . '/../..' . '/includes/avatar-privacy/cli/class-cron-command.php',
        'Avatar_Privacy\\CLI\\Database_Command' => __DIR__ . '/../..' . '/includes/avatar-privacy/cli/class-database-command.php',
        'Avatar_Privacy\\CLI\\Default_Command' => __DIR__ . '/../..' . '/includes/avatar-privacy/cli/class-default-command.php',
        'Avatar_Privacy\\CLI\\Uninstall_Command' => __DIR__ . '/../..' . '/includes/avatar-privacy/cli/class-uninstall-command.php',
        'Avatar_Privacy\\CLI\\User_Command' => __DIR__ . '/../..' . '/includes/avatar-privacy/cli/class-user-command.php',
        'Avatar_Privacy\\Component' => __DIR__ . '/../..' . '/includes/avatar-privacy/class-component.php',
        'Avatar_Privacy\\Components\\Avatar_Handling' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-avatar-handling.php',
        'Avatar_Privacy\\Components\\Block_Editor' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-block-editor.php',
        'Avatar_Privacy\\Components\\Command_Line_Interface' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-command-line-interface.php',
        'Avatar_Privacy\\Components\\Comments' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-comments.php',
        'Avatar_Privacy\\Components\\Image_Proxy' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-image-proxy.php',
        'Avatar_Privacy\\Components\\Integrations' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-integrations.php',
        'Avatar_Privacy\\Components\\Network_Settings_Page' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-network-settings-page.php',
        'Avatar_Privacy\\Components\\Privacy_Tools' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-privacy-tools.php',
        'Avatar_Privacy\\Components\\Settings_Page' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-settings-page.php',
        'Avatar_Privacy\\Components\\Setup' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-setup.php',
        'Avatar_Privacy\\Components\\Shortcodes' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-shortcodes.php',
        'Avatar_Privacy\\Components\\Uninstallation' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-uninstallation.php',
        'Avatar_Privacy\\Components\\User_Profile' => __DIR__ . '/../..' . '/includes/avatar-privacy/components/class-user-profile.php',
        'Avatar_Privacy\\Controller' => __DIR__ . '/../..' . '/includes/avatar-privacy/class-controller.php',
        'Avatar_Privacy\\Core' => __DIR__ . '/../..' . '/includes/avatar-privacy/class-core.php',
        'Avatar_Privacy\\Core\\API' => __DIR__ . '/../..' . '/includes/avatar-privacy/core/class-api.php',
        'Avatar_Privacy\\Core\\Comment_Author_Fields' => __DIR__ . '/../..' . '/includes/avatar-privacy/core/class-comment-author-fields.php',
        'Avatar_Privacy\\Core\\Default_Avatars' => __DIR__ . '/../..' . '/includes/avatar-privacy/core/class-default-avatars.php',
        'Avatar_Privacy\\Core\\Settings' => __DIR__ . '/../..' . '/includes/avatar-privacy/core/class-settings.php',
        'Avatar_Privacy\\Core\\User_Fields' => __DIR__ . '/../..' . '/includes/avatar-privacy/core/class-user-fields.php',
        'Avatar_Privacy\\Data_Storage\\Cache' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/class-cache.php',
        'Avatar_Privacy\\Data_Storage\\Database\\Comment_Author_Table' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/database/class-comment-author-table.php',
        'Avatar_Privacy\\Data_Storage\\Database\\Hashes_Table' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/database/class-hashes-table.php',
        'Avatar_Privacy\\Data_Storage\\Database\\Table' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/database/class-table.php',
        'Avatar_Privacy\\Data_Storage\\Filesystem_Cache' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/class-filesystem-cache.php',
        'Avatar_Privacy\\Data_Storage\\Network_Options' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/class-network-options.php',
        'Avatar_Privacy\\Data_Storage\\Options' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/class-options.php',
        'Avatar_Privacy\\Data_Storage\\Site_Transients' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/class-site-transients.php',
        'Avatar_Privacy\\Data_Storage\\Transients' => __DIR__ . '/../..' . '/includes/avatar-privacy/data-storage/class-transients.php',
        'Avatar_Privacy\\Exceptions\\Avatar_Comment_Type_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-avatar-comment-type-exception.php',
        'Avatar_Privacy\\Exceptions\\Database_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-database-exception.php',
        'Avatar_Privacy\\Exceptions\\File_Deletion_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-file-deletion-exception.php',
        'Avatar_Privacy\\Exceptions\\Filesystem_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-filesystem-exception.php',
        'Avatar_Privacy\\Exceptions\\Form_Field_Not_Found_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-form-field-not-found-exception.php',
        'Avatar_Privacy\\Exceptions\\Invalid_Nonce_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-invalid-nonce-exception.php',
        'Avatar_Privacy\\Exceptions\\Object_Factory_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-object-factory-exception.php',
        'Avatar_Privacy\\Exceptions\\PNG_Image_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-png-image-exception.php',
        'Avatar_Privacy\\Exceptions\\Part_Files_Not_Found_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-part-files-not-found-exception.php',
        'Avatar_Privacy\\Exceptions\\Upload_Handling_Exception' => __DIR__ . '/../..' . '/includes/avatar-privacy/exceptions/class-upload-handling-exception.php',
        'Avatar_Privacy\\Factory' => __DIR__ . '/../..' . '/includes/avatar-privacy/class-factory.php',
        'Avatar_Privacy\\Integrations\\BBPress_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-bbpress-integration.php',
        'Avatar_Privacy\\Integrations\\BuddyPress_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-buddypress-integration.php',
        'Avatar_Privacy\\Integrations\\Plugin_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-plugin-integration.php',
        'Avatar_Privacy\\Integrations\\Simple_Author_Box_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-simple-author-box-integration.php',
        'Avatar_Privacy\\Integrations\\Simple_Local_Avatars_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-simple-local-avatars-integration.php',
        'Avatar_Privacy\\Integrations\\Simple_User_Avatar_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-simple-user-avatar-integration.php',
        'Avatar_Privacy\\Integrations\\Theme_My_Login_Profiles_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-theme-my-login-profiles-integration.php',
        'Avatar_Privacy\\Integrations\\Ultimate_Member_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-ultimate-member-integration.php',
        'Avatar_Privacy\\Integrations\\WPDiscuz_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-wpdiscuz-integration.php',
        'Avatar_Privacy\\Integrations\\WP_User_Manager_Integration' => __DIR__ . '/../..' . '/includes/avatar-privacy/integrations/class-wp-user-manager-integration.php',
        'Avatar_Privacy\\Requirements' => __DIR__ . '/../..' . '/includes/avatar-privacy/class-requirements.php',
        'Avatar_Privacy\\Tools\\HTML\\Dependencies' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/html/class-dependencies.php',
        'Avatar_Privacy\\Tools\\HTML\\User_Form' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/html/class-user-form.php',
        'Avatar_Privacy\\Tools\\Hasher' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/class-hasher.php',
        'Avatar_Privacy\\Tools\\Images\\Color' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/images/class-color.php',
        'Avatar_Privacy\\Tools\\Images\\Editor' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/images/class-editor.php',
        'Avatar_Privacy\\Tools\\Images\\Image_File' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/images/class-image-file.php',
        'Avatar_Privacy\\Tools\\Images\\Image_Stream' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/images/class-image-stream.php',
        'Avatar_Privacy\\Tools\\Images\\PNG' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/images/class-png.php',
        'Avatar_Privacy\\Tools\\Images\\SVG' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/images/class-svg.php',
        'Avatar_Privacy\\Tools\\Images\\Type' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/images/class-type.php',
        'Avatar_Privacy\\Tools\\Multisite' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/class-multisite.php',
        'Avatar_Privacy\\Tools\\Network\\Gravatar_Service' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/network/class-gravatar-service.php',
        'Avatar_Privacy\\Tools\\Network\\Remote_Image_Service' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/network/class-remote-image-service.php',
        'Avatar_Privacy\\Tools\\Number_Generator' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/class-number-generator.php',
        'Avatar_Privacy\\Tools\\Template' => __DIR__ . '/../..' . '/includes/avatar-privacy/tools/class-template.php',
        'Avatar_Privacy\\Upload_Handlers\\Custom_Default_Icon_Upload_Handler' => __DIR__ . '/../..' . '/includes/avatar-privacy/upload-handlers/class-custom-default-icon-upload-handler.php',
        'Avatar_Privacy\\Upload_Handlers\\UI\\File_Upload_Input' => __DIR__ . '/../..' . '/includes/avatar-privacy/upload-handlers/ui/class-file-upload-input.php',
        'Avatar_Privacy\\Upload_Handlers\\Upload_Handler' => __DIR__ . '/../..' . '/includes/avatar-privacy/upload-handlers/class-upload-handler.php',
        'Avatar_Privacy\\Upload_Handlers\\User_Avatar_Upload_Handler' => __DIR__ . '/../..' . '/includes/avatar-privacy/upload-handlers/class-user-avatar-upload-handler.php',
        'Avatar_Privacy\\Vendor\\Colors\\RandomColor' => __DIR__ . '/..' . '/mistic100/randomcolor/src/RandomColor.php',
        'Avatar_Privacy\\Vendor\\Dice\\Dice' => __DIR__ . '/..' . '/level-2/dice/Dice.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Canvas' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Canvas.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\CanvasContext' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/CanvasContext.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\ColorUtils' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/ColorUtils.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Matrix' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Matrix.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Png\\PngBuffer' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Png/PngBuffer.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Png\\PngEncoder' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Png/PngEncoder.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Png\\PngPalette' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Png/PngPalette.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Point' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Point.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\Edge' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/Edge.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\EdgeIntersection' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/EdgeIntersection.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\EdgeSuperSampleIntersection' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/EdgeSuperSampleIntersection.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\EdgeTable' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/EdgeTable.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\Layer' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/Layer.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\LayerManager' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/LayerManager.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\Rasterizer' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/Rasterizer.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\SuperSampleBuffer' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/SuperSampleBuffer.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Canvas\\Rasterization\\SuperSampleRange' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Canvas/Rasterization/SuperSampleRange.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Color' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Color.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Identicon' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Identicon.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\IdenticonStyle' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/IdenticonStyle.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\AbstractRenderer' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/AbstractRenderer.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\ColorTheme' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/ColorTheme.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\IconGenerator' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/IconGenerator.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\ImagickRenderer' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/ImagickRenderer.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\InternalPngRenderer' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/InternalPngRenderer.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\Point' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/Point.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\Rectangle' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/Rectangle.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\RendererInterface' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/RendererInterface.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\SvgPath' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/SvgPath.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\SvgRenderer' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/SvgRenderer.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\Transform' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/Transform.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Rendering\\TriangleDirection' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Rendering/TriangleDirection.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Shapes\\Shape' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Shapes/Shape.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Shapes\\ShapeCategory' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Shapes/ShapeCategory.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Shapes\\ShapeDefinitions' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Shapes/ShapeDefinitions.php',
        'Avatar_Privacy\\Vendor\\Jdenticon\\Shapes\\ShapePosition' => __DIR__ . '/..' . '/jdenticon/jdenticon/src/Shapes/ShapePosition.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\Data_Storage\\Abstract_Cache' => __DIR__ . '/..' . '/mundschenk-at/wp-data-storage/src/class-abstract-cache.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\Data_Storage\\Cache' => __DIR__ . '/..' . '/mundschenk-at/wp-data-storage/src/class-cache.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\Data_Storage\\Network_Options' => __DIR__ . '/..' . '/mundschenk-at/wp-data-storage/src/class-network-options.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\Data_Storage\\Options' => __DIR__ . '/..' . '/mundschenk-at/wp-data-storage/src/class-options.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\Data_Storage\\Site_Transients' => __DIR__ . '/..' . '/mundschenk-at/wp-data-storage/src/class-site-transients.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\Data_Storage\\Transients' => __DIR__ . '/..' . '/mundschenk-at/wp-data-storage/src/class-transients.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Abstract_Control' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/class-abstract-control.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Control' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/class-control.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Control_Factory' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/class-control-factory.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Checkbox_Input' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-checkbox-input.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Display_Text' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-display-text.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Hidden_Input' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-hidden-input.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Input' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-input.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Number_Input' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-number-input.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Select' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-select.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Submit_Input' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-submit-input.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Text_Input' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-text-input.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\UI\\Controls\\Textarea' => __DIR__ . '/..' . '/mundschenk-at/wp-settings-ui/src/ui/controls/class-textarea.php',
        'Avatar_Privacy\\Vendor\\Mundschenk\\WP_Requirements' => __DIR__ . '/..' . '/mundschenk-at/check-wp-requirements/class-wp-requirements.php',
        'Avatar_Privacy\\Vendor\\splitbrain\\RingIcon\\AbstractRingIcon' => __DIR__ . '/..' . '/splitbrain/php-ringicon/src/AbstractRingIcon.php',
        'Avatar_Privacy\\Vendor\\splitbrain\\RingIcon\\RingIcon' => __DIR__ . '/..' . '/splitbrain/php-ringicon/src/RingIcon.php',
        'Avatar_Privacy\\Vendor\\splitbrain\\RingIcon\\RingIconSVG' => __DIR__ . '/..' . '/splitbrain/php-ringicon/src/RingIconSVG.php',
    );

    public static function getInitializer(ClassLoaderAvatarPrivacy $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitAvatarPrivacy::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitAvatarPrivacy::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitAvatarPrivacy::$classMap;

        }, null, ClassLoaderAvatarPrivacy::class);
    }
}
