{*
* 2007-2013 PrestaShop  
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
*         DISCLAIMER   *
* *************************************** */
/* Do not edit or add to this file if you wish to upgrade Prestashop to newer
* versions in the future.
* ****************************************************
* @category   Belvg
* @package    Belvg_FastCheckout
* @author    Alexander Simonchik <support@belvg.com>
* @site
* @copyright  Copyright (c) 2010 - 2013 BelVG LLC. (http://www.belvg.com)
* @license    http://store.belvg.com/BelVG-LICENSE-COMMUNITY.txt 
*}

{if $status == 'ok'}
	<p>{l s='Your order on' mod='belvg_fastcheckout'} <span class="bold">{$shop_name}</span> {l s='is complete.' mod='belvg_fastcheckout'}
		<br /><br />
		{l s='Soon our manager contact you:' mod='belvg_fastcheckout'}

		<br /><br />{l s='An e-mail has been sent to you with this information.' mod='belvg_fastcheckout'}
		<br /><br />{l s='For any questions or for further information, please contact our' mod='belvg_fastcheckout'} <a href="{$link->getPageLink('contact', true)}">{l s='customer support' mod='belvg_fastcheckout'}</a>.
	</p>
{else}
	<p class="warning">
		{l s='We noticed a problem with your order. If you think this is an error, you can contact our' mod='belvg_fastcheckout'} 
		<a href="{$link->getPageLink('contact', true)}">{l s='customer support' mod='belvg_fastcheckout'}</a>.
	</p>
{/if}
