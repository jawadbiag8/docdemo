
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Outlook.Application</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-outlook-application">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-outlook-application/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="close-document">
                                        <h2><a href="#close-document">Close Document</a></h2>

                                        <div>
                                            <p class="shortdoc">Close the active document (if open).</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>save_changes</td>
                                                    <td> bool </td>
                                                    <td> False</td>
                                                    <td></td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>

                                    <div class="keyword" id="open-application">
                                        <h2><a href="#open-application">Open Application</a></h2>

                                        <div>
                                            <p class="shortdoc">Open the Outlook application.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>visible</td>
                                                    <td> bool </td>
                                                    <td> False</td>
                                                    <td>show window after opening</td>
                                                </tr>
                                                <tr>
                                                    <td>display_alerts</td>
                                                    <td> bool </td>
                                                    <td> False</td>
                                                    <td>show alert popups</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param visible:</th>
                                                        <td class="field-body">show window after opening</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param display_alerts:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">show alert popups</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="quit-application">
                                        <h2><a href="#quit-application">Quit Application</a></h2>

                                        <div>
                                            <p class="shortdoc">Quit the application.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>save_changes</td>
                                                    <td> bool </td>
                                                    <td> False</td>
                                                    <td></td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>

                                    <div class="keyword" id="send-message">
                                        <h2><a href="#send-message">Send Message</a></h2>

                                        <div>
                                            <p class="shortdoc">Send message with Outlook</p>
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
                                                    <td> typing.Any</td>
                                                    <td></td>
                                                    <td>list of addresses</td>
                                                </tr>
                                                <tr>
                                                    <td>subject</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>email subject</td>
                                                </tr>
                                                <tr>
                                                    <td>body</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>email body</td>
                                                </tr>
                                                <tr>
                                                    <td>html_body</td>
                                                    <td> bool </td>
                                                    <td> False</td>
                                                    <td>True if body contains HTML, defaults to False</td>
                                                </tr>
                                                <tr>
                                                    <td>attachments</td>
                                                    <td> typing.Any </td>
                                                    <td> None</td>
                                                    <td>list of filepaths to include in the email, defaults to []</td>
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
                                                        <td class="field-body">list of addresses</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param subject:</th>
                                                        <td class="field-body">email subject</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param body:</th>
                                                        <td class="field-body">email body</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param html_body:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">True if body contains HTML, defaults to False</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param attachments:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">list of filepaths to include in the email, defaults to []</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body"><cite>True</cite> if there were no errors</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="wait-for-message">
                                        <h2><a href="#wait-for-message">Wait For Message</a></h2>

                                        <div>
                                            <p class="shortdoc">Wait for email matching <cite>criterion</cite> to arrive into mailbox.</p>
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
                                                    <td> None</td>
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
                                            <p>Possible wait criterias are: SUBJECT, SENDER and BODY</p>
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
Wait for message     SUBJECT:Autosphere task calling    timeout=300    interval=10
</code></pre>
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
                            <div><a id="link-close-document" href="#close-document" class="">Close Document</a><a id="link-open-application" href="#open-application" class="">Open Application</a><a id="link-quit-application" href="#quit-application"
                                    class="">Quit Application</a><a id="link-send-message" href="#send-message" class="">Send Message</a><a id="link-wait-for-message" href="#wait-for-message" class="">Wait For Message</a></div>
                        </aside>
                    </div>
                </article>
         