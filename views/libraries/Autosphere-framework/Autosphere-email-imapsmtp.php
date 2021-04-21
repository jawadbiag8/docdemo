<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Email.ImapSmtp</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Email.ImapSmtp</li>
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
                                            <p><cite>ImapSmtp</cite> is a library for sending, reading, and deleting emails.
                                                <cite>ImapSmtp</cite> is interfacing with SMTP and IMAP protocols.
                                            </p>
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
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                    <div>
                                                        <div class="keyword" id="authorize">
                                                            <h2><a href="#authorize">Authorize</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Authorize user to SMTP and IMAP servers.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>account</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>user account as string, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>user password as string, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>smtp_server</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>SMTP server address, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>imap_server</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>IMAP server address, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>smtp_port</td>
                                                                        <td> int </td>
                                                                        <td> None</td>
                                                                        <td>SMTP server port, defaults to None (587 for SMTP)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>imap_port</td>
                                                                        <td> int </td>
                                                                        <td> None</td>
                                                                        <td>IMAP server port, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param account:</th>
                                                                            <td class="field-body">user account as string, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">user password as string, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param smtp_server:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">SMTP server address, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param imap_server:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">IMAP server address, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param smtp_port:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">SMTP server port, defaults to None (587 for SMTP)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param imap_port:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">IMAP server port, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Will use separately set credentials or those given in keyword call.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Authorize    ${username}   ${password}  smtp_server=smtp.gmail.com  smtp_port=587
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="authorize-imap">
                                                            <h2><a href="#authorize-imap">Authorize Imap</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Authorize to IMAP server.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>account</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>IMAP account name, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>IMAP account password, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>imap_server</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>IMAP server address, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>imap_port</td>
                                                                        <td> int </td>
                                                                        <td> None</td>
                                                                        <td>IMAP server port, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param account:</th>
                                                                            <td class="field-body">IMAP account name, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">IMAP account password, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param imap_server:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">IMAP server address, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param imap_port:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">IMAP server port, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Can be called without giving any parameters if library has been initialized with necessary information and/or keyword <tt class="docutils literal">Set Credentials</tt> has been called.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Authorize IMAP    ${username}   ${password}  imap.gmail.com  993
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="authorize-smtp">
                                                            <h2><a href="#authorize-smtp">Authorize Smtp</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Authorize to SMTP server.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>account</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>SMTP account name, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>SMTP account password, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>smtp_server</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>SMTP server address, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>smtp_port</td>
                                                                        <td> int </td>
                                                                        <td> None</td>
                                                                        <td>SMTP server port, defaults to None (587 for SMTP)</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param account:</th>
                                                                            <td class="field-body">SMTP account name, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">SMTP account password, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param smtp_server:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">SMTP server address, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param smtp_port:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">SMTP server port, defaults to None (587 for SMTP)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Can be called without giving any parameters if library has been initialized with necessary information and/or keyword <tt class="docutils literal">Set Credentials</tt> has been called.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Authorize SMTP    ${username}   ${password}  smtp.gmail.com  587
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-folder">
                                                            <h2><a href="#create-folder">Create Folder</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create email folder</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>folder_name</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name for the new folder</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param folder_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name for the new folder</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if operation was successful, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Create Folder   filtered
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-folder">
                                                            <h2><a href="#delete-folder">Delete Folder</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Delete email folder</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>folder_name</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>current folder name</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param folder_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">current folder name</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if operation was successful, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Delete Folder   filtered
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-message">
                                                            <h2><a href="#delete-message">Delete Message</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Delete single message from server based on criterion.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>filter messages based on this, defaults to ""</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filter messages based on this, defaults to &quot;&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>If criterion does not return exactly 1 message then delete is not done.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Delete Message  SUBJECT &quot;Greetings Autosphere developer&quot;
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-messages">
                                                            <h2><a href="#delete-messages">Delete Messages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Delete messages from server based on criterion.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>filter messages based on this, defaults to ""</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filter messages based on this, defaults to &quot;&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Delete Messages  SUBJECT Greetings
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="flag-messages">
                                                            <h2><a href="#flag-messages">Flag Messages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Mark messages as <cite>flagged</cite></p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>mark messages matching criterion</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>unflag</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>to mark messages as not flagged</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">mark messages matching criterion</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param unflag:</th>
                                                                            <td class="field-body">to mark messages as not <cite>flagged</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">successful operations (int), matching messages (int)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${flagged}  ${oftotal}    Flag Messages   SUBJECT Autosphere
${unflagged}  ${oftotal}  Flag Messages   SUBJECT Autosphere  unflag=True
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-folder-list">
                                                            <h2><a href="#get-folder-list">Get Folder List</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get list of folders on the server</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>subdirectory</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>list subdirectories for this folder</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>list folders matching this pattern</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param subdirectory:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">list subdirectories for this folder</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param pattern:</th>
                                                                            <td class="field-body">list folders matching this pattern</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of folders</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{folders}  Get Folder List
&#64;{folders}  Get Folder List  pattern=important
&#64;{folders}  Get Folder List  subdirectory=sub
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-messages">
                                                            <h2><a href="#list-messages">List Messages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return list of messages matching criterion.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>list emails matching this, defaults to ""</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">list emails matching this, defaults to &quot;&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of messages or False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{emails}  List Messages  SUBJECT &quot;Autosphere task&quot;
FOR  ${email}  IN  &#64;{EMAILS}
    Log  ${email}[Subject]
    Log  ${email}[From]
    Log  ${email}[Date]
    Log  ${email}[Delivered-To]
    Log  ${email}[Received]
    Log  ${email}[Has-Attachments]
END
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mark-as-read">
                                                            <h2><a href="#mark-as-read">Mark As Read</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Mark messages as <cite>read</cite></p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>mark messages matching criterion</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>unread</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>to mark messages as not read</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">mark messages matching criterion</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param unread:</th>
                                                                            <td class="field-body">to mark messages as not <cite>read</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">successful operations (int), matching messages (int)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${read}  ${oftotal}  Mark As Read   SUBJECT Autosphere
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mark-as-unread">
                                                            <h2><a href="#mark-as-unread">Mark As Unread</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Mark messages as not <cite>read</cite></p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>mark messages matching criterion</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">mark messages matching criterion</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">successful operations (int), matching messages (int)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${unread}  ${oftotal}  Mark As Unread   SUBJECT Autosphere
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="rename-folder">
                                                            <h2><a href="#rename-folder">Rename Folder</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Rename email folder</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>oldname</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>current folder name</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>newname</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>new name for the folder</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>suppress_error</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>to silence warning message, defaults to False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param oldname:</th>
                                                                            <td class="field-body">current folder name</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param newname:</th>
                                                                            <td class="field-body">new name for the folder</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param suppress_error:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">to silence warning message, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if operation was successful, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Rename Folder   subfolder   filtered
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-attachment">
                                                            <h2><a href="#save-attachment">Save Attachment</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Save mail attachment into local folder</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>message item</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_folder</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>local folder for saving attachments to (needs to exist), defaults to user's home directory if None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>overwrite</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>overwrite existing file is True, defaults to False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param message:</th>
                                                                            <td class="field-body">message item</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_folder:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">local folder for saving attachments to (needs to exist), defaults to user's home directory if None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param overwrite:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">overwrite existing file is True, defaults to False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{emails}  List Messages  SUBJECT &quot;Autosphere task&quot;
FOR  ${email}  IN  &#64;{EMAILS}
    Run Keyword If   ${email}[Has-Attachments] == True
    ...              Save Attachment  ${email}  target_folder=${CURDIR}  overwrite=True
END
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-attachments">
                                                            <h2><a href="#save-attachments">Save Attachments</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Save mail attachments into local folder.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>attachments are saved for mails matching this, defaults to ""</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_folder</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>local folder for saving attachments to (needs to exist), defaults to user's home directory if None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>overwrite</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>overwrite existing file is True, defaults to False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">attachments are saved for mails matching this, defaults to &quot;&quot;
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_folder:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">local folder for saving attachments to (needs to exist), defaults to user's home directory if None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param overwrite:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">overwrite existing file is True, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of saved attachments or False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${numsaved}  Save Attachments   SUBJECT &quot;Autosphere task&quot;
...          target_folder=${CURDIR}${/}messages  overwrite=True
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-messages">
                                                            <h2><a href="#save-messages">Save Messages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Save messages based on criteria and store them to target folder with attachment files.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>filter messages based on this, defaults to ""</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_folder</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>path to folder where message are saved, defaults to None</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Save messages based on criteria and store them to target folder with attachment files.</p>
                                                                <p>Does not save message if <cite>target_folder</cite> is not given.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">filter messages based on this, defaults to &quot;&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param target_folder:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">path to folder where message are saved, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if success, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Save Messages  SUBJECT Important message  target_folder=${USERDIR}${/}messages
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-folder">
                                                            <h2><a href="#select-folder">Select Folder</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Select folder by name</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>folder_name</td>
                                                                        <td> str </td>
                                                                        <td> INBOX</td>
                                                                        <td>name of the folder to select</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param folder_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the folder to select</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">message count in the selected folder</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Returns number of messages in the folder or exception if folder does not exist on the server.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Select Folder   subfolder
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="send-message">
                                                            <h2><a href="#send-message">Send Message</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Send SMTP email</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>sender</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>who is sending, ie. 'from'</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>recipients</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>who is receiving, ie. 'to'</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>subject</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>mail subject field</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>body</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>mail body content</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>attachments</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>list of filepaths to attach, defaults to []</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>html</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>if message content is in HTML, default False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>images</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>list of filepaths for inline use, defaults to []</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param sender:</th>
                                                                            <td class="field-body">who is sending, ie. 'from'</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param recipients:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">who is receiving, ie. 'to'</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param subject:</th>
                                                                            <td class="field-body">mail subject field</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param body:</th>
                                                                            <td class="field-body">mail body content</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param attachments:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">list of filepaths to attach, defaults to []</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param html:</th>
                                                                            <td class="field-body">if message content is in HTML, default <cite>False</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param images:</th>
                                                                            <td class="field-body">list of filepaths for inline use, defaults to []</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Send Message  sender&#64;domain.com  recipient&#64;domain.com
...           subject=Greetings Software Robot Developer
...           body=${email_body}
...           attachments:${CURDIR}${/}report.pdf
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="send-smtp-hello">
                                                            <h2><a href="#send-smtp-hello">Send Smtp Hello</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Send hello message to SMTP server.</p>



                                                                <p>Required step when creating SMTP connection.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-credentials">
                                                            <h2><a href="#set-credentials">Set Credentials</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set credentials</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>account</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>user account as string, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>user password as string, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param account:</th>
                                                                            <td class="field-body">user account as string, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">user password as string, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Set Credentials   ${username}   ${password}
Authorize
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unflag-messages">
                                                            <h2><a href="#unflag-messages">Unflag Messages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Mark messages as not <cite>flagged</cite></p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>mark messages matching criterion</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">mark messages matching criterion</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">successful operations (int), matching messages (int)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${unflagged}  ${oftotal}  Unflag Messages   SUBJECT Autosphere
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-for-message">
                                                            <h2><a href="#wait-for-message">Wait For Message</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wait for email matching <cite>criterion</cite> to arrive into mailbox.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criterion</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>message filter to wait for, defaults to ""</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td> float </td>
                                                                        <td> 5.0</td>
                                                                        <td>total time in seconds to wait for email, defaults to 5.0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>interval</td>
                                                                        <td> float </td>
                                                                        <td> 1.0</td>
                                                                        <td>time in seconds for new check, defaults to 1.0</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param criterion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">message filter to wait for, defaults to &quot;&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">total time in seconds to wait for email, defaults to 5.0</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param interval:</th>
                                                                            <td class="field-body">time in seconds for new check, defaults to 1.0</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of messages or False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{emails}  Wait For Message  SUBJECT &quot;Autosphere task&quot;  timeout=300  interval=10
</code></pre>
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
                                                    <li><a id="link-authorize" href="#authorize" class="">Authorize</a></li>
                                                    <li><a id="link-authorize-imap" href="#authorize-imap" class="">Authorize Imap</a></li>
                                                    <li><a id="link-authorize-smtp" href="#authorize-smtp" class="">Authorize Smtp</a></li>
                                                    <li><a id="link-create-folder" href="#create-folder" class="">Create Folder</a></li>
                                                    <li><a id="link-delete-folder" href="#delete-folder" class="">Delete Folder</a></li>
                                                    <li><a id="link-delete-message" href="#delete-message" class="">Delete Message</a></li>
                                                    <li><a id="link-delete-messages" href="#delete-messages" class="">Delete Messages</a></li>
                                                    <li><a id="link-flag-messages" href="#flag-messages" class="">Flag Messages</a></li>
                                                    <li><a id="link-get-folder-list" href="#get-folder-list" class="">Get Folder List</a></li>
                                                    <li><a id="link-list-messages" href="#list-messages" class="">List Messages</a></li>
                                                    <li><a id="link-mark-as-read" href="#mark-as-read" class="">Mark As Read</a></li>
                                                    <li><a id="link-mark-as-unread" href="#mark-as-unread" class="">Mark As Unread</a></li>
                                                    <li><a id="link-rename-folder" href="#rename-folder" class="">Rename Folder</a></li>
                                                    <li><a id="link-save-attachment" href="#save-attachment" class="">Save Attachment</a></li>
                                                    <li><a id="link-save-attachments" href="#save-attachments" class="">Save Attachments</a></li>
                                                    <li><a id="link-save-messages" href="#save-messages" class="">Save Messages</a></li>
                                                    <li><a id="link-select-folder" href="#select-folder" class="">Select Folder</a></li>
                                                    <li><a id="link-send-message" href="#send-message" class="">Send Message</a></li>
                                                    <li><a id="link-send-smtp-hello" href="#send-smtp-hello" class="">Send Smtp Hello</a></li>
                                                    <li><a id="link-set-credentials" href="#set-credentials" class="">Set Credentials</a></li>
                                                    <li><a id="link-unflag-messages" href="#unflag-messages" class="">Unflag Messages</a></li>
                                                    <li><a id="link-wait-for-message" href="#wait-for-message" class="">Wait For Message</a></li>
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