<?php

class Qcld_woowbot_info_page
{

    function __construct()
    {
        add_action('admin_menu', array($this, 'qcopd_info_menu'));
    }

    function qcopd_info_menu(){
        
        add_submenu_page(
            'woowbot',
            esc_html__('Help'),
            esc_html__('Help'),
            'manage_options',
            'qcld_woowbot_info_page',
            array( $this, 'qcopd_info_page_content' )
        );
    }

    function qcopd_info_page_content()
    {
        ?>
        <style>


            .qc-plugin-help-container {
                padding: 20px;
                background-color: #fff;
                border: 1px solid #cccccc;
                margin: 0 14px;
				width: 100%;
				margin-top: -18px;
				
            }

            .qc-plugin-help-heading-lg {
                border-bottom: 1px dashed #cccccc;
                margin: 0 0 10px;
                padding: 20px 0;
            }
			* {

				webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;


			}
        </style>
        <div class="wrap">

            <div id="poststuff">

                <div id="post-body" class="metabox-holder">

                    <div id="post-body-content" style="position: relative;">


                        <div class="qc-plugin-help-container">
                            <h3 class="qc-plugin-help-heading-lg"><?php esc_html_e('Help', 'woochatbot'); ?></h3>
                            <p>
                                <?php esc_html_e('Getting started with WoowBot is instantaneous. All you need to do is install and activate the plugin.', 'woochatbot'); ?>
                            </p>
                            <p>
                                <?php esc_html_e('You can upload your own ChatBot icon from WoowBot panel->Icons section.', 'woochatbot'); ?>
                            </p>
                            <p>
                                <?php esc_html_e('You can also upload a custom Agent icon in the pro version.', 'woochatbot'); ?>
                            </p>
                            <p>
                                <?php esc_html_e('In the lite version there are a few language settings that you can customize to your need. The default languages are fine for stores using the English language. But you can change the bot responses literally into any language!', 'woochatbot'); ?>
                            </p>
                            <p><?php esc_html_e('Use the custom CSS panel if you need to tweak some colors or font settings inside WoowBot.', 'woochatbot'); ?></p>
                            
                            <div class="clear"></div>
                            

							<div style="position:relative">
							<div style="position: absolute;right: 0;top: 174px;">
								<img src="<?php echo esc_url(QCLD_WOOCHATBOT_PLUGIN_URL.'images/woowbot-chatbot.jpg'); ?>" />
							</div>
                            <h3><?php esc_html_e('Why You Should Upgrade to the WoowBot Pro version :', 'woochatbot'); ?></h3>
                            <p><?php esc_html_e('Please consider upgrading to the pro version. Not only will you get a set of cutting edge features to improve sales on your store – you will  also be contributing to the continued development and improvement of this plugin.', 'woochatbot'); ?></p>
                            <h4><?php esc_html_e('Here are some highlights of the WoowBot pro version features :', 'woochatbot'); ?></h4>
                            <ol style="list-style: circle;    width: 60%;">
                                <li><?php esc_html_e('Many useful, built in features', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Google', 'woochatbot'); ?> <strong><?php esc_html_e('Artificial Intelligence', 'woochatbot'); ?></strong>, <?php esc_html_e('Machine Learning or AI Engine with DialogFlow', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Natural Language Processing', 'woochatbot'); ?></strong> <?php esc_html_e('through Google\'s', 'woochatbot'); ?> <strong><?php esc_html_e('DialogFlow', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Automatically supports Custom Intents and Responses', 'woochatbot'); ?></strong> <?php esc_html_e('You Create in Dialog Flow', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Automatically supports', 'woochatbot'); ?> <strong><?php esc_html_e('Follow Up Intents', 'woochatbot'); ?></strong> <?php esc_html_e('and step by step Question Answers through Dialogflow custom Intents', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Automatically supports', 'woochatbot'); ?> <strong><?php esc_html_e('Rich Message Response Card Responses', 'woochatbot'); ?></strong> <?php esc_html_e('from Dialogflow as FaceBook messenger app', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Automatically supports images (jpgs,', 'woochatbot'); ?> <strong><?php esc_html_e('animated gifs', 'woochatbot'); ?></strong>) <?php esc_html_e('and', 'woochatbot'); ?><strong><?php esc_html_e('Youtube', 'woochatbot'); ?></strong> <?php esc_html_e('Videos from DialogFlow Intent Responses', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Automatically', 'woochatbot'); ?></strong> <?php esc_html_e('supports images (jpgs, animated gifs) and Youtube Videos from ChatBot Language Settings Responses', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Simply', 'woochatbot'); ?> <strong><?php esc_html_e('paste', 'woochatbot'); ?></strong> <?php esc_html_e('any image (jpg or gif) or Youtube video’s full link inside the ChatBot’s Language Center or', 'woochatbot'); ?> <strong><?php esc_html_e('Dialogflow', 'woochatbot'); ?></strong></li>
                                <li><?php esc_html_e('Add images from your WordPress media library or Giphy animated gif images easily and quickly from the ChatBot language center with the', 'woochatbot'); ?> <strong><?php esc_html_e('floating image options', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Advanced Search', 'woochatbot'); ?></strong> <?php esc_html_e('additional WooCommerce product fields like category name, tags, excerpt, SKU etc.', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Show or hide cart item number', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Fine tune WoowBot icon position', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Product display order by and sorting options', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Option to', 'woochatbot'); ?> <strong><?php esc_html_e('Show Only Parent Categories', 'woochatbot'); ?></strong> <?php esc_html_e('with or without Sub Category list.', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Option to display', 'woochatbot'); ?> <strong><?php esc_html_e('order status', 'woochatbot'); ?></strong> <?php esc_html_e('with or without logging in', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Option to', 'woochatbot'); ?> <strong><?php esc_html_e('choose', 'woochatbot'); ?></strong> <?php esc_html_e('on which', 'woochatbot'); ?> <strong><?php esc_html_e('pages', 'woochatbot'); ?></strong> <?php esc_html_e('WoowBot should load', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Upload custom ChatBot icon', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Upload', 'woochatbot'); ?> <strong><?php esc_html_e('custom', 'woochatbot'); ?></strong> <?php esc_html_e('Agent icon', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Choose from', 'woochatbot'); ?> <strong><?php esc_html_e('5 design templates', 'woochatbot'); ?></strong> <?php esc_html_e('for ChatBot interface', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Unique Mini Mode', 'woochatbot'); ?></strong> <?php esc_html_e('template', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Option to', 'woochatbot'); ?> <strong><?php esc_html_e('disable', 'woochatbot'); ?></strong> <?php esc_html_e('WooWBot on', 'woochatbot'); ?> <strong><?php esc_html_e('Mobile Devices', 'woochatbot'); ?></strong></li>
                                <li><?php esc_html_e('Option to', 'woochatbot'); ?> <strong><?php esc_html_e('exclude', 'woochatbot'); ?></strong> <?php esc_html_e('out of stock products from search results', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Option to Enable/Disable', 'woochatbot'); ?> <strong><?php esc_html_e('Product Search, Featured Products, Sale Products', 'woochatbot'); ?></strong>, <?php esc_html_e('Order Status buttons at start', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Show or Hide', 'woochatbot'); ?> <strong><?php esc_html_e('Opening Notifications', 'woochatbot'); ?></strong></li>
                                <li><?php esc_html_e('Option to enable/disable', 'woochatbot'); ?><strong> <?php esc_html_e('asking for eMail', 'woochatbot'); ?></strong> <?php esc_html_e('address after asking name', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Upload your own', 'woochatbot'); ?> <strong><?php esc_html_e('background image', 'woochatbot'); ?></strong> <?php esc_html_e('for chatbot', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Customize Colors', 'woochatbot'); ?></strong> <?php esc_html_e('of text and buttons', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Upload', 'woochatbot'); ?> <strong><?php esc_html_e('custom icons', 'woochatbot'); ?></strong> <?php esc_html_e('for the bottom area', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Create', 'woochatbot'); ?> <strong><?php esc_html_e('FAQ area', 'woochatbot'); ?></strong> <?php esc_html_e('with multiple questions and answers (supports html)', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Add video', 'woochatbot'); ?></strong> <?php esc_html_e('in Support area just by pasting Youtube link', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Add multiple', 'woochatbot'); ?> <strong><?php esc_html_e('store notifications', 'woochatbot'); ?></strong> <?php esc_html_e('to show above the ChatBot icon', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Show', 'woochatbot'); ?> <strong><?php esc_html_e('recently viewed products', 'woochatbot'); ?></strong> <?php esc_html_e('for easy reference to the shopper', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Show', 'woochatbot'); ?> <strong><?php esc_html_e('featured products', 'woochatbot'); ?></strong> <?php esc_html_e('until shopper has viewed products', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Quick Cart view', 'woochatbot'); ?></strong></li>
                                <li><?php esc_html_e('Quick', 'woochatbot'); ?> <strong><?php esc_html_e('access to Support', 'woochatbot'); ?></strong></li>
                                <li><?php esc_html_e('Quick', 'woochatbot'); ?> <strong><?php esc_html_e('Help for commands that can be used in-chat', 'woochatbot'); ?></strong></li>
                                <li><?php esc_html_e('Admin', 'woochatbot'); ?> <strong><?php esc_html_e('customizable chat commands', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Stop Words', 'woochatbot'); ?></strong> <?php esc_html_e('dictionary included and editable by admin. Bot will automatically exclude stop words from search criteria and chat commands', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Advanced Language Center', 'woochatbot'); ?></strong> <?php esc_html_e('to edit and change every WoowBot responses, System languages, stop words and info messages!', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Add', 'woochatbot'); ?> <strong><?php esc_html_e('multiple variations of ChatBot responses for each node', 'woochatbot'); ?></strong>. <?php esc_html_e('They will be used randomly and give an appearance of more human like responses.', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Option to', 'woochatbot'); ?><strong> <?php esc_html_e('Skip Greeting and Show Start Menu', 'woochatbot'); ?></strong> <?php esc_html_e('even with DialogFlow integration', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Works', 'woochatbot'); ?> <strong><?php esc_html_e('with/without DialogFlow', 'woochatbot'); ?></strong> <?php esc_html_e('Integration using Start Menu', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Display product details in-chat - complete with images', 'woochatbot'); ?></strong>, <?php esc_html_e('add to cart option and support for multiple images', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Option to open product details in single page', 'woochatbot'); ?></strong> <?php esc_html_e('instead of Bot window', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Persistent chat history', 'woochatbot'); ?></strong> <?php esc_html_e('over shopper session on website', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Remember chat history in browser local storage and', 'woochatbot'); ?> <strong><?php esc_html_e('greet returning shoppers', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Shortcode for WoowBot on Page', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Embed WoowBot', 'woochatbot'); ?></strong> <?php esc_html_e('on any site - even static HTML site', 'woochatbot'); ?> (<em><?php esc_html_e('excluding some advanced features', 'woochatbot'); ?></em>)</li>
                                <li><strong><?php esc_html_e('Language', 'woochatbot'); ?></strong> <?php esc_html_e('support. mo/pot file included so you can translate to any language', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('RTL', 'woochatbot'); ?></strong> <?php esc_html_e('support', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Integration with FaceBook', 'woochatbot'); ?> <strong><?php esc_html_e('Messenger for Live Chat', 'woochatbot'); ?></strong></li>
                                <li><?php esc_html_e('Integration with', 'woochatbot'); ?> <strong><?php esc_html_e('Skype, WhatsApp, Viber, Web Link Phone Call with floating icons', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Call me back', 'woochatbot'); ?></strong> – <?php esc_html_e('customer leaves phone number.', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Collect', 'woochatbot'); ?> <strong><?php esc_html_e('Customer Feedback', 'woochatbot'); ?></strong> <?php esc_html_e('by email option.', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Collect', 'woochatbot'); ?> <strong><?php esc_html_e('User eMail', 'woochatbot'); ?> </strong><?php esc_html_e('for', 'woochatbot'); ?> <strong><?php esc_html_e('newsletter Subscription', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('GDPR', 'woochatbot'); ?></strong> <?php esc_html_e('compliance (message with link to Privacy page)', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Unsubscibe', 'woochatbot'); ?></strong> <?php esc_html_e('email address Command', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Advanced', 'woochatbot'); ?> <strong><?php esc_html_e('Name Recognition', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Sample DialogFlow Agent for quick import', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Prompt User for eMail subscription with Retargeting Nessage', 'woochatbot'); ?></strong></li>
                                <li><?php esc_html_e('Export', 'woochatbot'); ?> <strong><?php esc_html_e('eMail Addresses as CSV', 'woochatbot'); ?></strong></li>
                                <li><strong><?php esc_html_e('Onsite retargeting and remarketing', 'woochatbot'); ?></strong> <?php esc_html_e('to increase customer conversion rate and', 'woochatbot'); ?> <strong><?php esc_html_e('increase sales', 'woochatbot'); ?></strong>!</li>
                                <li><?php esc_html_e('Show retargeting messages for customer on', 'woochatbot'); ?> <strong><?php esc_html_e('Exit Intent, After Scrolling Down “X” Percent, Or after “X” seconds', 'woochatbot'); ?></strong>.</li>
                                <li><strong><?php esc_html_e('Custom Background color', 'woochatbot'); ?></strong> <?php esc_html_e('for retargeting messages.', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Checkout reminder', 'woochatbot'); ?></strong> <?php esc_html_e('on set time interval to reduce cart abandonment.', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Checkout reminder for', 'woochatbot'); ?> <strong><?php esc_html_e('returning shopper', 'woochatbot'); ?> </strong><?php esc_html_e('who has products on the cart.', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Schedule day and time', 'woochatbot'); ?></strong> <?php esc_html_e('when WoowBot will run. Make WoowBot work with other Live chat software.', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Option to hide support and other icons from the ChatBot footer', 'woochatbot'); ?></li>
                                <li><strong><?php esc_html_e('Customer Conversion Reporting', 'woochatbot'); ?></strong> <?php esc_html_e('with Charts and Graphs', 'woochatbot'); ?></li>
                                <li><?php esc_html_e('Shopper Conversion', 'woochatbot'); ?><strong> <?php esc_html_e('Statistics by Day, Week, Month and Custom Date Range', 'woochatbot'); ?></strong></li>
                            </ol>
							
							<ol style="list-style: circle">
								<li><strong><?php esc_html_e('Chat Sessions', 'woochatbot'); ?></strong> <a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('AddOn', 'woochatbot'); ?></a></li>
								<li><strong><?php esc_html_e('FacebBook Messenger', 'woochatbot'); ?></strong> <a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('AddOn', 'woochatbot'); ?></a></li>
								<li><strong><?php esc_html_e('Extended Search', 'woochatbot'); ?></strong> <a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('AddOn', 'woochatbot'); ?></a></li>
								<li><strong><?php esc_html_e('Live Chat', 'woochatbot'); ?></strong> <a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('AddOn', 'woochatbot'); ?></a></li>
								<li><strong><?php esc_html_e('White Label', 'woochatbot'); ?></strong> <a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('AddOn', 'woochatbot'); ?></a></li>
								<li><strong><?php esc_html_e('Mailing List Integration', 'woochatbot'); ?></strong> <a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('AddOn', 'woochatbot'); ?></a></li>
								
								<li><strong><?php esc_html_e('and', 'woochatbot'); ?> </strong> <a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('More...', 'woochatbot'); ?></a></li>
							</ol>
							 
                            <p style="text-align: center">
                                <a target="_blank"
                                   href="<?php echo esc_url('https://www.quantumcloud.com/products/woocommerce-chatbot-woowbot/'); ?>"
                                   class="button button-primary"><?php esc_html_e('Upgrade to Pro', 'woochatbot'); ?></a>

                            </p>
						</div>
                        </div>

                        <div style="padding: 15px 10px; border: 1px solid #ccc; text-align: center; margin-top: 20px;margin-left: 14px;width: 1170px;">
                            <?php esc_html_e('Crafted By:', 'woochatbot'); ?> <a href="<?php echo esc_url('http://www.quantumcloud.com'); ?>" target="_blank"><?php esc_html_e('Web Design Company', 'woochatbot'); ?></a> -
                            <?php echo esc_attr('QuantumCloud', 'woochatbot'); ?>
                        </div>

                    </div>
                    <!-- /post-body-content -->


                </div>
                <!-- /post-body-->

            </div>
            <!-- /poststuff -->

        </div>
        <!-- /wrap -->

        <?php
    }
}

new Qcld_woowbot_info_page;