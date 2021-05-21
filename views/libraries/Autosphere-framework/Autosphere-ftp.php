<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.FTP</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.FTP</li>
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
                                            <p><cite>FTP</cite> library can be used to access an FTP server, and interact with files.</p>
                                            <p>The library is based on Python's built-in <a class="reference external" href="https://docs.python.org/3/library/ftplib.html">ftplib</a>.</p>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.FTP</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">HOST</span><span class="p">}       </span><span class="s">127.0.0.1</span><span class="p">
${</span><span class="nv">PORT</span><span class="p">}       </span><span class="s">27345</span><span class="p">
${</span><span class="nv">USER</span><span class="p">}       </span><span class="s">user</span><span class="p">
${</span><span class="nv">PASS</span><span class="p">}       </span><span class="s">12345</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">List files on the server directory</span><span class="p">
    </span><span class="nf">Connect</span><span class="p">   ${</span><span class="nv">HOST</span><span class="p">}  ${</span><span class="nv">PORT</span><span class="p">}  ${</span><span class="nv">USER</span><span class="p">}  ${</span><span class="nv">PASS</span><span class="p">}
    &#64;{</span><span class="nv">files</span><span class="p">}  </span><span class="nf">List Files</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">  ${</span><span class="nv">file</span><span class="p">}  </span><span class="s">IN</span><span class="p">  &#64;{</span><span class="nv">files</span><span class="p">}
        </span><span class="nf">Log</span><span class="p">  ${</span><span class="nv">file</span><span class="p">}
    </span><span class="nf">END</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.FTP</span> <span class="kn">import</span> <span class="n">FTP</span>

<span class="n">library</span> <span class="o">=</span> <span class="n">FTP</span><span class="p">()</span>
<span class="n">library</span><span class="o">.</span><span class="n">connect</span><span class="p">(</span><span class="s1">'127.0.0.1'</span><span class="p">,</span> <span class="mi">27345</span><span class="p">,</span> <span class="s1">'user'</span><span class="p">,</span> <span class="s1">'12345'</span><span class="p">)</span>
<span class="n">files</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">list_files</span><span class="p">()</span>
<span class="k">for</span> <span class="n">f</span> <span class="ow">in</span> <span class="n">files</span><span class="p">:</span>
    <span class="nb">print</span><span class="p">(</span><span class="n">f</span><span class="p">)</span>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                                    <li><a id="link-abort" href="#abort" class="">Abort</a></li>
                                                    <li><a id="link-close" href="#close" class="">Close</a></li>
                                                    <li><a id="link-connect" href="#connect" class="">Connect</a></li>
                                                    <li><a id="link-cwd" href="#cwd" class="">Cwd</a></li>
                                                    <li><a id="link-delete" href="#delete" class="">Delete</a></li>
                                                    <li><a id="link-download" href="#download" class="">Download</a></li>
                                                    <li><a id="link-file-size" href="#file-size" class="">File Size</a></li>
                                                    <li><a id="link-get-welcome-message" href="#get-welcome-message" class="">Get Welcome Message </a></li>
                                                    <li><a id="link-list-files" href="#list-files" class="">List Files</a></li>
                                                    <li><a id="link-mkd" href="#mkd" class="">Mkd</a></li>
                                                    <li><a id="link-pwd" href="#pwd" class="">Pwd</a></li>
                                                    <li><a id="link-quit" href="#quit" class="">Quit</a></li>
                                                    <li><a id="link-rename" href="#rename" class="">Rename</a></li>
                                                    <li><a id="link-rmd" href="#rmd" class="">Rmd</a></li>
                                                    <li><a id="link-send-command" href="#send-command" class="">Send Command</a></li>
                                                    <li><a id="link-set-ascii-mode" href="#set-ascii-mode" class="">Set Ascii Mode</a></li>
                                                    <li><a id="link-set-binary-mode" href="#set-binary-mode" class="">Set Binary Mode</a></li>
                                                    <li><a id="link-set-debug-level" href="#set-debug-level" class="">Set Debug Level</a></li>
                                                    <li><a id="link-upload" href="#upload" class="">Upload</a></li>
                                                </ul>

                                            </div>
                                        </aside>
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