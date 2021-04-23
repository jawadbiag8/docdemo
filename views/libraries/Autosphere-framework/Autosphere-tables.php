<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Tables</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Tables</li>
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
                                            <p><cite>Tables</cite> is a library for manipulating tabular data inside Autosphere.
                                            </p>
                                            <p>It can import data from various sources and apply different operations to it. Common use-cases are reading and writing CSV files, inspecting files in directories, or running tasks using existing Excel data.</p>
                                            <p><strong>Import types</strong></p>
                                            <p>The data from which a table can be created can be of two main types:</p>
                                            <ol class="arabic simple">
                                                <li>An iterable of individual rows, like a list of lists, or list of dictionaries
                                                </li>
                                                <li>A dictionary of columns, where each dictionary value is a list of values</li>
                                            </ol>
                                            <p>For instance, these two input values:</p>
                                            <pre class="code python literal-block"><span class="n">data1</span> <span class="o">=</span> <span class="p">[</span>
    <span class="p">{</span><span class="s2">&quot;name&quot;</span><span class="p">:</span> <span class="s2">&quot;Mark&quot;</span><span class="p">,</span> <span class="s2">&quot;age&quot;</span><span class="p">:</span> <span class="mi">58</span><span class="p">},</span>
    <span class="p">{</span><span class="s2">&quot;name&quot;</span><span class="p">:</span> <span class="s2">&quot;John&quot;</span><span class="p">,</span> <span class="s2">&quot;age&quot;</span><span class="p">:</span> <span class="mi">22</span><span class="p">},</span>
    <span class="p">{</span><span class="s2">&quot;name&quot;</span><span class="p">:</span> <span class="s2">&quot;Adam&quot;</span><span class="p">,</span> <span class="s2">&quot;age&quot;</span><span class="p">:</span> <span class="mi">67</span><span class="p">},</span>
<span class="p">]</span>

<span class="n">data2</span> <span class="o">=</span> <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="p">:</span> <span class="p">[</span><span class="s2">&quot;Mark&quot;</span><span class="p">,</span> <span class="s2">&quot;John&quot;</span><span class="p">,</span> <span class="s2">&quot;Adam&quot;</span><span class="p">],</span>
    <span class="s2">&quot;age&quot;</span><span class="p">:</span>  <span class="p">[</span>    <span class="mi">58</span><span class="p">,</span>     <span class="mi">22</span><span class="p">,</span>     <span class="mi">67</span><span class="p">],</span>
<span class="p">}</span>
</pre>
                                            <p>Would both result in the following table:</p>
                                            <table border="1" class="docutils">
                                                <colgroup>
                                                    <col width="39%" />
                                                    <col width="33%" />
                                                    <col width="28%" />
                                                </colgroup>
                                                <thead valign="bottom">
                                                    <tr>
                                                        <th class="head">Index</th>
                                                        <th class="head">Name</th>
                                                        <th class="head">Age</th>
                                                    </tr>
                                                </thead>
                                                <tbody valign="top">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mark</td>
                                                        <td>58</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>John</td>
                                                        <td>22</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Adam</td>
                                                        <td>67</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <p>The <cite>Tables</cite> library can load tabular data from various other libraries and manipulate it inside Autosphere.</p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Tables</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Files to Table</span><span class="p">
    ${</span><span class="nv">files</span><span class="p">}=    </span><span class="nf">List files in directory</span><span class="p">    ${</span><span class="nv">CURDIR</span><span class="p">}
    ${</span><span class="nv">files</span><span class="p">}=    </span><span class="nf">Create table</span><span class="p">    ${</span><span class="nv">files</span><span class="p">}
    </span><span class="nf">Filter table by column</span><span class="p">    ${</span><span class="nv">files</span><span class="p">}    </span><span class="s">size</span><span class="p">  </span><span class="s">&gt;=</span><span class="p">  ${</span><span class="nv">1024</span><span class="p">}
    </span><span class="nf">FOR</span><span class="p">    ${</span><span class="nv">file</span><span class="p">}    </span><span class="s">IN</span><span class="p">    &#64;{</span><span class="nv">files</span><span class="p">}
        </span><span class="nf">Log</span><span class="p">    ${</span><span class="nv">file</span><span class="p">}</span><span class="s">[name]</span><span class="p">
    </span><span class="nf">END</span><span class="p">
    </span><span class="nf">Write table to CSV</span><span class="p">    ${</span><span class="nv">files</span><span class="p">}    ${</span><span class="nv">OUTPUT_DIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">files.csv</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <p>The library is also available directly through Python, where it is easier to handle multiple different tables or do more bespoke manipulation operations.</p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Tables</span> <span class="kn">import</span> <span class="n">Tables</span>

<span class="n">library</span> <span class="o">=</span> <span class="n">Tables</span><span class="p">()</span>
<span class="n">orders</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">read_table_from_csv</span><span class="p">(</span>
    <span class="s2">&quot;orders.csv&quot;</span><span class="p">,</span> <span class="n">columns</span><span class="o">=</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">,</span> <span class="s2">&quot;mail&quot;</span><span class="p">,</span> <span class="s2">&quot;product&quot;</span><span class="p">]</span>
<span class="p">)</span>

<span class="n">customers</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">group_table_by_column</span><span class="p">(</span><span class="n">rows</span><span class="p">,</span> <span class="s2">&quot;mail&quot;</span><span class="p">)</span>
<span class="k">for</span> <span class="n">customer</span> <span class="ow">in</span> <span class="n">customers</span><span class="p">:</span>
    <span class="k">for</span> <span class="n">order</span> <span class="ow">in</span> <span class="n">customer</span><span class="p">:</span>
        <span class="n">add_cart</span><span class="p">(</span><span class="n">order</span><span class="p">)</span>
    <span class="n">make_order</span><span class="p">()</span>
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
                                                        <div class="keyword" id="add-table-column">
                                                            <h2><a href="#add-table-column">Add Table Column</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Append a column to a table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>name of new column</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>row values (or single scalar value for all rows)</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">name of new column</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param values:</th>
                                                                            <td class="field-body">row values (or single scalar value for all rows)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-table-row">
                                                            <h2><a href="#add-table-row">Add Table Row</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Append rows to a table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>value for new row</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>index name for new row</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param row:</th>
                                                                            <td class="field-body">value for new row</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param index:</th>
                                                                            <td class="field-body">index name for new row</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="clear-table">
                                                            <h2><a href="#clear-table">Clear Table</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Clear table in-place, but keep columns.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to clear</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to clear</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-table">
                                                            <h2><a href="#copy-table">Copy Table</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Copy table object.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to copy</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to copy</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-table">
                                                            <h2><a href="#create-table">Create Table</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create Table object from data.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>data</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>source data for table</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>trim</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>remove all empty rows from the end of the worksheet, default False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>columns</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>names of columns (optional)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>names of rows (optional)</td>
                                                                    </tr>
                                                                </table>


                                                                <p>Data can be a combination of various iterable containers, e.g. list of lists, list of dicts, dict of lists.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param data:</th>
                                                                            <td class="field-body">source data for table</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param trim:</th>
                                                                            <td class="field-body">remove all empty rows from the end of the worksheet, default <cite>False</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param columns:</th>
                                                                            <td class="field-body">names of columns (optional)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param index:</th>
                                                                            <td class="field-body">names of rows (optional)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="export-table">
                                                            <h2><a href="#export-table">Export Table</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Convert table object to standard Python containers.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to convert to dict</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>with_index</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>include index in values</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_list</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>export data as list instead of dict</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to convert to dict</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param with_index:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">include index in values</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_list:</th>
                                                                            <td class="field-body">export data as list instead of dict</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="filter-empty-rows">
                                                            <h2><a href="#filter-empty-rows">Filter Empty Rows</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Remove all rows from the table which have only None values.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to filter</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to filter</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="filter-table-by-column">
                                                            <h2><a href="#filter-table-by-column">Filter Table By Column</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return all rows where the column values match the given condition.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to filter</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>column to filter with</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>operator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>filtering operator, e.g. >,
                                                                            <,==, contains</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>value to compare column to (using operator)</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to filter</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column to filter with</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param operator:</th>
                                                                            <td class="field-body">filtering operator, e.g. &gt;, &lt;, ==, contains</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">value to compare column to (using operator)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-table-rows">
                                                            <h2><a href="#find-table-rows">Find Table Rows</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Find a row in the table by a given column value.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Table to find from</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>name of column to search</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>value to match for</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_list</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>return list instead of dictionary</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">Table to find from</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">name of column to search</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">value to match for</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_list:</th>
                                                                            <td class="field-body">return list instead of dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-cell">
                                                            <h2><a href="#get-table-cell">Get Table Cell</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get a cell value from table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to read from</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>row of cell</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>column of cell</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to read from</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param row:</th>
                                                                            <td class="field-body">row of cell</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column of cell</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-column">
                                                            <h2><a href="#get-table-column">Get Table Column</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get all column values from table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to read</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>column to read</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_list</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>return list instead of dictionary</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_list:</th>
                                                                            <td class="field-body">return list instead of dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-dimensions">
                                                            <h2><a href="#get-table-dimensions">Get Table Dimensions</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return table dimensions, as (rows, columns).</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to inspect</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to inspect</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-row">
                                                            <h2><a href="#get-table-row">Get Table Row</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get a single row from table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to read</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_list</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>return list instead of dictionary</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param row:</th>
                                                                            <td class="field-body">row to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_list:</th>
                                                                            <td class="field-body">return list instead of dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-slice">
                                                            <h2><a href="#get-table-slice">Get Table Slice</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return a new Table from a subset of given Table rows.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to read from</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>start</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>end index (inclusive)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>end</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to read from</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param start:</th>
                                                                            <td class="field-body">start index (inclusive)</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param start:</th>
                                                                            <td class="field-body">end index (inclusive)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="group-table-by-column">
                                                            <h2><a href="#group-table-by-column">Group Table By Column</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Group table by <cite>column</cite> and return a list of grouped Tables.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to use for grouping</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>column which is used as grouping criteria</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to use for grouping</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column which is used as grouping criteria</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="merge-tables">
                                                            <h2><a href="#merge-tables">Merge Tables</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Create a union of two tables and their contents.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*tables</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Column name to use as index for merge</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param tables:</th>
                                                                            <td class="field-body">Tables to merge</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param index:</th>
                                                                            <td class="field-body">Column name to use as index for merge</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>By default rows from all tables are appended one after the other. Optionally a column name can be given with <tt class="docutils literal">index</tt>, which is used to merge rows together.</p>
                                                                <h4>Examples</h4>
                                                                <p>For instance, a <tt class="docutils literal">name</tt> column could be used to identify unique rows and the merge operation should overwrite values instead of appending multiple copies of the same name.</p>
                                                                <table border="1" class="docutils">
                                                                    <colgroup>
                                                                        <col width="55%" />
                                                                        <col width="45%" />
                                                                    </colgroup>
                                                                    <thead valign="bottom">
                                                                        <tr>
                                                                            <th class="head">Name</th>
                                                                            <th class="head">Price</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody valign="top">
                                                                        <tr>
                                                                            <td>Egg</td>
                                                                            <td>10.0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Cheese</td>
                                                                            <td>15.0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ham</td>
                                                                            <td>20.0</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table border="1" class="docutils">
                                                                    <colgroup>
                                                                        <col width="55%" />
                                                                        <col width="45%" />
                                                                    </colgroup>
                                                                    <thead valign="bottom">
                                                                        <tr>
                                                                            <th class="head">Name</th>
                                                                            <th class="head">Stock</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody valign="top">
                                                                        <tr>
                                                                            <td>Egg</td>
                                                                            <td>12.0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Cheese</td>
                                                                            <td>99.0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ham</td>
                                                                            <td>0.0</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${products}=    Merge tables    ${prices}    ${stock}    index=Name
FOR    ${product}    IN    &#64;{products}
    Log many
    ...    Product: ${product}[Name]
    ...    Price: ${product}[Price]
    ...    Stock: ${product}[Stock]
END
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="pop-table-column">
                                                            <h2><a href="#pop-table-column">Pop Table Column</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Remove column from table and return it.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>column to remove</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_list</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>return list instead of dictionary</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column to remove</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_list:</th>
                                                                            <td class="field-body">return list instead of dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="pop-table-row">
                                                            <h2><a href="#pop-table-row">Pop Table Row</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Remove row from table and return it.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>row index, pops first row if none given</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_list</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>return list instead of dictionary</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param index:</th>
                                                                            <td class="field-body">row index, pops first row if none given</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_list:</th>
                                                                            <td class="field-body">return list instead of dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-table-from-csv">
                                                            <h2><a href="#read-table-from-csv">Read Table From Csv</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Read a CSV file as a table.</p>
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
                                                                        <td>path to CSV file</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>header</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>CSV file includes header</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>columns</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>names of columns in resulting table</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>dialect</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>format of CSV file</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>delimiters</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>string of possible delimiters</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to CSV file</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param header:</th>
                                                                            <td class="field-body">CSV file includes header</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param columns:</th>
                                                                            <td class="field-body">names of columns in resulting table</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param dialect:</th>
                                                                            <td class="field-body">format of CSV file</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param delimiters:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">string of possible delimiters</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>By default attempts to deduce the CSV format and headers from a sample of the input file. If it's unable to determine the format automatically, the dialect and header will have to be defined manually.</p>
                                                                <p>Valid <tt class="docutils literal">dialect</tt> values are <tt class="docutils literal">excel</tt>, <tt class="docutils literal">excel-tab</tt>, and <tt class="docutils literal">unix</tt>, and <tt class="docutils literal">header</tt> is boolean argument (<tt class="docutils literal">True</tt>/<tt class="docutils literal">False</tt>). Optionally a set of valid <tt class="docutils literal">delimiters</tt> can be given as a string.</p>
                                                                <p>The <tt class="docutils literal">columns</tt> argument can be used to override the names of columns in the resulting table. The amount of columns must match the input data.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="rename-table-columns">
                                                            <h2><a href="#rename-table-columns">Rename Table Columns</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Renames columns in the Table with given values. Columns with name as
                                                                    <cite>None</cite> will be use previous value.
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
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>columns</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>list of new column names</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strict</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>if True, raises ValueError if column lengths do not match</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Renames columns in the Table with given values. Columns with name as <cite>None</cite> will be use previous value.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param columns:</th>
                                                                            <td class="field-body">list of new column names</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param strict:</th>
                                                                            <td class="field-body">if True, raises ValueError if column lengths do not match</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-column-as-index">
                                                            <h2><a href="#set-column-as-index">Set Column As Index</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set existing column as index for rows.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>column to convert to index</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column to convert to index</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-row-as-column-names">
                                                            <h2><a href="#set-row-as-column-names">Set Row As Column Names</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set existing row as names for columns.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>row to use as column names</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param index:</th>
                                                                            <td class="field-body">row to use as column names</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-table-cell">
                                                            <h2><a href="#set-table-cell">Set Table Cell</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set a cell value in the table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>row of cell</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>column of cell</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>value to set</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param row:</th>
                                                                            <td class="field-body">row of cell</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column of cell</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param value:</th>
                                                                            <td class="field-body">value to set</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-table-column">
                                                            <h2><a href="#set-table-column">Set Table Column</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Assign values to entire column in the table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>column to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>value(s) to set</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param values:</th>
                                                                            <td class="field-body">value(s) to set</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-table-row">
                                                            <h2><a href="#set-table-row">Set Table Row</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Assign values to a row in the table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>row to modify</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>value(s) to set</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param row:</th>
                                                                            <td class="field-body">row to modify</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param values:</th>
                                                                            <td class="field-body">value(s) to set</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="sort-table-by-column">
                                                            <h2><a href="#sort-table-by-column">Sort Table By Column</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sort table in-place according to <cite>column</cite>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to sort</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>column to sort with</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ascending</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>table sort order</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to sort</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param column:</th>
                                                                            <td class="field-body">column to sort with</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param ascending:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">table sort order</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-head">
                                                            <h2><a href="#table-head">Table Head</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return first <cite>count</cite> rows from table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to read from</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>count</td>
                                                                        <td></td>
                                                                        <td>5</td>
                                                                        <td>number of lines to read</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_list</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>return list instead of Table</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to read from</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param count:</th>
                                                                            <td class="field-body">number of lines to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_list:</th>
                                                                            <td class="field-body">return list instead of Table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-tail">
                                                            <h2><a href="#table-tail">Table Tail</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return last <cite>count</cite> rows from table.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to read from</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>count</td>
                                                                        <td></td>
                                                                        <td>5</td>
                                                                        <td>number of lines to read</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_list</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>return list instead of Table</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to read from</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param count:</th>
                                                                            <td class="field-body">number of lines to read</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_list:</th>
                                                                            <td class="field-body">return list instead of Table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="trim-column-names">
                                                            <h2><a href="#trim-column-names">Trim Column Names</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Remove all extraneous whitespace from column names.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="trim-empty-rows">
                                                            <h2><a href="#trim-empty-rows">Trim Empty Rows</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Remove all rows from the end of the table which have only None values.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to filter</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Remove all rows from the end of the table which have only None values.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to filter</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write-table-to-csv">
                                                            <h2><a href="#write-table-to-csv">Write Table To Csv</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Write a table as a CSV file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>table</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>table to write</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>path to write to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>header</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>write columns as header to CSV file</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>dialect</td>
                                                                        <td></td>
                                                                        <td>excel</td>
                                                                        <td>the format of output CSV</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param path:</th>
                                                                            <td class="field-body">path to write to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">table to write</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param header:</th>
                                                                            <td class="field-body">write columns as header to CSV file</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param dialect:</th>
                                                                            <td class="field-body">the format of output CSV</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Valid <tt class="docutils literal">dialect</tt> values are <tt class="docutils literal">excel</tt>, <tt class="docutils literal">excel-tab</tt>, and <tt class="docutils literal">unix</tt>.</p>
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
                                                    <li><a id="link-add-table-column" href="#add-table-column" class="">Add Table Column</a></li>
                                                    <li><a id="link-add-table-row" href="#add-table-row" class="">Add Table Row</a></li>
                                                    <li><a id="link-clear-table" href="#clear-table" class="">Clear Table</a></li>
                                                    <li><a id="link-copy-table" href="#copy-table" class="">Copy Table</a></li>
                                                    <li><a id="link-create-table" href="#create-table" class="">Create Table</a></li>
                                                    <li><a id="link-export-table" href="#export-table" class="">Export Table</a></li>
                                                    <li><a id="link-filter-empty-rows" href="#filter-empty-rows" class="">Filter Empty Rows</a></li>
                                                    <li><a id="link-filter-table-by-column" href="#filter-table-by-column" class="">Filter Table By Column</a></li>
                                                    <li><a id="link-find-table-rows" href="#find-table-rows" class="">Find Table Rows</a></li>
                                                    <li><a id="link-get-table-cell" href="#get-table-cell" class="">Get Table Cell</a></li>
                                                    <li><a id="link-get-table-column" href="#get-table-column" class="">Get Table Column</a></li>
                                                    <li><a id="link-get-table-dimensions" href="#get-table-dimensions" class="">Get Table Dimensions</a></li>
                                                    <li><a id="link-get-table-row" href="#get-table-row" class="">Get Table Row</a></li>
                                                    <li><a id="link-get-table-slice" href="#get-table-slice" class="">Get Table Slice</a></li>
                                                    <li><a id="link-group-table-by-column" href="#group-table-by-column" class="">Group Table By Column</a></li>
                                                    <li><a id="link-merge-tables" href="#merge-tables" class="">Merge Tables</a></li>
                                                    <li><a id="link-pop-table-column" href="#pop-table-column" class="">Pop Table Column</a></li>
                                                    <li><a id="link-pop-table-row" href="#pop-table-row" class="">Pop Table Row</a></li>
                                                    <li><a id="link-read-table-from-csv" href="#read-table-from-csv" class="">Read Table From Csv</a></li>
                                                    <li><a id="link-rename-table-columns" href="#rename-table-columns" class="">Rename Table Columns</a></li>
                                                    <li><a id="link-set-column-as-index" href="#set-column-as-index" class="">Set Column As Index</a></li>
                                                    <li><a id="link-set-row-as-column-names" href="#set-row-as-column-names" class="">Set Row As Column Names</a></li>
                                                    <li><a id="link-set-table-cell" href="#set-table-cell" class="">Set Table Cell</a></li>
                                                    <li><a id="link-set-table-column" href="#set-table-column" class="">Set Table Column</a></li>
                                                    <li><a id="link-set-table-row" href="#set-table-row" class="">Set Table Row</a></li>
                                                    <li><a id="link-sort-table-by-column" href="#sort-table-by-column" class="">Sort Table By Column</a></li>
                                                    <li><a id="link-table-head" href="#table-head" class="">Table Head</a></li>
                                                    <li><a id="link-table-tail" href="#table-tail" class="">Table Tail</a></li>
                                                    <li><a id="link-trim-column-names" href="#trim-column-names" class="">Trim Column Names</a></li>
                                                    <li><a id="link-trim-empty-rows" href="#trim-empty-rows" class="">Trim Empty Rows</a></li>
                                                    <li><a id="link-write-table-to-csv" href="#write-table-to-csv" class="">Write Table To Csv</a></li>
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