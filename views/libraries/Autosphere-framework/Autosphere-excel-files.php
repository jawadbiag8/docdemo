<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Excel.Files</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Excel.Files</li>
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
                                            <p>The <cite>Excel.Files</cite> library can be used to read and write Excel files without the need to start the actual Excel application.</p>
                                            <p>It supports both legacy .xls files and modern .xlsx files.</p>
                                            <p>Note: To run macros or load password protected worksheets, please use the Excel application library.</p>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <p>A common use-case is to load an existing Excel file as a table, which can be iterated over later in a Autosphere keyword or task:</p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Tables</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Excel.Files</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Read orders as table</span><span class="p">
    </span><span class="nf">Open workbook</span><span class="p">    ${</span><span class="nv">ORDERS_FILE</span><span class="p">}
    ${</span><span class="nv">worksheet</span><span class="p">}=    </span><span class="nf">Read worksheet</span><span class="p">   </span><span class="s">header=</span><span class="p">${</span><span class="nv">TRUE</span><span class="p">}
    ${</span><span class="nv">orders</span><span class="p">}=       </span><span class="nf">Create table</span><span class="p">     ${</span><span class="nv">worksheet</span><span class="p">}
    [</span><span class="kn">Return</span><span class="p">]         ${</span><span class="nv">orders</span><span class="p">}
    [</span><span class="kn">Teardown</span><span class="p">]       </span><span class="nf">Close workbook</span>
</pre>
                                            <p>Processing all worksheets in the Excel file and checking row count:</p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Excel.Files</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">EXCEL_FILE</span><span class="p">}   </span><span class="s">/path/to/excel.xlsx</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Rows in the sheet</span><span class="p">
    [</span><span class="kn">Setup</span><span class="p">]      </span><span class="nf">Open Workbook</span><span class="p">    ${</span><span class="nv">EXCEL_FILE</span><span class="p">}
    &#64;{</span><span class="nv">sheets</span><span class="p">}=   </span><span class="nf">List Worksheets</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">  ${</span><span class="nv">sheet</span><span class="p">}  </span><span class="s">IN</span><span class="p">   &#64;{</span><span class="nv">sheets</span><span class="p">}
        ${</span><span class="nv">count</span><span class="p">}=  </span><span class="nf">Get row count in the sheet</span><span class="p">   ${</span><span class="nv">sheet</span><span class="p">}
        </span><span class="nf">Log</span><span class="p">   </span><span class="s">Worksheet '</span><span class="p">${</span><span class="nv">sheet</span><span class="p">}</span><span class="s">' has </span><span class="p">${</span><span class="nv">count</span><span class="p">}</span><span class="s"> rows</span><span class="p">
    </span><span class="nf">END</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Get row count in the sheet</span><span class="p">
    [</span><span class="kn">Arguments</span><span class="p">]      ${</span><span class="nv">SHEET_NAME</span><span class="p">}
    ${</span><span class="nv">sheet</span><span class="p">}=        </span><span class="nf">Read Worksheet</span><span class="p">   ${</span><span class="nv">SHEET_NAME</span><span class="p">}
    ${</span><span class="nv">rows</span><span class="p">}=         </span><span class="nf">Get Length</span><span class="p">  ${</span><span class="nv">sheet</span><span class="p">}
    [</span><span class="kn">Return</span><span class="p">]         ${</span><span class="nv">rows</span><span class="p">}</span>
</pre>
                                            <p>Creating a new Excel file with a dictionary:</p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Creating new Excel</span><span class="p">
    </span><span class="nf">Create Workbook</span><span class="p">  </span><span class="s">my_new_excel.xlsx</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">    ${</span><span class="nv">index</span><span class="p">}    </span><span class="s">IN RANGE</span><span class="p">    </span><span class="s">20</span><span class="p">
        &amp;{</span><span class="nv">row</span><span class="p">}=       </span><span class="nf">Create Dictionary</span><span class="p">
        ...           </span><span class="s">Row No</span><span class="p">   ${</span><span class="nv">index</span><span class="p">}
        ...           </span><span class="s">Amount</span><span class="p">   ${</span><span class="nv">index * 25</span><span class="p">}
        </span><span class="nf">Append Rows to Worksheet</span><span class="p">  ${</span><span class="nv">row</span><span class="p">}  </span><span class="s">header=</span><span class="p">${</span><span class="nv">TRUE</span><span class="p">}
    </span><span class="nf">END</span><span class="p">
    </span><span class="nf">Save Workbook</span>
</pre>
                                            <p>Creating a new Excel file with a list:</p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Variables ***</span><span class="p">
&#64;{</span><span class="nv">heading</span><span class="p">}   </span><span class="s">Row No</span><span class="p">   </span><span class="s">Amount</span><span class="p">
&#64;{</span><span class="nv">rows</span><span class="p">}      &#64;{</span><span class="nv">heading</span><span class="p">}

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Creating new Excel</span><span class="p">
    </span><span class="nf">Create Workbook</span><span class="p">  </span><span class="s">my_new_excel.xlsx</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">    ${</span><span class="nv">index</span><span class="p">}    </span><span class="s">IN RANGE</span><span class="p">   </span><span class="s">1</span><span class="p">  </span><span class="s">20</span><span class="p">
        &#64;{</span><span class="nv">row</span><span class="p">}=         </span><span class="nf">Create List</span><span class="p">   ${</span><span class="nv">index</span><span class="p">}   ${</span><span class="nv">index * 25</span><span class="p">}
        </span><span class="nf">Append To List</span><span class="p">  ${</span><span class="nv">rows</span><span class="p">}  ${</span><span class="nv">row</span><span class="p">}
    </span><span class="nf">END</span><span class="p">
    </span><span class="nf">Append Rows to Worksheet</span><span class="p">  ${</span><span class="nv">rows</span><span class="p">}
    </span><span class="nf">Save Workbook</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <p>The library can also be imported directly into Python.</p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Excel.Files</span> <span class="kn">import</span> <span class="n">Files</span>

<span class="k">def</span> <span class="nf">read_excel_worksheet</span><span class="p">(</span><span class="n">path</span><span class="p">,</span> <span class="n">worksheet</span><span class="p">):</span>
    <span class="n">lib</span> <span class="o">=</span> <span class="n">Files</span><span class="p">()</span>
    <span class="n">lib</span><span class="o">.</span><span class="n">open_workbook</span><span class="p">(</span><span class="n">path</span><span class="p">)</span>
    <span class="k">try</span><span class="p">:</span>
        <span class="k">return</span> <span class="n">lib</span><span class="o">.</span><span class="n">read_worksheet</span><span class="p">(</span><span class="n">worksheet</span><span class="p">)</span>
    <span class="k">finally</span><span class="p">:</span>
        <span class="n">lib</span><span class="o">.</span><span class="n">close_workbook</span><span class="p">()</span>
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
                                                        <div class="keyword" id="append-rows-to-worksheet">
                                                            <h2><a href="#append-rows-to-worksheet">Append Rows To Worksheet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Append values to the end of the worksheet.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Rows of values to append</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Name of worksheet to append to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>header</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>Set rows according to existing header row</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>start</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Start of data, NOTE: Only required when headers is True</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param content:</th>
                                                                            <td class="field-body">Rows of values to append</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">Name of worksheet to append to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param header:</th>
                                                                            <td class="field-body">Set rows according to existing header row</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param start:</th>
                                                                            <td class="field-body">Start of data, NOTE: Only required when headers is True</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-workbook">
                                                            <h2><a href="#close-workbook">Close Workbook</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close the active workbook.</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-workbook">
                                                            <h2><a href="#create-workbook">Create Workbook</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create and open a new Excel workbook.</p>
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
                                                                        <td>Default save path for workbook</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>fmt</td>
                                                                        <td></td>
                                                                        <td>xlsx</td>
                                                                        <td>Format of workbook, i.e. xlsx or xls</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">Default save path for workbook</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param fmt:</th>
                                                                            <td class="field-body">Format of workbook, i.e. xlsx or xls</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-worksheet">
                                                            <h2><a href="#create-worksheet">Create Worksheet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create a new worksheet in the current workbook.</p>
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
                                                                        <td>Name of new worksheet</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Optional content for worksheet</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>exist_ok</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>If False, raise an error if name is already in use</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">Name of new worksheet</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param content:</th>
                                                                            <td class="field-body">Optional content for worksheet</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param exist_ok:</th>
                                                                            <td class="field-body">If <cite>False</cite>, raise an error if name is already in use</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-empty-row">
                                                            <h2><a href="#find-empty-row">Find Empty Row</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Find the first empty row after existing content.</p>
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
                                                                        <td>None</td>
                                                                        <td>Name of worksheet</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">Name of worksheet</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-active-worksheet">
                                                            <h2><a href="#get-active-worksheet">Get Active Worksheet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get the name of the worksheet which is currently active.</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="insert-image-to-worksheet">
                                                            <h2><a href="#insert-image-to-worksheet">Insert Image To Worksheet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Insert an image into the given cell.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Index of row to write</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Name or index of column</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>scale</td>
                                                                        <td></td>
                                                                        <td>1.0</td>
                                                                        <td>Scale of image</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Name of worksheet</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param row:</th>
                                                                            <td class="field-body">Index of row to write</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">Name or index of column</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param image:</th>
                                                                            <td class="field-body">Path to image file</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param scale:</th>
                                                                            <td class="field-body">Scale of image</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">Name of worksheet</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-worksheets">
                                                            <h2><a href="#list-worksheets">List Worksheets</a></h2>

                                                            <div>
                                                                <p class="shortdoc">List all names of worksheets in the given workbook.</p>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-workbook">
                                                            <h2><a href="#open-workbook">Open Workbook</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open an existing Excel workbook.</p>
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
                                                                        <td>path to Excel file</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to Excel file</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-worksheet">
                                                            <h2><a href="#read-worksheet">Read Worksheet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Read the content of a worksheet into a list of dictionaries.</p>
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
                                                                        <td>None</td>
                                                                        <td>Name of worksheet to read</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>header</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>If True, use the first row of the worksheet as headers for the rest of the rows.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>start</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <p>Each key in the dictionary will be either values from the header row, or Excel-style column letters.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">Name of worksheet to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param header:</th>
                                                                            <td class="field-body">If <cite>True</cite>, use the first row of the worksheet as headers for the rest of the rows.</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-worksheet-as-table">
                                                            <h2><a href="#read-worksheet-as-table">Read Worksheet As Table</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Read the content of a worksheet into a Table container. Allows sorting/filtering/manipulating using the <cite>Autosphere.Tables</cite> library.</p>
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
                                                                        <td>None</td>
                                                                        <td>Name of worksheet to read</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>header</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>If True, use the first row of the worksheet as headers for the rest of the rows.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>trim</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>Remove all empty rows from the end of the worksheet</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>start</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Row index to start reading data from (1-indexed)</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Read the content of a worksheet into a Table container. Allows sorting/filtering/manipulating using the <cite>Autosphere.Tables</cite> library.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">Name of worksheet to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param header:</th>
                                                                            <td class="field-body">If <cite>True</cite>, use the first row of the worksheet as headers for the rest of the rows.</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param trim:</th>
                                                                            <td class="field-body">Remove all empty rows from the end of the worksheet</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param start:</th>
                                                                            <td class="field-body">Row index to start reading data from (1-indexed)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-worksheet">
                                                            <h2><a href="#remove-worksheet">Remove Worksheet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Remove a worksheet from the active workbook.</p>
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
                                                                        <td>None</td>
                                                                        <td>Name of worksheet to remove</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">Name of worksheet to remove</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="rename-worksheet">
                                                            <h2><a href="#rename-worksheet">Rename Worksheet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Rename an existing worksheet in the active workbook.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>src_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Current name of worksheet</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>dst_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Future name of worksheet</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param src_name:</th>
                                                                            <td class="field-body">Current name of worksheet</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param dst_name:</th>
                                                                            <td class="field-body">Future name of worksheet</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="save-workbook">
                                                            <h2><a href="#save-workbook">Save Workbook</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Save the active workbook.</p>
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
                                                                        <td>Path to save to. If not given, uses path given when opened or created.</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">Path to save to. If not given, uses path given when opened or created.</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-active-worksheet">
                                                            <h2><a href="#set-active-worksheet">Set Active Worksheet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set the active worksheet.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Index or name of worksheet</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">Index or name of worksheet</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-worksheet-value">
                                                            <h2><a href="#set-worksheet-value">Set Worksheet Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set a cell value in the given worksheet.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Index of row to write, e.g. 3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Name or index of column, e.g. C or 7</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>New value of cell</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Name of worksheet</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param row:</th>
                                                                            <td class="field-body">Index of row to write, e.g. 3</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">Name or index of column, e.g. C or 7</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">New value of cell</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">Name of worksheet</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="worksheet-exists">
                                                            <h2><a href="#worksheet-exists">Worksheet Exists</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return True if worksheet with given name is in workbook.</p>
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
                                                    <li><a id="link-append-rows-to-worksheet" href="#append-rows-to-worksheet" class="">Append Rows To Worksheet</a></li>
                                                    <li><a id="link-close-workbook" href="#close-workbook" class="">Close Workbook</a></li>
                                                    <li><a id="link-create-workbook" href="#create-workbook" class="">Create Workbook</a></li>
                                                    <li><a id="link-create-worksheet" href="#create-worksheet" class="">Create Worksheet</a></li>
                                                    <li><a id="link-find-empty-row" href="#find-empty-row" class="">Find Empty Row</a></li>
                                                    <li><a id="link-get-active-worksheet" href="#get-active-worksheet" class="">Get Active Worksheet</a></li>
                                                    <li><a id="link-insert-image-to-worksheet" href="#insert-image-to-worksheet" class="">Insert Image To Worksheet</a></li>
                                                    <li><a id="link-list-worksheets" href="#list-worksheets" class="">List Worksheets</a></li>
                                                    <li><a id="link-open-workbook" href="#open-workbook" class="">Open Workbook</a></li>
                                                    <li><a id="link-read-worksheet" href="#read-worksheet" class="">Read Worksheet</a></li>
                                                    <li><a id="link-read-worksheet-as-table" href="#read-worksheet-as-table" class="">Read Worksheet As Table</a></li>
                                                    <li><a id="link-remove-worksheet" href="#remove-worksheet" class="">Remove Worksheet</a></li>
                                                    <li><a id="link-rename-worksheet" href="#rename-worksheet" class="">Rename Worksheet</a></li>
                                                    <li><a id="link-save-workbook" href="#save-workbook" class="">Save Workbook</a></li>
                                                    <li><a id="link-set-active-worksheet" href="#set-active-worksheet" class="">Set Active Worksheet</a></li>
                                                    <li><a id="link-set-worksheet-value" href="#set-worksheet-value" class="">Set Worksheet Value</a></li>
                                                    <li><a id="link-worksheet-exists" href="#worksheet-exists" class="">Worksheet Exists</a></li>
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