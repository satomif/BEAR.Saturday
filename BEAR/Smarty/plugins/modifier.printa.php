<?php
/**
 * BEAR
 *
 * PHP versions 5
 *
 * @category   BEAR
 * @package    BEAR_Smarty
 * @subpackage Plugin
 * @author     Akihito Koriyama <akihito.koriyama@gmail.com>
 * @copyright  2008-2017 Akihito Koriyama  All rights reserved.
 * @license    http://opensource.org/licenses/bsd-license.php BSD
 * @version    @package_version@
 * @link       https://github.com/bearsaturday
 */

/**
 * print_a表示
 *
 * <pre>
 * デバック用表示（print_a）します
 *
 * Example
 * </pre>
 * <code>
 * {$body|printa}
 * </code>
 *
 * @category   BEAR
 * @package    BEAR_Smarty
 * @subpackage Plugin
 * @author     Akihito Koriyama <akihito.koriyama@gmail.com>
 * @copyright  2008-2017 Akihito Koriyama  All rights reserved.
 * @license    http://opensource.org/licenses/bsd-license.php BSD
 * @version    @package_version@
 * @link       https://github.com/bearsaturday
 *
 * @param string $string 文字列
 *
 * @return string
 */
function smarty_modifier_printa($string)
{
    if (!function_exists('print_a')) {
        /** @noinspection PhpIncludeInspection */
        include 'BEAR/vendors/debuglib.php';
    }
    $string = print_a($string, "return:true");
    return $string;
}
