
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Screenshot</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/screenshot">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/screenshot/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="set-screenshot-directory">
                                        <h2><a href="#set-screenshot-directory">Set Screenshot Directory</a></h2>

                                        <div>
                                            <p class="shortdoc">Sets the directory where screenshots are saved.</p>
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
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>It is possible to use <code>/</code> as a path separator in all operating systems. Path to the old directory is returned.</p>
                                            <p>The directory can also be set in <a href="#Importing" class="name">importing</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="take-screenshot">
                                        <h2><a href="#take-screenshot">Take Screenshot</a></h2>

                                        <div>
                                            <p class="shortdoc">Takes a screenshot in JPEG format and embeds it into the log file.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>name</td>
                                                    <td></td>
                                                    <td>screenshot</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>width</td>
                                                    <td></td>
                                                    <td>800px</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Name of the file where the screenshot is stored is derived from the given <code>name</code>. If the <code>name</code> ends with extension <code>.jpg</code> or <code>.jpeg</code>, the screenshot will be stored
                                                with that exact name. Otherwise a unique name is created by adding an underscore, a running index and an extension to the <code>name</code>.</p>
                                            <p>The name will be interpreted to be relative to the directory where the log file is written. It is also possible to use absolute paths. Using <code>/</code> as a path separator works in all operating systems.</p>
                                            <p><code>width</code> specifies the size of the screenshot in the log file.</p>
                                            <p>Examples: (LOGDIR is determined automatically by the library)</p>
                                            <table border="1">
                                                <tr>
                                                    <td>Take Screenshot</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td># LOGDIR/screenshot_1.jpg (index automatically incremented)</td>
                                                </tr>
                                                <tr>
                                                    <td>Take Screenshot</td>
                                                    <td>mypic</td>
                                                    <td></td>
                                                    <td># LOGDIR/mypic_1.jpg (index automatically incremented)</td>
                                                </tr>
                                                <tr>
                                                    <td>Take Screenshot</td>
                                                    <td>${TEMPDIR}/mypic</td>
                                                    <td></td>
                                                    <td># /tmp/mypic_1.jpg (index automatically incremented)</td>
                                                </tr>
                                                <tr>
                                                    <td>Take Screenshot</td>
                                                    <td>pic.jpg</td>
                                                    <td></td>
                                                    <td># LOGDIR/pic.jpg (always uses this file)</td>
                                                </tr>
                                                <tr>
                                                    <td>Take Screenshot</td>
                                                    <td>images/login.jpg</td>
                                                    <td>80%</td>
                                                    <td># Specify both name and width.</td>
                                                </tr>
                                                <tr>
                                                    <td>Take Screenshot</td>
                                                    <td>width=550px</td>
                                                    <td></td>
                                                    <td># Specify only width.</td>
                                                </tr>
                                            </table>
                                            <p>The path where the screenshot is saved is returned.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="take-screenshot-without-embedding">
                                        <h2><a href="#take-screenshot-without-embedding">Take Screenshot Without Embedding</a></h2>

                                        <div>
                                            <p class="shortdoc">Takes a screenshot and links it from the log file.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>name</td>
                                                    <td></td>
                                                    <td>screenshot</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>This keyword is otherwise identical to <a href="#Take%20Screenshot" class="name">Take
                          Screenshot</a> but the saved screenshot is not embedded into the log file. The screenshot is linked so it is nevertheless easily available.</p>
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
                            <div><a id="link-set-screenshot-directory" href="#set-screenshot-directory" class="">Set
                  Screenshot Directory</a><a id="link-take-screenshot" href="#take-screenshot" class="">Take Screenshot</a><a id="link-take-screenshot-without-embedding" href="#take-screenshot-without-embedding" class="">Take Screenshot Without Embedding</a>
                            </div>
                        </aside>
                    </div>
                </article>