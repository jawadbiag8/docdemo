<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Archive</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Archive</li>
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
                                            <p>Keyboard keywords can emulate typing text, but also pressing various function keys. The name of a key is case-insensitive and spaces will be converted to underscores, i.e. the key <tt class="docutils literal">Page Down</tt> and <tt class="docutils literal">page_down</tt> are equivalent.</p>
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
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                    <div>
                                                        <div class="keyword" id="clear-clipboard">
                                                            <h2><a href="#clear-clipboard">Clear Clipboard</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Clear the system clipboard.</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click">
                                                            <h2><a href="#click">Click</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click at the element indicated by locator.</p>
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
                                                                        <td>Locator for click position</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action</td>
                                                                        <td> Action { click | left_click | double_click | ... } </td>
                                                                        <td> Action.click</td>
                                                                        <td>Click action, e.g. right click</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator for click position</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param action:</th>
                                                                            <td class="field-body">Click action, e.g. right click</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Click
Click    LoginForm.Button
Click    coordinates:500,200    triple click
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-with-offset">
                                                            <h2><a href="#click-with-offset">Click With Offset</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click at a given pixel offset from the given locator.</p>
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
                                                                        <td>Locator for click start position</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td> int </td>
                                                                        <td> 0</td>
                                                                        <td>Click horizontal offset in pixels</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td> int </td>
                                                                        <td> 0</td>
                                                                        <td>Click vertical offset in pixels</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action</td>
                                                                        <td> Action { click | left_click | double_click | ... } </td>
                                                                        <td> Action.click</td>
                                                                        <td>Click action, e.g. right click</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator for click start position</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param x:</th>
                                                                            <td class="field-body">Click horizontal offset in pixels</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param y:</th>
                                                                            <td class="field-body">Click vertical offset in pixels</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param action:</th>
                                                                            <td class="field-body">Click action, e.g. right click</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Click with offset    Autosphere.logo    y=400
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-all-applications">
                                                            <h2><a href="#close-all-applications">Close All Applications</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close all opened applications.</p>



                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open file    order1.docx
Open file    order2.docx
Open file    order3.docx
# Do something with Word
Close all applications
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-application">
                                                            <h2><a href="#close-application">Close Application</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close given application. Needs to be started with this library.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>app</td>
                                                                        <td> Application</td>
                                                                        <td></td>
                                                                        <td>App instance</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Close given application. Needs to be started with this library.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param app:</th>
                                                                            <td class="field-body">App instance</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${word}=    Open file    template.docx
# Do something with Word
Close application    ${word}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-to-clipboard">
                                                            <h2><a href="#copy-to-clipboard">Copy To Clipboard</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Read value to system clipboard from given input element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Locator for element</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator for element</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">returns:</th>
                                                                            <td class="field-body">Current clipboard value</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${value}=    Copy to clipboard    ResultPage.Counter
Log    Copied text: ${value}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="drag-and-drop">
                                                            <h2><a href="#drag-and-drop">Drag And Drop</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Drag mouse from source to destination while holding the left mouse button.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>source</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Locator for start position</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Locator for destination position</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>start_delay</td>
                                                                        <td> float </td>
                                                                        <td> 2.0</td>
                                                                        <td>Delay in seconds after pressing down mouse button</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>end_delay</td>
                                                                        <td> float </td>
                                                                        <td> 0.5</td>
                                                                        <td>Delay in seconds before releasing mouse button</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param source:</th>
                                                                            <td class="field-body">Locator for start position</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param destination:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Locator for destination position</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param start_delay:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Delay in seconds after pressing down mouse button</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param end_delay:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Delay in seconds before releasing mouse button</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-element">
                                                            <h2><a href="#find-element">Find Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Find an element defined by locator, and return its position.</p>
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
                                                                        <td>Locator string</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator string</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${match}=    Find element    image:logo.png
Log    Found logo at ${match.x}, ${match.y}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-elements">
                                                            <h2><a href="#find-elements">Find Elements</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Find all elements defined by locator, and return their positions.</p>
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
                                                                        <td>Locator string</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator string</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${matches}=    Find elements    image:icon.png
FOR    ${match}  IN  &#64;{matches}
    Log    Found icon at ${match.x}, ${match.y}
END
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-clipboard-value">
                                                            <h2><a href="#get-clipboard-value">Get Clipboard Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Read current value from system clipboard.</p>



                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Copy to clipboard       coordinates:401,198
${text}=    Get clipboard value
Log    We just copied '${text}'
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-display-dimensions">
                                                            <h2><a href="#get-display-dimensions">Get Display Dimensions</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the dimensions of the current virtual display, which is the combined size of all physical monitors.</p>


                                                                <p>Returns the dimensions of the current virtual display, which is the combined size of all physical monitors.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-mouse-position">
                                                            <h2><a href="#get-mouse-position">Get Mouse Position</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get current mouse position in pixel coordinates.</p>



                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${position}=    Get mouse position
Log    Current mouse position is ${position.x}, ${position.y}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="highlight-elements">
                                                            <h2><a href="#highlight-elements">Highlight Elements</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Draw an outline around all matching elements.</p>
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
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="move-mouse">
                                                            <h2><a href="#move-mouse">Move Mouse</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Move mouse to given coordinates.</p>
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
                                                                        <td>Locator for mouse position</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator for mouse position</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Move mouse    Autosphere.logo
Move mouse    offset:0,400
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-application">
                                                            <h2><a href="#open-application">Open Application</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Start a given application by name (if in PATH), or by path to executable.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name_or_path</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Name or path of application</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Start a given application by name (if in PATH), or by path to executable.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param name_or_path:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Name or path of application</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param args:</th>
                                                                            <td class="field-body">Command line arguments for application</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">returns:</th>
                                                                            <td class="field-body">Application instance</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open application    notepad.exe
Open application    c:\path\to\program.exe    --example-argument
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-file">
                                                            <h2><a href="#open-file">Open File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open a file with the default application.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Path to file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">Path to file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Open file    orders.xlsx
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="paste-from-clipboard">
                                                            <h2><a href="#paste-from-clipboard">Paste From Clipboard</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Paste value from system clipboard into given element.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Locator for element</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator for element</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Copy to clipboard       coordinates:401,198
Paste from clipboard    coordinates:822,710
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="press-keys">
                                                            <h2><a href="#press-keys">Press Keys</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Press multiple keys down simultaneously.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*keys</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param keys:</th>
                                                                            <td class="field-body">Keys to press</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Press keys    ctrl  alt  delete

Press keys    ctrl  a
Press keys    ctrl  c
${all_text}=  Get clipboard value
Log    Text box content was: ${all_text}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="press-mouse-button">
                                                            <h2><a href="#press-mouse-button">Press Mouse Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Press down mouse button and keep it pressed.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>button</td>
                                                                        <td> typing.Any </td>
                                                                        <td> left</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="release-mouse-button">
                                                            <h2><a href="#release-mouse-button">Release Mouse Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Release mouse button that was previously pressed.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>button</td>
                                                                        <td> typing.Any </td>
                                                                        <td> left</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-clipboard-value">
                                                            <h2><a href="#set-clipboard-value">Set Clipboard Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Write given value to system clipboard.</p>
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
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Set clipboard value     This is some text.
Paste from clipboard    coordinates:822,710
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-default-confidence">
                                                            <h2><a href="#set-default-confidence">Set Default Confidence</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set the default template matching confidence.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>confidence</td>
                                                                        <td> float</td>
                                                                        <td></td>
                                                                        <td>Value from 1 to 100</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param confidence:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Value from 1 to 100</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="take-screenshot">
                                                            <h2><a href="#take-screenshot">Take Screenshot</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Take a screenshot of the whole screen, or an element identified by the given locator.
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
                                                                        <td>path</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>Path to screenshot. The string {index} will be replaced with an index number to avoid overwriting previous screenshots.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>Element to crop screenshot to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>embed</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>Embed screenshot into Autosphere log</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Take a screenshot of the whole screen, or an element identified by the given locator.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">Path to screenshot. The string <tt class="docutils literal">{index}</tt> will be replaced with an index number to avoid overwriting previous screenshots.</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Element to crop screenshot to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param embed:</th>
                                                                            <td class="field-body">Embed screenshot into Robot Framework log</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="type-text">
                                                            <h2><a href="#type-text">Type Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Type text one letter at a time.</p>
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
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Text to write</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*modifiers</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>enter</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>Press Enter / Return key after typing text</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param text:</th>
                                                                            <td class="field-body">Text to write</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param modifiers:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Modifier or functions keys held during typing</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param enter:</th>
                                                                            <td class="field-body">Press Enter / Return key after typing text</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Type text    this text will be uppercase    shift
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="type-text-into">
                                                            <h2><a href="#type-text-into">Type Text Into</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Type text at the position indicated by given locator.</p>
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
                                                                        <td>Locator of input element</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Text to write</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>clear</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>Clear element before writing</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>enter</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>Press Enter / Return key after typing text</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator of input element</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param text:</th>
                                                                            <td class="field-body">Text to write</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param clear:</th>
                                                                            <td class="field-body">Clear element before writing</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param enter:</th>
                                                                            <td class="field-body">Press Enter / Return key after typing text</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Type text into    LoginForm.Name      Marky Mark
Type text into    LoginForm.Password  ${PASSWORD}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-for-element">
                                                            <h2><a href="#wait-for-element">Wait For Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wait for an element defined by locator to exist or until timeout is reached.
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
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>Locator string</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td> float </td>
                                                                        <td> 10.0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>interval</td>
                                                                        <td> float </td>
                                                                        <td> 0.5</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Wait for an element defined by locator to exist or until timeout is reached.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param locator:</th>
                                                                            <td class="field-body">Locator string</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Wait for element    alias:CookieConsent    timeout=30
Click    image:%{ROBOT_ROOT}/accept.png
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
                                                    <li><a id="link-clear-clipboard" href="#clear-clipboard" class="">Clear Clipboard</a></li>
                                                    <li><a id="link-click" href="#click" class="">Click</a></li>
                                                    <li><a id="link-click-with-offset" href="#click-with-offset" class="">Click With Offset</a></li>
                                                    <li><a id="link-close-all-applications" href="#close-all-applications" class="">Close All Applications</a></li>
                                                    <li><a id="link-close-application" href="#close-application" class="">Close Application</a></li>
                                                    <li><a id="link-copy-to-clipboard" href="#copy-to-clipboard" class="">Copy To Clipboard</a></li>
                                                    <li><a id="link-drag-and-drop" href="#drag-and-drop" class="">Drag And Drop</a></li>
                                                    <li><a id="link-find-element" href="#find-element" class="">Find Element</a></li>
                                                    <li><a id="link-find-elements" href="#find-elements" class="">Find Elements</a></li>
                                                    <li><a id="link-get-clipboard-value" href="#get-clipboard-value" class="">Get Clipboard Value</a></li>
                                                    <li><a id="link-get-display-dimensions" href="#get-display-dimensions" class="">Get Display Dimensions</a></li>
                                                    <li><a id="link-get-mouse-position" href="#get-mouse-position" class="">Get Mouse Position</a></li>
                                                    <li><a id="link-highlight-elements" href="#highlight-elements" class="">Highlight Elements</a></li>
                                                    <li><a id="link-move-mouse" href="#move-mouse" class="">Move Mouse</a></li>
                                                    <li><a id="link-open-application" href="#open-application" class="">Open Application</a></li>
                                                    <li><a id="link-open-file" href="#open-file" class="">Open File</a></li>
                                                    <li><a id="link-paste-from-clipboard" href="#paste-from-clipboard" class="">Paste From Clipboard</a></li>
                                                    <li><a id="link-press-keys" href="#press-keys" class="">Press Keys</a></li>
                                                    <li><a id="link-press-mouse-button" href="#press-mouse-button" class="">Press Mouse Button</a></li>
                                                    <li><a id="link-release-mouse-button" href="#release-mouse-button" class="">Release Mouse Button</a></li>
                                                    <li><a id="link-set-clipboard-value" href="#set-clipboard-value" class="">Set Clipboard Value</a></li>
                                                    <li><a id="link-set-default-confidence" href="#set-default-confidence" class="">Set Default Confidence</a></li>
                                                    <li><a id="link-take-screenshot" href="#take-screenshot" class="">Take Screenshot</a></li>
                                                    <li><a id="link-type-text" href="#type-text" class="">Type Text</a></li>
                                                    <li><a id="link-type-text-into" href="#type-text-into" class="">Type Text Into</a></li>
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