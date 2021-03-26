
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Desktop.Windows</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop-windows">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop-windows/keywords">Keywords</a></nav>
                    </div>
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
                                    <cite>name:Three</cite>.</p>
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
                                    <cite>type_keys</cite> sends keys to the active window element.</p>
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
                </article>
         