<article class="sc-hBEYos dVNWBU">
    <div class="sc-kLgntA iHaOcn">
        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z" fill="#002642"></path>
            </svg>
            <a href="">Autosphere Package</a>
        </nav>
        <div class="sc-iktFzd gaGeRK">
            <h1>Autosphere.Archive</h1>
        </div>
        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-archive">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-archive/keywords">Keywords</a></nav>
    </div>
    <div class="sc-jJEJSO laquCT">
        <div class="sc-hiSbYr XqbgT">
            <div class="sc-gWHgXt bHAbbC keyword-content">
                <form>
                    <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#002642"></path>
                        </svg></fieldset>
                </form>
                <div>
                    <div class="keyword" id="add-to-archive">
                        <h2><a href="#add-to-archive">Add To Archive</a></h2>

                        <div>
                            <p class="shortdoc">Add file(s) to the archive</p>
                            <h3>Arguments</h3>
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
                                        <th class="field-name" colspan="2">param archive_name:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
                                        <td class="field-body">filename of the archive</td>
                                    </tr>
                                    <tr class="field">
                                        <th class="field-name">param folder:</th>
                                        <td class="field-body">name of the folder for added file, relative path in the archive</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>This keyword adds file or list of files into existing archive. Files can be added to archive structure with relative path using argument <cite>folder</cite>.</p>
                            <h3>Examples</h3>
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
                            <h3>Arguments</h3>
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
                                        <th class="field-name" colspan="2">param archive_name:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
                                        <td class="field-body">filename of the archive</td>
                                    </tr>
                                    <tr class="field">
                                        <th class="field-name" colspan="2">param recursive:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
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
                            <h3>Examples</h3>
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
                            <h3>Arguments</h3>
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
                                        <th class="field-name" colspan="2">param archive_name:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
                                        <td class="field-body">filename of the archive</td>
                                    </tr>
                                    <tr class="field">
                                        <th class="field-name" colspan="2">param recursive:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
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
                                        <th class="field-name" colspan="2">param compression:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
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
                            <h3>Examples</h3>
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
                            <h3>Arguments</h3>
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
                                        <th class="field-name" colspan="2">param archive_name:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
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
                            <h3>Examples</h3>
                            <pre><code class="line-numbers language-robot">*** Tasks ***
Extract Archive    C:/folder/subfolder/filename.ext    C:/folder/subfolder
</code></pre>
                        </div>
                    </div>

                    <div class="keyword" id="extract-file-from-archive">
                        <h2><a href="#extract-file-from-archive">Extract File From Archive</a></h2>

                        <div>
                            <p class="shortdoc">Extract a file from archive into local directory</p>
                            <h3>Arguments</h3>
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
                                        <th class="field-name" colspan="2">param archive_name:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
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
                            <h3>Examples</h3>
                            <pre><code class="line-numbers language-robot">*** Tasks ***
Extract File From Archive   file.ext   C:/folder/subfolder/filename.ext   C:/folder/subfolder
</code></pre>
                        </div>
                    </div>

                    <div class="keyword" id="get-archive-info">
                        <h2><a href="#get-archive-info">Get Archive Info</a></h2>

                        <div>
                            <p class="shortdoc">Get information about the archive</p>
                            <h3>Arguments</h3>
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
                                        <th class="field-name" colspan="2">param archive_name:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
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
                            <h3>Examples</h3>
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
                            <h3>Arguments</h3>
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
                                        <th class="field-name" colspan="2">param archive_name:</th>
                                    </tr>
                                    <tr class="field">
                                        <td>&nbsp;</td>
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
                            <h3>Examples</h3>
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
        <aside class="sc-iJuUWI jaFBcT">
            <form>
                <h5>Keywords</h5>
                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                    </svg></fieldset>
            </form>
            <div>
                <a id="link-add-to-archive" href="#add-to-archive" class="">Add To Archive</a>
                <a id="link-archive-folder-with-tar" href="#archive-folder-with-tar" class="">Archive Folder With Tar</a>
                <a id="link-archive-folder-with-zip" href="#archive-folder-with-zip" class="">Archive Folder With Zip</a>
                <a id="link-extract-archive" href="#extract-archive" class="">Extract Archive</a>
                <a id="link-extract-file-from-archive" href="#extract-file-from-archive" class="">Extract File From Archive</a>
                <a id="link-get-archive-info" href="#get-archive-info" class="">Get Archive Info</a>
                <a id="link-list-archive" href="#list-archive" class="">List Archive</a>
            </div>
        </aside>
    </div>
</article>