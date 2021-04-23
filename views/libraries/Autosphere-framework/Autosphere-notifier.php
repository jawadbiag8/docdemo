<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Notifier</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Notifier</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="true">
                                    <i class="material-icons">home</i> Readme
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                                    <i class="material-icons">face</i> Keywords
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">

                                <div class="sc-jJEJSO laquCT">
                                    <div class="sc-hiSbYr XqbgT">
                                        <div>
                                            <p><cite>Notifier</cite> is a library interfacting with different notification services.</p>
                                            <p>Supported services:</p>
                                            <ul class="simple">
                                                <li>email</li>
                                                <li>gmail</li>
                                                <li>pushover</li>
                                                <li>slack</li>
                                                <li>telegram</li>
                                                <li>twilio</li>
                                            </ul>
                                            <p>Services not supported yet:</p>
                                            <ul class="simple">
                                                <li>gitter</li>
                                                <li>join</li>
                                                <li>mailgun</li>
                                                <li>pagerduty</li>
                                                <li>popcornnotify</li>
                                                <li>pushbullet</li>
                                                <li>simplepush</li>
                                                <li>statuspage</li>
                                                <li>zulip</li>
                                            </ul>

                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">  </span><span class="nn">Autosphere.Notifier</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">SLACK_WEBHOOK</span><span class="p">}   </span><span class="s">https://hooks.slack.com/services/WEBHOOKDETAILS</span><span class="p">
${</span><span class="nv">CHANNEL</span><span class="p">}         </span><span class="s">notification-channel</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Lets notify</span><span class="p">
   </span><span class="nf">Notify Slack</span><span class="p">   </span><span class="s">message from robot</span><span class="p">  </span><span class="s">channel=</span><span class="p">${</span><span class="nv">CHANNEL</span><span class="p">}  </span><span class="s">webhook_url=</span><span class="p">${</span><span class="nv">SLACK_WEBHOOK</span><span class="p">}</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Notifier</span> <span class="kn">import</span> <span class="n">Notifier</span>

<span class="n">library</span> <span class="o">=</span> <span class="n">Notifier</span><span class="p">()</span>

<span class="n">slack_attachments</span> <span class="o">=</span> <span class="p">[</span>
   <span class="p">{</span>
      <span class="s2">&quot;title&quot;</span><span class="p">:</span> <span class="s2">&quot;attachment 1&quot;</span><span class="p">,</span>
      <span class="s2">&quot;fallback&quot;</span><span class="p">:</span> <span class="s2">&quot;liverpool logo&quot;</span><span class="p">,</span>
      <span class="s2">&quot;image_url&quot;</span><span class="p">:</span> <span class="s2">&quot;https://upload.wikimedia.org/wikipedia/fi/thumb/c/cd/Liverpool_FC-n_logo.svg/1200px-Liverpool_FC-n_logo.svg.png&quot;</span><span class="p">,</span>
   <span class="p">}</span>
<span class="p">]</span>

<span class="n">library</span><span class="o">.</span><span class="n">notify_slack</span><span class="p">(</span>
   <span class="n">message</span><span class="o">=</span><span class="s1">'message for the Slack'</span><span class="p">,</span>
   <span class="n">channel</span><span class="o">=</span><span class="s2">&quot;notification-channel&quot;</span><span class="p">,</span>
   <span class="n">webhook_url</span><span class="o">=</span><span class="n">slack_webhook_url</span><span class="p">,</span>
   <span class="n">attachments</span><span class="o">=</span><span class="n">slack_attachments</span><span class="p">,</span>
<span class="p">)</span>
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">


                                                    <div>
                                                        <div class="keyword" id="notify-email">
                                                            <h2><a href="#notify-email">Notify Email</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Notify using email service</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>notification message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>to</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>target of email message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>username</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>email service username</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>email service password</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td> dict</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param message:</th>
                                                                            <td class="field-body">notification message</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param to:</th>
                                                                            <td class="field-body">target of email message</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param username:</th>
                                                                            <td class="field-body">email service username</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">email service password</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True is notification was success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="notify-gmail">
                                                            <h2><a href="#notify-gmail">Notify Gmail</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Notify using Gmail service</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>notification message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>to</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>target of email message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>username</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>GMail service username</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>GMail service password</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td> dict</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param message:</th>
                                                                            <td class="field-body">notification message</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param to:</th>
                                                                            <td class="field-body">target of email message</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param username:</th>
                                                                            <td class="field-body">GMail service username</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">GMail service password</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True is notification was success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="notify-pushover">
                                                            <h2><a href="#notify-pushover">Notify Pushover</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Notify using Pushover service</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>notification message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>user</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>target user for the notification</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>token</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>service token</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td> dict</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param message:</th>
                                                                            <td class="field-body">notification message</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param user:</th>
                                                                            <td class="field-body">target user for the notification</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param token:</th>
                                                                            <td class="field-body">service token</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True is notification was success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="notify-slack">
                                                            <h2><a href="#notify-slack">Notify Slack</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Notify using Slack service</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>notification message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>channel</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>target channel for the notification</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>webhook_url</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>Slack webhook url</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td> dict</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param message:</th>
                                                                            <td class="field-body">notification message</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param channel:</th>
                                                                            <td class="field-body">target channel for the notification</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param webhook_url:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Slack webhook url</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True is notification was success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="notify-telegram">
                                                            <h2><a href="#notify-telegram">Notify Telegram</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Notify using Telegram service</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>notification message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>chat_id</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>target chat id for the notification</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>token</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>service token</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td> dict</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param message:</th>
                                                                            <td class="field-body">notification message</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param chat_id:</th>
                                                                            <td class="field-body">target chat id for the notification</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param token:</th>
                                                                            <td class="field-body">service token</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True is notification was success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="notify-twilio">
                                                            <h2><a href="#notify-twilio">Notify Twilio</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Notify using Twilio service</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>notification message</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>number_from</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>number where the message comes from</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>number_to</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>number where the messages goes to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>account_sid</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>Twilio account SID</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>token</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>Twilio account token</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td> dict</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param message:</th>
                                                                            <td class="field-body">notification message</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param number_from:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">number where the message comes from</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param number_to:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">number where the messages goes to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param account_sid:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Twilio account SID</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param token:</th>
                                                                            <td class="field-body">Twilio account token</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True is notification was success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <aside class="sc-iJuUWI jaFBcT">
                                            <form>
                                                <h5>Keywords</h5>
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()" type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-notify-email" href="#notify-email" class="">Notify Email</a></li>
                                                    <li><a id="link-notify-gmail" href="#notify-gmail" class="">Notify Gmail</a></li>
                                                    <li><a id="link-notify-pushover" href="#notify-pushover" class="">Notify Pushover</a></li>
                                                    <li><a id="link-notify-slack" href="#notify-slack" class="">Notify Slack</a></li>
                                                    <li><a id="link-notify-telegram" href="#notify-telegram" class="">Notify Telegram</a></li>
                                                    <li><a id="link-notify-twilio" href="#notify-twilio" class="">Notify Twilio</a></li>
                                                </ul>

                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Headings -->

    </div>
</section>