<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Desktop.Windows</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Desktop.Windows</li>
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
                                            <p><cite>Windows</cite> is a library for managing the Windows operating system.</p>
                                            <p><strong>Running Windows applications</strong></p>
                                            <p>Windows applications can be started in several ways. The library supports the following keywords:</p>
                                            <ul class="simple">
                                                <li>Open Application (dispatch Office applications)</li>
                                                <li>Open File (open the file as process which opens the associated application)</li>
                                                <li>Open Executable (uses pywinauto start)</li>
                                                <li>Open Using Run Dialog (uses Windows run dialog)</li>
                                                <li>Open From Search (uses Windows search dialog)</li>
                                            </ul>
                                            <p><strong>Locators</strong></p>
                                            <p><cite>Locator</cite> is used to identify the element for interaction - usually for a mouse click.</p>
                                            <p>Locators can investigated for application once it has been opened by calling the keyword <cite>get_windows_elements</cite> which can store locator information into JSON file and <cite>screenshot</cite> of the element into
                                                an image file.</p>
                                            <p><strong>Identifying locator</strong></p>
                                            <p>The element needs to be identified by a unique method, for example, &quot;Three&quot; for button 3 in the Calculator application. It can be given either as <cite>Three</cite> or
                                                <cite>name:Three</cite>.
                                            </p>
                                            <p>Possible search criterias:</p>
                                            <ul class="simple">
                                                <li>name</li>
                                                <li>class (class_name)</li>
                                                <li>type (control_type)</li>
                                                <li>id (automation_id)</li>
                                                <li>any if none was defined</li>
                                            </ul>
                                            <p>The current method of inspecting elements on Windows is <cite>inspect.exe</cite> which is part of <a class="reference external" href="https://docs.microsoft.com/en-us/windows/win32/winauto/inspect-objects">Windows
                                                    SDK</a>.</p>
                                            <p><strong>Keyboard</strong></p>
                                            <p>The keyword <cite>send_keys</cite> can be used to send keys to the active window. The keyword
                                                <cite>type_keys</cite> sends keys to the active window element.
                                            </p>
                                            <p>Special key codes are documented on <a class="reference external" href="https://pywinauto.readthedocs.io/en/latest/code/pywinauto.keyboard.html#">pywinauto</a> documentation page.</p>
                                            <p><strong>FAQ</strong></p>
                                            <ol class="upperalpha simple" start="17">
                                                <li>I see error message <cite>AttributeError: module
                                                        'win32com.gen_py.00020813-0000-0000-C000-000000000046x0x1x9' has no
                                                        attribute 'CLSIDToClassMap'</cite></li>
                                            </ol>
                                            <ol class="upperalpha simple">
                                                <li>From PowerShell run this command: <cite>Remove-Item -path
                                                        $env:LOCALAPPDATATempgen_py -recurse</cite></li>
                                            </ol>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">          </span><span class="nn">Autosphere.Desktop.Windows</span><span class="p">
</span><span class="kn">Suite Teardown</span><span class="p">   </span><span class="nf">Close all applications</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Open Calculator using run dialog</span><span class="p">
    ${</span><span class="nv">result</span><span class="p">}=              </span><span class="nf">Open using run dialog</span><span class="p">    </span><span class="s">calc.exe</span><span class="p">   </span><span class="s">Calculator</span><span class="p">
    ${</span><span class="nv">result</span><span class="p">}=              </span><span class="nf">Get Window Elements</span><span class="p">
    </span><span class="nf">Send Keys</span><span class="p">               </span><span class="s">5*2=</span><span class="p">
    ${</span><span class="nv">result</span><span class="p">}=              </span><span class="nf">Get element</span><span class="p">             </span><span class="s">partial name:Display is</span><span class="p">
    </span><span class="nf">Log Many</span><span class="p">                ${</span><span class="nv">result</span><span class="p">}
    ${</span><span class="nv">result</span><span class="p">}=              </span><span class="nf">Get element rich text</span><span class="p">   </span><span class="s">id:CalculatorResults</span><span class="p">
    </span><span class="nf">Should Be Equal As Strings</span><span class="p">  ${</span><span class="nv">result</span><span class="p">}  </span><span class="s">Display is 10</span><span class="p">
    ${</span><span class="nv">result</span><span class="p">}=              </span><span class="nf">Get element rectangle</span><span class="p">   </span><span class="s">partial name:Display is</span><span class="p">
    ${</span><span class="nv">result</span><span class="p">}=              </span><span class="nf">Is Element Visible</span><span class="p">      </span><span class="s">CalculatorResults</span><span class="p">
    ${</span><span class="nv">result</span><span class="p">}=              </span><span class="nf">Is Element Enabled</span><span class="p">      </span><span class="s">partial name:Display is</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Desktop.Windows</span> <span class="kn">import</span> <span class="n">Windows</span>

<span class="n">win</span> <span class="o">=</span> <span class="n">Windows</span><span class="p">()</span>

<span class="k">def</span> <span class="nf">open_calculator</span><span class="p">():</span>
    <span class="n">win</span><span class="o">.</span><span class="n">open_from_search</span><span class="p">(</span><span class="s2">&quot;calc.exe&quot;</span><span class="p">,</span> <span class="s2">&quot;Calculator&quot;</span><span class="p">)</span>
    <span class="n">elements</span> <span class="o">=</span> <span class="n">win</span><span class="o">.</span><span class="n">get_window_elements</span><span class="p">()</span>

<span class="k">def</span> <span class="nf">make_calculations</span><span class="p">(</span><span class="n">expression</span><span class="p">):</span>
    <span class="n">win</span><span class="o">.</span><span class="n">send_keys</span><span class="p">(</span><span class="n">expression</span><span class="p">)</span>
    <span class="n">result</span> <span class="o">=</span> <span class="n">win</span><span class="o">.</span><span class="n">get_element_rich_text</span><span class="p">(</span><span class="s1">'id:CalculatorResults'</span><span class="p">)</span>
    <span class="k">return</span> <span class="nb">int</span><span class="p">(</span><span class="n">result</span><span class="o">.</span><span class="n">strip</span><span class="p">(</span><span class="s1">'Display is '</span><span class="p">))</span>

<span class="k">if</span> <span class="vm">__name__</span> <span class="o">==</span> <span class="s2">&quot;__main__&quot;</span><span class="p">:</span>
    <span class="n">open_calculator</span><span class="p">()</span>
    <span class="n">exp</span> <span class="o">=</span> <span class="s1">'5*2='</span>
    <span class="n">result</span> <span class="o">=</span> <span class="n">make_calculations</span><span class="p">(</span><span class="n">exp</span><span class="p">)</span>
    <span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">&quot;Calculation result of '</span><span class="si">{</span><span class="n">exp</span><span class="si">}</span><span class="s2">' is '</span><span class="si">{</span><span class="n">result</span><span class="si">}</span><span class="s2">'&quot;</span><span class="p">)</span>
    <span class="n">win</span><span class="o">.</span><span class="n">close_all_applications</span><span class="p">()</span>
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
                                                        <div class="keyword" id="boot-time-in-seconds-from-epoch">
                                                            <h2><a href="#boot-time-in-seconds-from-epoch">Boot Time In Seconds From Epoch</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get machine boot time</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">boot time in seconds from Epoch</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${epoch}  Boot Time In Seconds From Epoch
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="calculate-rectangle-center">
                                                            <h2><a href="#calculate-rectangle-center">Calculate Rectangle Center</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Calculate x and y center coordinates from rectangle.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>rectangle</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>element rectangle coordinates</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param rectangle:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">element rectangle coordinates</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">x and y coordinates of rectangle center</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Using Run Dialog   calc  Calculator
&amp;{rect}=        Get Element Rectangle    CalculatorResults
${x}  ${y}=     Calculate Rectangle Center   ${rect}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-type">
                                                            <h2><a href="#click-type">Click Type</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Mouse click on coordinates x and y.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td> int </td>
                                                                        <td> None</td>
                                                                        <td>horizontal coordinate for click, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td> int </td>
                                                                        <td> None</td>
                                                                        <td>vertical coordinate for click, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>click_type</td>
                                                                        <td> str </td>
                                                                        <td> click</td>
                                                                        <td>"click", "right" or "double", defaults to "click"</td>
                                                                    </tr>
                                                                </table>


                                                                <p>Default click type is <cite>click</cite> meaning <cite>left</cite></p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param x:</th>
                                                                            <td class="field-body">horizontal coordinate for click, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param y:</th>
                                                                            <td class="field-body">vertical coordinate for click, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param click_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">&quot;click&quot;, &quot;right&quot; or &quot;double&quot;, defaults to &quot;click&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ValueError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if coordinates are not valid</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Click Type  x=450  y=100
Click Type  x=450  y=100  click_type=right
Click Type  x=450  y=100  click_type=double
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-all-applications">
                                                            <h2><a href="#close-all-applications">Close All Applications</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close all applications</p>



                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Application   Excel
Open Application   Word
Open Executable    notepad.exe   Untitled - Notepad
Close All Applications
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="connect-by-handle">
                                                            <h2><a href="#connect-by-handle">Connect By Handle</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Connect to application by its handle</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>handle of the application</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>windowtitle</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>existing_app</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param handle:</th>
                                                                            <td class="field-body">handle of the application</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${appid}  Connect By Handle  88112
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="connect-by-pid">
                                                            <h2><a href="#connect-by-pid">Connect By Pid</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Connect to application by its pid</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>app_pid</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>process id of the application</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>windowtitle</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param app_pid:</th>
                                                                            <td class="field-body">process id of the application</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${appid}  Connect By PID  3231
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="drag-and-drop">
                                                            <h2><a href="#drag-and-drop">Drag And Drop</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Drag elements from source and drop them on target.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>src</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>application object or instance id</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>application object or instance id</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>src_locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>elements to move</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target_locator</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>handle_ctrl_key</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>True if keyword should press CTRL down dragging</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>drop_delay</td>
                                                                        <td> float </td>
                                                                        <td> 2.0</td>
                                                                        <td>how many seconds to wait until releasing mouse drop, default 2.0</td>
                                                                    </tr>
                                                                </table>


                                                                <p>Please note that if CTRL is not pressed down during drag and drop then operation is MOVE operation, on CTRL down the operation is COPY operation.</p>
                                                                <p>There will be also overwrite notification if dropping over existing files.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param src:</th>
                                                                            <td class="field-body">application object or instance id</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param target:</th>
                                                                            <td class="field-body">application object or instance id</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param src_locator:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">elements to move</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param handle_ctrl_key:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">True if keyword should press CTRL down dragging</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param drop_delay:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">how many seconds to wait until releasing mouse drop, default 2.0</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ValueError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">on validation errors</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}=        Open Using Run Dialog    explorer.exe{VK_SPACE}C:\workfiles\movethese   movethese
${app2}=        Open Using Run Dialog    wordpad.exe   Document - WordPad
Drag And Drop   ${app1}   ${app2}   regexp:testfile_\d.txt  name:Rich Text Window   handle_ctrl_key=${True}
Drag And Drop   ${app1}   ${app1}   regexp:testfile_\d.txt  name:subdir  handle_ctrl_key=${True}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-element">
                                                            <h2><a href="#find-element">Find Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Find element from window by locator and criteria.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the locator</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>search_criteria</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>criteria by which element is matched</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">name of the locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param search_criteria:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">criteria by which element is matched</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of matching elements and locators that were found on the window
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{elements}   Find Element   CalculatorResults
Log Many  ${elements[0]}     # list of matching elements
Log Many  ${elements[1]}     # list of all available locators
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-app">
                                                            <h2><a href="#get-app">Get App</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get application object by id</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>app_id</td>
                                                                        <td> int </td>
                                                                        <td> None</td>
                                                                        <td>id of the application to get, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <p>By default returns active_application application object.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param app_id:</th>
                                                                            <td class="field-body">id of the application to get, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">application object</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}        Open Application   Excel
&amp;{appdetails}  Get App   ${app1}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-boot-time">
                                                            <h2><a href="#get-boot-time">Get Boot Time</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get computer boot time in seconds from Epoch or in datetime string.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_datetime</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>if True returns datetime string, otherwise seconds, defaults to False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>datetime_format</td>
                                                                        <td> str </td>
                                                                        <td>%S</td>
                                                                        <td>datetime string format, defaults to "%Y-%m-%d %H:%M:%S"</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param as_datetime:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if True returns datetime string, otherwise seconds, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param datetime_format:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">datetime string format, defaults to &quot;%Y-%m-%d %H:%M:%S&quot;
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">seconds from Epoch or datetime string</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${boottime}  Get Boot Time
${boottime}  Get Boot Time   as_datetime=True
${boottime}  Get Boot Time   as_datetime=True  datetime_format=%d.%m.%Y
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-dialog-rectangle">
                                                            <h2><a href="#get-dialog-rectangle">Get Dialog Rectangle</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get dialog rectangle coordinates</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ctrl</td>
                                                                        <td> typing.Any </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_dict</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <p>If <cite>ctrl</cite> is None then get coordinates from <cite>dialog</cite> :param ctrl: name of the window control object, defaults to None :return: coordinates: left, top, right, bottom</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${left}  ${top}  ${right}  ${bottom}=  Get Dialog Rectangle
&amp;{coords}  Get Dialog Rectangle  as_dict=True
Log  top=${coords.top} left=${coords.left}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element">
                                                            <h2><a href="#get-element">Get Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get element by locator.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the locator</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>screenshot</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>takes element screenshot if True, defaults to False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>open_dialog</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>True if dialog should be reopened, default to True</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">name of the locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param screenshot:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">takes element screenshot if True, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param open_dialog:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">True if dialog should be reopened, default to True</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">element if element was identified, else False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${element}  Get Element  CalculatorResults
${element}  Get Element  Result      screenshot=True
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-center">
                                                            <h2><a href="#get-element-center">Get Element Center</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get element center coordinates</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>element</td>
                                                                        <td> dict</td>
                                                                        <td></td>
                                                                        <td>dictionary of element items</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param element:</th>
                                                                            <td class="field-body">dictionary of element items</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">coordinates, x and y</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{element}   Find Element  CalculatorResults
${x}  ${y}=  Get Element Center  ${elements[0][0]}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-rectangle">
                                                            <h2><a href="#get-element-rectangle">Get Element Rectangle</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get value of element <cite>rectangle</cite> attribute.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element locator</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_dict</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>return values in a dictionary, default False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_dict:</th>
                                                                            <td class="field-body">return values in a dictionary, default <cite>False</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">(left, top, right, bottom) values if found, else False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${left}  ${top}  ${right}  ${bottom}=  Get Element Rectangle  CalculatorResults
&amp;{coords}  Get Element Rectangle  CalculatorResults  as_dict=True
Log  top=${coords.top} left=${coords.left}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-rich-text">
                                                            <h2><a href="#get-element-rich-text">Get Element Rich Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get value of element <cite>rich text</cite> attribute.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element locator</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body"><cite>rich_text</cite> value if found, else False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${text}  Get Element Rich Text  CalculatorResults
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-machine-name">
                                                            <h2><a href="#get-machine-name">Get Machine Name</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get machine name</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">machine name as string</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${machine}  Get Machine Name
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-memory-stats">
                                                            <h2><a href="#get-memory-stats">Get Memory Stats</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get computer memory stats and return those in bytes or in humanized memory format.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>humanized</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>if False returns memory information in bytes, defaults to True</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Get computer memory stats and return those in bytes or in humanized memory format.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param humanized:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if False returns memory information in bytes, defaults to True</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">memory information in dictionary format</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&amp;{mem}     Get Memory Stats
&amp;{mem}     Get Memory Stats   humanized=False
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-open-applications">
                                                            <h2><a href="#get-open-applications">Get Open Applications</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get list of all open applications</p>



                                                                <p>Returns a dictionary</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}    Open Application   Excel
${app2}    Open Executable    calc.exe  Calculator
${app3}    Open File          /path/to/myfile.txt
&amp;{apps}    Get Open Applications
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-spaced-string">
                                                            <h2><a href="#get-spaced-string">Get Spaced String</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Replace spaces in a text with <cite>pywinauto.keyboard</cite> space characters
                                                                    <cite>{VK_SPACE}</cite>
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>replace spaces in this string</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Replace spaces in a text with <cite>pywinauto.keyboard</cite> space characters <cite>{VK_SPACE}</cite></p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param text:</th>
                                                                            <td class="field-body">replace spaces in this string</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${txt}    Get Spaced String   My name is Bond
# ${txt} = My{VK_SPACE}name{VK_SPACE}is{VK_SPACE}Bond
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-text">
                                                            <h2><a href="#get-text">Get Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get text from element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element locator</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element locator</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Using Run Dialog  calc     Calculator
Type Into    CalculatorResults   11
Type Into    CalculatorResults   55
&amp;{val}       Get Text   CalculatorResults
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-username">
                                                            <h2><a href="#get-username">Get Username</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get username of logged in user</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">username as string</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${user}  Get Username
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-window-elements">
                                                            <h2><a href="#get-window-elements">Get Window Elements</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get element information about all window dialog controls and their descendants.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>screenshot</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>save element screenshot if True, defaults to False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>element_json</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>save element json if True, defaults to False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>outline</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>highlight elements if True, defaults to False</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Get element information about all window dialog controls and their descendants.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param screenshot:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">save element screenshot if True, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param element_json:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">save element json if True, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param outline:</th>
                                                                            <td class="field-body">highlight elements if True, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">all controls and all elements</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{elements}   Get Window Elements
Log Many      ${elements[0]}     # list of all available locators
Log Many      ${elements[1]}     # list of matching elements
&#64;{elements}   Get Window Elements  screenshot=True  element_json=True  outline=True
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-window-list">
                                                            <h2><a href="#get-window-list">Get Window List</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get list of open windows</p>



                                                                <p>Window dictionaries contain:</p>
                                                                <ul class="simple">
                                                                    <li>title</li>
                                                                    <li>pid</li>
                                                                    <li>handle</li>
                                                                </ul>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of window dictionaries</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{windows}    Get Window List
FOR  ${window}  IN  &#64;{windows}
    Log Many  ${window}
END
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-enabled">
                                                            <h2><a href="#is-element-enabled">Is Element Enabled</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element enabled.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element locator</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if enabled, else False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${res}=   Is Element Enabled  CalculatorResults
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-matching">
                                                            <h2><a href="#is-element-matching">Is Element Matching</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element matching. Check if locator is found in <cite>any</cite> field or
                                                                    <cite>criteria</cite> field in the window items.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>itemdict</td>
                                                                        <td> dict</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the locator</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>criteria</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>criteria on which to match element</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>wildcard</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>whether to do reg exp match or not, default False</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Is element matching. Check if locator is found in <cite>any</cite> field or <cite>criteria</cite> field in the window items.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param itemDict:</th>
                                                                            <td class="field-body">dictionary of element items</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">name of the locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param criteria:</th>
                                                                            <td class="field-body">criteria on which to match element</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param wildcard:</th>
                                                                            <td class="field-body">whether to do reg exp match or not, default False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if element is matching locator and criteria, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-visible">
                                                            <h2><a href="#is-element-visible">Is Element Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element visible.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element locator</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if visible, else False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${res}=   Is Element Visible  CalculatorResults
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="kill-process">
                                                            <h2><a href="#kill-process">Kill Process</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Kill process by name</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>process_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the process</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param process_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the process</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if succeeds False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${process}  Process Exists  calc  strict=False
${status}   Kill Process    ${process.name()}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="kill-process-by-pid">
                                                            <h2><a href="#kill-process-by-pid">Kill Process By Pid</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Kill process by pid</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pid</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td>process identifier</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param pid:</th>
                                                                            <td class="field-body">process identifier</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${process}  Process Exists  calc  strict=False
${status}   Kill Process    ${process.pid}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="lock-screen">
                                                            <h2><a href="#lock-screen">Lock Screen</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Put windows into lock mode</p>



                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Lock Screen
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-in">
                                                            <h2><a href="#log-in">Log In</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Log into Windows <cite>domain</cite> with <cite>username</cite> and
                                                                    <cite>password</cite>.
                                                                </p>
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
                                                                        <td>name of the user</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>password of the user</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>domain</td>
                                                                        <td> str </td>
                                                                        <td> .</td>
                                                                        <td>windows domain for the user, defaults to "."</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param username:</th>
                                                                            <td class="field-body">name of the user</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">password of the user</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param domain:</th>
                                                                            <td class="field-body">windows domain for the user, defaults to &quot;.&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">handle</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Log In  username=myname  password=mypassword  domain=company
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="menu-select">
                                                            <h2><a href="#menu-select">Menu Select</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Select item from menu</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>menuitem</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the menu item</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param menuitem:</th>
                                                                            <td class="field-body">name of the menu item</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Using Run Dialog   notepad     Untitled - Notepad
Menu Select             File-&gt;Print
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="minimize-dialog">
                                                            <h2><a href="#minimize-dialog">Minimize Dialog</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Minimize window by its title</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>windowtitle</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name of the window, default None means that active window is going to be minimized</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param windowtitle:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the window, default <cite>None</cite> means that active window is going to be minimized</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Using Run Dialog  calc     Calculator
Open Using Run Dialog  notepad  Untitled - Notepad
Minimize Dialog    # Current window (Notepad)
Minimize Dialog    Calculator
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-click">
                                                            <h2><a href="#mouse-click">Mouse Click</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Mouse click <cite>locator</cite>, <cite>coordinates</cite>, or
                                                                    <cite>image</cite>
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>element locator on active window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td> int </td>
                                                                        <td> 0</td>
                                                                        <td>coordinate x on desktop</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td> int </td>
                                                                        <td> 0</td>
                                                                        <td>coordinate y on desktop</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>off_x</td>
                                                                        <td> int </td>
                                                                        <td> 0</td>
                                                                        <td>offset x (used for locator and image clicks)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>off_y</td>
                                                                        <td> int </td>
                                                                        <td> 0</td>
                                                                        <td>offset y (used for locator and image clicks)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>image</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>image to click on desktop</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>method</td>
                                                                        <td> str </td>
                                                                        <td> locator</td>
                                                                        <td>one of the available methods to mouse click, default "locator"</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ctype</td>
                                                                        <td> str </td>
                                                                        <td> click</td>
                                                                        <td>type of mouse click</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <p>When using method <cite>locator</cite>,image or <cite>ocr</cite> mouse is clicked by default at center coordinates.</p>
                                                                <p>Click types are:</p>
                                                                <ul class="simple">
                                                                    <li><cite>click</cite> normal left button mouse click</li>
                                                                    <li><cite>double</cite></li>
                                                                    <li><cite>right</cite></li>
                                                                </ul>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element locator on active window</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param x:</th>
                                                                            <td class="field-body">coordinate x on desktop</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param y:</th>
                                                                            <td class="field-body">coordinate y on desktop</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param off_x:</th>
                                                                            <td class="field-body">offset x (used for locator and image clicks)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param off_y:</th>
                                                                            <td class="field-body">offset y (used for locator and image clicks)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param image:</th>
                                                                            <td class="field-body">image to click on desktop</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param method:</th>
                                                                            <td class="field-body">one of the available methods to mouse click, default &quot;locator&quot;
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param ctype:</th>
                                                                            <td class="field-body">type of mouse click</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param kwargs:</th>
                                                                            <td class="field-body">these keyword arguments can be used to pass arguments to underlying <cite>Images</cite> library to finetune image template matching, for example. <cite>tolerance=0.5</cite> would adjust image tolerance
                                                                                for the image matching
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Mouse Click  method=coordinates  100   100
Mouse Click  CalculatorResults
Mouse Click  method=image  image=myimage.png  off_x=10  off_y=10  ctype=right
Mouse Click  method=image  image=myimage.png  tolerance=0.8
${elements}  ${other}=     Find Element  class:Button
FOR  ${element}  IN  &#64;{elements}
    Run Keyword If   ${element}[visible]   Mouse Click  ${element}
END
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-click-coords">
                                                            <h2><a href="#mouse-click-coords">Mouse Click Coords</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click at coordinates on desktop</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td>horizontal coordinate on the windows to click</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td>vertical coordinate on the windows to click</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ctype</td>
                                                                        <td> str </td>
                                                                        <td> click</td>
                                                                        <td>click type "click", "right" or "double", defaults to "click"</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>delay_time</td>
                                                                        <td> float </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param x:</th>
                                                                            <td class="field-body">horizontal coordinate on the windows to click</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param y:</th>
                                                                            <td class="field-body">vertical coordinate on the windows to click</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param ctype:</th>
                                                                            <td class="field-body">click type &quot;click&quot;, &quot;right&quot; or &quot;double&quot;, defaults to &quot;click&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param delay:</th>
                                                                            <td class="field-body">delay in seconds after, default is no delay</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Mouse Click Coords  x=450  y=100
Mouse Click Coords  x=300  y=300  ctype=right
Mouse Click Coords  x=450  y=100  delay=5.0
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-click-image">
                                                            <h2><a href="#mouse-click-image">Mouse Click Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click at template image on desktop</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>template</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>off_x</td>
                                                                        <td> int </td>
                                                                        <td> 0</td>
                                                                        <td>horizontal offset from top left corner to click on</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>off_y</td>
                                                                        <td> int </td>
                                                                        <td> 0</td>
                                                                        <td>vertical offset from top left corner to click on</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ctype</td>
                                                                        <td> str </td>
                                                                        <td> click</td>
                                                                        <td>type of mouse click</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param image:</th>
                                                                            <td class="field-body">image to click on desktop</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param off_x:</th>
                                                                            <td class="field-body">horizontal offset from top left corner to click on</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param off_y:</th>
                                                                            <td class="field-body">vertical offset from top left corner to click on</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param ctype:</th>
                                                                            <td class="field-body">type of mouse click</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param kwargs:</th>
                                                                            <td class="field-body">these keyword arguments can be used to pass arguments to underlying <cite>Images</cite> library to finetune image template matching, for example. <cite>tolerance=0.5</cite> would adjust image tolerance
                                                                                for the image matching
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Mouse Click  image=myimage.png  off_x=10  off_y=10  ctype=right
Mouse Click  image=myimage.png  tolerance=0.8
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-application">
                                                            <h2><a href="#open-application">Open Application</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open application by dispatch method</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>application</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the application as str</td>
                                                                    </tr>
                                                                </table>


                                                                <p>This keyword is used to launch Microsoft applications like Excel, Word, Outlook and Powerpoint.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param application:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the application as <cite>str</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">application instance id</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}    Open Application   Excel
${app2}    Open Application   Word
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-dialog">
                                                            <h2><a href="#open-dialog">Open Dialog</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open window by its title.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>windowtitle</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name of the window, defaults to active window if None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>highlight</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>draw outline for window if True, defaults to False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td> int </td>
                                                                        <td> 10</td>
                                                                        <td>time to wait for dialog to appear</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>existing_app</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param windowtitle:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the window, defaults to active window if None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param highlight:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">draw outline for window if True, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">time to wait for dialog to appear</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Dialog       Untitled - Notepad
Open Dialog       Untitled - Notepad   highlight=True   timeout=5
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-executable">
                                                            <h2><a href="#open-executable">Open Executable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open Windows executable. Window title name is required to get handle on the application.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>executable</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the executable</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>windowtitle</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>backend</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>set Windows backend, default None means using library default value</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>work_dir</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>path to working directory, default None</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Open Windows executable. Window title name is required to get handle on the application.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param executable:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the executable</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param windowtitle:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the window</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param backend:</th>
                                                                            <td class="field-body">set Windows backend, default None means using library default value</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param work_dir:</th>
                                                                            <td class="field-body">path to working directory, default None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">application instance id</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}    Open Executable   calc.exe  Calculator
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-file">
                                                            <h2><a href="#open-file">Open File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open associated application when opening file</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>path to file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">path to file</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">True if application is opened, False if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}    Open File   /path/to/myfile.txt
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-from-search">
                                                            <h2><a href="#open-from-search">Open From Search</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open application using Windows search dialog. Window title name is required to get handle on the application.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>executable</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the executable</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>windowtitle</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td> int </td>
                                                                        <td> 10</td>
                                                                        <td>time to wait for dialog to appear</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Open application using Windows search dialog. Window title name is required to get handle on the application.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param executable:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the executable</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param windowtitle:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the window</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">time to wait for dialog to appear</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">application instance id</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}    Open From Search  calculator  Calculator
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-using-run-dialog">
                                                            <h2><a href="#open-using-run-dialog">Open Using Run Dialog</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open application using Windows run dialog. Window title name is required to get handle on the application.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>executable</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the executable</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>windowtitle</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td> int </td>
                                                                        <td> 10</td>
                                                                        <td>time to wait for dialog to appear</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Open application using Windows run dialog. Window title name is required to get handle on the application.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param executable:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the executable</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param windowtitle:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the window</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">time to wait for dialog to appear</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">application instance id</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}    Open Using Run Dialog  notepad  Untitled - Notepad
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="process-exists">
                                                            <h2><a href="#process-exists">Process Exists</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Check if process exists by its name</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>process_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>search for this process</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strict</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>defines how match is made, default True which means that process name needs to be exact match and False does inclusive matching</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param process_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">search for this process</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param strict:</th>
                                                                            <td class="field-body">defines how match is made, default <cite>True</cite> which means that process name needs to be exact match and <cite>False</cite> does inclusive matching</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">process instance or False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${process}  Process Exists  calc
${process}  Process Exists  calc  strict=False
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="put-system-to-sleep">
                                                            <h2><a href="#put-system-to-sleep">Put System To Sleep</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Put Windows into sleep mode</p>



                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Put System To Sleep
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="quit-application">
                                                            <h2><a href="#quit-application">Quit Application</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Quit an application by application id or active application if
                                                                    <cite>app_id</cite> is None.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>app_id</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>application_id, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>send_keys</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Quit an application by application id or active application if <cite>app_id</cite> is None.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param app_id:</th>
                                                                            <td class="field-body">application_id, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}   Open Application   Excel
${app2}   Open Application   Word
Quit Application  ${app1}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="restore-dialog">
                                                            <h2><a href="#restore-dialog">Restore Dialog</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Restore window by its title</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>windowtitle</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name of the window, default None means that active window is going to be restored</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param windowtitle:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">name of the window, default <cite>None</cite> means that active window is going to be restored</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Using Run Dialog  notepad  Untitled - Notepad
Minimize Dialog
Sleep             1s
Restore Dialog
Sleep             1s
Restore Dialog    Untitled - Notepad
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="screenshot">
                                                            <h2><a href="#screenshot">Screenshot</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Save screenshot into filename.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the file</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>element</td>
                                                                        <td> dict </td>
                                                                        <td> None</td>
                                                                        <td>take element screenshot, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ctrl</td>
                                                                        <td> typing.Any </td>
                                                                        <td> None</td>
                                                                        <td>take control screenshot, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>desktop</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>take desktop screenshot if True, defaults to False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>overwrite</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>file is overwritten if True, defaults to False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">name of the file</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param element:</th>
                                                                            <td class="field-body">take element screenshot, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param ctrl:</th>
                                                                            <td class="field-body">take control screenshot, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param desktop:</th>
                                                                            <td class="field-body">take desktop screenshot if True, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param overwrite:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">file is overwritten if True, defaults to False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{element}   Find Element  CalculatorResults
Screenshot   element.png   ${elements[0][0]}
Screenshot   desktop.png   desktop=True
Screenshot   desktop.png   desktop=True  overwrite=True
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="send-keys">
                                                            <h2><a href="#send-keys">Send Keys</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Send keys into active windows.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>keys</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>list of keys to send</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param keys:</th>
                                                                            <td class="field-body">list of keys to send</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Executable  calc.exe  Calculator
Send Keys        2{+}3=
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="send-keys-to-input">
                                                            <h2><a href="#send-keys-to-input">Send Keys To Input</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Send keys to windows and add ENTER if <cite>with_enter</cite> is True</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>keys_to_type</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>keys to type into Windows</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>with_enter</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>send ENTER if with_enter is True</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>send_delay</td>
                                                                        <td> float </td>
                                                                        <td> 0.5</td>
                                                                        <td>delay after send_keys</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>enter_delay</td>
                                                                        <td> float </td>
                                                                        <td> 1.5</td>
                                                                        <td>delay after ENTER</td>
                                                                    </tr>
                                                                </table>


                                                                <p>At the end of send_keys there is by default 0.5 second delay. At the end of ENTER there is by default 1.5 second delay.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param keys_to_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">keys to type into Windows</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param with_enter:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">send ENTER if <cite>with_enter</cite> is True</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param send_delay:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">delay after send_keys</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param enter_delay:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">delay after ENTER</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${txt}    Get Spaced String   My name is Bond, James Bond
Send Keys To Input  ${txt}    with_enter=False
Send Keys To Input  {ENTER}THE   send_delay=5.0  with_enter=False
Send Keys To Input  {VK_SPACE}-{VK_SPACE}END   enter_delay=5.0
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-windows-backend">
                                                            <h2><a href="#set-windows-backend">Set Windows Backend</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set Windows backend which is used to interact with Windows applications</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>backend</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the backend to use</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Set Windows backend which is used to interact with Windows applications
                                                                </p>
                                                                <p>Allowed values defined by <cite>SUPPORTED_BACKENDS</cite></p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param backend:</th>
                                                                            <td class="field-body">name of the backend to use</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Set Windows Backend   uia
Open Executable   calc.exe  Calculator
Set Windows Backend   win32
Open Executable   calc.exe  Calculator
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="switch-to-application">
                                                            <h2><a href="#switch-to-application">Switch To Application</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Switch to application by id.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>app_id</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td>application's id</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param app_id:</th>
                                                                            <td class="field-body">application's id</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ValueError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">if application is not found by given id</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${app1}    Open Application   Excel
${app2}    Open Application   Word
Switch To Application   ${app1}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="type-into">
                                                            <h2><a href="#type-into">Type Into</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Type keys into element matched by given locator.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>element locator</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>keys</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>list of keys to type</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>empty_field</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">element locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param keys:</th>
                                                                            <td class="field-body">list of keys to type</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Executable  calc.exe  Calculator
Type Into        CalculatorResults  11
Type Into        CalculatorResults  22  empty_field=True
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="type-keys">
                                                            <h2><a href="#type-keys">Type Keys</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Type keys into active window element.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>keys</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>list of keys to type</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param keys:</th>
                                                                            <td class="field-body">list of keys to type</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open Executable  notepad.exe  Untitled - Notepad
Type Keys   My text
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-for-element">
                                                            <h2><a href="#wait-for-element">Wait For Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wait for element to appear into the window.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the locator</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>search_criteria</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>criteria by which element is matched</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td> float </td>
                                                                        <td> 30.0</td>
                                                                        <td>defines how long to wait for element to appear, defaults to 30.0 seconds</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>interval</td>
                                                                        <td> float </td>
                                                                        <td> 2.0</td>
                                                                        <td>how often to poll for element, defaults to 2.0 seconds (minimum is 0.5 seconds)</td>
                                                                    </tr>
                                                                </table>


                                                                <p>Can return 1 or more elements matching locator, or raises
                                                                    <cite>ElementNotFoundError</cite> if element is not found within timeout.
                                                                </p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">name of the locator</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param search_criteria:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">criteria by which element is matched</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">defines how long to wait for element to appear, defaults to 30.0 seconds</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param interval:</th>
                                                                            <td class="field-body">how often to poll for element, defaults to 2.0 seconds (minimum is 0.5 seconds)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{elements}  Wait For Element  CalculatorResults
&#64;{elements}  Wait For Element  Results   timeout=10  interval=1.5
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
                                                    <li><a id="link-boot-time-in-seconds-from-epoch" href="#boot-time-in-seconds-from-epoch" class="">Boot Time In Seconds From Epoch</a></li>
                                                    <li><a id="link-calculate-rectangle-center" href="#calculate-rectangle-center" class="">Calculate Rectangle Center</a></li>
                                                    <li><a id="link-click-type" href="#click-type" class="">Click Type</a></li>
                                                    <li><a id="link-close-all-applications" href="#close-all-applications" class="">Close All Applications</a></li>
                                                    <li><a id="link-connect-by-handle" href="#connect-by-handle" class="">Connect By Handle</a></li>
                                                    <li><a id="link-connect-by-pid" href="#connect-by-pid" class="">Connect By Pid</a></li>
                                                    <li><a id="link-drag-and-drop" href="#drag-and-drop" class="">Drag And Drop</a></li>
                                                    <li><a id="link-find-element" href="#find-element" class="">Find Element</a></li>
                                                    <li><a id="link-get-app" href="#get-app" class="">Get App</a></li>
                                                    <li><a id="link-get-boot-time" href="#get-boot-time" class="">Get Boot Time</a></li>
                                                    <li><a id="link-get-dialog-rectangle" href="#get-dialog-rectangle" class="">Get Dialog Rectangle</a></li>
                                                    <li><a id="link-get-element" href="#get-element" class="">Get Element</a></li>
                                                    <li><a id="link-get-element-center" href="#get-element-center" class="">Get Element Center</a></li>
                                                    <li><a id="link-get-element-rectangle" href="#get-element-rectangle" class="">Get Element Rectangle</a></li>
                                                    <li><a id="link-get-element-rich-text" href="#get-element-rich-text" class="">Get Element Rich Text</a></li>
                                                    <li><a id="link-get-machine-name" href="#get-machine-name" class="">Get Machine Name</a></li>
                                                    <li><a id="link-get-memory-stats" href="#get-memory-stats" class="">Get Memory Stats</a></li>
                                                    <li><a id="link-get-open-applications" href="#get-open-applications" class="">Get Open Applications</a></li>
                                                    <li><a id="link-get-spaced-string" href="#get-spaced-string" class="">Get Spaced String</a></li>
                                                    <li><a id="link-get-text" href="#get-text" class="">Get Text</a></li>
                                                    <li><a id="link-get-username" href="#get-username" class="">Get Username</a></li>
                                                    <li><a id="link-get-window-elements" href="#get-window-elements" class="">Get Window Elements</a></li>
                                                    <li><a id="link-get-window-list" href="#get-window-list" class="">Get Window List</a></li>
                                                    <li><a id="link-is-element-enabled" href="#is-element-enabled" class="">Is Element Enabled</a></li>
                                                    <li><a id="link-is-element-matching" href="#is-element-matching" class="">Is Element Matching</a></li>
                                                    <li><a id="link-is-element-visible" href="#is-element-visible" class="">Is Element Visible</a></li>
                                                    <li><a id="link-kill-process" href="#kill-process" class="">Kill Process</a></li>
                                                    <li><a id="link-kill-process-by-pid" href="#kill-process-by-pid" class="">Kill Process By Pid</a></li>
                                                    <li><a id="link-lock-screen" href="#lock-screen" class="">Lock Screen</a></li>
                                                    <li><a id="link-log-in" href="#log-in" class="">Log In</a></li>
                                                    <li><a id="link-menu-select" href="#menu-select" class="">Menu Select</a></li>
                                                    <li><a id="link-minimize-dialog" href="#minimize-dialog" class="">Minimize Dialog</a></li>
                                                    <li><a id="link-mouse-click" href="#mouse-click" class="">Mouse Click</a></li>
                                                    <li><a id="link-mouse-click-coords" href="#mouse-click-coords" class="">Mouse Click Coords</a></li>
                                                    <li><a id="link-mouse-click-image" href="#mouse-click-image" class="">Mouse Click Image</a></li>
                                                    <li><a id="link-open-application" href="#open-application" class="">Open Application</a></li>
                                                    <li><a id="link-open-dialog" href="#open-dialog" class="">Open Dialog</a></li>
                                                    <li><a id="link-open-executable" href="#open-executable" class="">Open Executable</a></li>
                                                    <li><a id="link-open-file" href="#open-file" class="">Open File</a></li>
                                                    <li><a id="link-open-from-search" href="#open-from-search" class="">Open From Search</a></li>
                                                    <li><a id="link-open-using-run-dialog" href="#open-using-run-dialog" class="">Open Using Run Dialog</a></li>
                                                    <li><a id="link-process-exists" href="#process-exists" class="">Process Exists</a></li>
                                                    <li><a id="link-put-system-to-sleep" href="#put-system-to-sleep" class="">Put System To Sleep </a></li>
                                                    <li><a id="link-quit-application" href="#quit-application" class="">Quit Application</a></li>
                                                    <li><a id="link-restore-dialog" href="#restore-dialog" class="">Restore Dialog</a></li>
                                                    <li><a id="link-screenshot" href="#screenshot" class="">Screenshot</a></li>
                                                    <li><a id="link-send-keys" href="#send-keys" class="">Send Keys</a></li>
                                                    <li><a id="link-send-keys-to-input" href="#send-keys-to-input" class="">Send Keys To Input</a></li>
                                                    <li><a id="link-set-windows-backend" href="#set-windows-backend" class="">Set Windows Backend</a></li>
                                                    <li><a id="link-switch-to-application" href="#switch-to-application" class="">Switch To Application</a></li>
                                                    <li><a id="link-type-into" href="#type-into" class="">Type Into</a></li>
                                                    <li><a id="link-type-keys" href="#type-keys" class="">Type Keys</a></li>
                                                    <li><a id="link-wait-for-element" href="#wait-for-element" class="">Wait For Element</a></li>
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