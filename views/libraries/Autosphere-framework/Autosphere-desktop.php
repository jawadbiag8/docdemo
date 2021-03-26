
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Desktop</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>Desktop</cite> is a cross-platform library for navigating and interacting with desktop environments. It can be used to automate applications through the same interfaces that are available to human users.</p>
                                <p>The library includes the following features:</p>
                                <ul class="simple">
                                    <li>Mouse and keyboard input emulation</li>
                                    <li>Starting and stopping applications</li>
                                    <li>Finding elements through image template matching</li>
                                    <li>Taking screenshots</li>
                                    <li>Clipboard management</li>
                                </ul>
                                <dl class="docutils">
                                    <dt><strong>Note:</strong> Windows element selectors are not currently supported,</dt>
                                    <dd>and require the use of <tt class="docutils literal">Autosphere.Desktop.Windows</tt></dd>
                                </dl>
                                <p><strong>Locating elements</strong></p>
                                <p>To automate actions on the desktop, a robot needs to interact with various graphical elements such as buttons or input fields. The positions of these elements can be found using a feature called <cite>locators</cite>.</p>
                                <p>A locator describes the properties or features of an element. This information can be later used to locate similar elements even when window positions or states change.</p>
                                <p>The currently supported locator types are:</p>
                                <table border="1" class="docutils">
                                    <colgroup>
                                        <col width="12%" />
                                        <col width="21%" />
                                        <col width="67%" />
                                    </colgroup>
                                    <thead valign="bottom">
                                        <tr>
                                            <th class="head">Name</th>
                                            <th class="head">Arguments</th>
                                            <th class="head">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody valign="top">
                                        <tr>
                                            <td>alias</td>
                                            <td>name (str)</td>
                                            <td>A named locator, the default.</td>
                                        </tr>
                                        <tr>
                                            <td>image</td>
                                            <td>path (str)</td>
                                            <td>Image of an element that is matched to current screen content</td>
                                        </tr>
                                        <tr>
                                            <td>coordinates</td>
                                            <td>x (int), y (int)</td>
                                            <td>Pixel coordinates as absolute position</td>
                                        </tr>
                                        <tr>
                                            <td>offset</td>
                                            <td>x (int), y (int)</td>
                                            <td>Pixel coordinates relative to current mouse position</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>A locator is defined by its type and arguments, divided by a colon. Some example usages are shown below. Note that the prefix for alias can be omitted as its the default type.</p>
                                <pre class="code robotframework literal-block"><span class="c">Click</span><span class="p">    </span><span class="c">alias:SpareBin.Login</span><span class="p">
</span><span class="c">Click</span><span class="p">    </span><span class="c">SpareBin.Login</span><span class="p">

</span><span class="c">Move mouse</span><span class="p">    </span><span class="c">image:%{ROBOT_ROOT}/logo.png</span><span class="p">
</span><span class="c">Move mouse</span><span class="p">    </span><span class="c">offset:200,0</span><span class="p">
</span><span class="c">Click</span>
</pre>
                                <p><strong>Named locators</strong></p>
                                <p>The library supports storing locators in a database, which contains all of the required fields and various bits of metadata. This enables having one source of truth, which can be updated if a website's or applications's
                                    UI changes. Autosphere scripts can then only contain a reference to a stored locator by name.</p>

                                <p><strong>Keyboard and mouse</strong></p>
                                <p>Keyboard keywords can emulate typing text, but also pressing various function keys. The name of a key is case-insensitive and spaces will be converted to underscores, i.e. the key <tt class="docutils literal">Page Down</tt>                                    and <tt class="docutils literal">page_down</tt> are equivalent.</p>
                                <p>The following function keys are supported:</p>
                                <table border="1" class="docutils">
                                    <colgroup>
                                        <col width="16%" />
                                        <col width="84%" />
                                    </colgroup>
                                    <thead valign="bottom">
                                        <tr>
                                            <th class="head">Key</th>
                                            <th class="head">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody valign="top">
                                        <tr>
                                            <td>shift</td>
                                            <td>A generic Shift key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>shift_l</td>
                                            <td>The left Shift key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>shift_r</td>
                                            <td>The right Shift key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>ctrl</td>
                                            <td>A generic Ctrl key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>ctrl_l</td>
                                            <td>he left Ctrl key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>ctrl_r</td>
                                            <td>The right Ctrl key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>alt</td>
                                            <td>A generic Alt key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>alt_l</td>
                                            <td>The left Alt key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>alt_r</td>
                                            <td>The right Alt key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>alt_gr</td>
                                            <td>The AltGr key. This is a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>cmd</td>
                                            <td>A generic command button (Windows / Command / Super key). This may be a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>cmd_l</td>
                                            <td>The left command button (Windows / Command / Super key). This may be a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>cmd_r</td>
                                            <td>The right command button (Windows / Command / Super key). This may be a modifier.</td>
                                        </tr>
                                        <tr>
                                            <td>up</td>
                                            <td>An up arrow key.</td>
                                        </tr>
                                        <tr>
                                            <td>down</td>
                                            <td>A down arrow key.</td>
                                        </tr>
                                        <tr>
                                            <td>left</td>
                                            <td>A left arrow key.</td>
                                        </tr>
                                        <tr>
                                            <td>right</td>
                                            <td>A right arrow key.</td>
                                        </tr>
                                        <tr>
                                            <td>enter</td>
                                            <td>The Enter or Return key.</td>
                                        </tr>
                                        <tr>
                                            <td>space</td>
                                            <td>The Space key.</td>
                                        </tr>
                                        <tr>
                                            <td>tab</td>
                                            <td>The Tab key.</td>
                                        </tr>
                                        <tr>
                                            <td>backspace</td>
                                            <td>The Backspace key.</td>
                                        </tr>
                                        <tr>
                                            <td>delete</td>
                                            <td>The Delete key.</td>
                                        </tr>
                                        <tr>
                                            <td>esc</td>
                                            <td>The Esc key.</td>
                                        </tr>
                                        <tr>
                                            <td>home</td>
                                            <td>The Home key.</td>
                                        </tr>
                                        <tr>
                                            <td>end</td>
                                            <td>The End key.</td>
                                        </tr>
                                        <tr>
                                            <td>page_down</td>
                                            <td>The Page Down key.</td>
                                        </tr>
                                        <tr>
                                            <td>page_up</td>
                                            <td>The Page Up key.</td>
                                        </tr>
                                        <tr>
                                            <td>caps_lock</td>
                                            <td>The Caps Lock key.</td>
                                        </tr>
                                        <tr>
                                            <td>f1 to f20</td>
                                            <td>The function keys.</td>
                                        </tr>
                                        <tr>
                                            <td>insert</td>
                                            <td>The Insert key. This may be undefined for some platforms.</td>
                                        </tr>
                                        <tr>
                                            <td>menu</td>
                                            <td>The Menu key. This may be undefined for some platforms.</td>
                                        </tr>
                                        <tr>
                                            <td>num_lock</td>
                                            <td>The Num Lock key. This may be undefined for some platforms.</td>
                                        </tr>
                                        <tr>
                                            <td>pause</td>
                                            <td>The Pause / Break key. This may be undefined for some platforms.</td>
                                        </tr>
                                        <tr>
                                            <td>print_screen</td>
                                            <td>The Print Screen key. This may be undefined for some platforms.</td>
                                        </tr>
                                        <tr>
                                            <td>scroll_lock</td>
                                            <td>The Scroll Lock key. This may be undefined for some platforms.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>When controlling the mouse, there are different types of actions that can be done. Same formatting rules as function keys apply. They are as follows:</p>
                                <table border="1" class="docutils">
                                    <colgroup>
                                        <col width="26%" />
                                        <col width="74%" />
                                    </colgroup>
                                    <thead valign="bottom">
                                        <tr>
                                            <th class="head">Action</th>
                                            <th class="head">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody valign="top">
                                        <tr>
                                            <td>click</td>
                                            <td>Click with left mouse button</td>
                                        </tr>
                                        <tr>
                                            <td>left_click</td>
                                            <td>Click with left mouse button</td>
                                        </tr>
                                        <tr>
                                            <td>double_click</td>
                                            <td>Double click with left mouse button</td>
                                        </tr>
                                        <tr>
                                            <td>triple_click</td>
                                            <td>Triple click with left mouse button</td>
                                        </tr>
                                        <tr>
                                            <td>right_click</td>
                                            <td>Click with right mouse button</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>The supported mouse button types are <tt class="docutils literal">left</tt>, <tt class="docutils literal">right</tt>, and <tt class="docutils literal">middle</tt>.</p>
                                <p><strong>Examples*</strong></p>
                                <p>The library can open applications and interact with them through keyboard and mouse events.</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Desktop</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Write entry in accounting</span><span class="p">
    [</span><span class="kn">Arguments</span><span class="p">]    ${</span><span class="nv">entry</span><span class="p">}
    </span><span class="nf">Open application</span><span class="p">    </span><span class="s">erp_client.exe</span><span class="p">
    </span><span class="nf">Click</span><span class="p">         </span><span class="s">image:</span><span class="p">%{</span><span class="nv">ROBOT_ROOT</span><span class="p">}</span><span class="s">/images/create.png</span><span class="p">
    </span><span class="nf">Type text</span><span class="p">     ${</span><span class="nv">entry</span><span class="p">}
    </span><span class="nf">Press keys</span><span class="p">    </span><span class="s">ctrl</span><span class="p">    </span><span class="s">s</span><span class="p">
    </span><span class="nf">Press keys</span><span class="p">    </span><span class="s">enter</span><span class="p">
    [</span><span class="kn">Teardown</span><span class="p">]    </span><span class="nf">Close all applications</span>
</pre>
                                <p>Targeting can be currently done using coordinates (absolute or relative), but using template matching is preferred.</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Desktop</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Write to field</span><span class="p">
    [</span><span class="kn">Arguments</span><span class="p">]    ${</span><span class="nv">text</span><span class="p">}
    </span><span class="nf">Move mouse</span><span class="p">   </span><span class="s">image:input_label.png</span><span class="p">
    </span><span class="nf">Move mouse</span><span class="p">   </span><span class="s">offset:200,0</span><span class="p">
    </span><span class="nf">Click</span><span class="p">
    </span><span class="nf">Type text</span><span class="p">    ${</span><span class="nv">text</span><span class="p">}
    </span><span class="nf">Press keys</span><span class="p">   </span><span class="s">enter</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           