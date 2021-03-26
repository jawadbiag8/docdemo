
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                           fill="#002642"></path>
                     </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Notifier</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-notifier">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-notifier/keywords">Keywords</a></nav>
                    </div>
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
                </article>
           
