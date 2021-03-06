{*
 * Smartsupp Live Chat integration module.
 * 
 * @package   Smartsupp
 * @author    Smartsupp <vladimir@smartsupp.com>
 * @link      http://www.smartsupp.com
 * @copyright 2016 Smartsupp.com
 * @license   GPL-2.0+
 *
 * Plugin Name:       Smartsupp Live Chat
 * Plugin URI:        http://www.smartsupp.com
 * Description:       Adds Smartsupp Live Chat code to PrestaShop.
 * Version:           2.1.8
 * Author:            Smartsupp
 * Author URI:        http://www.smartsupp.com
 * Text Domain:       smartsupp
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *}

<div id="smartsupp_create_account" class="panel">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<img src="{$module_dir|escape:'html':'UTF-8'}views/img/smartsupp_logo.png" alt="Smartsupp" />
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button id="connect_existing_account_btn2" class="btn btn-default pull-right">{l s='Connect existing account' mod='smartsupp'}</button>
		</div>
	</div>
	<hr/>
        <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                        <p>
                                <strong class="heading">{l s='Create a free account' mod='smartsupp'}</strong>
                        </p>
                        <p>
                                <div class="input-group">
                                    <span class="input-group-addon"> {l s='E-mail' mod='smartsupp'}</span>
                                    <input id="SMARTSUPP_EMAIL" type="text" size="30" value="" name="SMARTSUPP_EMAIL">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"> {l s='Password' mod='smartsupp'} </span>
                                    <input id="SMARTSUPP_PASSWORD" type="password" size="30" value="" name="SMARTSUPP_PASSWORD">
                                </div>                                        
                                <br/>
                                <div class="input-group">
                                    <input id="SMARTSUPP_DPA" type="checkbox" value="" name="SMARTSUPP_DPA">
                                    <label id="SMARTSUPP_DPA_LABEL" for="SMARTSUPP_DPA">{l s='I have read and agree with' mod='smartsupp'} <a href="https://www.smartsupp.com/terms" target="_blank">{l s='Terms' mod='smartsupp'}</a> {l s='and' mod='smartsupp'} <a href="https://www.smartsupp.com/dpa" target="_blank">{l s='DPA' mod='smartsupp'}</a> {l s=' ' mod='smartsupp'}</label>
                                </div>                                        
                        </p>
                        <div class="center-block">
                                <button id="create_account_do" class="btn btn-primary btn-lg">{l s='Sign up' mod='smartsupp'}</button>
                        </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
        </div>
        <br/>
	<hr/>
        <div class="row text-center">
                <p>
                        <strong class="heading">{l s='Trusted by more that 55 000 companies' mod='smartsupp'}</strong>
                </p>
                <div class="customers">
                        <a>
                                <img alt="??KODA AUTO" src="{$module_dir|escape:'html':'UTF-8'}views/img/skoda.png">
                        </a>
                        <a>
                                <img alt="Gekko Computer" src="{$module_dir|escape:'html':'UTF-8'}views/img/gekko_computer.png">
                        </a>
                        <a>
                                <img alt="Lememo" src="{$module_dir|escape:'html':'UTF-8'}views/img/lememo.png">
                        </a>
                        <a>
                                <img alt="Vinoselecci??n" src="{$module_dir|escape:'html':'UTF-8'}views/img/vinoseleccion.png">
                        </a>
                        <a>
                                <img alt="Conrad" src="{$module_dir|escape:'html':'UTF-8'}views/img/conrad.png">
                        </a>
                </div>
        </div>
</div>