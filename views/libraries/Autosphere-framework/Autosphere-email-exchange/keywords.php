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
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-email-exchange">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-email-exchange/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="authorize">
                                        <h2><a href="#authorize">Authorize</a></h2>

                                        <div>
                                            <p class="shortdoc">Connect to Exchange account</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                                            <cite>equals</cite> matching</td>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                                            <cite>equals</cite> matching</td>
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
                        <aside class="sc-iJuUWI jaFBcT">
                            <form>
                                <h5>Keywords</h5>
                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                      fill="#fff"></path>
                  </svg></fieldset>
                            </form>
                            <div><a id="link-authorize" href="#authorize" class="">Authorize</a><a id="link-create-folder" href="#create-folder" class="">Create Folder</a><a id="link-delete-folder" href="#delete-folder"
                                    class="">Delete Folder</a><a id="link-empty-folder" href="#empty-folder" class="">Empty Folder</a><a id="link-list-messages" href="#list-messages" class="">List Messages</a><a id="link-move-messages"
                                    href="#move-messages" class="">Move Messages</a><a id="link-rename-folder" href="#rename-folder" class="">Rename Folder</a><a id="link-send-message" href="#send-message" class="">Send Message</a>
                                <a id="link-wait-for-message" href="#wait-for-message" class="">Wait For Message</a>
                            </div>
                        </aside>
                    </div>
                </article>
            