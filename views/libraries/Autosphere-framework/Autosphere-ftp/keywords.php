
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.FTP</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-ftp">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-ftp/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="abort">
                                        <h2><a href="#abort">Abort</a></h2>

                                        <div>
                                            <p class="shortdoc">Abort a file transfer in progress</p>



                                        </div>
                                    </div>

                                    <div class="keyword" id="close">
                                        <h2><a href="#close">Close</a></h2>

                                        <div>
                                            <p class="shortdoc">Close connection to the server unilaterally</p>



                                        </div>
                                    </div>

                                    <div class="keyword" id="connect">
                                        <h2><a href="#connect">Connect</a></h2>

                                        <div>
                                            <p class="shortdoc">Connect to FTP server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>host</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>address of the server</td>
                                                </tr>
                                                <tr>
                                                    <td>port</td>
                                                    <td> int </td>
                                                    <td> 21</td>
                                                    <td>port of the server, defaults to 21</td>
                                                </tr>
                                                <tr>
                                                    <td>user</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>login name, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>password</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>login password, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>tls</td>
                                                    <td> bool </td>
                                                    <td> False</td>
                                                    <td>connect using TLS support, defaults to False</td>
                                                </tr>
                                                <tr>
                                                    <td>transfer</td>
                                                    <td> str </td>
                                                    <td> passive</td>
                                                    <td>mode of the transfer, defaults to "passive"</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param host:</th>
                                                        <td class="field-body">address of the server</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param port:</th>
                                                        <td class="field-body">port of the server, defaults to 21</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param user:</th>
                                                        <td class="field-body">login name, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param password:</th>
                                                        <td class="field-body">login password, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param tls:</th>
                                                        <td class="field-body">connect using TLS support, defaults to False</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param transfer:</th>
                                                        <td class="field-body">mode of the transfer, defaults to &quot;passive&quot;</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">raises AuthenticationException:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">on authentication error with the server</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="cwd">
                                        <h2><a href="#cwd">Cwd</a></h2>

                                        <div>
                                            <p class="shortdoc">Change working directory on the server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dirname</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>name of the directory</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param dirname:</th>
                                                        <td class="field-body">name of the directory</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="delete">
                                        <h2><a href="#delete">Delete</a></h2>

                                        <div>
                                            <p class="shortdoc">Delete file on the server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>filepath</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>path to server file</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param filepath:</th>
                                                        <td class="field-body">path to server file</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="download">
                                        <h2><a href="#download">Download</a></h2>

                                        <div>
                                            <p class="shortdoc">Download file from FTP server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>remotefile</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>path to remote file on the server</td>
                                                </tr>
                                                <tr>
                                                    <td>localfile</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>name of the downloaded file on the local filesystem, if None will have same name as remote file</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param remotefile:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">path to remote file on the server</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param localfile:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">name of the downloaded file on the local filesystem, if <cite>None</cite> will have same name as remote file</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="file-size">
                                        <h2><a href="#file-size">File Size</a></h2>

                                        <div>
                                            <p class="shortdoc">Return byte size of the file on the server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>filepath</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>path to server file</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param filepath:</th>
                                                        <td class="field-body">path to server file</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-welcome-message">
                                        <h2><a href="#get-welcome-message">Get Welcome Message</a></h2>

                                        <div>
                                            <p class="shortdoc">Get server welcome message</p>



                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">welcome message</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="list-files">
                                        <h2><a href="#list-files">List Files</a></h2>

                                        <div>
                                            <p class="shortdoc">List files on the server directory</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dirname</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>name of the directory</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param dirname:</th>
                                                        <td class="field-body">name of the directory</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="mkd">
                                        <h2><a href="#mkd">Mkd</a></h2>

                                        <div>
                                            <p class="shortdoc">Create a new directory on the server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dirname</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>name of the directory</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param dirname:</th>
                                                        <td class="field-body">name of the directory</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="pwd">
                                        <h2><a href="#pwd">Pwd</a></h2>

                                        <div>
                                            <p class="shortdoc">Get current working directory on the server</p>



                                        </div>
                                    </div>

                                    <div class="keyword" id="quit">
                                        <h2><a href="#quit">Quit</a></h2>

                                        <div>
                                            <p class="shortdoc">Send QUIT command to the server and close connection</p>



                                        </div>
                                    </div>

                                    <div class="keyword" id="rename">
                                        <h2><a href="#rename">Rename</a></h2>

                                        <div>
                                            <p class="shortdoc">Rename file on the server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>fromname</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>current name of the file</td>
                                                </tr>
                                                <tr>
                                                    <td>toname</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>new name for the file</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param fromname:</th>
                                                        <td class="field-body">current name of the file</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param toname:</th>
                                                        <td class="field-body">new name for the file</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="rmd">
                                        <h2><a href="#rmd">Rmd</a></h2>

                                        <div>
                                            <p class="shortdoc">Remove directory on the server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dirname</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>name of the directory</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param dirname:</th>
                                                        <td class="field-body">name of the directory</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="send-command">
                                        <h2><a href="#send-command">Send Command</a></h2>

                                        <div>
                                            <p class="shortdoc">Execute command on the server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>command</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>name of the command to send</td>
                                                </tr>
                                            </table>


                                            <p>List of FTP commands:
                                                <a class="reference external" href="https://en.wikipedia.org/wiki/List_of_FTP_commands">https://en.wikipedia.org/wiki/List_of_FTP_commands</a>
                                            </p>
                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param command:</th>
                                                        <td class="field-body">name of the command to send</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="set-ascii-mode">
                                        <h2><a href="#set-ascii-mode">Set Ascii Mode</a></h2>

                                        <div>
                                            <p class="shortdoc">Set transfer mode to ASCII</p>



                                        </div>
                                    </div>

                                    <div class="keyword" id="set-binary-mode">
                                        <h2><a href="#set-binary-mode">Set Binary Mode</a></h2>

                                        <div>
                                            <p class="shortdoc">Set transfer mode to BINARY</p>



                                        </div>
                                    </div>

                                    <div class="keyword" id="set-debug-level">
                                        <h2><a href="#set-debug-level">Set Debug Level</a></h2>

                                        <div>
                                            <p class="shortdoc">Set debug level for the library</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>level</td>
                                                    <td> int </td>
                                                    <td> 0</td>
                                                    <td>integer value of debug level, defaults to 0</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param level:</th>
                                                        <td class="field-body">integer value of debug level, defaults to 0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>0 - no debugging output 1 - moderate amount of debugging 2+ - higher amount of debugging</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="upload">
                                        <h2><a href="#upload">Upload</a></h2>

                                        <div>
                                            <p class="shortdoc">Upload file to FTP server</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>localfile</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>path to file to upload</td>
                                                </tr>
                                                <tr>
                                                    <td>remotefile</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>name of uploaded file in the server</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param localfile:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">path to file to upload</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param remotefile:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">name of uploaded file in the server</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                            <div><a id="link-abort" href="#abort" class="">Abort</a><a id="link-close" href="#close" class="">Close</a><a id="link-connect" href="#connect" class="">Connect</a><a id="link-cwd" href="#cwd"
                                    class="">Cwd</a><a id="link-delete" href="#delete" class="">Delete</a><a id="link-download" href="#download" class="">Download</a><a id="link-file-size" href="#file-size" class="">File Size</a>
                                <a id="link-get-welcome-message" href="#get-welcome-message" class="">Get Welcome Message
                                    </a><a id="link-list-files" href="#list-files" class="">List Files</a><a id="link-mkd" href="#mkd" class="">Mkd</a><a id="link-pwd" href="#pwd"
                                    class="">Pwd</a><a id="link-quit" href="#quit" class="">Quit</a><a id="link-rename" href="#rename" class="">Rename</a><a id="link-rmd" href="#rmd" class="">Rmd</a><a id="link-send-command"
                                    href="#send-command" class="">Send
                  Command</a><a id="link-set-ascii-mode" href="#set-ascii-mode" class="">Set Ascii
                  Mode</a><a id="link-set-binary-mode" href="#set-binary-mode" class="">Set Binary
                  Mode</a><a id="link-set-debug-level" href="#set-debug-level" class="">Set Debug
                  Level</a><a id="link-upload" href="#upload" class="">Upload</a></div>
                        </aside>
                    </div>
                </article>
           