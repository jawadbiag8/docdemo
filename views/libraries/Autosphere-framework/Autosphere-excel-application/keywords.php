
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Excel.Application</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-excel-application">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-excel-application/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="add-new-sheet">
                                        <h2><a href="#add-new-sheet">Add New Sheet</a></h2>

                                        <div>
                                            <p class="shortdoc">Add new worksheet to workbook. Workbook is created by default if it does not exist.
                                            </p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>sheetname</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>name for sheet</td>
                                                </tr>
                                                <tr>
                                                    <td>tabname</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>name for tab, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>create_workbook</td>
                                                    <td> bool </td>
                                                    <td> True</td>
                                                    <td>create workbook if True, defaults to True</td>
                                                </tr>
                                            </table>

                                            <p>Add new worksheet to workbook. Workbook is created by default if it does not exist.</p>
                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param sheetname:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">name for sheet</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param tabname:</th>
                                                        <td class="field-body">name for tab, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param create_workbook:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">create workbook if True, defaults to True</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">raises ValueError:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">error is raised if workbook does not exist and
                                                            <cite>create_workbook</cite> is False</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="add-new-workbook">
                                        <h2><a href="#add-new-workbook">Add New Workbook</a></h2>

                                        <div>
                                            <p class="shortdoc">Adds new workbook for Excel application</p>



                                        </div>
                                    </div>

                                    <div class="keyword" id="close-document">
                                        <h2><a href="#close-document">Close Document</a></h2>

                                        <div>
                                            <p class="shortdoc">Close the active document (if open).</p>
                                            <h3>Arguments</h3>
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

                                    <div class="keyword" id="find-first-available-row">
                                        <h2><a href="#find-first-available-row">Find First Available Row</a></h2>

                                        <div>
                                            <p class="shortdoc">Find first available free row and cell</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>worksheet</td>
                                                    <td> typing.Any </td>
                                                    <td> None</td>
                                                    <td>worksheet to handle, defaults to active worksheet if None</td>
                                                </tr>
                                                <tr>
                                                    <td>row</td>
                                                    <td> int </td>
                                                    <td> 1</td>
                                                    <td>starting row for search, defaults to 1</td>
                                                </tr>
                                                <tr>
                                                    <td>column</td>
                                                    <td> int </td>
                                                    <td> 1</td>
                                                    <td>starting column for search, defaults to 1</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param worksheet:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">worksheet to handle, defaults to active worksheet if None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param row:</th>
                                                        <td class="field-body">starting row for search, defaults to 1</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param column:</th>
                                                        <td class="field-body">starting column for search, defaults to 1</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">tuple (row, column) or (None, None) if not found</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="open-application">
                                        <h2><a href="#open-application">Open Application</a></h2>

                                        <div>
                                            <p class="shortdoc">Open the Excel application.</p>
                                            <h3>Arguments</h3>
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

                                    <div class="keyword" id="open-workbook">
                                        <h2><a href="#open-workbook">Open Workbook</a></h2>

                                        <div>
                                            <p class="shortdoc">Open Excel by filename</p>
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
                                                    <td>path to filename</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param filename:</th>
                                                        <td class="field-body">path to filename</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="quit-application">
                                        <h2><a href="#quit-application">Quit Application</a></h2>

                                        <div>
                                            <p class="shortdoc">Quit the application.</p>
                                            <h3>Arguments</h3>
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

                                    <div class="keyword" id="read-from-cells">
                                        <h2><a href="#read-from-cells">Read From Cells</a></h2>

                                        <div>
                                            <p class="shortdoc">Read value from cell.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>worksheet</td>
                                                    <td> typing.Any </td>
                                                    <td> None</td>
                                                    <td>worksheet to handle, defaults to active worksheet if None</td>
                                                </tr>
                                                <tr>
                                                    <td>row</td>
                                                    <td> int </td>
                                                    <td> None</td>
                                                    <td>target row, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>column</td>
                                                    <td> int </td>
                                                    <td> None</td>
                                                    <td>target row, defaults to None</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param worksheet:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">worksheet to handle, defaults to active worksheet if None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param row:</th>
                                                        <td class="field-body">target row, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param column:</th>
                                                        <td class="field-body">target row, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">raises ValueError:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">if cell is not given</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="run-macro">
                                        <h2><a href="#run-macro">Run Macro</a></h2>

                                        <div>
                                            <p class="shortdoc">Run Excel macro with given name</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>macro_name</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>macro to run</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param macro_name:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">macro to run</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="save-excel">
                                        <h2><a href="#save-excel">Save Excel</a></h2>

                                        <div>
                                            <p class="shortdoc">Saves Excel file</p>



                                        </div>
                                    </div>

                                    <div class="keyword" id="save-excel-as">
                                        <h2><a href="#save-excel-as">Save Excel As</a></h2>

                                        <div>
                                            <p class="shortdoc">Save Excel with name if workbook is open</p>
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
                                                    <td>where to save file</td>
                                                </tr>
                                                <tr>
                                                    <td>autofit</td>
                                                    <td> bool </td>
                                                    <td> False</td>
                                                    <td>autofit cell widths if True, defaults to False</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param filename:</th>
                                                        <td class="field-body">where to save file</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param autofit:</th>
                                                        <td class="field-body">autofit cell widths if True, defaults to False</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="set-active-worksheet">
                                        <h2><a href="#set-active-worksheet">Set Active Worksheet</a></h2>

                                        <div>
                                            <p class="shortdoc">Set active worksheet by either its sheet number or name</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>sheetname</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>name of Excel sheet, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>sheetnumber</td>
                                                    <td> int </td>
                                                    <td> None</td>
                                                    <td>index of Excel sheet, defaults to None</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param sheetname:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">name of Excel sheet, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param sheetnumber:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">index of Excel sheet, defaults to None</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="write-to-cells">
                                        <h2><a href="#write-to-cells">Write To Cells</a></h2>

                                        <div>
                                            <p class="shortdoc">Write value, number_format and/or formula into cell.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>worksheet</td>
                                                    <td> typing.Any </td>
                                                    <td> None</td>
                                                    <td>worksheet to handle, defaults to active worksheet if None</td>
                                                </tr>
                                                <tr>
                                                    <td>row</td>
                                                    <td> int </td>
                                                    <td> None</td>
                                                    <td>target row, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>column</td>
                                                    <td> int </td>
                                                    <td> None</td>
                                                    <td>target row, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>possible value to set, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>number_format</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>possible number format to set, defaults to None</td>
                                                </tr>
                                                <tr>
                                                    <td>formula</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>possible format to set, defaults to None</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param worksheet:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">worksheet to handle, defaults to active worksheet if None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param row:</th>
                                                        <td class="field-body">target row, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param column:</th>
                                                        <td class="field-body">target row, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param value:</th>
                                                        <td class="field-body">possible value to set, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param number_format:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">possible number format to set, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param formula:</th>
                                                        <td class="field-body">possible format to set, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">raises ValueError:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">if cell is not given</td>
                                                    </tr>
                                                </tbody>
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
                            <div><a id="link-add-new-sheet" href="#add-new-sheet" class="">Add New Sheet</a><a id="link-add-new-workbook" href="#add-new-workbook" class="">Add New Workbook</a><a id="link-close-document" href="#close-document"
                                    class="">Close Document</a><a id="link-find-first-available-row" href="#find-first-available-row" class="">Find First
                  Available Row</a><a id="link-open-application" href="#open-application" class="">Open
                  Application</a><a id="link-open-workbook" href="#open-workbook" class="">Open
                  Workbook</a><a id="link-quit-application" href="#quit-application" class="">Quit
                  Application</a><a id="link-read-from-cells" href="#read-from-cells" class="">Read From
                  Cells</a><a id="link-run-macro" href="#run-macro" class="">Run Macro</a><a id="link-save-excel" href="#save-excel" class="">Save Excel</a><a id="link-save-excel-as" href="#save-excel-as" class="">Save Excel As</a>
                                <a id="link-set-active-worksheet" href="#set-active-worksheet" class="">Set Active Worksheet</a><a id="link-write-to-cells" href="#write-to-cells" class="">Write To Cells</a></div>
                        </aside>
                    </div>
                </article>
           