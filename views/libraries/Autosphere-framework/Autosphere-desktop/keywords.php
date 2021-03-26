
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
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">
                                <form>
                                    <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                        fill="#002642"></path>
                    </svg></fieldset>
                                </form>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
Click with offset    Autosphere.logo    y=400
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="close-all-applications">
                                        <h2><a href="#close-all-applications">Close All Applications</a></h2>

                                        <div>
                                            <p class="shortdoc">Close all opened applications.</p>



                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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



                                            <h3>Examples</h3>
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



                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
Open file    orders.xlsx
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="paste-from-clipboard">
                                        <h2><a href="#paste-from-clipboard">Paste From Clipboard</a></h2>

                                        <div>
                                            <p class="shortdoc">Paste value from system clipboard into given element.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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


                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
Type text    this text will be uppercase    shift
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="type-text-into">
                                        <h2><a href="#type-text-into">Type Text Into</a></h2>

                                        <div>
                                            <p class="shortdoc">Type text at the position indicated by given locator.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
Wait for element    alias:CookieConsent    timeout=30
Click    image:%{ROBOT_ROOT}/accept.png
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
                            <div><a id="link-clear-clipboard" href="#clear-clipboard" class="">Clear Clipboard</a><a id="link-click" href="#click" class="">Click</a><a id="link-click-with-offset" href="#click-with-offset"
                                    class="">Click With Offset</a><a id="link-close-all-applications" href="#close-all-applications" class="">Close All
                  Applications</a><a id="link-close-application" href="#close-application" class="">Close
                  Application</a><a id="link-copy-to-clipboard" href="#copy-to-clipboard" class="">Copy To
                  Clipboard</a><a id="link-drag-and-drop" href="#drag-and-drop" class="">Drag And
                  Drop</a><a id="link-find-element" href="#find-element" class="">Find Element</a><a id="link-find-elements" href="#find-elements" class="">Find Elements</a><a id="link-get-clipboard-value" href="#get-clipboard-value"
                                    class="">Get Clipboard
                  Value</a><a id="link-get-display-dimensions" href="#get-display-dimensions" class="">Get
                  Display Dimensions</a><a id="link-get-mouse-position" href="#get-mouse-position" class="">Get Mouse Position</a><a id="link-highlight-elements" href="#highlight-elements" class="">Highlight Elements</a><a id="link-move-mouse"
                                    href="#move-mouse" class="">Move
                  Mouse</a><a id="link-open-application" href="#open-application" class="">Open
                  Application</a><a id="link-open-file" href="#open-file" class="">Open File</a><a id="link-paste-from-clipboard" href="#paste-from-clipboard" class="">Paste From
                  Clipboard</a><a id="link-press-keys" href="#press-keys" class="">Press Keys</a><a id="link-press-mouse-button" href="#press-mouse-button" class="">Press Mouse Button</a><a id="link-release-mouse-button" href="#release-mouse-button"
                                    class="">Release Mouse
                  Button</a><a id="link-set-clipboard-value" href="#set-clipboard-value" class="">Set
                  Clipboard Value</a><a id="link-set-default-confidence" href="#set-default-confidence" class="">Set Default Confidence</a><a id="link-take-screenshot" href="#take-screenshot" class="">Take Screenshot</a><a id="link-type-text"
                                    href="#type-text" class="">Type
                  Text</a><a id="link-type-text-into" href="#type-text-into" class="">Type Text Into</a><a id="link-wait-for-element" href="#wait-for-element" class="">Wait For Element</a></div>
                        </aside>
                    </div>
                </article>
           
