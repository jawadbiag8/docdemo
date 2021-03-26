
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Email.ImapSmtp</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-email-imapsmtp">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-email-imapsmtp/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>ImapSmtp</cite> is a library for sending, reading, and deleting emails.
                                    <cite>ImapSmtp</cite> is interfacing with SMTP and IMAP protocols.</p>
                                <p><strong>Troubleshooting</strong></p>
                                <ul class="simple">
                                    <li>
                                        <dl class="first docutils">
                                            <dt>Authentication error with Gmail - &quot;Application-specific password
                                                required&quot;</dt>
                                            <dd>see. <a class="reference external" href="https://support.google.com/mail/answer/185833?hl=en">https://support.google.com/mail/answer/185833?hl=en</a>
                                            </dd>
                                        </dl>
                                    </li>
                                </ul>

                                <p><strong>Autosphere</strong></p>

                                <p>When sending HTML content with IMG tags, the <tt class="docutils literal">src</tt> filenames must match the base image name given with the <tt class="docutils literal">images</tt> parameter.
                                </p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">     </span><span class="nn">Autosphere.Email.ImapSmtp</span><span class="p">   </span><span class="s">smtp_server=smtp.gmail.com</span><span class="p">  </span><span class="s">port=587</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">  </span><span class="nf">Authorize</span><span class="p">  </span><span class="s">account=</span><span class="p">${</span><span class="nv">GMAIL_ACCOUNT</span><span class="p">}  </span><span class="s">password=</span><span class="p">${</span><span class="nv">GMAIL_PASSWORD</span><span class="p">}

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">GMAIL_ACCOUNT</span><span class="p">}        </span><span class="s">ACCOUNT_NAME</span><span class="p">
${</span><span class="nv">GMAIL_PASSWORD</span><span class="p">}       </span><span class="s">ACCOUNT_PASSWORD</span><span class="p">
${</span><span class="nv">RECIPIENT_ADDRESS</span><span class="p">}    </span><span class="s">RECIPIENT</span><span class="p">
${</span><span class="nv">BODY_IMG1</span><span class="p">}            ${</span><span class="nv">IMAGEDIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">approved.png</span><span class="p">
${</span><span class="nv">BODY_IMG2</span><span class="p">}            ${</span><span class="nv">IMAGEDIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">invoice.png</span><span class="p">
${</span><span class="nv">EMAIL_BODY</span><span class="p">}     </span><span class="s">&lt;h1&gt;Heading&lt;/h1&gt;&lt;p&gt;Status: &lt;img src='approved.png' alt='approved image'/&gt;&lt;/p&gt;</span><span class="p">
...               </span><span class="s">&lt;p&gt;INVOICE: &lt;img src='invoice.png' alt='invoice image'/&gt;&lt;/p&gt;</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Sending email</span><span class="p">
    </span><span class="nf">Send Message</span><span class="p">  </span><span class="s">sender=</span><span class="p">${</span><span class="nv">GMAIL_ACCOUNT</span><span class="p">}
    ...           </span><span class="s">recipients=</span><span class="p">${</span><span class="nv">RECIPIENT_ADDRESS</span><span class="p">}
    ...           </span><span class="s">subject=Message from Autosphere Robot</span><span class="p">
    ...           </span><span class="s">body=Autosphere Robot message body</span><span class="p">

</span><span class="gu">Sending HTML Email With Image</span><span class="p">
    [</span><span class="kn">Documentation</span><span class="p">]     </span><span class="s">Sending email with HTML content and attachment</span><span class="p">
    </span><span class="nf">Send Message</span><span class="p">
    ...                 </span><span class="s">sender=</span><span class="p">${</span><span class="nv">GMAIL_ACCOUNT</span><span class="p">}
    ...                 </span><span class="s">recipients=</span><span class="p">${</span><span class="nv">RECIPIENT_ADDRESS</span><span class="p">}
    ...                 </span><span class="s">subject=HTML email with body images (2) plus one attachment</span><span class="p">
    ...                 </span><span class="s">body=</span><span class="p">${</span><span class="nv">EMAIL_BODY</span><span class="p">}
    ...                 </span><span class="s">html=</span><span class="p">${</span><span class="nv">TRUE</span><span class="p">}
    ...                 </span><span class="s">images=</span><span class="p">${</span><span class="nv">BODY_IMG1</span><span class="p">}</span><span class="s">, </span><span class="p">${</span><span class="nv">BODY_IMG2</span><span class="p">}
    ...                 </span><span class="s">attachments=example.png</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Email.ImapSmtp</span> <span class="kn">import</span> <span class="n">ImapSmtp</span>

<span class="n">gmail_account</span> <span class="o">=</span> <span class="s2">&quot;ACCOUNT_NAME&quot;</span>
<span class="n">gmail_password</span> <span class="o">=</span> <span class="s2">&quot;ACCOUNT_PASSWORD&quot;</span>
<span class="n">sender</span> <span class="o">=</span> <span class="n">gmail_account</span>

<span class="n">mail</span> <span class="o">=</span> <span class="n">ImapSmtp</span><span class="p">(</span><span class="n">smtp_server</span><span class="o">=</span><span class="s2">&quot;smtp.gmail.com&quot;</span><span class="p">,</span> <span class="n">port</span><span class="o">=</span><span class="mi">587</span><span class="p">)</span>
<span class="n">mail</span><span class="o">.</span><span class="n">authorize</span><span class="p">(</span><span class="n">account</span><span class="o">=</span><span class="n">gmail_account</span><span class="p">,</span> <span class="n">password</span><span class="o">=</span><span class="n">gmail_password</span><span class="p">)</span>
<span class="n">mail</span><span class="o">.</span><span class="n">send_message</span><span class="p">(</span>
    <span class="n">sender</span><span class="o">=</span><span class="n">gmail_account</span><span class="p">,</span>
    <span class="n">recipients</span><span class="o">=</span><span class="s2">&quot;RECIPIENT&quot;</span><span class="p">,</span>
    <span class="n">subject</span><span class="o">=</span><span class="s2">&quot;Message from Autosphere Python&quot;</span><span class="p">,</span>
    <span class="n">body</span><span class="o">=</span><span class="s2">&quot;Autosphere Python message body&quot;</span><span class="p">,</span>
<span class="p">)</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
            