<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Word.Application</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Word.Application</li>
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
                                            <p><cite>Word.Application</cite> is a library for controlling a Word application.</p>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">                 </span><span class="nn">Autosphere.Word.Application</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">              </span><span class="nf">Open Application</span><span class="p">
</span><span class="kn">Suite Teardown</span><span class="p">          </span><span class="nf">Quit Application</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Open existing file</span><span class="p">
    </span><span class="nf">Open File</span><span class="p">           </span><span class="s">old.docx</span><span class="p">
    </span><span class="nf">Write Text</span><span class="p">          </span><span class="s">Extra Line Text</span><span class="p">
    </span><span class="nf">Write Text</span><span class="p">          </span><span class="s">Another Extra Line of Text</span><span class="p">
    </span><span class="nf">Save Document AS</span><span class="p">    ${</span><span class="nv">CURDIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">new.docx</span><span class="p">
    ${</span><span class="nv">texts</span><span class="p">}=           </span><span class="nf">Get all Texts</span><span class="p">
    </span><span class="nf">Close Document</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Word.Application</span> <span class="kn">import</span> <span class="n">Application</span>

<span class="n">app</span> <span class="o">=</span> <span class="n">Application</span><span class="p">()</span>
<span class="n">app</span><span class="o">.</span><span class="n">open_application</span><span class="p">()</span>
<span class="n">app</span><span class="o">.</span><span class="n">open_file</span><span class="p">(</span><span class="s1">'old.docx'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">write_text</span><span class="p">(</span><span class="s1">'Extra Line Text'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">save_document_as</span><span class="p">(</span><span class="s1">'new.docx'</span><span class="p">)</span>
<span class="n">app</span><span class="o">.</span><span class="n">quit_application</span><span class="p">()</span>
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
                                                        <div class="keyword" id="close-document">
                                                            <h2><a href="#close-document">Close Document</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close the active document (if open).</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>save_changes</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-new-document">
                                                            <h2><a href="#create-new-document">Create New Document</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create new document for Word application</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="export-to-pdf">
                                                            <h2><a href="#export-to-pdf">Export To Pdf</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Export active document into PDF file.</p>
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
                                                                        <td>PDF to export WORD into</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">PDF to export WORD into</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-all-texts">
                                                            <h2><a href="#get-all-texts">Get All Texts</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get all texts from active document</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">texts</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-application">
                                                            <h2><a href="#open-application">Open Application</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open the Word application.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>visible</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>show window after opening</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>display_alerts</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td>show alert popups</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param visible:</th>
                                                                            <td class="field-body">show window after opening</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param display_alerts:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">show alert popups</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-file">
                                                            <h2><a href="#open-file">Open File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open Word document with filename.</p>
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
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>Word document filepath, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">Word document filepath, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="quit-application">
                                                            <h2><a href="#quit-application">Quit Application</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Quit the application.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>save_changes</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="replace-text">
                                                            <h2><a href="#replace-text">Replace Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Replace text in active document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>find</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>text to replace</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>replace</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>new text</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param find:</th>
                                                                            <td class="field-body">text to replace</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param replace:</th>
                                                                            <td class="field-body">new text</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-document">
                                                            <h2><a href="#save-document">Save Document</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Save active document</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-document-as">
                                                            <h2><a href="#save-document-as">Save Document As</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Save document with filename and optionally with given fileformat</p>
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
                                                                        <td>where to save document</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>fileformat</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>see @FILEFORMATS dictionary for possible format, defaults to None</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">where to save document</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param fileformat:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">see &#64;FILEFORMATS dictionary for possible format, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-footer">
                                                            <h2><a href="#set-footer">Set Footer</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set footer for the active document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>footer text to set</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param text:</th>
                                                                            <td class="field-body">footer text to set</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-header">
                                                            <h2><a href="#set-header">Set Header</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set header for the active document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>header text to set</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param text:</th>
                                                                            <td class="field-body">header text to set</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write-text">
                                                            <h2><a href="#write-text">Write Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Writes given text at the end of the document</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td>string to write</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>newline</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td>write text to newline if True, default to True</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param text:</th>
                                                                            <td class="field-body">string to write</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param newline:</th>
                                                                            <td class="field-body">write text to newline if True, default to True</td>
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
                                                    <li><a id="link-close-document" href="#close-document" class="">Close Document</a></li>
                                                    <li><a id="link-create-new-document" href="#create-new-document" class="">Create New Document</a></li>
                                                    <li><a id="link-export-to-pdf" href="#export-to-pdf" class="">Export To Pdf</a></li>
                                                    <li><a id="link-get-all-texts" href="#get-all-texts" class="">Get All Texts</a></li>
                                                    <li><a id="link-open-application" href="#open-application" class="">Open Application</a></li>
                                                    <li><a id="link-open-file" href="#open-file" class="">Open File</a></li>
                                                    <li><a id="link-quit-application" href="#quit-application" class="">Quit Application</a></li>
                                                    <li><a id="link-replace-text" href="#replace-text" class="">Replace Text</a></li>
                                                    <li><a id="link-save-document" href="#save-document" class="">Save Document</a></li>
                                                    <li><a id="link-save-document-as" href="#save-document-as" class="">Save Document As</a></li>
                                                    <li><a id="link-set-footer" href="#set-footer" class="">Set Footer</a></li>
                                                    <li><a id="link-set-header" href="#set-header" class="">Set Header</a></li>
                                                    <li><a id="link-write-text" href="#write-text" class="">Write Text</a></li>
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