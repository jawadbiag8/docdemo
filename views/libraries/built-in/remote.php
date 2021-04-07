<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Built-In</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Built-in</a></li>
                                    <li class="active">Remote</li>
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
                                        <div class="document" id="remote-library-interface">


                                            <p>This project exists to give a high level introduction to <a class="reference external" href="">Autosphere</a> remote library interface and to list the
                                                <a class="reference internal" href="#available-remote-servers">available remote servers</a>.
                                            </p>
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
                                                <p>Another big use case is implementing test libraries using other languages that Autosphere supports natively. In practice test libraries can be implemented using any language that supports the <a class="reference external" href="http://www.xmlrpc.com/">XML-RPC protocol</a> that the remote interface uses for communication. Many <a class="reference internal" href="#available-remote-servers">languages and platforms</a> are supported
                                                    already, and implementing support for new languages or for new usages is pretty straightforward.</p>
                                            </div>
                                            <div class="section" id="architecture">

                                                <p>The remote interface consists of the Remote library, remote servers and actual test libraries running behind these servers. The high level architecture is illustrated in the picture below.</p>

                                                <p>The Remote library is one of Autosphere's standard libraries and thus automatically installed with the framework. It does not have any keywords of its own, but instead works as a proxy between Autosphere
                                                    and remote servers.
                                                </p>

                                                <p>How remote servers interact with the actual test libraries depends on the language and the remote server design. See the implementation of the
                                                    <a class="reference internal" href="#available-remote-servers">available remote servers</a> below for concrete examples.
                                                </p>
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



                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <aside class="sc-iJuUWI jaFBcT">
                                            <form>
                                                <h5>Keywords</h5>
                                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div>
                                          
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