<section id="contentpage" class="content">
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
                                            <p><cite>Archive</cite> is a library for operating with ZIP and TAR packages.</p>
                                            <p><strong>Examples</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">  </span><span class="nn">Autosphere.Archive</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Creating a ZIP archive</span><span class="p">
   </span><span class="nf">Archive Folder With ZIP</span><span class="p">   ${</span><span class="nv">CURDIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">tasks</span><span class="p">  </span><span class="s">tasks.zip</span><span class="p">   </span><span class="s">recursive=True</span><span class="p">  </span><span class="s">include=*.robot</span><span class="p">  </span><span class="s">exclude=/.*</span><span class="p">
   &#64;{</span><span class="nv">files</span><span class="p">}                  </span><span class="nf">List Archive</span><span class="p">             </span><span class="s">tasks.zip</span><span class="p">
   </span><span class="nf">FOR</span><span class="p">  ${</span><span class="nv">file</span><span class="p">}  </span><span class="s">IN</span><span class="p">  ${</span><span class="nv">files</span><span class="p">}
      </span><span class="nf">Log</span><span class="p">  ${</span><span class="nv">file</span><span class="p">}
   </span><span class="nf">END</span><span class="p">
   </span><span class="nf">Add To Archive</span><span class="p">            </span><span class="s">.</span><span class="p">${</span><span class="nv">/</span><span class="p">}</span><span class="s">..</span><span class="p">${</span><span class="nv">/</span><span class="p">}</span><span class="s">missing.robot</span><span class="p">  </span><span class="s">tasks.zip</span><span class="p">
   &amp;{</span><span class="nv">info</span><span class="p">}                   </span><span class="nf">Get Archive Info</span>
                                            </pre>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Archive</span> <span class="kn">import</span> <span class="n">Archive</span>

<span class="n">lib</span> <span class="o">=</span> <span class="n">Archive</span><span class="p">()</span>
<span class="n">lib</span><span class="o">.</span><span class="n">archive_folder_with_tar</span><span class="p">(</span><span class="s1">'./tasks'</span><span class="p">,</span> <span class="s1">'tasks.tar'</span><span class="p">,</span> <span class="n">recursive</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
<span class="n">files</span> <span class="o">=</span> <span class="n">lib</span><span class="o">.</span><span class="n">list_archive</span><span class="p">(</span><span class="s1">'tasks.tar'</span><span class="p">)</span>
<span class="k">for</span> <span class="n">file</span> <span class="ow">in</span> <span class="n">files</span><span class="p">:</span>
   <span class="nb">print</span><span class="p">(</span><span class="n">file</span><span class="p">)</span>
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
                                                        <div class="keyword" id="add-to-archive">
                                                            <h2><a href="#add-to-archive">Add To Archive</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Add file(s) to the archive</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>files</td>
                                                                        <td> typing.Any</td>
                                                                        <td></td>
                                                                        <td>name of the file, or list of files, to add</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>archive_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>filename of the archive</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>folder</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>name of the folder for added file, relative path in the archive</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param files:</th>
                                                                            <td class="field-body">name of the file, or list of files, to add</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param archive_name:</th>


                                                                            <td class="field-body">filename of the archive</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param folder:</th>
                                                                            <td class="field-body">name of the folder for added file, relative path in the archive</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>This keyword adds file or list of files into existing archive. Files can be added to archive structure with relative path using argument <cite>folder</cite>.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Add To Archive   file.ext    C:/folder/subfolder/file.rar

(Archiving more than 1 files)
@{List}  file.ext   file1.ext   file2.ext  
                                              
Add To Archive   @{List}   C:/folder/subfolder/file.rar
                                              
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="archive-folder-with-tar">
                                                            <h2><a href="#archive-folder-with-tar">Archive Folder With Tar</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create a tar/tar.gz archive of a folder</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>folder</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the folder to archive</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>archive_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>filename of the archive</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>recursive</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>should sub directories be included, defaults is False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>include</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>define file pattern to include in the package, by default all files are included</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>define file pattern to exclude from the package</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param folder:</th>
                                                                            <td class="field-body">name of the folder to archive</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param archive_name:</th>

                                                                            <td class="field-body">filename of the archive</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param recursive:</th>


                                                                            <td class="field-body">should sub directories be included, defaults is False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param include:</th>
                                                                            <td class="field-body">define file pattern to include in the package, by default all files are included</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param exclude:</th>
                                                                            <td class="field-body">define file pattern to exclude from the package</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>This keyword creates an TAR or TAR.GZ archive of a local folder. Type of archive is determined by the file extension. By default subdirectories are not included, but they can included using
                                                                    <cite>recursive</cite> argument.
                                                                </p>
                                                                <p>To include only certain files, like TXT files, the argument <cite>include</cite> can be used. Similarly to exclude certain file, like dotfiles, the argument <cite>exclude</cite> can be used.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Archive Folder With Tar   C:/folder/subfolder    Name.tar 

Archive Folder With Tar   C:/folder/subfolder    Name.tar    include=*.robot
                                              
Archive Folder With Tar   C:/folder/subfolder    Name.tar    exlude=*.txt
                                              
Archive Folder With Tar   C:/folder/subfolder    Name.tar    recursive=True
                                              
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="archive-folder-with-zip">
                                                            <h2><a href="#archive-folder-with-zip">Archive Folder With Zip</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create a zip archive of a folder</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>folder</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the folder to archive</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>archive_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>filename of the archive</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>recursive</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>should sub directories be included, defaults is False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>include</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>define file pattern to include in the package, defaults to None (means all files)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exclude</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>define file pattern to exclude from the package, defaults is None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>compression</td>
                                                                        <td> str </td>
                                                                        <td> stored</td>
                                                                        <td>type of package compression method, defaults to "stored"</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param folder:</th>
                                                                            <td class="field-body">name of the folder to archive</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param archive_name:</th>


                                                                            <td class="field-body">filename of the archive</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param recursive:</th>


                                                                            <td class="field-body">should sub directories be included, defaults is False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param include:</th>
                                                                            <td class="field-body">define file pattern to include in the package, defaults to None (means all files)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param exclude:</th>
                                                                            <td class="field-body">define file pattern to exclude from the package, defaults is None
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param compression:</th>
                                                                        </tr>
                                                                        <tr class="field">

                                                                            <td class="field-body">type of package compression method, defaults to &quot;stored&quot;
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>This keyword creates an ZIP archive of a local folder. By default subdirectories are not included, but they can included using <cite>recursive</cite> argument.</p>
                                                                <p>To include only certain files, like TXT files, the argument <cite>include</cite> can be used. Similarly to exclude certain file, like dotfiles, the argument <cite>exclude</cite> can be used.
                                                                </p>
                                                                <p>Compression methods:</p>
                                                                <ul class="simple">
                                                                    <li>stored, default</li>
                                                                    <li>deflated</li>
                                                                    <li>bzip2</li>
                                                                    <li>lzma</li>
                                                                </ul>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Archive Folder With Zip    D:/folder/subfolder    Name.zip

Archive Folder With Zip    D:/folder/subfolder    Name.zip    include=*.robot
                                              
Archive Folder With Zip    D:/folder/subfolder    Name.zip    exclude=*.txt
                                              
Archive Folder With Zip    D:/folder/subfolder    Name.zip    recursive=True
                                              
Archive Folder With Zip    D:/folder/subfolder    Name.zip    compression=deflated
                                              
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="extract-archive">
                                                            <h2><a href="#extract-archive">Extract Archive</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Extract files from archive into local directory</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>archive_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>filename of the archive</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to extract file into, default is current working directory</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>members</td>
                                                                        <td> typing.Any </td>
                                                                        <td> None</td>
                                                                        <td>list of files to extract from, by default all files in archive are extracted</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param archive_name:</th>


                                                                            <td class="field-body">filename of the archive</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">filepath to extract file into, default is current working directory
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param members:</th>
                                                                            <td class="field-body">list of files to extract from, by default all files in archive are extracted
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>This keyword supports extracting files from zip, tar and tar.gz archives.</p>
                                                                <p>By default file is extracted into current working directory, but <cite>path</cite> argument can be set to define extraction path.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Extract Archive    C:/folder/subfolder/filename.ext    C:/folder/subfolder
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="extract-file-from-archive">
                                                            <h2><a href="#extract-file-from-archive">Extract File From Archive</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Extract a file from archive into local directory</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>name of the file to extract</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>archive_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>filename of the archive</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>filepath to extract file into, default is current working directory</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">name of the file to extract</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param archive_name:</th>


                                                                            <td class="field-body">filename of the archive</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">filepath to extract file into, default is current working directory
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>This keyword supports extracting a file from zip, tar and tar.gz archives.</p>
                                                                <p>By default file is extracted into current working directory, but <cite>path</cite> argument can be set to define extraction path.</p>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Extract File From Archive   file.ext   C:/folder/subfolder/filename.ext   C:/folder/subfolder
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-archive-info">
                                                            <h2><a href="#get-archive-info">Get Archive Info</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get information about the archive</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>archive_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>filename of the archive</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param archive_name:</th>


                                                                            <td class="field-body">filename of the archive</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Returns following file attributes in a dictionary:</p>
                                                                <ul class="simple">
                                                                    <li>filename</li>
                                                                    <li>filemode</li>
                                                                    <li>size</li>
                                                                    <li>mtime</li>
                                                                    <li>last modification time in format <cite>%d.%m.%Y %H:%M:%S</cite></li>
                                                                </ul>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${a} = Get Archive Info C:/folder/subfolder/filename.ext
log to console   ${a}
                                              
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-archive">
                                                            <h2><a href="#list-archive">List Archive</a></h2>

                                                            <div>
                                                                <p class="shortdoc">List files in an archive</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>archive_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>filename of the archive</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param archive_name:</th>


                                                                            <td class="field-body">filename of the archive</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Returns list of file, where each file in a list is a dictionary with following attributes:</p>
                                                                <ul class="simple">
                                                                    <li>name</li>
                                                                    <li>size</li>
                                                                    <li>mtime</li>
                                                                    <li>last modification time in format <cite>%d.%m.%Y %H:%M:%S</cite></li>
                                                                </ul>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{files}   List Archive    myfiles.zip
FOR  ${file}  IN   ${files}
    Log  ${file}[filename]
    Log  ${file}[size]
    Log  ${file}[mtime]
END
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
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()" type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /></fieldset>
                                            </form>
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-add-to-archive" href="#add-to-archive" class="">Add To Archive</a></li>
                                                    <li><a id="link-archive-folder-with-tar" href="#archive-folder-with-tar" class="">Archive Folder With Tar</a></li>
                                                    <li><a id="link-archive-folder-with-zip" href="#archive-folder-with-zip" class="">Archive Folder With Zip</a></li>
                                                    <li><a id="link-extract-archive" href="#extract-archive" class="">Extract Archive</a></li>
                                                    <li><a id="link-extract-file-from-archive" href="#extract-file-from-archive" class="">Extract File From Archive</a></li>
                                                    <li><a id="link-get-archive-info" href="#get-archive-info" class="">Get Archive Info</a></li>
                                                    <li><a id="link-list-archive" href="#list-archive" class="">List Archive</a></li>
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