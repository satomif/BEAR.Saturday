<?php
/**
 * BEAR
 *
 * PHP versions 5
 *
 * @category   BEAR
 * @package    BEAR_Resource
 * @subpackage Output
 * @author     Akihito Koriyama <akihito.koriyama@gmail.com>
 * @copyright  2008-2017 Akihito Koriyama All rights reserved.
 * @license    http://opensource.org/licenses/bsd-license.php BSD
 * @version    @package_version@
 * @link       https://github.com/bearsaturday
 */

/**
 * JSON出力
 *
 * @param array $values  値
 * @param array $options オプション
 *
 * @return BEAR_Ro
 */
function outputJson(
    $values,
    /** @noinspection PhpUnusedParameterInspection */
    array $options
) {
    $body = json_encode($values);
    $headers = array('X-BEAR-Output: JSON' => 'Content-Type: text/javascript+json; charset=utf-8');
    $ro = BEAR::factory('BEAR_Ro');
    $ro->setBody($body);
    $ro->setHeaders($headers);
    return $ro;
}
