<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.RobotLogListener</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.RobotLogListener</li>
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
                                        <div class="document">
                                            <p><cite>RobotLogListener</cite> is a library for controlling logging during
                                                a Autosphere execution using the listener API.</p>
                                            <p><strong>About keyword parameters</strong></p>
                                            <p>Parameters <cite>names</cite> and <cite>keywords</cite> for keywords <cite>Mute Run On Failure</cite> and
                                                <cite>Register Protected Keywords</cite>
                                                do not need to be full names of keywords, ie. all keywords matching even partially will be affected.
                                                <cite>Run Keyword</cite> would match all <cite>BuiltIn</cite> library keywords (17 keywords in RF 3.2.1)
                                                and of course all
                                                <cite>Run Keyword</cite> named keywords in any resource and/or library file which are imported would be
                                                matched also.
                                            </p>
                                            <p><strong>Mute Run On Failure</strong></p>
                                            <p>This keyword is to be used specifically with <cite>Autosphere.Browser.Selenium</cite> library, which extends
                                                <cite>SeleniumLibrary</cite>. Normally most of the <cite>SeleniumLibrary</cite> keywords execute
                                                <cite>run_on_failure</cite>
                                                behaviour, which can be set at library initialization. By default this behaviour is running
                                                <cite>Capture Page Screenshot</cite> keyword on failure.
                                            </p>
                                            <p>In the example task <cite>Check the official website</cite> below the keyword <cite>Run Keyword</cite> is
                                                muted and when
                                                it runs the keyword <cite>Element Should Be Visible</cite> then those failures do not create page
                                                screenshots
                                                into log file.</p>
                                            <p>It is also possible to change default failure behaviour by giving parameter
                                                <cite>optional_keyword_to_run</cite> for <cite>Mute Run On Failure</cite>, see task <cite>Check the
                                                    official website with error log</cite>.
                                                This optional keyword would be then executed on failure. Due to the underlying
                                                <cite>SeleniumLibrary</cite>
                                                implementation this keyword can't have arguments.
                                            </p>
                                            <p>Example of using <cite>Mute Run On Failure</cite> without and with optional keyword to run.</p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
    </span><span class="kn">Library</span><span class="p">         </span><span class="nn">Autosphere.Browser.Selenium</span><span class="p">
    </span><span class="kn">Library</span><span class="p">         </span><span class="nn">Autosphere.RobotLogListener</span><span class="p">
    </span><span class="kn">Task Setup</span><span class="p">      </span><span class="nf">Set Task Variable</span><span class="p">   ${</span><span class="nv">TRIES</span><span class="p">}   </span><span class="s">1</span><span class="p">
    </span><span class="kn">Task Teardown</span><span class="p">   </span><span class="nf">Close All Browsers</span><span class="p">
    
    </span><span class="gh">*** Tasks ***</span><span class="p">
    </span><span class="gu">Check the official website</span><span class="p">
       </span><span class="nf">Mute Run On Failure</span><span class="p">   </span><span class="s">Run Keyword</span><span class="p">
       </span><span class="nf">Open Available Browser</span><span class="p">   </span><span class="s">https://www.google.com</span><span class="p">
       </span><span class="nf">Check for visible element</span><span class="p">
       </span><span class="nf">Capture Page Screenshot</span><span class="p">
    
    </span><span class="gu">Check the official website with error log</span><span class="p">
       </span><span class="nf">Mute Run On Failure</span><span class="p">   </span><span class="s">Run Keyword</span><span class="p">  </span><span class="s">optional_keyword_to_run=Log tries</span><span class="p">
       </span><span class="nf">Open Available Browser</span><span class="p">   </span><span class="s">https://www.google.com</span><span class="p">
       </span><span class="nf">Check for visible element</span><span class="p">
       </span><span class="nf">Capture Page Screenshot</span><span class="p">
    
    </span><span class="gh">*** Keywords ***</span><span class="p">
    </span><span class="gu">Check for visible element</span><span class="p">
       </span><span class="nf">FOR</span><span class="p">  ${</span><span class="nv">idx</span><span class="p">}  </span><span class="s">IN RANGE</span><span class="p">  </span><span class="s">1</span><span class="p">   </span><span class="s">20</span><span class="p">
          </span><span class="nf">Set Task Variable</span><span class="p">   ${</span><span class="nv">TRIES</span><span class="p">}   ${</span><span class="nv">idx</span><span class="p">}
          ${</span><span class="nv">status</span><span class="p">}   </span><span class="nf">Run Keyword And Return Status</span><span class="p">   </span><span class="s">Element Should Be Visible</span><span class="p">  </span><span class="s">id:xyz</span><span class="p">
          </span><span class="nf">Exit For Loop If</span><span class="p">   </span><span class="s">'</span><span class="p">${</span><span class="nv">status</span><span class="p">}</span><span class="s">' == 'PASS'</span><span class="p">
          </span><span class="nf">Sleep</span><span class="p">  </span><span class="s">2s</span><span class="p">
       </span><span class="nf">END</span><span class="p">
    
    </span><span class="gu">Log tries</span><span class="p">
       </span><span class="nf">Log</span><span class="p">  </span><span class="s">Checked element visibility </span><span class="p">${</span><span class="nv">TRIES</span><span class="p">}</span><span class="s"> times</span>
    </pre>
                                            <p><strong>Register Protected Keywords</strong></p>
                                            <p>This keyword is used to totally disable logging for named keywords. In the example below
                                                the keyword <cite>This will not output</cite> is protected and it will not be logging into Robot
                                                Framework
                                                log files.</p>
                                            <p><strong> Autosphere</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
    </span><span class="kn">Library</span><span class="p">         </span><span class="nn">Autosphere.RobotLogListener</span><span class="p">
    
    </span><span class="gh">*** Tasks ***</span><span class="p">
    </span><span class="gu">Protecting keywords</span><span class="p">
       </span><span class="nf">This will not output</span><span class="p">        </span><span class="c"># will output because called before register
    </span><span class="p">   </span><span class="nf">Register Protected Keywords</span><span class="p">    </span><span class="s">This will not output</span><span class="p">
       </span><span class="nf">This will not output</span><span class="p">        </span><span class="c"># is now registered
    </span><span class="p">   </span><span class="nf">This will output</span><span class="p">
    
    </span><span class="gh">*** Keywords ***</span><span class="p">
    </span><span class="gu">This will not output</span><span class="p">
       </span><span class="nf">Log</span><span class="p">   </span><span class="s">1</span><span class="p">
    
    </span><span class="gu">This will output</span><span class="p">
       </span><span class="nf">Log</span><span class="p">   </span><span class="s">2</span>
    </pre>
                                            <p><strong>Python</strong></p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">robot.libraries.BuiltIn</span> <span class="kn">import</span> <span class="n">BuiltIn</span><span class="p">,</span> <span class="n">RobotNotRunningError</span>
    <span class="kn">from</span> <span class="nn">Autosphere.RobotLogListener</span> <span class="kn">import</span> <span class="n">RobotLogListener</span>
    
    <span class="k">try</span><span class="p">:</span>
       <span class="n">BuiltIn</span><span class="p">()</span><span class="o">.</span><span class="n">import_library</span><span class="p">(</span><span class="s2">"Autosphere.RobotLogListener"</span><span class="p">)</span>
    <span class="k">except</span> <span class="n">RobotNotRunningError</span><span class="p">:</span>
       <span class="k">pass</span>
    
    <span class="k">class</span> <span class="nc">CustomLibrary</span><span class="p">:</span>
    
       <span class="k">def</span> <span class="fm">__init__</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
          <span class="n">listener</span> <span class="o">=</span> <span class="n">RobotLogListener</span><span class="p">()</span>
          <span class="n">listener</span><span class="o">.</span><span class="n">register_protected_keywords</span><span class="p">(</span>
                <span class="p">[</span><span class="s2">"CustomLibrary.special_keyword"</span><span class="p">]</span>
          <span class="p">)</span>
    
       <span class="k">def</span> <span class="nf">special_keyword</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
          <span class="nb">print</span><span class="p">(</span><span class="s1">'will not be written to log'</span><span class="p">)</span>
          <span class="k">return</span> <span class="s1">'not shown in the log'</span>
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
                                                        <div class="keyword" id="end-keyword">
                                                            <h2><a href="#end-keyword">End Keyword</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Listener method for keyword end.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>name</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>attributes</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param name:</th>
                                                                                <td class="field-body">keyword name</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param attributes:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">keyword attributes</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>If <cite>name</cite> exists in the protected keywords list then log level is
                                                                        restored back to level it was before settings to NONE.</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mute-run-on-failure">
                                                            <h2><a href="#mute-run-on-failure">Mute Run On Failure</a>

                                                            </h2>

                                                            <div>

                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>keywords</td>
                                                                            <td>Any, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>optional_keyword_to_run</td>
                                                                            <td>str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param keywords:</th>
                                                                                <td class="field-body">list of keywords to mute</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param optional_keyword_to_run:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">name of the keyword to execute
                                                                                    if keyword defined by <cite>keywords</cite> fail</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>By default <cite>Autosphere</cite> executes <cite>Capture Page Screenshot</cite> on failure.</p>
                                                                    <p>If <cite>optional_keyword_to_run</cite> is not given then nothing is done on failure, but this can be set to override <cite>Autosphere</cite>
                                                                        default behaviour for a set of keywords.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="only-info-level">
                                                            <h2><a href="#only-info-level">Only Info Level</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Register keywords that are allowed only INFO level logging</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>names</td>
                                                                            <td>Any, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param names:</th>
                                                                                <td class="field-body">list of keywords to protect</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="register-protected-keywords">
                                                            <h2><a href="#register-protected-keywords">Register Protected Keywords</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Register keywords that are not going to be logged into Autosphere logs.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>names</td>
                                                                            <td>Any, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param names:</th>
                                                                                <td class="field-body">list of keywords to protect</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="start-keyword">
                                                            <h2><a href="#start-keyword">Start Keyword</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Listener method for keyword start.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>name</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>attributes</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">

                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name">
                                                                            <col class="field-body">
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param name:</th>
                                                                                <td class="field-body">keyword name</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param attributes:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">keyword attributes</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>If <cite>name</cite> exists in the protected keywords list then log level is
                                                                        temporarily set to NONE.</p>
                                                                </div>

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
                                            <div class="ps"><a id="link-end-keyword" href="#end-keyword" class="">End Keyword</a><a id="link-mute-run-on-failure" href="#mute-run-on-failure" class="">Mute Run On
                                                    Failure</a><a id="link-only-info-level" href="#only-info-level" class="">Only Info
                                                    Level</a><a id="link-register-protected-keywords" href="#register-protected-keywords" class="">Register
                                                    Protected Keywords</a><a id="link-start-keyword" href="#start-keyword" class="">Start Keyword</a>
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