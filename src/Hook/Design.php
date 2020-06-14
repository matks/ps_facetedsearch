<?php
/**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\Module\FacetedSearch\Hook;

class Design extends AbstractHook
{
    const AVAILABLE_HOOKS = [
        'displayLeftColumn',
    ];

    /**
     * Force this hook to be called here instance of using WidgetInterface
     * because Hook::isHookCallableOn before the instanceof function.
     * Which means is_callable always returns true with a __call usage.
     *
     * @param array $params
     */
    public function displayLeftColumn(array $params)
    {
        return $this->module->fetch('module:ps_facetedsearch/ps_facetedsearch.tpl');
    }
}
