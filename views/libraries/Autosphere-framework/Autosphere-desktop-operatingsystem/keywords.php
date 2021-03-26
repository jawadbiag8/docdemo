
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Desktop.OperatingSystem</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop-operatingsystem">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop-operatingsystem/keywords">Keywords</a></nav>
                    </div>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
${epoch}  Boot Time In Seconds From Epoch
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-boot-time">
                                        <h2><a href="#get-boot-time">Get Boot Time</a></h2>

                                        <div>
                                            <p class="shortdoc">Get computer boot time in seconds from Epoch or in datetime string.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
${boottime}  Get Boot Time
${boottime}  Get Boot Time   as_datetime=True
${boottime}  Get Boot Time   as_datetime=True  datetime_format=%d.%m.%Y
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
&amp;{mem}     Get Memory Stats
&amp;{mem}     Get Memory Stats   humanized=False
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
${user}  Get Username
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="kill-process">
                                        <h2><a href="#kill-process">Kill Process</a></h2>

                                        <div>
                                            <p class="shortdoc">Kill process by name</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
${process}  Process Exists  calc  strict=False
${status}   Kill Process    ${process.pid}
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="process-exists">
                                        <h2><a href="#process-exists">Process Exists</a></h2>

                                        <div>
                                            <p class="shortdoc">Check if process exists by its name</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
${process}  Process Exists  calc
${process}  Process Exists  calc  strict=False
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="put-system-to-sleep">
                                        <h2><a href="#put-system-to-sleep">Put System To Sleep</a></h2>

                                        <div>
                                            <p class="shortdoc">Puts system to sleep mode</p>



                                            <h3>Examples</h3>
                                            <pre><code class="line-numbers language-robot">*** Tasks ***
Put System To Sleep
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
                            <div><a id="link-boot-time-in-seconds-from-epoch" href="#boot-time-in-seconds-from-epoch" class="">Boot Time In Seconds From Epoch</a><a id="link-get-boot-time" href="#get-boot-time" class="">Get Boot Time</a>
                                <a id="link-get-machine-name" href="#get-machine-name" class="">Get Machine Name</a><a id="link-get-memory-stats" href="#get-memory-stats" class="">Get Memory Stats</a><a id="link-get-username"
                                    href="#get-username" class="">Get Username</a><a id="link-kill-process" href="#kill-process" class="">Kill Process</a><a id="link-kill-process-by-pid" href="#kill-process-by-pid" class="">Kill Process By Pid</a>
                                <a id="link-process-exists" href="#process-exists" class="">Process Exists</a><a id="link-put-system-to-sleep" href="#put-system-to-sleep" class="">Put System To Sleep</a></div>
                        </aside>
                    </div>
                </article>
            