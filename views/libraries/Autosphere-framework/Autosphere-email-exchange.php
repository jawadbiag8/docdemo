                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Email.Exchange</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-email-exchange">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-email-exchange/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>Exchange</cite> is a library for sending, reading, and deleting emails.
                                    <cite>Exchange</cite> is interfacing with Exchange Web Services (EWS).</p>
                                <p>For more information about server settings, see
                                    <a class="reference external" href="https://support.microsoft.com/en-us/office/server-settings-you-ll-need-from-your-email-provider-c82de912-adcc-4787-8283-45a1161f3cc3">this
                    Microsoft support article</a>.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">     </span><span class="nn">Autosphere.Email.Exchange</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">  </span><span class="nf">Authorize</span><span class="p">  </span><span class="s">username=</span><span class="p">${</span><span class="nv">ACCOUNT</span><span class="p">}  </span><span class="s">password=</span><span class="p">${</span><span class="nv">PASSWORD</span><span class="p">}

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">ACCOUNT</span><span class="p">}              </span><span class="s">ACCOUNT_NAME</span><span class="p">
${</span><span class="nv">PASSWORD</span><span class="p">}             </span><span class="s">ACCOUNT_PASSWORD</span><span class="p">
${</span><span class="nv">RECIPIENT_ADDRESS</span><span class="p">}    </span><span class="s">RECIPIENT</span><span class="p">
${</span><span class="nv">IMAGES</span><span class="p">}               </span><span class="s">myimage.png</span><span class="p">
${</span><span class="nv">ATTACHMENTS</span><span class="p">}          </span><span class="s">C:</span><span class="p">${</span><span class="nv">/</span><span class="p">}</span><span class="s">files</span><span class="p">${</span><span class="nv">/</span><span class="p">}</span><span class="s">mydocument.pdf</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Sending email</span><span class="p">
    </span><span class="nf">Send Message</span><span class="p">  </span><span class="s">recipients=</span><span class="p">${</span><span class="nv">RECIPIENT_ADDRESS</span><span class="p">}
    ...           </span><span class="s">subject=Exchange Message from Autosphere Robot</span><span class="p">
    ...           </span><span class="s">body=&lt;p&gt;Exchange Autosphere Robot message body&lt;br&gt;&lt;img src='myimage.png'/&gt;&lt;/p&gt;</span><span class="p">
    ...           </span><span class="s">save=</span><span class="p">${</span><span class="nv">TRUE</span><span class="p">}
    ...           </span><span class="s">html=</span><span class="p">${</span><span class="nv">TRUE</span><span class="p">}
    ...           </span><span class="s">images=</span><span class="p">${</span><span class="nv">IMAGES</span><span class="p">}
    ...           </span><span class="s">cc=EMAIL_ADDRESS</span><span class="p">
    ...           </span><span class="s">bcc=EMAIL_ADDRESS</span><span class="p">
    ...           </span><span class="s">attachments=</span><span class="p">${</span><span class="nv">ATTACHMENTS</span><span class="p">}</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Email.Exchange</span> <span class="kn">import</span> <span class="n">Exchange</span>

<span class="n">ex_account</span> <span class="o">=</span> <span class="s2">&quot;ACCOUNT_NAME&quot;</span>
<span class="n">ex_password</span> <span class="o">=</span> <span class="s2">&quot;ACCOUNT_PASSWORD&quot;</span>

<span class="n">mail</span> <span class="o">=</span> <span class="n">Exchange</span><span class="p">()</span>
<span class="n">mail</span><span class="o">.</span><span class="n">authorize</span><span class="p">(</span><span class="n">username</span><span class="o">=</span><span class="n">ex_account</span><span class="p">,</span> <span class="n">password</span><span class="o">=</span><span class="n">ex_password</span><span class="p">)</span>
<span class="n">mail</span><span class="o">.</span><span class="n">send_message</span><span class="p">(</span>
    <span class="n">recipients</span><span class="o">=</span><span class="s2">&quot;RECIPIENT&quot;</span><span class="p">,</span>
    <span class="n">subject</span><span class="o">=</span><span class="s2">&quot;Message from Autosphere Python&quot;</span><span class="p">,</span>
    <span class="n">body</span><span class="o">=</span><span class="s2">&quot;Autosphere Python message body&quot;</span><span class="p">,</span>
<span class="p">)</span>
</pre>
                            </div>
                        </div>
                       
                    </div>
                </article>
            