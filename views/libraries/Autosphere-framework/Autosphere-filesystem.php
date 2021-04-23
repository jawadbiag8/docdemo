<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Filesystem</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Filesystem</li>
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
                                            <p>The <cite>FileSystem</cite> library can be used to interact with files and directories on the local computer. It can inspect and list files, remove and create them, read contents from files, and write data out.</p>
                                            <p>It shadows the built-in <cite>OperatingSystem</cite> library but contains keywords which are more Autosphere-oriented.</p>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <p>The library allows, for instance, iterating over files and inspecting them.</p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.FileSystem</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Delete large files</span><span class="p">
    ${</span><span class="nv">files</span><span class="p">}=    </span><span class="nf">List files in directory</span><span class="p">    </span><span class="s">archive/orders/</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">    ${</span><span class="nv">file</span><span class="p">}  </span><span class="s">IN</span><span class="p">  &#64;{</span><span class="nv">FILES</span><span class="p">}
        </span><span class="nf">Run keyword if</span><span class="p">    ${</span><span class="nv">file.size</span><span class="p">}</span><span class="s"> &gt; 10**8</span><span class="p">    </span><span class="s">Remove file</span><span class="p">    ${</span><span class="nv">file</span><span class="p">}
    </span><span class="nf">END</span><span class="p">

</span><span class="gu">Read process output</span><span class="p">
    </span><span class="nf">Start external program</span><span class="p">
    </span><span class="nf">Wait until modified</span><span class="p">    </span><span class="s">process.log</span><span class="p">
    ${</span><span class="nv">output</span><span class="p">}=  </span><span class="nf">Read file</span><span class="p">  </span><span class="s">process.log</span><span class="p">
    [</span><span class="kn">Return</span><span class="p">]    ${</span><span class="nv">output</span><span class="p">}</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <p>The library can also be used inside Python.</p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.FileSystem</span> <span class="kn">import</span> <span class="n">FileSystem</span>

<span class="k">def</span> <span class="nf">move_to_archive</span><span class="p">():</span>
    <span class="n">lib</span> <span class="o">=</span> <span class="n">FileSystem</span><span class="p">()</span>

    <span class="n">matches</span> <span class="o">=</span> <span class="n">lib</span><span class="o">.</span><span class="n">find_files</span><span class="p">(</span><span class="s2">&quot;**/*.xlsx&quot;</span><span class="p">)</span>
    <span class="k">if</span> <span class="n">matches</span><span class="p">:</span>
        <span class="n">lib</span><span class="o">.</span><span class="n">create_directory</span><span class="p">(</span><span class="s2">&quot;archive&quot;</span><span class="p">)</span>
        <span class="n">lib</span><span class="o">.</span><span class="n">move_files</span><span class="p">(</span><span class="n">matches</span><span class="p">,</span> <span class="s2">&quot;archive&quot;</span><span class="p">)</span>
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
                                                        <div class="keyword" id="absolute-path">
                                                            <h2><a href="#absolute-path">Absolute Path</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the absolute path to a file, and resolves symlinks.</p>
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
                                                                        <td>path that will be resolved</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path that will be resolved</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">absolute path to file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="append-to-binary-file">
                                                            <h2><a href="#append-to-binary-file">Append To Binary File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Appends binary content to the given file.</p>
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
                                                                        <td>path to file to append to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>content to append</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to append to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param content:</th>
                                                                            <td class="field-body">content to append</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="append-to-file">
                                                            <h2><a href="#append-to-file">Append To File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Appends text to the given file.</p>
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
                                                                        <td>path to file to append to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>content to append</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>utf-8</td>
                                                                        <td>character encoding of appended content</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to append to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param content:</th>
                                                                            <td class="field-body">content to append</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param encoding:</th>
                                                                            <td class="field-body">character encoding of appended content</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="change-file-extension">
                                                            <h2><a href="#change-file-extension">Change File Extension</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Replaces file extension for file at given path.</p>
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
                                                                        <td>path to file to rename</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>extension</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>new extension, e.g. .xlsx</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to rename</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param extension:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">new extension, e.g. .xlsx</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-directory">
                                                            <h2><a href="#copy-directory">Copy Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Copy directory from source path to destination path.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to source directory</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to copy destination</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param source:</th>
                                                                            <td class="field-body">path to source directory</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param destination:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">path to copy destination</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-file">
                                                            <h2><a href="#copy-file">Copy File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Copy a file from source path to destination path.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to source file</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to copy destination</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param source:</th>
                                                                            <td class="field-body">path to source file</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param destination:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">path to copy destination</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-files">
                                                            <h2><a href="#copy-files">Copy Files</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Copy multiple files to destination folder.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>sources</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>list of source files</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to destination folder</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param sources:</th>
                                                                            <td class="field-body">list of source files</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param destination:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">path to destination folder</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-binary-file">
                                                            <h2><a href="#create-binary-file">Create Binary File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creates a new binary file, and writes content if any is given.</p>
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
                                                                        <td>path to file to write</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>content to write to file (optional)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>overwrite</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>replace destination file if it already exists</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to write</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param content:</th>
                                                                            <td class="field-body">content to write to file (optional)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param overwrite:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">replace destination file if it already exists</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-directory">
                                                            <h2><a href="#create-directory">Create Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creates a directory and (optionally) non-existing parent directories.</p>
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
                                                                        <td>path to new directory</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>parents</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>create missing parent directories</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exist_ok</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>continue without errors if directory already exists</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to new directory</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param parents:</th>
                                                                            <td class="field-body">create missing parent directories</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param exist_ok:</th>
                                                                            <td class="field-body">continue without errors if directory already exists</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-file">
                                                            <h2><a href="#create-file">Create File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creates a new text file, and writes content if any is given.</p>
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
                                                                        <td>path to file to write</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>content to write to file (optional)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>utf-8</td>
                                                                        <td>character encoding of written content</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>overwrite</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>replace destination file if it already exists</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to write</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param content:</th>
                                                                            <td class="field-body">content to write to file (optional)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param encoding:</th>
                                                                            <td class="field-body">character encoding of written content</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param overwrite:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">replace destination file if it already exists</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-directory-exist">
                                                            <h2><a href="#does-directory-exist">Does Directory Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns True if the given directory exists, False if not.</p>
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
                                                                        <td>path to inspected directory</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to inspected directory</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-directory-not-exist">
                                                            <h2><a href="#does-directory-not-exist">Does Directory Not Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns True if the directory does not exist, False if it does.</p>
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
                                                                        <td>path to inspected directory</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to inspected directory</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-file-exist">
                                                            <h2><a href="#does-file-exist">Does File Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns True if the given file exists, False if not.</p>
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
                                                                        <td>path to inspected file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to inspected file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-file-not-exist">
                                                            <h2><a href="#does-file-not-exist">Does File Not Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns True if the file does not exist, False if it does.</p>
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
                                                                        <td>path to inspected file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to inspected file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="empty-directory">
                                                            <h2><a href="#empty-directory">Empty Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes all the files in the given directory.</p>
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
                                                                        <td>directory to remove files from</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">directory to remove files from</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-files">
                                                            <h2><a href="#find-files">Find Files</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Find files recursively according to a pattern.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>search path in glob format pattern, e.g. .xls or */orders.txt</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>include_dirs</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>include directories in results</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>include_files</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>include files in results</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param pattern:</th>
                                                                            <td class="field-body">search path in glob format pattern, e.g. <em>.xls or *</em>/orders.txt</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param include_dirs:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">include directories in results</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param include_files:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">include files in results</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of paths that match the pattern</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-file-creation-date">
                                                            <h2><a href="#get-file-creation-date">Get File Creation Date</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the creation time in seconds. Note: Linux sets this whenever file metadata changes</p>
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
                                                                        <td>path to file to inspect</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Returns the creation time in seconds. Note: Linux sets this whenever file metadata changes</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to inspect</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-file-extension">
                                                            <h2><a href="#get-file-extension">Get File Extension</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the suffix for the file.</p>
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
                                                                        <td>path to file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-file-modified-date">
                                                            <h2><a href="#get-file-modified-date">Get File Modified Date</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the modified time in seconds.</p>
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
                                                                        <td>path to file to inspect</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to inspect</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-file-name">
                                                            <h2><a href="#get-file-name">Get File Name</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns only the filename portion of a path.</p>
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
                                                                        <td>path to file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-file-size">
                                                            <h2><a href="#get-file-size">Get File Size</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the file size in bytes.</p>
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
                                                                        <td>path to file to inspect</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to inspect</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-directory-empty">
                                                            <h2><a href="#is-directory-empty">Is Directory Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns True if the given directory has no files or subdirectories.</p>
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
                                                                        <td>None</td>
                                                                        <td>path to inspected directory</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to inspected directory</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-directory-not-empty">
                                                            <h2><a href="#is-directory-not-empty">Is Directory Not Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns True if the given directory has any files or subdirectories.</p>
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
                                                                        <td>None</td>
                                                                        <td>path to inspected directory</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to inspected directory</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-file-empty">
                                                            <h2><a href="#is-file-empty">Is File Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns True if the given file has no content, i.e. has zero size.</p>
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
                                                                        <td>path to inspected file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to inspected file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-file-not-empty">
                                                            <h2><a href="#is-file-not-empty">Is File Not Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns True if the given file has content, i.e. larger than zero size.</p>
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
                                                                        <td>path to inspected file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to inspected file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="join-path">
                                                            <h2><a href="#join-path">Join Path</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Joins multiple parts of a path together.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*parts</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param parts:</th>
                                                                            <td class="field-body">Components of the path, e.g. dir, subdir, filename.ext</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-directories-in-directory">
                                                            <h2><a href="#list-directories-in-directory">List Directories In Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Lists all the directories in the given directory, relative to it.</p>
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
                                                                        <td>None</td>
                                                                        <td>base directory for search, defaults to current working dir</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">base directory for search, defaults to current working dir</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-files-in-directory">
                                                            <h2><a href="#list-files-in-directory">List Files In Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Lists all the files in the given directory, relative to it.</p>
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
                                                                        <td>None</td>
                                                                        <td>base directory for search, defaults to current working dir</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">base directory for search, defaults to current working dir</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-directory-tree">
                                                            <h2><a href="#log-directory-tree">Log Directory Tree</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs all the files in the directory recursively.</p>
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
                                                                        <td>None</td>
                                                                        <td>base directory to start from, defaults to current working dir</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">base directory to start from, defaults to current working dir</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="move-directory">
                                                            <h2><a href="#move-directory">Move Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Move a directory from source path to destination path.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>source directory path for moving</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to move to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>overwrite</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>replace destination directory if it already exists</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param source:</th>
                                                                            <td class="field-body">source directory path for moving</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param destination:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">path to move to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param overwrite:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">replace destination directory if it already exists</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="move-file">
                                                            <h2><a href="#move-file">Move File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Move a file from source path to destination path, optionally overwriting the destination.
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
                                                                        <td>source</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>source file path for moving</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to move to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>overwrite</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>replace destination file if it already exists</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Move a file from source path to destination path, optionally overwriting the destination.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param source:</th>
                                                                            <td class="field-body">source file path for moving</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param destination:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">path to move to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param overwrite:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">replace destination file if it already exists</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="move-files">
                                                            <h2><a href="#move-files">Move Files</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Move multiple files to the destination folder.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>sources</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>list of files to move</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to move destination</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>overwrite</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>replace destination files if they already exist</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param sources:</th>
                                                                            <td class="field-body">list of files to move</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param destination:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">path to move destination</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param overwrite:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">replace destination files if they already exist</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="normalize-path">
                                                            <h2><a href="#normalize-path">Normalize Path</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes redundant separators or up-level references from path.</p>
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
                                                                        <td>path that will be normalized</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path that will be normalized</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">path to file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-binary-file">
                                                            <h2><a href="#read-binary-file">Read Binary File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Reads a file in binary mode and returns the content. Does not attempt to decode the content in any way.</p>
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
                                                                        <td>path to file to read</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Reads a file in binary mode and returns the content. Does not attempt to decode the content in any way.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to read</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-file">
                                                            <h2><a href="#read-file">Read File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Reads a file as text, with given <cite>encoding</cite>, and returns the content.&quot;
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to file to read</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>utf-8</td>
                                                                        <td>character encoding of file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param encoding:</th>
                                                                            <td class="field-body">character encoding of file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-directory">
                                                            <h2><a href="#remove-directory">Remove Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes the given directory, and optionally everything it contains.</p>
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
                                                                        <td>path to directory</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>recursive</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>remove all subdirectories and files</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to directory</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param recursive:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">remove all subdirectories and files</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-file">
                                                            <h2><a href="#remove-file">Remove File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes the given file.</p>
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
                                                                        <td>path to the file to remove</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>missing_ok</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>ignore non-existent file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to the file to remove</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param missing_ok:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">ignore non-existent file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-files">
                                                            <h2><a href="#remove-files">Remove Files</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes multiple files.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*paths</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>missing_ok</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>ignore non-existent files</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param paths:</th>
                                                                            <td class="field-body">paths to files to be removed</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param missing_ok:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">ignore non-existent files</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-keyword-if-file-exists">
                                                            <h2><a href="#run-keyword-if-file-exists">Run Keyword If File Exists</a></h2>

                                                            <div>
                                                                <p class="shortdoc">If file exists at <cite>path</cite>, execute given keyword with arguments.</p>
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
                                                                        <td>path to file to inspect</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>keyword</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Autosphere keyword to execute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*args</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file to inspect</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param keyword:</th>
                                                                            <td class="field-body">Autosphere keyword to execute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param args:</th>
                                                                            <td class="field-body">arguments to keyword</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Run keyword if file exists    orders.xlsx    Process orders
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="touch-file">
                                                            <h2><a href="#touch-file">Touch File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creates a file with no content, or if file already exists, updates the modification and access times.</p>
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
                                                                        <td>path to file which is touched</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Creates a file with no content, or if file already exists, updates the modification and access times.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to file which is touched</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-created">
                                                            <h2><a href="#wait-until-created">Wait Until Created</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Poll path until it exists, or raise exception if timeout is reached.</p>
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
                                                                        <td>path to poll</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>5.0</td>
                                                                        <td>time in seconds until keyword fails</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Poll path until it exists, or raise exception if timeout is reached.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to poll</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">time in seconds until keyword fails</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-modified">
                                                            <h2><a href="#wait-until-modified">Wait Until Modified</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Poll path until it has been modified after the keyword was called, or raise exception if timeout is reached.</p>
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
                                                                        <td>path to poll</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>5.0</td>
                                                                        <td>time in seconds until keyword fails</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Poll path until it has been modified after the keyword was called, or raise exception if timeout is reached.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to poll</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">time in seconds until keyword fails</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-removed">
                                                            <h2><a href="#wait-until-removed">Wait Until Removed</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Poll path until it doesn't exist, or raise exception if timeout is reached.
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to poll</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>5.0</td>
                                                                        <td>time in seconds until keyword fails</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Poll path until it doesn't exist, or raise exception if timeout is reached.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to poll</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">time in seconds until keyword fails</td>
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
                                                <ul id="myUL" style="list-style-type: none;">
                                                    <li><a id="link-absolute-path" href="#absolute-path" class="">Absolute Path</a></li>
                                                    <li><a id="link-append-to-binary-file" href="#append-to-binary-file" class="">Append To Binary File</a></li>
                                                    <li><a id="link-append-to-file" href="#append-to-file" class="">Append To File</a></li>
                                                    <li><a id="link-change-file-extension" href="#change-file-extension" class="">Change File Extension</a></li>
                                                    <li><a id="link-copy-directory" href="#copy-directory" class="">Copy Directory</a></li>
                                                    <li><a id="link-copy-file" href="#copy-file" class="">Copy File</a></li>
                                                    <li><a id="link-copy-files" href="#copy-files" class="">Copy Files</a></li>
                                                    <li><a id="link-create-binary-file" href="#create-binary-file" class="">Create Binary File</a></li>
                                                    <li><a id="link-create-directory" href="#create-directory" class="">Create Directory</a></li>
                                                    <li><a id="link-create-file" href="#create-file" class="">Create File</a></li>
                                                    <li><a id="link-does-directory-exist" href="#does-directory-exist" class="">Does Directory Exist</a></li>
                                                    <li><a id="link-does-directory-not-exist" href="#does-directory-not-exist" class="">Does Directory Not Exist</a></li>
                                                    <li><a id="link-does-file-exist" href="#does-file-exist" class="">Does File Exist</a></li>
                                                    <li><a id="link-does-file-not-exist" href="#does-file-not-exist" class="">Does File Not Exist</a></li>
                                                    <li><a id="link-empty-directory" href="#empty-directory" class="">Empty Directory</a></li>
                                                    <li><a id="link-find-files" href="#find-files" class="">Find Files</a></li>
                                                    <li><a id="link-get-file-creation-date" href="#get-file-creation-date" class="">Get File Creation Date</a></li>
                                                    <li><a id="link-get-file-extension" href="#get-file-extension" class="">Get File Extension</a></li>
                                                    <li><a id="link-get-file-modified-date" href="#get-file-modified-date" class="">Get File Modified Date</a></li>
                                                    <li><a id="link-get-file-name" href="#get-file-name" class="">Get File Name</a></li>
                                                    <li><a id="link-get-file-size" href="#get-file-size" class="">Get File Size</a></li>
                                                    <li><a id="link-is-directory-empty" href="#is-directory-empty" class="">Is Directory Empty</a></li>
                                                    <li><a id="link-is-directory-not-empty" href="#is-directory-not-empty" class="">Is Directory Not Empty</a></li>
                                                    <li><a id="link-is-file-empty" href="#is-file-empty" class="">Is File Empty</a></li>
                                                    <li><a id="link-is-file-not-empty" href="#is-file-not-empty" class="">Is File Not Empty</a></li>
                                                    <li><a id="link-join-path" href="#join-path" class="">Join Path</a></li>
                                                    <li><a id="link-list-directories-in-directory" href="#list-directories-in-directory" class="">List Directories In Directory</a></li>
                                                    <li><a id="link-list-files-in-directory" href="#list-files-in-directory" class="">List Files In Directory</a></li>
                                                    <li><a id="link-log-directory-tree" href="#log-directory-tree" class="">Log Directory Tree</a></li>
                                                    <li><a id="link-move-directory" href="#move-directory" class="">Move Directory</a></li>
                                                    <li><a id="link-move-file" href="#move-file" class="">Move File</a></li>
                                                    <li><a id="link-move-files" href="#move-files" class="">Move Files</a></li>
                                                    <li><a id="link-normalize-path" href="#normalize-path" class="">Normalize Path</a></li>
                                                    <li><a id="link-read-binary-file" href="#read-binary-file" class="">Read Binary File</a></li>
                                                    <li><a id="link-read-file" href="#read-file" class="">Read File</a></li>
                                                    <li><a id="link-remove-directory" href="#remove-directory" class="">Remove Directory</a></li>
                                                    <li><a id="link-remove-file" href="#remove-file" class="">Remove File</a></li>
                                                    <li><a id="link-remove-files" href="#remove-files" class="">Remove Files</a></li>
                                                    <li><a id="link-run-keyword-if-file-exists" href="#run-keyword-if-file-exists" class="">Run Keyword If File Exists</a></li>
                                                    <li><a id="link-touch-file" href="#touch-file" class="">Touch File</a></li>
                                                    <li><a id="link-wait-until-created" href="#wait-until-created" class="">Wait Until Created</a></li>
                                                    <li><a id="link-wait-until-modified" href="#wait-until-modified" class="">Wait Until Modified </a></li>
                                                    <li><a id="link-wait-until-removed" href="#wait-until-removed" class="">Wait Until Removed</a></li>
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