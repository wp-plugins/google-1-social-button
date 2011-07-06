<?php if ( ! defined('WP_CONTENT_DIR')) exit('No direct script access allowed'); ?>

<div class="wrap">
    <?php screen_icon('plugins'); ?>
    <h2>Settings for Google +1 (Social Button)</h2>
    <?php print $msg; ?>
    
    <form method="post" action="">
        <table class="form-table">
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top">
                <th scope="row"><label for="google1_languages">Languages</label></th>
                <td>
                    <select name="google1_languages" id="google1_languages">
                            <option value="ar" selected="selected">Arabic - العربية</option>
                            <option value="bg" <?php if( get_option('google1_languages') == 'bg' ) echo 'selected="selected"'; ?>>Bulgarian - български</option>
                            <option value="ca" <?php if( get_option('google1_languages') == 'ca' ) echo 'selected="selected"'; ?>>Catalan - català</option>
                            <option value="zh-CN" <?php if( get_option('google1_languages') == 'zh-CN' ) echo 'selected="selected"'; ?>>Chinese (Simplified) - 中文 ‏（簡体）</option>
                            <option value="zh-TW" <?php if( get_option('google1_languages') == 'zh-TW' ) echo 'selected="selected"'; ?>>Chinese (Traditional) - 中文 ‏（繁體）</option>
                            <option value="hr" <?php if( get_option('google1_languages') == 'hr' ) echo 'selected="selected"'; ?>>Croatian - hrvatski</option>
                            <option value="cs" <?php if( get_option('google1_languages') == 'cs' ) echo 'selected="selected"'; ?>>Czech - čeština</option>
                            <option value="da" <?php if( get_option('google1_languages') == 'da' ) echo 'selected="selected"'; ?>>Danish - dansk</option>
                            <option value="nl" <?php if( get_option('google1_languages') == 'nl' ) echo 'selected="selected"'; ?>>Dutch - Nederlands</option>
                            <option value="en-US" <?php if( get_option('google1_languages') == 'en-US' ) echo 'selected="selected"'; ?>>English (US) - English ‏(US)</option>
                            <option value="en-GB" <?php if( get_option('google1_languages') == 'en-GB' ) echo 'selected="selected"'; ?>>English (UK) - English ‏(UK)</option>
                            <option value="et" <?php if( get_option('google1_languages') == 'et' ) echo 'selected="selected"'; ?>>Estonian - eesti</option>
                            <option value="fil" <?php if( get_option('google1_languages') == 'fil' ) echo 'selected="selected"'; ?>>Filipino - Filipino</option>
                            <option value="fi" <?php if( get_option('google1_languages') == 'fi' ) echo 'selected="selected"'; ?>>Finnish - suomi</option>
                            <option value="fr" <?php if( get_option('google1_languages') == 'fr' ) echo 'selected="selected"'; ?>>French - français</option>
                            <option value="de" <?php if( get_option('google1_languages') == 'de' ) echo 'selected="selected"'; ?>>German - Deutsch</option>
                            <option value="el" <?php if( get_option('google1_languages') == 'el' ) echo 'selected="selected"'; ?>>Greek - Ελληνικά</option>
                            <option value="iw" <?php if( get_option('google1_languages') == 'iw' ) echo 'selected="selected"'; ?>>Hebrew - עברית</option>
                            <option value="hi" <?php if( get_option('google1_languages') == 'hi' ) echo 'selected="selected"'; ?>>Hindi - हिन्दी</option>
                            <option value="hu" <?php if( get_option('google1_languages') == 'hu' ) echo 'selected="selected"'; ?>>Hungarian - magyar</option>
                            <option value="id" <?php if( get_option('google1_languages') == 'id' ) echo 'selected="selected"'; ?>>Indonesian - Bahasa Indonesia</option>
                            <option value="it" <?php if( get_option('google1_languages') == 'it' ) echo 'selected="selected"'; ?>>Italian - italiano</option>
                            <option value="ja" <?php if( get_option('google1_languages') == 'ja' ) echo 'selected="selected"'; ?>>Japanese - 日本語</option>
                            <option value="ko" <?php if( get_option('google1_languages') == 'ko' ) echo 'selected="selected"'; ?>>Korean - 한국어</option>
                            <option value="lv" <?php if( get_option('google1_languages') == 'lv' ) echo 'selected="selected"'; ?>>Latvian - latviešu</option>
                            <option value="lt" <?php if( get_option('google1_languages') == 'lt' ) echo 'selected="selected"'; ?>>Lithuanian - lietuvių</option>
                            <option value="ms" <?php if( get_option('google1_languages') == 'ms' ) echo 'selected="selected"'; ?>>Malay - Bahasa Melayu</option>
                            <option value="no" <?php if( get_option('google1_languages') == 'no' ) echo 'selected="selected"'; ?>>Norwegian - norsk</option>
                            <option value="fa" <?php if( get_option('google1_languages') == 'fa' ) echo 'selected="selected"'; ?>>Persian - فارسی</option>
                            <option value="pl" <?php if( get_option('google1_languages') == 'pl' ) echo 'selected="selected"'; ?>>Polish - polski</option>
                            <option value="pt-BR" <?php if( get_option('google1_languages') == 'pt-BR' ) echo 'selected="selected"'; ?>>Portuguese (Brazil) - português ‏(Brasil)</option>
                            <option value="pt-PT" <?php if( get_option('google1_languages') == 'pt-PT' ) echo 'selected="selected"'; ?>>Portuguese (Portugal) - Português ‏(Portugal)</option>
                            <option value="ro" <?php if( get_option('google1_languages') == 'ro' ) echo 'selected="selected"'; ?>>Romanian - română</option>
                            <option value="ru" <?php if( get_option('google1_languages') == 'ru' ) echo 'selected="selected"'; ?>>Russian - русский</option>
                            <option value="sr" <?php if( get_option('google1_languages') == 'sr' ) echo 'selected="selected"'; ?>>Serbian - српски</option>
                            <option value="sv" <?php if( get_option('google1_languages') == 'sv' ) echo 'selected="selected"'; ?>>Swedish - svenska</option>
                            <option value="sk" <?php if( get_option('google1_languages') == 'sk' ) echo 'selected="selected"'; ?>>Slovak - slovenský</option>
                            <option value="sl" <?php if( get_option('google1_languages') == 'sl' ) echo 'selected="selected"'; ?>>Slovenian - slovenščina</option>
                            <option value="es" <?php if( get_option('google1_languages') == 'es' ) echo 'selected="selected"'; ?>>Spanish - español</option>
                            <option value="es-419" <?php if( get_option('google1_languages') == 'es-419' ) echo 'selected="selected"'; ?>>Spanish (Latin America) - español ‏(Latinoamérica y el Caribe)</option>
                            <option value="th" <?php if( get_option('google1_languages') == 'th' ) echo 'selected="selected"'; ?>>Thai - ไทย</option>
                            <option value="tr" <?php if( get_option('google1_languages') == 'tr' ) echo 'selected="selected"'; ?>>Turkish - Türkçe</option>
                            <option value="uk" <?php if( get_option('google1_languages') == 'uk' ) echo 'selected="selected"'; ?>>Ukrainian - українська</option>
                            <option value="vi" <?php if( get_option('google1_languages') == 'vi' ) echo 'selected="selected"'; ?>>Vietnamese - Tiếng Việt</option>
                    </select>
                </td>
            </tr>
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top">
                <th scope="row"><label for="button">Button Type</label></th>
                <td>
                    <select name="google1_button_type" id="google1_button_type">
                        <option value="sm_with_count">Small with Count</option>
                        <option value="sm_without_count" <?php if( get_option('google1_button_type') == 'sm_without_count' ) echo 'selected="selected"'; ?>>Small without Count</option>
                        <option value="m_with_count" <?php if( get_option('google1_button_type') == 'm_with_count' ) echo 'selected="selected"'; ?>>Medium with Count</option>
                        <option value="m_without_count" <?php if( get_option('google1_button_type') == 'm_without_count' ) echo 'selected="selected"'; ?>>Medium without Count</option>
                        <option value="st_with_count" <?php if( get_option('google1_button_type') == 'st_with_count' ) echo 'selected="selected"'; ?>>Standard with Count</option>
                        <option value="st_without_count" <?php if( get_option('google1_button_type') == 'st_without_count' ) echo 'selected="selected"'; ?>>Standard without Count</option>
                        <option value="t_with_count" <?php if( get_option('google1_button_type') == 't_with_count' ) echo 'selected="selected"'; ?>>Tall</option>
                    </select>
                </td>
            </tr>
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top">
                <th scope="row"><label for="button">Button Preview</label></th>
                <td style="height: 80px">
                    <div id="preview_google1_button" style="width:98px; height:64px; overflow:hidden;">
                    <img id="preview_google1_button" class="preview_sm_with_count" src="<?php echo plugins_url( 'images/sm_with_count.gif' , __FILE__ ) ?>" style="display:none" />
                    <img id="preview_google1_button" class="preview_sm_without_count" src="<?php echo plugins_url( 'images/sm_without_count.gif' , __FILE__ ) ?>" style="display:none" />
                    <img id="preview_google1_button" class="preview_m_with_count" src="<?php echo plugins_url( 'images/m_with_count.gif' , __FILE__ ) ?>" style="display:none" />
                    <img id="preview_google1_button" class="preview_m_without_count" src="<?php echo plugins_url( 'images/m_without_count.gif' , __FILE__ ) ?>" style="display:none" />
                    <img id="preview_google1_button" class="preview_st_with_count" src="<?php echo plugins_url( 'images/st_with_count.gif' , __FILE__ ) ?>" style="display:none" />
                    <img id="preview_google1_button" class="preview_st_without_count" src="<?php echo plugins_url( 'images/st_without_count.gif' , __FILE__ ) ?>" style="display:none" />
                    <img id="preview_google1_button" class="preview_t_with_count" src="<?php echo plugins_url( 'images/t_with_count.gif' , __FILE__ ) ?>" style="display:none"/>
                    <?php
                        $google1_preview = get_option('google1_button_type');
                        switch( $google1_preview ){
                            case 'sm_with_count':
                                echo '<img id="preview_google1_button" class="preview_sm_with_count" src="'. plugins_url( 'images/sm_with_count.gif' , __FILE__ ).' " />';
                                break;
                            case 'sm_without_count':
                                echo '<img id="preview_google1_button" class="preview_sm_without_count" src="'. plugins_url( 'images/sm_without_count.gif' , __FILE__ ).' " />';
                                break;
                            case 'm_with_count':
                                echo '<img id="preview_google1_button" class="preview_m_with_count" src="'. plugins_url( 'images/m_with_count.gif' , __FILE__ ).' " />';
                                break;
                            case 'm_without_count':
                                echo '<img id="preview_google1_button" class="preview_m_without_count" src="'. plugins_url( 'images/m_without_count.gif' , __FILE__ ).' " />';
                                break;
                            case 'st_with_count':
                                echo '<img id="preview_google1_button" class="preview_st_with_count" src="'. plugins_url( 'images/st_with_count.gif' , __FILE__ ).' " />';
                                break;
                            case 'st_without_count':
                                echo '<img id="preview_google1_button" class="preview_st_without_count" src="'. plugins_url( 'images/st_without_count.gif' , __FILE__ ).' " />';
                                break;
                            case 't_with_count':
                                echo '<img id="preview_google1_button" class="preview_t_with_count" src="'. plugins_url( 'images/t_with_count.gif' , __FILE__ ).' " />';
                                break;
                            
                        }
                    ?>
                    </div>
                </td>
            </tr>
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top">
                <th scope="row">Where</th>
                <td>
                    <input type="checkbox" value="1" name="google1_display_front" group="google1_display" <?php if( get_option('google1_display_front') == '1' ) echo 'checked="checked"'; ?>>
                    <label for="google1_display_front">Display the button on the front page (home)</label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"></th>
                <td>
                    <input type="checkbox" value="1" name="google1_display_page" group="google1_display" <?php if( get_option('google1_display_page') == '1' ) echo 'checked="checked"'; ?>>
                    <label for="google1_display_page">Display the button on pages</label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"></th>
                <td>
                    <input type="checkbox" value="1" name="google1_display_single" group="google1_display" <?php if( get_option('google1_display_single') == '1' ) echo 'checked="checked"'; ?>>
                    <label for="google1_display_single">Display the button on the single post page</label>
                </td>
            </tr>
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top">
                <th scope="row">Position</th>
                <td>
                    <select name="google1_position">
                        <option value="before">before the content</option>
                        <option value="after" <?php if(get_option('google1_position') == 'after') echo 'selected="selected"'; ?> >after the content</option>
                    </select>
                </td>
            </tr>
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top"><th scope="row"></th><td></td></tr>
            <tr valign="top">
                <th scope="row"></th>
                <td>
                    <input type="submit" name="save" value="<?php _e('Save Options') ?>" class="button-primary" />
                    <?php wp_nonce_field('google1_admin_options_update'); ?>
                </td>
            </tr>
            
        </table>
    </form>
</div>