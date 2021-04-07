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
                                    <li class="active">Screenshot</li>
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
                                            <p>Test library for taking screenshots on the machine where tests are run.</p>
                                            <p>Notice that successfully taking screenshots requires tests to be run with a physical or virtual display.</p>
                                            <h4 id="Table of contents">Table of contents</h4>
                                            <ul>
                                                <li><a href="#Using%20with%20Python" class="name">Using with Python</a></li>
                                                <li><a href="#Using%20with%20Jython%20and%20IronPython" class="name">Using with Jython and IronPython</a>
                                                </li>
                                                <li><a href="#Where%20screenshots%20are%20saved" class="name">Where screenshots are saved</a></li>
                                                <li><a href="#ScreenCapLibrary" class="name">ScreenCapLibrary</a></li>
                                                <li><a href="#Importing" class="name">Importing</a></li>
                                                <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
                                                <li><a href="#Keywords" class="name">Keywords</a></li>
                                            </ul>
                                            <h4 id="Using with Python">Using with Python</h4>
                                            <p>How screenshots are taken when using Python depends on the operating system. On OSX screenshots are taken using the built-in <code>screencapture</code> utility. On other operating systems you need to have one of the following tools or Python modules
                                                installed. You can specify the tool/module to use when <a href="#Importing" class="name">importing</a> the library. If no tool or module is specified, the first one found will be used.</p>


                                            <h4 id="Using with Jython and IronPython">Using with Jython and IronPython</h4>
                                            <p>With Jython and IronPython this library uses APIs provided by JVM and .NET platforms, respectively. These APIs are always available and thus no external modules are needed.</p>
                                            <h4 id="Where screenshots are saved">Where screenshots are saved</h4>
                                            <p>By default screenshots are saved into the same directory where the Autosphere log file is written. If no log is created, screenshots are saved into the directory where the XML output file is written.</p>
                                            <p>It is possible to specify a custom location for screenshots using <code>screenshot_directory</code> argument when <a href="#Importing" class="name">importing</a> the library and using <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/screenshot/keywords#set-screenshot-directory" class="name">Set Screenshot Directory</a> keyword during execution. It is also possible to save screenshots using an absolute path.</p>
                                            <h4 id="ScreenCapLibrary">ScreenCapLibrary</h4>
                                            <p>ScreenCapLibrary is an external Autosphere library that can be used as an alternative, which additionally provides support for multiple formats, adjusting the quality, using GIFs and
                                                video capturing.</p>
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
                                                        <div class="keyword" id="set-screenshot-directory">
                                                            <h2><a href="#set-screenshot-directory">Set Screenshot Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the directory where screenshots are saved.</p>
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
                                                                <h4>Arguments</h4>
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
                                                                <h4>Arguments</h4>
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
                                            <div><a id="link-set-screenshot-directory" href="#set-screenshot-directory" class="">Set
                  Screenshot Directory</a><a id="link-take-screenshot" href="#take-screenshot" class="">Take Screenshot</a><a id="link-take-screenshot-without-embedding" href="#take-screenshot-without-embedding" class="">Take Screenshot Without Embedding</a>
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