<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Email.Exchange</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Email.Exchange</li>
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
                                            <p><cite>Exchange</cite> is a library for sending, reading, and deleting emails.
                                                <cite>Exchange</cite> is interfacing with Exchange Web Services (EWS).
                                            </p>
                                            <p>For more information about server settings, see
                                                <a class="reference external" href="https://support.microsoft.com/en-us/office/server-settings-you-ll-need-from-your-email-provider-c82de912-adcc-4787-8283-45a1161f3cc3">this
                                                    Microsoft support article</a>.
                                            </p>
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
                                                                <p class="shortdoc">Connect to Exchange account</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>username</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>account username</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>account password</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>autodiscover</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>use autodiscover or set it off</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>access_type</td>
                                                                        <td> str </td>
                                                                        <td> DELEGATE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>server</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>required for configuration options</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>primary_smtp_address</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>by default set to username, but can be set to be different than username</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param username:</th>
                                                                            <td class="field-body">account username</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">account password</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param autodiscover:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">use autodiscover or set it off</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param accesstype:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">default &quot;DELEGATE&quot;, other option &quot;IMPERSONATION&quot;
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param server:</th>
                                                                            <td class="field-body">required for configuration options</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param primary_smtp_address:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">by default set to username, but can be set to be different than username</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
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
                                                                    <tr>
                                                                        <td>parent_folder</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name for the parent folder, by default INBOX</td>
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
                                                                            <th class="field-name" colspan="2">param parent_folder:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name for the parent folder, by default INBOX</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if operation was successful, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
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
                                                                    <tr>
                                                                        <td>parent_folder</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name for the parent folder, by default INBOX</td>
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
                                                                            <th class="field-name" colspan="2">param parent_folder:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name for the parent folder, by default INBOX</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if operation was successful, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="empty-folder">
                                                            <h2><a href="#empty-folder">Empty Folder</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Empty email folder of all items</p>
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
                                                                    <tr>
                                                                        <td>parent_folder</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name for the parent folder, by default INBOX</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>delete_sub_folders</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>delete sub folders or not, by default False</td>
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
                                                                            <th class="field-name" colspan="2">param parent_folder:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name for the parent folder, by default INBOX</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param delete_sub_folders:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">delete sub folders or not, by default False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if operation was successful, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-messages">
                                                            <h2><a href="#list-messages">List Messages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">List messages in the account inbox. Order by descending received time.</p>
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
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>count</td>
                                                                        <td> int </td>
                                                                        <td> 100</td>
                                                                        <td>number of messages to list</td>
                                                                    </tr>
                                                                </table>

                                                                <p>List messages in the account inbox. Order by descending received time.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param count:</th>
                                                                            <td class="field-body">number of messages to list</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="move-messages">
                                                            <h2><a href="#move-messages">Move Messages</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Move message(s) from source folder to target folder</p>
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
                                                                        <td>move messages matching this criterion</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>source folder</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>target folder</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>contains</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>if matching should be done using contains matching and not equals matching, default False is means equals matching</td>
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
                                                                            <td class="field-body">move messages matching this criterion</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param source:</th>
                                                                            <td class="field-body">source folder</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param target:</th>
                                                                            <td class="field-body">target folder</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param contains:</th>
                                                                            <td class="field-body">if matching should be done using <cite>contains</cite> matching and not <cite>equals</cite> matching, default <cite>False</cite> is means
                                                                                <cite>equals</cite> matching
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">boolean result of operation, True if 1+ items were moved else False
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Criterion examples:</p>
                                                                <ul class="simple">
                                                                    <li>subject:my message subject</li>
                                                                    <li>body:something in body</li>
                                                                    <li>sender:sender&#64;domain.com</li>
                                                                </ul>
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
                                                                        <td>parent_folder</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name for the parent folder, by default INBOX</td>
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
                                                                            <th class="field-name" colspan="2">param parent_folder:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name for the parent folder, by default INBOX</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if operation was successful, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="send-message">
                                                            <h2><a href="#send-message">Send Message</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Keyword for sending message through connected Exchange account.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>recipients</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>list of email addresses, defaults to []</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>subject</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>message subject, defaults to ""</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>body</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td>message body, defaults to ""</td>
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
                                                                    <tr>
                                                                        <td>cc</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>list of email addresses, defaults to []</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>bcc</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>list of email addresses, defaults to []</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>save</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>is sent message saved to Sent messages folder or not, defaults to False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param recipients:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">list of email addresses, defaults to []</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param subject:</th>
                                                                            <td class="field-body">message subject, defaults to &quot;&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param body:</th>
                                                                            <td class="field-body">message body, defaults to &quot;&quot;</td>
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
                                                                        <tr class="field">
                                                                            <th class="field-name">param cc:</th>
                                                                            <td class="field-body">list of email addresses, defaults to []</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param bcc:</th>
                                                                            <td class="field-body">list of email addresses, defaults to []</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param save:</th>
                                                                            <td class="field-body">is sent message saved to Sent messages folder or not, defaults to False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Email addresses can be prefixed with <tt class="docutils literal">ex:</tt> to indicate an Exchange account address.</p>
                                                                <p>Recipients is a <cite>required</cite> parameter.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-for-message">
                                                            <h2><a href="#wait-for-message">Wait For Message</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wait for email matching <cite>criterion</cite> to arrive into INBOX.</p>
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
                                                                        <td>wait for message matching criterion</td>
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
                                                                    <tr>
                                                                        <td>contains</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>if matching should be done using contains matching and not equals matching, default False is means equals matching</td>
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
                                                                            <td class="field-body">wait for message matching criterion</td>
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
                                                                            <th class="field-name">param contains:</th>
                                                                            <td class="field-body">if matching should be done using <cite>contains</cite> matching and not <cite>equals</cite> matching, default <cite>False</cite> is means
                                                                                <cite>equals</cite> matching
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of messages</td>
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
                                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div><a id="link-authorize" href="#authorize" class="">Authorize</a><a id="link-create-folder" href="#create-folder" class="">Create Folder</a><a id="link-delete-folder" href="#delete-folder" class="">Delete Folder</a><a id="link-empty-folder" href="#empty-folder" class="">Empty Folder</a><a id="link-list-messages" href="#list-messages" class="">List Messages</a><a id="link-move-messages" href="#move-messages" class="">Move Messages</a><a id="link-rename-folder" href="#rename-folder" class="">Rename Folder</a><a id="link-send-message" href="#send-message" class="">Send Message</a>
                                                <a id="link-wait-for-message" href="#wait-for-message" class="">Wait For Message</a>
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