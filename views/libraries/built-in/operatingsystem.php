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
                                    <li><a href="../../docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=built-in&subnode=intro">Built-in</a></li>
                                    <li class="active">OperatingSystem</li>
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
                                            <p>A test library providing keywords for OS related tasks.</p>
                                            <p><code>OperatingSystem</code> is Autosphere's standard library that enables various operating
                                                system related tasks to be performed in the system where Autosphere is running. It can,
                                                among other things, execute commands (e.g. <a href="#Run" class="name">Run</a>), create and
                                                remove files and directories (e.g. <a href="#create-file" id="link-create-file"  class="">Create File</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a>), check whether files or
                                                directories exists or contain something (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#file-should-exist" class="name">File
                                                    Should Exist</a>, <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#directory-should-be-empty" class="name">Directory Should
                                                    Be Empty</a>) and manipulate environment variables (e.g. <a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#set-environment-variable" class="name">Set Environment Variable</a>).</p>
                                            <h4 id="Table of contents">Table of contents</h4>
                                            <ul>
                                                <li><a href="#Path%20separators" class="name">Path separators</a></li>
                                                <li><a href="#Pattern%20matching" class="name">Pattern matching</a></li>
                                                <li><a href="#Tilde%20expansion" class="name">Tilde expansion</a></li>
                                                <li><a href="#Boolean%20arguments" class="name">Boolean arguments</a></li>
                                                <li><a href="#Example" class="name">Example</a></li>
                                                <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
                                                <li><a href="#Keywords" class="name">Keywords</a></li>
                                            </ul>
                                            <h4 id="Path separators">Path separators</h4>
                                            <p>Because Autosphere uses the backslash (<code>\</code>) as an escape character in the test
                                                data, using a literal backslash requires duplicating it like in <code>c:\\path\\file.txt</code>.
                                                That can be inconvenient especially with longer Windows paths, and thus all keywords expecting
                                                paths as arguments convert forward slashes to backslashes automatically on Windows. This also
                                                means that paths like <code>${CURDIR}/path/file.txt</code> are operating system independent.</p>
                                            <p>Notice that the automatic path separator conversion does not work if the path is only a part of
                                                an argument like with <a href="#Run" class="name">Run</a> and <span class="name">Start
                                                    Process</span> keywords. In these cases the built-in variable <code>${/}</code> that
                                                contains <code>\</code> or <code>/</code>, depending on the operating system, can be used
                                                instead.</p>
                                            <h4 id="Pattern matching">Pattern matching</h4>
                                            <p>Some keywords allow their arguments to be specified as <a href="http://en.wikipedia.org/wiki/Glob_(programming)">glob patterns</a> where:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><code>*</code></td>
                                                        <td>matches any string, even an empty string</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>?</code></td>
                                                        <td>matches any single character</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>[chars]</code></td>
                                                        <td>matches one character in the bracket</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>[!chars]</code></td>
                                                        <td>matches one character not in the bracket</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>[a-z]</code></td>
                                                        <td>matches one character from the range in the bracket</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>[!a-z]</code></td>
                                                        <td>matches one character not from the range in the bracket</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Unless otherwise noted, matching is case-insensitive on case-insensitive operating systems such
                                                as Windows.</p>
                                            <h4 id="Tilde expansion">Tilde expansion</h4>
                                            <p>Paths beginning with <code>~</code> or <code>~username</code> are expanded to the current or
                                                specified user's home directory, respectively. The resulting path is operating system dependent,
                                                but typically e.g. <code>~/robot</code> is expanded to <code>C:\Users\&lt;user&gt;\robot</code>
                                                on Windows and <code>/home/&lt;user&gt;/robot</code> on Unixes.</p>
                                            <p>The <code>~username</code> form does not work on Jython.</p>
                                            <h4 id="Boolean arguments">Boolean arguments</h4>
                                            <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an
                                                argument is given as a string, it is considered false if it is an empty string or equal to
                                                <code>FALSE</code>, <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>,
                                                case-insensitively. Other strings are considered true regardless their value, and other argument
                                                types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.
                                            </p>
                                            <p>True examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a></td>
                                                        <td>${path}</td>
                                                        <td>recursive=True</td>
                                                        <td># Strings are generally true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a></td>
                                                        <td>${path}</td>
                                                        <td>recursive=yes</td>
                                                        <td># Same as the above.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a></td>
                                                        <td>${path}</td>
                                                        <td>recursive=${TRUE}</td>
                                                        <td># Python <code>True</code> is true.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a></td>
                                                        <td>${path}</td>
                                                        <td>recursive=${42}</td>
                                                        <td># Numbers other than 0 are true.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>False examples:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a></td>
                                                        <td>${path}</td>
                                                        <td>recursive=False</td>
                                                        <td># String <code>false</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a></td>
                                                        <td>${path}</td>
                                                        <td>recursive=no</td>
                                                        <td># Also string <code>no</code> is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a></td>
                                                        <td>${path}</td>
                                                        <td>recursive=${EMPTY}</td>
                                                        <td># Empty string is false.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="<?php echo $baseusrl; ?>views/docs.php?page=libraries/built-in/operatingsystem/keywords#remove-directory" class="name">Remove Directory</a></td>
                                                        <td>${path}</td>
                                                        <td>recursive=${FALSE}</td>
                                                        <td># Python <code>False</code> is false.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Example">Example</h4>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <th>Setting</th>
                                                        <th>Value</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Library</td>
                                                        <td>OperatingSystem</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <th>Variable</th>
                                                        <th>Value</th>
                                                    </tr>
                                                    <tr>
                                                        <td>${PATH}</td>
                                                        <td>${CURDIR}/example.txt</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <th>Test Case</th>
                                                        <th>Action</th>
                                                        <th>Argument</th>
                                                        <th>Argument</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Example</td>
                                                        <td>Create File</td>
                                                        <td>${PATH}</td>
                                                        <td>Some text</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>File Should Exist</td>
                                                        <td>${PATH}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Copy File</td>
                                                        <td>${PATH}</td>
                                                        <td>~/file.txt</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>${output} =</td>
                                                        <td>Run</td>
                                                        <td>${TEMPDIR}${/}script.py arg</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                                        <div class="keyword" id="append-to-environment-variable">
                                                            <h2><a href="#append-to-environment-variable">Append To Environment Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Appends given ``values`` to environment variable ``name``.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**config</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Appends given <code>values</code> to environment variable <code>name</code>.</p>
                                                                <p>If the environment variable already exists, values are added after it, and otherwise a new environment variable is created.</p>
                                                                <p>Values are, by default, joined together using the operating system path separator (
                                                                    <code>;</code> on Windows, <code>:</code> elsewhere). This can be changed by giving a separator after the values like <code>separator=value</code>. No other configuration parameters are accepted.
                                                                </p>
                                                                <p>Examples (assuming <code>NAME</code> and <code>NAME2</code> do not exist initially):</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Append To Environment Variable</td>
                                                                        <td>NAME</td>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>%{NAME}</td>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Append To Environment Variable</td>
                                                                        <td>NAME</td>
                                                                        <td>second</td>
                                                                        <td>third</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>%{NAME}</td>
                                                                        <td>first${:}second${:}third</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Append To Environment Variable</td>
                                                                        <td>NAME2</td>
                                                                        <td>first</td>
                                                                        <td>separator=-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>%{NAME2}</td>
                                                                        <td>first</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Append To Environment Variable</td>
                                                                        <td>NAME2</td>
                                                                        <td>second</td>
                                                                        <td>separator=-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>%{NAME2}</td>
                                                                        <td>first-second</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="append-to-file">
                                                            <h2><a href="#append-to-file">Append To File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Appends the given content to the specified file.</p>
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
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>UTF-8</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the file exists, the given text is written to its end. If the file does not exist, it is created.
                                                                </p>
                                                                <p>Other than not overwriting possible existing files, this keyword works exactly like <a href="#Create%20File" class="name">Create File</a>. See its documentation for more details about the usage.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-directory">
                                                            <h2><a href="#copy-directory">Copy Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Copies the source directory into the destination.</p>
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
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the destination exists, the source is copied under it. Otherwise the destination directory and the possible missing intermediate directories are created.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-file">
                                                            <h2><a href="#copy-file">Copy File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Copies the source file into the destination.</p>
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
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Source must be a path to an existing file or a glob pattern (see <a href="#Pattern%20matching" class="name">Pattern matching</a>) that matches exactly one file. How the destination is interpreted is explained
                                                                    below.
                                                                </p>
                                                                <p>1) If the destination is an existing file, the source file is copied over it.</p>
                                                                <p>2) If the destination is an existing directory, the source file is copied into it. A possible file with the same name as the source is overwritten.</p>
                                                                <p>3) If the destination does not exist and it ends with a path separator (<code>/</code> or
                                                                    <code>\</code>), it is considered a directory. That directory is created and a source file copied into it. Possible missing intermediate directories are also created.
                                                                </p>
                                                                <p>4) If the destination does not exist and it does not end with a path separator, it is considered a file. If the path to the file does not exist, it is created.</p>

                                                                <p>See also <a href="#Copy%20Files" class="name">Copy Files</a>, <a href="#Move%20File" class="name">Move File</a>, and <a href="#Move%20Files" class="name">Move Files</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-files">
                                                            <h2><a href="#copy-files">Copy Files</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Copies specified files to the target directory.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*sources_and_destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Source files can be given as exact paths and as glob patterns (see <a href="#Pattern%20matching" class="name">Pattern matching</a>). At least one source must be given, but it is not an error if it is a pattern
                                                                    that does not match anything.</p>
                                                                <p>Last argument must be the destination directory. If the destination does not exist, it will be created.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Copy Files</td>
                                                                        <td>${dir}/file1.txt</td>
                                                                        <td>${dir}/file2.txt</td>
                                                                        <td>${dir2}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Copy Files</td>
                                                                        <td>${dir}/file-*.txt</td>
                                                                        <td>${dir2}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See also <a href="#Copy%20File" class="name">Copy File</a>, <a href="#Move%20File" class="name">Move File</a>, and <a href="#Move%20Files" class="name">Move Files</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="count-directories-in-directory">
                                                            <h2><a href="#count-directories-in-directory">Count Directories In Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wrapper for `Count Items In Directory` returning only directory count.</p>
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
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Wrapper for <a href="#Count%20Items%20In%20Directory" class="name">Count Items In Directory</a> returning only directory count.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="count-files-in-directory">
                                                            <h2><a href="#count-files-in-directory">Count Files In Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wrapper for `Count Items In Directory` returning only file count.</p>
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
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Wrapper for <a href="#Count%20Items%20In%20Directory" class="name">Count Items In Directory</a> returning only file count.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="count-items-in-directory">
                                                            <h2><a href="#count-items-in-directory">Count Items In Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs the number of all items in the given directory.</p>
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
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The argument <code>pattern</code> has the same semantics as with <a href="#List%20Directory" class="name">List Directory</a> keyword. The count is returned as an integer, so it must be checked e.g. with the
                                                                    built-in keyword Should Be Equal As Integers.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-binary-file">
                                                            <h2><a href="#create-binary-file">Create Binary File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creates a binary file with the given content.</p>
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
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If content is given as a Unicode string, it is first converted to bytes character by character. All characters with ordinal below 256 can be used and are converted to bytes with same values. Using characters
                                                                    with higher ordinal is an error.</p>
                                                                <p>Byte strings, and possible other types, are written to the file as is.</p>
                                                                <p>If the directory for the file does not exist, it is created, along with missing intermediate directories.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Create Binary File</td>
                                                                        <td>${dir}/example.png</td>
                                                                        <td>${image content}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Create Binary File</td>
                                                                        <td>${path}</td>
                                                                        <td>\x01\x00\xe4\x00</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Create%20File" class="name">Create File</a> if you want to create a text file using a certain encoding. <a href="#File%20Should%20Not%20Exist" class="name">File Should Not
                                                                        Exist</a> can be used to avoid overwriting existing files.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-directory">
                                                            <h2><a href="#create-directory">Create Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creates the specified directory.</p>
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

                                                                <p>Also possible intermediate directories are created. Passes if the directory already exists, but fails if the path exists and is not a directory.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-file">
                                                            <h2><a href="#create-file">Create File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Creates a file with the given content and encoding.</p>
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
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>UTF-8</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the directory where the file is created does not exist, it is automatically created along with possible missing intermediate directories. Possible existing file is overwritten.</p>
                                                                <p>On Windows newline characters (<code>\n</code>) in content are automatically converted to Windows native newline sequence (<code>\r\n</code>).</p>
                                                                <p>See <a href="#Get%20File" class="name">Get File</a> for more information about possible
                                                                    <code>encoding</code> values, including special values <code>SYSTEM</code> and
                                                                    <code>CONSOLE</code>.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Create File</td>
                                                                        <td>${dir}/example.txt</td>
                                                                        <td>Hello, world!</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Create File</td>
                                                                        <td>${path}</td>
                                                                        <td>Hyv\xe4 esimerkki</td>
                                                                        <td>Latin-1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Create File</td>
                                                                        <td>/tmp/foo.txt</td>
                                                                        <td>3\nlines\nhere\n</td>
                                                                        <td>SYSTEM</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Use <a href="#Append%20To%20File" class="name">Append To File</a> if you want to append to an existing file and <a href="#Create%20Binary%20File" class="name">Create Binary File</a> if you need to write bytes
                                                                    without encoding. <a href="#File%20Should%20Not%20Exist" class="name">File
                                                                        Should Not Exist</a> can be used to avoid overwriting existing files.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="directory-should-be-empty">
                                                            <h2><a href="#directory-should-be-empty">Directory Should Be Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails unless the specified directory is empty.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="directory-should-exist">
                                                            <h2><a href="#directory-should-exist">Directory Should Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails unless the given path points to an existing directory.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. The default error message can be overridden with
                                                                    the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="directory-should-not-be-empty">
                                                            <h2><a href="#directory-should-not-be-empty">Directory Should Not Be Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the specified directory is empty.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="directory-should-not-exist">
                                                            <h2><a href="#directory-should-not-exist">Directory Should Not Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given path points to an existing file.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. The default error message can be overridden with
                                                                    the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="empty-directory">
                                                            <h2><a href="#empty-directory">Empty Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Deletes all the content from the given directory.</p>
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

                                                                <p>Deletes both files and sub-directories, but the specified directory itself if not removed. Use
                                                                    <a href="#Remove%20Directory" class="name">Remove Directory</a> if you want to remove the whole directory.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="environment-variable-should-be-set">
                                                            <h2><a href="#environment-variable-should-be-set">Environment Variable Should Be Set</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the specified environment variable is not set.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="environment-variable-should-not-be-set">
                                                            <h2><a href="#environment-variable-should-not-be-set">Environment Variable Should Not Be Set</a>
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the specified environment variable is set.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="file-should-be-empty">
                                                            <h2><a href="#file-should-be-empty">File Should Be Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails unless the specified file is empty.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="file-should-exist">
                                                            <h2><a href="#file-should-exist">File Should Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails unless the given ``path`` points to an existing file.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Fails unless the given <code>path</code> points to an existing file.</p>
                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. The default error message can be overridden with
                                                                    the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="file-should-not-be-empty">
                                                            <h2><a href="#file-should-not-be-empty">File Should Not Be Empty</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the specified directory is empty.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The default error message can be overridden with the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="file-should-not-exist">
                                                            <h2><a href="#file-should-not-exist">File Should Not Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given path points to an existing file.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. The default error message can be overridden with
                                                                    the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-binary-file">
                                                            <h2><a href="#get-binary-file">Get Binary File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the contents of a specified file.</p>
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

                                                                <p>This keyword reads the specified file and returns the contents as is. See also <a href="#Get%20File" class="name">Get File</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-environment-variable">
                                                            <h2><a href="#get-environment-variable">Get Environment Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the value of an environment variable with the given name.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>default</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If no such environment variable is set, returns the default value, if given. Otherwise fails the test case.</p>
                                                                <p>Returned variables are automatically decoded to Unicode using the system encoding.</p>
                                                                <p>Note that you can also access environment variables directly using the variable syntax
                                                                    <code>%{ENV_VAR_NAME}</code>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-environment-variables">
                                                            <h2><a href="#get-environment-variables">Get Environment Variables</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns currently available environment variables as a dictionary.</p>


                                                                <p>Both keys and values are decoded to Unicode using the system encoding. Altering the returned dictionary has no effect on the actual environment variables.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-file">
                                                            <h2><a href="#get-file">Get File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the contents of a specified file.</p>
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
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>UTF-8</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding_errors</td>
                                                                        <td></td>
                                                                        <td>strict</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword reads the specified file and returns the contents. Line breaks in content are converted to platform independent form. See also <a href="#Get%20Binary%20File" class="name">Get
                                                                        Binary File</a>.</p>
                                                                <p><code>encoding</code> defines the encoding of the file. The default value is
                                                                    <code>UTF-8</code>, which means that UTF-8 and ASCII encoded files are read correctly. In addition to the encodings supported by the underlying Python implementation, the following special encoding values
                                                                    can be used:
                                                                </p>
                                                                <ul>
                                                                    <li><code>SYSTEM</code>: Use the default system encoding.</li>
                                                                    <li><code>CONSOLE</code>: Use the console encoding. Outside Windows this is same as the system encoding.
                                                                    </li>
                                                                </ul>
                                                                <p><code>encoding_errors</code> argument controls what to do if decoding some bytes fails. All values accepted by <code>decode</code> method in Python are valid, but in practice the following values are most useful:</p>
                                                                <ul>
                                                                    <li><code>strict</code>: Fail if characters cannot be decoded (default).</li>
                                                                    <li><code>ignore</code>: Ignore characters that cannot be decoded.</li>
                                                                    <li><code>replace</code>: Replace characters that cannot be decoded with a replacement character.
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-file-size">
                                                            <h2><a href="#get-file-size">Get File Size</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs file size as an integer in bytes.</p>
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

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-modified-time">
                                                            <h2><a href="#get-modified-time">Get Modified Time</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the last modification time of a file or directory.</p>
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
                                                                    <tr>
                                                                        <td>format</td>
                                                                        <td></td>
                                                                        <td>timestamp</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>How time is returned is determined based on the given <code>format</code> string as follows. Note that all checks are case-insensitive. Returned time is also automatically logged.</p>
                                                                <p>1) If <code>format</code> contains the word <code>epoch</code>, the time is returned in seconds after the UNIX epoch. The return value is always an integer.</p>
                                                                <p>2) If <code>format</code> contains any of the words <code>year</code>, <code>month</code>,
                                                                    <code>day</code>, <code>hour</code>, <code>min</code> or <code>sec</code>, only the selected parts are returned. The order of the returned parts is always the one in the previous sentence and the order of
                                                                    the words in <code>format</code> is not significant. The parts are returned as zero-padded strings (e.g. May -&gt; <code>05</code>).
                                                                </p>
                                                                <p>3) Otherwise, and by default, the time is returned as a timestamp string in the format
                                                                    <code>2006-02-24 15:08:31</code>.
                                                                </p>
                                                                <p>Examples (when the modified time of <code>${CURDIR}</code> is 2006-03-29 15:06:21):</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${time} =</td>
                                                                        <td>Get Modified Time</td>
                                                                        <td>${CURDIR}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${secs} =</td>
                                                                        <td>Get Modified Time</td>
                                                                        <td>${CURDIR}</td>
                                                                        <td>epoch</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${year} =</td>
                                                                        <td>Get Modified Time</td>
                                                                        <td>${CURDIR}</td>
                                                                        <td>return year</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${y}</td>
                                                                        <td>${d} =</td>
                                                                        <td>Get Modified Time</td>
                                                                        <td>${CURDIR}</td>
                                                                        <td>year,day</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{time} =</td>
                                                                        <td>Get Modified Time</td>
                                                                        <td>${CURDIR}</td>
                                                                        <td>year,month,day,hour,min,sec</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <ul>
                                                                    <li>${time} = '2006-03-29 15:06:21'</li>
                                                                    <li>${secs} = 1143637581</li>
                                                                    <li>${year} = '2006'</li>
                                                                    <li>${y} = '2006' &amp; ${d} = '29'</li>
                                                                    <li>@{time} = ['2006', '03', '29', '15', '06', '21']</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="grep-file">
                                                            <h2><a href="#grep-file">Grep File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the lines of the specified file that match the ``pattern``.</p>
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
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>UTF-8</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding_errors</td>
                                                                        <td></td>
                                                                        <td>strict</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns the lines of the specified file that match the <code>pattern</code>.</p>
                                                                <p>This keyword reads a file from the file system using the defined <code>path</code>,
                                                                    <code>encoding</code> and <code>encoding_errors</code> similarly as <a href="#Get%20File" class="name">Get File</a>. A difference is that only the lines that match the given
                                                                    <code>pattern</code> are returned. Lines are returned as a single string catenated back together with newlines and the number of matched lines is automatically logged. Possible trailing newline is never
                                                                    returned.
                                                                </p>
                                                                <p>A line matches if it contains the <code>pattern</code> anywhere in it and it <b>does not need
                                                                        to match the pattern fully</b>. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>, and in this case matching is case-sensitive.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${errors} =</td>
                                                                        <td>Grep File</td>
                                                                        <td>/var/log/myapp.log</td>
                                                                        <td>ERROR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${ret} =</td>
                                                                        <td>Grep File</td>
                                                                        <td>${CURDIR}/file.txt</td>
                                                                        <td>[Ww]ildc??d ex*ple</td>
                                                                    </tr>
                                                                </table>
                                                                <p>If more complex pattern matching is needed, it is possible to use <a href="#Get%20File" class="name">Get File</a> in combination with String library keywords like Get Lines Matching Regexp.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="join-path">
                                                            <h2><a href="#join-path">Join Path</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Joins the given path part(s) to the given base path.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>base</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*parts</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The path separator (<code>/</code> or <code>\</code>) is inserted when needed and the possible absolute paths handled as expected. The resulted path is also normalized.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${path} =</td>
                                                                        <td>Join Path</td>
                                                                        <td>my</td>
                                                                        <td>path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p2} =</td>
                                                                        <td>Join Path</td>
                                                                        <td>my/</td>
                                                                        <td>path/</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p3} =</td>
                                                                        <td>Join Path</td>
                                                                        <td>my</td>
                                                                        <td>path</td>
                                                                        <td>my</td>
                                                                        <td>file.txt</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p4} =</td>
                                                                        <td>Join Path</td>
                                                                        <td>my</td>
                                                                        <td>/path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p5} =</td>
                                                                        <td>Join Path</td>
                                                                        <td>/my/path/</td>
                                                                        <td>..</td>
                                                                        <td>path2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <ul>
                                                                    <li>${path} = 'my/path'</li>
                                                                    <li>${p2} = 'my/path'</li>
                                                                    <li>${p3} = 'my/path/my/file.txt'</li>
                                                                    <li>${p4} = '/path'</li>
                                                                    <li>${p5} = '/my/path2'</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="join-paths">
                                                            <h2><a href="#join-paths">Join Paths</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Joins given paths with base and returns resulted paths.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>base</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*paths</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Join%20Path" class="name">Join Path</a> for more information.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>@{p1} =</td>
                                                                        <td>Join Paths</td>
                                                                        <td>base</td>
                                                                        <td>example</td>
                                                                        <td>other</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{p2} =</td>
                                                                        <td>Join Paths</td>
                                                                        <td>/my/base</td>
                                                                        <td>/example</td>
                                                                        <td>other</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{p3} =</td>
                                                                        <td>Join Paths</td>
                                                                        <td>my/base</td>
                                                                        <td>example/path/</td>
                                                                        <td>other</td>
                                                                        <td>one/more</td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <ul>
                                                                    <li>@{p1} = ['base/example', 'base/other']</li>
                                                                    <li>@{p2} = ['/example', '/my/base/other']</li>
                                                                    <li>@{p3} = ['my/base/example/path', 'my/base/other', 'my/base/one/more']</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-directories-in-directory">
                                                            <h2><a href="#list-directories-in-directory">List Directories In Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wrapper for `List Directory` that returns only directories.</p>
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
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>absolute</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Wrapper for <a href="#List%20Directory" class="name">List Directory</a> that returns only directories.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-directory">
                                                            <h2><a href="#list-directory">List Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs items in a directory, optionally filtered with ``pattern``.
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
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>absolute</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns and logs items in a directory, optionally filtered with <code>pattern</code>.</p>
                                                                <p>File and directory names are returned in case-sensitive alphabetical order, e.g.
                                                                    <code>['A Name', 'Second', 'a lower case name', 'one more']</code>. Implicit directories
                                                                    <code>.</code> and <code>..</code> are not returned. The returned items are automatically logged.
                                                                </p>
                                                                <p>File and directory names are returned relative to the given path (e.g. <code>'file.txt'</code>) by default. If you want them be returned in absolute format (e.g.
                                                                    <code>'/home/robot/file.txt'</code>), give the <code>absolute</code> argument a true value (see
                                                                    <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).
                                                                </p>
                                                                <p>If <code>pattern</code> is given, only items matching it are returned. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>, and in this case matching is case-sensitive.</p>
                                                                <p>Examples (using also other <a href="#List%20Directory" class="name">List Directory</a> variants):
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>@{items} =</td>
                                                                        <td>List Directory</td>
                                                                        <td>${TEMPDIR}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@{files} =</td>
                                                                        <td>List Files In Directory</td>
                                                                        <td>/tmp</td>
                                                                        <td>*.txt</td>
                                                                        <td>absolute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${count} =</td>
                                                                        <td>Count Files In Directory</td>
                                                                        <td>${CURDIR}</td>
                                                                        <td>???</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-files-in-directory">
                                                            <h2><a href="#list-files-in-directory">List Files In Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wrapper for `List Directory` that returns only files.</p>
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
                                                                    <tr>
                                                                        <td>pattern</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>absolute</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Wrapper for <a href="#List%20Directory" class="name">List Directory</a> that returns only files.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-environment-variables">
                                                            <h2><a href="#log-environment-variables">Log Environment Variables</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs all environment variables using the given log level.</p>
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
                                                                        <td></td>
                                                                        <td>INFO</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Environment variables are also returned the same way as with <a href="#Get%20Environment%20Variables" class="name">Get Environment Variables</a> keyword.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-file">
                                                            <h2><a href="#log-file">Log File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Wrapper for `Get File` that also logs the returned file.</p>
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
                                                                    <tr>
                                                                        <td>encoding</td>
                                                                        <td></td>
                                                                        <td>UTF-8</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>encoding_errors</td>
                                                                        <td></td>
                                                                        <td>strict</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Wrapper for <a href="#Get%20File" class="name">Get File</a> that also logs the returned file.
                                                                </p>
                                                                <p>The file is logged with the INFO level. If you want something else, just use <a href="#Get%20File" class="name">Get File</a> and the built-in keyword Log with the desired level.
                                                                </p>
                                                                <p>See <a href="#Get%20File" class="name">Get File</a> for more information about
                                                                    <code>encoding</code> and <code>encoding_errors</code> arguments.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="move-directory">
                                                            <h2><a href="#move-directory">Move Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Moves the source directory into a destination.</p>
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
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Uses <a href="#Copy%20Directory" class="name">Copy Directory</a> keyword internally, and
                                                                    <code>source</code> and <code>destination</code> arguments have exactly same semantics as with that keyword.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="move-file">
                                                            <h2><a href="#move-file">Move File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Moves the source file into the destination.</p>
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
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Arguments have exactly same semantics as with <a href="#Copy%20File" class="name">Copy File</a> keyword.</p>
                                                                <p>If the source and destination are on the same filesystem, rename operation is used. Otherwise file is copied to the destination filesystem and then removed from the original filesystem.</p>
                                                                <p>See also <a href="#Move%20Files" class="name">Move Files</a>, <a href="#Copy%20File" class="name">Copy File</a>, and <a href="#Copy%20Files" class="name">Copy Files</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="move-files">
                                                            <h2><a href="#move-files">Move Files</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Moves specified files to the target directory.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*sources_and_destination</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Arguments have exactly same semantics as with <a href="#Copy%20Files" class="name">Copy
                                                                        Files</a> keyword.</p>
                                                                <p>See also <a href="#Move%20File" class="name">Move File</a>, <a href="#Copy%20File" class="name">Copy File</a>, and <a href="#Copy%20Files" class="name">Copy Files</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="normalize-path">
                                                            <h2><a href="#normalize-path">Normalize Path</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Normalizes the given path.</p>
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
                                                                    <tr>
                                                                        <td>case_normalize</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <ul>
                                                                    <li>Collapses redundant separators and up-level references.</li>
                                                                    <li>Converts <code>/</code> to <code>\</code> on Windows.</li>
                                                                    <li>Replaces initial <code>~</code> or <code>~user</code> by that user's home directory. The latter is not supported on Jython.</li>
                                                                    <li>If <code>case_normalize</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>) on Windows, converts the path to all lowercase.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${path1} =</td>
                                                                        <td>Normalize Path</td>
                                                                        <td>abc/</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${path2} =</td>
                                                                        <td>Normalize Path</td>
                                                                        <td>abc/../def</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${path4} =</td>
                                                                        <td>Normalize Path</td>
                                                                        <td>abc/./def//ghi</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${path4} =</td>
                                                                        <td>Normalize Path</td>
                                                                        <td>~robot/stuff</td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <ul>
                                                                    <li>${path1} = 'abc'</li>
                                                                    <li>${path2} = 'def'</li>
                                                                    <li>${path4} = 'abc/def/ghi'</li>
                                                                    <li>${path4} = '/home/robot/stuff'</li>
                                                                </ul>
                                                                <p>On Windows result would use <code>\</code> instead of <code>/</code> and home directory would be different.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-directory">
                                                            <h2><a href="#remove-directory">Remove Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes the directory pointed to by the given ``path``.</p>
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
                                                                    <tr>
                                                                        <td>recursive</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Removes the directory pointed to by the given <code>path</code>.</p>
                                                                <p>If the second argument <code>recursive</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the directory is removed recursively. Otherwise removing fails if
                                                                    the directory is not empty.</p>
                                                                <p>If the directory pointed to by the <code>path</code> does not exist, the keyword passes, but it fails, if the <code>path</code> points to a file.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-environment-variable">
                                                            <h2><a href="#remove-environment-variable">Remove Environment Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Deletes the specified environment variable.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*names</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Does nothing if the environment variable is not set.</p>
                                                                <p>It is possible to remove multiple variables by passing them to this keyword as separate arguments.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-file">
                                                            <h2><a href="#remove-file">Remove File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes a file with the given path.</p>
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

                                                                <p>Passes if the file does not exist, but fails if the path does not point to a regular file (e.g. it points to a directory).</p>
                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. If the path is a pattern, all files matching it
                                                                    are removed.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-files">
                                                            <h2><a href="#remove-files">Remove Files</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Uses `Remove File` to remove multiple files one-by-one.</p>
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
                                                                </table>
                                                                <p>Uses <a href="#Remove%20File" class="name">Remove File</a> to remove multiple files one-by-one.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Remove Files</td>
                                                                        <td>${TEMPDIR}${/}foo.txt</td>
                                                                        <td>${TEMPDIR}${/}bar.txt</td>
                                                                        <td>${TEMPDIR}${/}zap.txt</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run">
                                                            <h2><a href="#run">Run</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given command in the system and returns the output.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The execution status of the command <b>is not checked</b> by this keyword, and it must be done separately based on the returned output. If the execution return code is needed, either <a href="#Run%20And%20Return%20Rc" class="name">Run And Return RC</a> or <a href="#Run%20And%20Return%20Rc%20And%20Output" class="name">Run And Return RC And Output</a> can be used.</p>
                                                                <p>The standard error stream is automatically redirected to the standard output stream by adding
                                                                    <code>2&gt;&amp;1</code> after the executed command. This automatic redirection is done only when the executed command does not contain additional output redirections. You can thus freely forward the standard
                                                                    error somewhere else, for example, like
                                                                    <code>my_command 2&gt;stderr.txt</code>.
                                                                </p>
                                                                <p>The returned output contains everything written into the standard output or error streams by the command (unless either of them is redirected explicitly). Many commands add an extra newline (
                                                                    <code>\n</code>) after the output to make it easier to read in the console. To ease processing the returned output, this possible trailing newline is stripped by this keyword.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${output} =</td>
                                                                        <td>Run</td>
                                                                        <td>ls -lhF /tmp</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>${output}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td>Run</td>
                                                                        <td>${CURDIR}${/}tester.py arg1 arg2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Not Contain</td>
                                                                        <td>${result}</td>
                                                                        <td>FAIL</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${stdout} =</td>
                                                                        <td>Run</td>
                                                                        <td>/opt/script.sh 2&gt;/tmp/stderr.txt</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${stdout}</td>
                                                                        <td>TEST PASSED</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Be Empty</td>
                                                                        <td>/tmp/stderr.txt</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p><b>TIP:</b> Run Process keyword provided by the Process
                                                                    library supports better process configuration and is generally recommended as a replacement for this keyword.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-and-return-rc">
                                                            <h2><a href="#run-and-return-rc">Run And Return Rc</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given command in the system and returns the return code.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The return code (RC) is returned as a positive integer in range from 0 to 255 as returned by the executed command. On some operating systems (notable Windows) original return codes can be something else, but
                                                                    this keyword always maps them to the 0-255 range. Since the RC is an integer, it must be checked e.g. with the keyword Should Be Equal As Integers instead of Should Be Equal (both are built-in keywords).</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${rc} =</td>
                                                                        <td>Run and Return RC</td>
                                                                        <td>${CURDIR}${/}script.py arg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>${rc}</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${rc} =</td>
                                                                        <td>Run and Return RC</td>
                                                                        <td>/path/to/example.rb arg1 arg2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>0 &lt; ${rc} &lt; 42</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Run" class="name">Run</a> and <a href="#Run%20And%20Return%20Rc%20And%20Output" class="name">Run And Return RC And Output</a> if you need to get the output of the executed command.
                                                                </p>
                                                                <p><b>TIP:</b> Run Process keyword provided by the Process
                                                                    library supports better process configuration and is generally recommended as a replacement for this keyword.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="run-and-return-rc-and-output">
                                                            <h2><a href="#run-and-return-rc-and-output">Run And Return Rc And Output</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Runs the given command in the system and returns the RC and output.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The return code (RC) is returned similarly as with <a href="#Run%20And%20Return%20Rc" class="name">Run And Return RC</a> and the output similarly as with <a href="#Run" class="name">Run</a>.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${rc}</td>
                                                                        <td>${output} =</td>
                                                                        <td>Run and Return RC and Output</td>
                                                                        <td>${CURDIR}${/}mytool</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal As Integers</td>
                                                                        <td>${rc}</td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Not Contain</td>
                                                                        <td>${output}</td>
                                                                        <td>FAIL</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${rc}</td>
                                                                        <td>${stdout} =</td>
                                                                        <td>Run and Return RC and Output</td>
                                                                        <td>/opt/script.sh 2&gt;/tmp/stderr.txt</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>${rc} &gt; 42</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${stdout}</td>
                                                                        <td>TEST PASSED</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Be Empty</td>
                                                                        <td>/tmp/stderr.txt</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p><b>TIP:</b> Run Process keyword provided by the Process
                                                                    library supports better process configuration and is generally recommended as a replacement for this keyword.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-environment-variable">
                                                            <h2><a href="#set-environment-variable">Set Environment Variable</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets an environment variable to a specified value.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Values are converted to strings automatically. Set variables are automatically encoded using the system encoding.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-modified-time">
                                                            <h2><a href="#set-modified-time">Set Modified Time</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the file modification and access times.</p>
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
                                                                    <tr>
                                                                        <td>mtime</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Changes the modification and access times of the given file to the value determined by
                                                                    <code>mtime</code>. The time can be given in different formats described below. Note that all checks involving strings are case-insensitive. Modified time can only be set to regular files.
                                                                </p>
                                                                <p>1) If <code>mtime</code> is a number, or a string that can be converted to a number, it is interpreted as seconds since the UNIX epoch (1970-01-01 00:00:00 UTC). This documentation was originally written about
                                                                    1177654467 seconds after the epoch.</p>
                                                                <p>2) If <code>mtime</code> is a timestamp, that time will be used. Valid timestamp formats are
                                                                    <code>YYYY-MM-DD hh:mm:ss</code> and <code>YYYYMMDD hhmmss</code>.
                                                                </p>
                                                                <p>3) If <code>mtime</code> is equal to <code>NOW</code>, the current local time is used.</p>
                                                                <p>4) If <code>mtime</code> is equal to <code>UTC</code>, the current time in <a href="http://en.wikipedia.org/wiki/Coordinated_Universal_Time">UTC</a> is used.</p>
                                                                <p>5) If <code>mtime</code> is in the format like <code>NOW - 1 day</code> or
                                                                    <code>UTC + 1 hour 30 min</code>, the current local/UTC time plus/minus the time specified with the time string is used. The time string format is described in an appendix of Autosphere User Guide.
                                                                </p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Set Modified Time</td>
                                                                        <td>/path/file</td>
                                                                        <td>1177654467</td>
                                                                        <td># Time given as epoch seconds</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Modified Time</td>
                                                                        <td>/path/file</td>
                                                                        <td>2007-04-27 9:14:27</td>
                                                                        <td># Time given as a timestamp</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Modified Time</td>
                                                                        <td>/path/file</td>
                                                                        <td>NOW</td>
                                                                        <td># The local time of execution</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Modified Time</td>
                                                                        <td>/path/file</td>
                                                                        <td>NOW - 1 day</td>
                                                                        <td># 1 day subtracted from the local time</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Set Modified Time</td>
                                                                        <td>/path/file</td>
                                                                        <td>UTC + 1h 2min 3s</td>
                                                                        <td># 1h 2min 3s added to the UTC time</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-exist">
                                                            <h2><a href="#should-exist">Should Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails unless the given path (file or directory) exists.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. The default error message can be overridden with
                                                                    the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="should-not-exist">
                                                            <h2><a href="#should-not-exist">Should Not Exist</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if the given path (file or directory) exists.</p>
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
                                                                    <tr>
                                                                        <td>msg</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. The default error message can be overridden with
                                                                    the <code>msg</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="split-extension">
                                                            <h2><a href="#split-extension">Split Extension</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Splits the extension from the given path.</p>
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

                                                                <p>The given path is first normalized (e.g. possible trailing path separators removed, special directories <code>..</code> and <code>.</code> removed). The base path and extension are returned as separate components
                                                                    so that the dot used as an extension separator is removed. If the path contains no extension, an empty string is returned for it. Possible leading and trailing dots in the file name are never considered
                                                                    to be extension separators.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${path}</td>
                                                                        <td>${ext} =</td>
                                                                        <td>Split Extension</td>
                                                                        <td>file.extension</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p2}</td>
                                                                        <td>${e2} =</td>
                                                                        <td>Split Extension</td>
                                                                        <td>path/file.ext</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p3}</td>
                                                                        <td>${e3} =</td>
                                                                        <td>Split Extension</td>
                                                                        <td>path/file</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p4}</td>
                                                                        <td>${e4} =</td>
                                                                        <td>Split Extension</td>
                                                                        <td>p1/../p2/file.ext</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p5}</td>
                                                                        <td>${e5} =</td>
                                                                        <td>Split Extension</td>
                                                                        <td>path/.file.ext</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${p6}</td>
                                                                        <td>${e6} =</td>
                                                                        <td>Split Extension</td>
                                                                        <td>path/.file</td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <ul>
                                                                    <li>${path} = 'file' &amp; ${ext} = 'extension'</li>
                                                                    <li>${p2} = 'path/file' &amp; ${e2} = 'ext'</li>
                                                                    <li>${p3} = 'path/file' &amp; ${e3} = ''</li>
                                                                    <li>${p4} = 'p2/file' &amp; ${e4} = 'ext'</li>
                                                                    <li>${p5} = 'path/.file' &amp; ${e5} = 'ext'</li>
                                                                    <li>${p6} = 'path/.file' &amp; ${e6} = ''</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="split-path">
                                                            <h2><a href="#split-path">Split Path</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Splits the given path from the last path separator (``/`` or ``\``).</p>
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
                                                                <p>Splits the given path from the last path separator (<code>/</code> or <code>\</code>).</p>
                                                                <p>The given path is first normalized (e.g. a possible trailing path separator is removed, special directories <code>..</code> and <code>.</code> removed). The parts that are split are returned as separate components.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${path1}</td>
                                                                        <td>${dir} =</td>
                                                                        <td>Split Path</td>
                                                                        <td>abc/def</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${path2}</td>
                                                                        <td>${file} =</td>
                                                                        <td>Split Path</td>
                                                                        <td>abc/def/ghi.txt</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${path4}</td>
                                                                        <td>${d2} =</td>
                                                                        <td>Split Path</td>
                                                                        <td>abc/../def/ghi/</td>
                                                                    </tr>
                                                                </table>
                                                                <p>=&gt;</p>
                                                                <ul>
                                                                    <li>${path1} = 'abc' &amp; ${dir} = 'def'</li>
                                                                    <li>${path2} = 'abc/def' &amp; ${file} = 'ghi.txt'</li>
                                                                    <li>${path4} = 'def' &amp; ${d2} = 'ghi'</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="touch">
                                                            <h2><a href="#touch">Touch</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Emulates the UNIX touch command.</p>
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

                                                                <p>Creates a file, if it does not exist. Otherwise changes its access and modification times to the current time.</p>
                                                                <p>Fails if used with the directories or the parent directory of the given file does not exist.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-created">
                                                            <h2><a href="#wait-until-created">Wait Until Created</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the given file or directory is created.</p>
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
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>1 minute</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. If the path is a pattern, the keyword returns when
                                                                    an item matching it is created.</p>
                                                                <p>The optional <code>timeout</code> can be used to control the maximum time of waiting. The timeout is given as a timeout string, e.g. in a format <code>15 seconds</code>,
                                                                    <code>1min 10s</code> or just <code>10</code>. The time string format is described in an appendix of Autosphere User Guide.
                                                                </p>
                                                                <p>If the timeout is negative, the keyword is never timed-out. The keyword returns immediately, if the path already exists.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-removed">
                                                            <h2><a href="#wait-until-removed">Wait Until Removed</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the given file or directory is removed.</p>
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
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>1 minute</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The path can be given as an exact path or as a glob pattern. The pattern matching syntax is explained in <a href="#Introduction" class="name">introduction</a>. If the path is a pattern, the keyword waits until
                                                                    all matching items are removed.</p>
                                                                <p>The optional <code>timeout</code> can be used to control the maximum time of waiting. The timeout is given as a timeout string, e.g. in a format <code>15 seconds</code>,
                                                                    <code>1min 10s</code> or just <code>10</code>. The time string format is described in an appendix of Autosphere User Guide.
                                                                </p>
                                                                <p>If the timeout is negative, the keyword is never timed-out. The keyword returns immediately, if the path does not exist in the first place.</p>
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
                                            <div><a id="link-append-to-environment-variable" href="#append-to-environment-variable" class="">Append To Environment Variable</a><a id="link-append-to-file" href="#append-to-file" class="">Append To File</a>
                                                <a id="link-copy-directory" href="#copy-directory" class="">Copy Directory</a><a id="link-copy-file" href="#copy-file" class="">Copy File</a><a id="link-copy-files" href="#copy-files" class="">Copy Files</a><a id="link-count-directories-in-directory" href="#count-directories-in-directory" class="">Count Directories In Directory</a><a id="link-count-files-in-directory" href="#count-files-in-directory" class="">Count Files
                                                    In Directory</a><a id="link-count-items-in-directory" href="#count-items-in-directory" class="">Count Items In Directory</a><a id="link-create-binary-file" href="#create-binary-file" class="">Create Binary File</a>
                                                <a id="link-create-directory" href="#create-directory" class="">Create Directory</a><a id="link-create-file" href="#create-file" class="">Create File</a><a id="link-directory-should-be-empty" href="#directory-should-be-empty" class="">Directory Should Be Empty</a>
                                                <a id="link-directory-should-exist" href="#directory-should-exist" class="">Directory Should Exist
                                                </a><a id="link-directory-should-not-be-empty" href="#directory-should-not-be-empty" class="">Directory Should Not Be Empty</a><a id="link-directory-should-not-exist" href="#directory-should-not-exist" class="">Directory Should Not Exist</a><a id="link-empty-directory" href="#empty-directory" class="">Empty Directory</a><a id="link-environment-variable-should-be-set" href="#environment-variable-should-be-set" class="">Environment Variable Should Be Set</a><a id="link-environment-variable-should-not-be-set" href="#environment-variable-should-not-be-set" class="">Environment Variable Should Not
                                                    Be Set</a><a id="link-file-should-be-empty" href="#file-should-be-empty" class="">File
                                                    Should Be Empty</a><a id="link-file-should-exist" href="#file-should-exist" class="">File
                                                    Should Exist</a><a id="link-file-should-not-be-empty" href="#file-should-not-be-empty" class="">File Should Not Be Empty</a><a id="link-file-should-not-exist" href="#file-should-not-exist" class="">File Should Not Exist</a>
                                                <a id="link-get-binary-file" href="#get-binary-file" class="">Get Binary File</a><a id="link-get-environment-variable" href="#get-environment-variable" class="">Get
                                                    Environment Variable</a><a id="link-get-environment-variables" href="#get-environment-variables" class="">Get Environment Variables</a><a id="link-get-file" href="#get-file" class="">Get File</a><a id="link-get-file-size" href="#get-file-size" class="">Get File Size</a><a id="link-get-modified-time" href="#get-modified-time" class="">Get Modified Time</a><a id="link-grep-file" href="#grep-file" class="">Grep File</a>
                                                <a id="link-join-path" href="#join-path" class="">Join Path</a><a id="link-join-paths" href="#join-paths" class="">Join Paths</a><a id="link-list-directories-in-directory" href="#list-directories-in-directory" class="">List Directories In Directory</a>
                                                <a id="link-list-directory" href="#list-directory" class="">List Directory</a><a id="link-list-files-in-directory" href="#list-files-in-directory" class="">List Files In
                                                    Directory</a><a id="link-log-environment-variables" href="#log-environment-variables" class="">Log Environment Variables</a><a id="link-log-file" href="#log-file" class="">Log
                                                    File</a><a id="link-move-directory" href="#move-directory" class="">Move Directory</a><a id="link-move-file" href="#move-file" class="">Move File</a><a id="link-move-files" href="#move-files" class="">Move Files</a>
                                                <a id="link-normalize-path" href="#normalize-path" class="">Normalize Path</a><a id="link-remove-directory" href="#remove-directory" class="">Remove Directory</a>
                                                <a id="link-remove-environment-variable" href="#remove-environment-variable" class="">Remove Environment Variable</a>
                                                <a id="link-remove-file" href="#remove-file" class="">Remove
                                                    File</a><a id="link-remove-files" href="#remove-files" class="">Remove Files</a><a id="link-run" href="#run" class="">Run</a><a id="link-run-and-return-rc" href="#run-and-return-rc" class="">Run And Return Rc</a>
                                                <a id="link-run-and-return-rc-and-output" href="#run-and-return-rc-and-output" class="">Run And Return Rc And Output</a><a id="link-set-environment-variable" href="#set-environment-variable" class="">Set Environment Variable</a>
                                                <a id="link-set-modified-time" href="#set-modified-time" class="">Set Modified Time</a><a id="link-should-exist" href="#should-exist" class="">Should Exist</a>
                                                <a id="link-should-not-exist" href="#should-not-exist" class="">Should Not Exist</a>
                                                <a id="link-split-extension" href="#split-extension" class="">Split Extension</a><a id="link-split-path" href="#split-path" class="">Split Path</a><a id="link-touch" href="#touch" class="">Touch</a><a id="link-wait-until-created" href="#wait-until-created" class="">Wait Until Created</a><a id="link-wait-until-removed" href="#wait-until-removed" class="">Wait Until Removed</a>
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