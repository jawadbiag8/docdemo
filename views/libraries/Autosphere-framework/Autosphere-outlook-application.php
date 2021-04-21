<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Outlook.Application</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Outlook.Application</li>
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
                                            <p><cite>Outlook.Application</cite> is a library for controlling the Outlook application.</p>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">                 </span><span class="nn">Autosphere.Outlook.Application</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">              </span><span class="nf">Open Application</span><span class="p">
</span><span class="kn">Suite Teardown</span><span class="p">          </span><span class="nf">Quit Application</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">RECIPIENT</span><span class="p">}            </span><span class="s">address&#64;domain.com</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Send message</span><span class="p">
    </span><span class="nf">Send Message</span><span class="p">       </span><span class="s">recipients=</span><span class="p">${</span><span class="nv">RECIPIENT</span><span class="p">}
    ...                </span><span class="s">subject=This is the subject</span><span class="p">
    ...                </span><span class="s">body=This is the message body</span><span class="p">
    </span><span class="nf">..</span><span class="p">                 </span><span class="s">attachments=approved.png</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Outlook.Application</span> <span class="kn">import</span> <span class="n">Application</span>

<span class="k">def</span> <span class="nf">send_message</span><span class="p">():</span>
    <span class="n">app</span> <span class="o">=</span> <span class="n">Application</span><span class="p">()</span>
    <span class="n">app</span><span class="o">.</span><span class="n">open_application</span><span class="p">()</span>
    <span class="n">app</span><span class="o">.</span><span class="n">send_message</span><span class="p">(</span>
        <span class="n">recipients</span><span class="o">=</span><span class="s1">'EMAILADDRESS_1, EMAILADDRESS_2'</span><span class="p">,</span>
        <span class="n">subject</span><span class="o">=</span><span class="s1">'email subject'</span><span class="p">,</span>
        <span class="n">body</span><span class="o">=</span><span class="s1">'email body message'</span><span class="p">,</span>
        <span class="n">attachments</span><span class="o">=</span><span class="s1">'../orders.csv'</span>
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
                                                        <div class="keyword" id="close-document">
                                                            <h2><a href="#close-document">Close Document</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close the active document (if open).</p>
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Wait for message     SUBJECT:Autosphere task calling    timeout=300    interval=10
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
                                                    <li><a id="link-close-document" href="#close-document" class="">Close Document</a></li>
                                                    <li><a id="link-open-application" href="#open-application" class="">Open Application</a></li>
                                                    <li><a id="link-quit-application" href="#quit-application" class="">Quit Application</a></li>
                                                    <li><a id="link-send-message" href="#send-message" class="">Send Message</a></li>
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