
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Remote</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/remote">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/remote/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <!DOCTYPE html>
                                <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

                                <head>
                                    <meta charset="utf-8" />
                                    <meta name="generator" content="Docutils 0.15.2: http://docutils.sourceforge.net/" />
                                    <title>Remote library interface</title>


                                </head>

                                <body>
                                    <div class="document" id="remote-library-interface">


                                        <p>This project exists to give a high level introduction to <a class="reference external" href="">Autosphere</a> remote library interface and to list the
                                            <a class="reference internal" href="#available-remote-servers">available remote servers</a>.</p>
                                        <div class="contents local topic" id="table-of-contents">
                                            <p class="topic-title first">Table of contents:</p>
                                            <ul class="simple">
                                                <li>
                                                    <p><a class="reference internal" href="#introduction" id="id4">Introduction</a></p>
                                                </li>
                                                <li>
                                                    <p><a class="reference internal" href="#architecture" id="id5">Architecture</a></p>
                                                </li>
                                                <li>
                                                    <p><a class="reference internal" href="#available-remote-servers" id="id6">Available remote
                              servers</a></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="section" id="introduction">

                                            <p>The remote library interface allows <a class="reference external" href="">Autosphere</a> test libraries to be run as external processes. An important use case for this support
                                                is running test libraries on different machines than where Autosphere itself is executed. This allows interesting possibilities for distributed testing.</p>
                                            <p>Another big use case is implementing test libraries using other languages that Autosphere supports natively. In practice test libraries can be implemented using any language that supports the <a class="reference external"
                                                    href="http://www.xmlrpc.com/">XML-RPC protocol</a> that the remote interface uses for communication. Many <a class="reference internal" href="#available-remote-servers">languages and platforms</a> are supported
                                                already, and implementing support for new languages or for new usages is pretty straightforward.</p>
                                        </div>
                                        <div class="section" id="architecture">

                                            <p>The remote interface consists of the Remote library, remote servers and actual test libraries running behind these servers. The high level architecture is illustrated in the picture below.</p>
                                         
                                            <p>The Remote library is one of Autosphere's standard libraries and thus automatically installed with the framework. It does not have any keywords of its own, but instead works as a proxy between Autosphere
                                                and remote servers.
                                            </p>
                                            
                                            <p>How remote servers interact with the actual test libraries depends on the language and the remote server design. See the implementation of the
                                                <a class="reference internal" href="#available-remote-servers">available remote servers</a> below for concrete examples.</p>
                                            <p>It is also possible to create solutions that combine a remote server and one or more libraries together into a single distribution. For example,
                                                RemoteSwingLibrary bundles, SwingLibrary, jrobotremoteserver and also the Remote library itself, and its users do not even need to know that they use the remote
                                                interface.
                                            </p>
                                        </div>
                                        <div class="section" id="available-remote-servers">

                                            <p>Following generic remote servers are available as separate projects. See the project pages for installation and usage instructions.</p>
                                            <table>
                                                <colgroup>
                                                    <col style="width: 19%" />
                                                    <col style="width: 81%" />
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th class="head">
                                                            <p>Language / Platform</p>
                                                        </th>
                                                        <th class="head">
                                                            <p>Remote Server</p>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>Python</p>
                                                        </td>
                                                        <td>
                                                            <p>PythonRemoteServer</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Java</p>
                                                        </td>
                                                        <td>
                                                            <p>jrobotremoteserver</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Ruby</p>
                                                        </td>
                                                        <td>
                                                            <p>robot-remote-server-rb
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>.NET</p>
                                                        </td>
                                                        <td>
                                                            <p>nrobot-server</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Clojure</p>
                                                        </td>
                                                        <td>
                                                            <p>robot-remote-server-clj
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Perl</p>
                                                        </td>
                                                        <td>
                                                            <p>plrobotremoteserver</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>node.js</p>
                                                        </td>
                                                        <td>
                                                            <p>node-robotremoteserver</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>PHP</p>
                                                        </td>
                                                        <td>
                                                            <p>phrrs</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Please submit an issue and/or pull request to this project if you have created a new remote server or existing information needs to be updated.</p>
                                        </div>
                                    </div>
                                </body>

                                <!-- Mirrored from Autosphere.com/docs/libraries/built-in/remote by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2020 08:38:07 GMT -->

                                </html>
                            </div>
                        </div>
                    </div>
                </article>
          
