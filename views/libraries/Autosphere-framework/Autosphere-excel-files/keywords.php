
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Excel.Files</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-excel-files">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-excel-files/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="append-rows-to-worksheet">
                                        <h2><a href="#append-rows-to-worksheet">Append Rows To Worksheet</a></h2>

                                        <div>
                                            <p class="shortdoc">Append values to the end of the worksheet.</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                        <aside class="sc-iJuUWI jaFBcT">
                            <form>
                                <h5>Keywords</h5>
                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                      fill="#fff"></path>
                  </svg></fieldset>
                            </form>
                            <div><a id="link-append-rows-to-worksheet" href="#append-rows-to-worksheet" class="">Append
                  Rows To Worksheet</a><a id="link-close-workbook" href="#close-workbook" class="">Close
                  Workbook</a><a id="link-create-workbook" href="#create-workbook" class="">Create
                  Workbook</a><a id="link-create-worksheet" href="#create-worksheet" class="">Create
                  Worksheet</a><a id="link-find-empty-row" href="#find-empty-row" class="">Find Empty
                  Row</a><a id="link-get-active-worksheet" href="#get-active-worksheet" class="">Get Active
                  Worksheet</a><a id="link-insert-image-to-worksheet" href="#insert-image-to-worksheet" class="">Insert Image To Worksheet</a><a id="link-list-worksheets" href="#list-worksheets" class="">List Worksheets</a>
                                <a id="link-open-workbook" href="#open-workbook" class="">Open Workbook</a><a id="link-read-worksheet" href="#read-worksheet" class="">Read Worksheet</a><a id="link-read-worksheet-as-table" href="#read-worksheet-as-table"
                                    class="">Read Worksheet As Table</a>
                                <a id="link-remove-worksheet" href="#remove-worksheet" class="">Remove Worksheet</a><a id="link-rename-worksheet" href="#rename-worksheet" class="">Rename Worksheet</a><a id="link-save-workbook"
                                    href="#save-workbook" class="">Save Workbook</a><a id="link-set-active-worksheet" href="#set-active-worksheet" class="">Set Active
                  Worksheet</a><a id="link-set-worksheet-value" href="#set-worksheet-value" class="">Set
                  Worksheet Value</a><a id="link-worksheet-exists" href="#worksheet-exists" class="">Worksheet Exists</a></div>
                        </aside>
                    </div>
                </article>
         