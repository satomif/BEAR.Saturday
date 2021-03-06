<?php
/**
 * BEAR
 *
 * PHP versions 5
 *
 * @category  BEAR
 * @package   BEAR_Resource
 * @author    Akihito Koriyama <akihito.koriyama@gmail.com>
 * @copyright 2008-2017 Akihito Koriyama  All rights reserved.
 * @license   http://opensource.org/licenses/bsd-license.php BSD
 * @version    @package_version@
 * @link      https://github.com/bearsaturday
 */

/**
 * リソースリクエストインターフェイス
 *
 * 実行クラスはBEAR/Resource/Request/Excecute/以下に配置します。
 *
 * @category   BEAR
 * @package    BEAR_Resource
 * @subpackage Execute
 * @author     Akihito Koriyama <akihito.koriyama@gmail.com>
 * @copyright  2008 Akihito Koriyama  All rights reserved.
 * @license    http://opensource.org/licenses/bsd-license.php BSD
 * @version    @package_version@
 * @link       https://github.com/bearsaturday
 */
interface BEAR_Resource_Request_Interface
{
    /**
     * リソースリクエスト
     *
     * @param string $method  メソッド
     * @param string $uri     URI
     * @param array  $values  引数
     * @param array  $options オプション
     *
     * @return mixed
     */
    public function request($method, $uri, array $values = array(), array $options = array());
}
