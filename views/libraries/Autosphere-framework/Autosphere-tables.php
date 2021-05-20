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
                                            <div class="document">
                                                <p><cite>Tables</cite> is a library for manipulating tabular data inside Robot Framework.</p>
                                                <p>It can import data from various sources and apply different operations to it.
                                                    Common use-cases are reading and writing CSV files, inspecting files in
                                                    directories, or running tasks using existing Excel data.</p>
                                                <p><strong>Import types</strong></p>
                                                <p>The data a table can be created from can be of two main types:</p>
                                                <ol class="arabic simple">
                                                    <li>An iterable of individual rows, like a list of lists, or list of dictionaries</li>
                                                    <li>A dictionary of columns, where each dictionary value is a list of values</li>
                                                </ol>
                                                <p>For instance, these two input values:</p>
                                                <pre class="code python literal-block"><span class="n">data1</span> <span class="o">=</span> <span class="p">[</span>
        <span class="p">{</span><span class="s2">"name"</span><span class="p">:</span> <span class="s2">"Mark"</span><span class="p">,</span> <span class="s2">"age"</span><span class="p">:</span> <span class="mi">58</span><span class="p">},</span>
        <span class="p">{</span><span class="s2">"name"</span><span class="p">:</span> <span class="s2">"John"</span><span class="p">,</span> <span class="s2">"age"</span><span class="p">:</span> <span class="mi">22</span><span class="p">},</span>
        <span class="p">{</span><span class="s2">"name"</span><span class="p">:</span> <span class="s2">"Adam"</span><span class="p">,</span> <span class="s2">"age"</span><span class="p">:</span> <span class="mi">67</span><span class="p">},</span>
    <span class="p">]</span>
    
    <span class="n">data2</span> <span class="o">=</span> <span class="p">{</span>
        <span class="s2">"name"</span><span class="p">:</span> <span class="p">[</span><span class="s2">"Mark"</span><span class="p">,</span> <span class="s2">"John"</span><span class="p">,</span> <span class="s2">"Adam"</span><span class="p">],</span>
        <span class="s2">"age"</span><span class="p">:</span>  <span class="p">[</span>    <span class="mi">58</span><span class="p">,</span>     <span class="mi">22</span><span class="p">,</span>     <span class="mi">67</span><span class="p">],</span>
    <span class="p">}</span>
    </pre>
                                                <p>Would both result in the following table:</p>
                                                <table border="1" class="docutils">
                                                    <colgroup>
                                                        <col width="39%">
                                                        <col width="33%">
                                                        <col width="28%">
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
                                                            <td>0</td>
                                                            <td>Mark</td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>John</td>
                                                            <td>22</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Adam</td>
                                                            <td>67</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><strong>Indexing columns and rows</strong></p>
                                                <p>Columns can be referred to in two ways: either with a unique string
                                                    name or their position as an integer. Columns can be named either when
                                                    the table is created, or they can be (re)named dynamically with keywords.
                                                    The integer position can always be used, and it starts from zero.</p>
                                                <p>For instance, a table with columns "Name", "Age", and "Address" would
                                                    allow referring to the "Age" column with either the name "Age" or the
                                                    number 1.</p>
                                                <p>Rows do not have a name, but instead only have an integer index. This
                                                    index also starts from zero. Keywords where rows are indexed also support
                                                    negative values, which start counting backwards from the end.</p>
                                                <p>For instance, in a table with five rows, the first row could be referred
                                                    to with the number 0. The last row could be accessed with either 4 or
                                                    -1.</p>
                                                <p><strong>Examples</strong></p>
                                                <p><strong>Robot Framework</strong></p>
                                                <p>The <cite>Tables</cite> library can load tabular data from various other libraries
                                                    and manipulate it inside Robot Framework.</p>
                                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
    </span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Tables</span><span class="p">
    
    </span><span class="gh">*** Keywords ***</span><span class="p">
    </span><span class="gu">Files to Table</span><span class="p">
        ${</span><span class="nv">files</span><span class="p">}=    </span><span class="nf">List files in directory</span><span class="p">    ${</span><span class="nv">CURDIR</span><span class="p">}
        ${</span><span class="nv">files</span><span class="p">}=    </span><span class="nf">Create table</span><span class="p">    ${</span><span class="nv">files</span><span class="p">}
        </span><span class="nf">Filter table by column</span><span class="p">    ${</span><span class="nv">files</span><span class="p">}    </span><span class="s">size</span><span class="p">  </span><span class="s">&gt;=</span><span class="p">  ${</span><span class="nv">1024</span><span class="p">}
        </span><span class="nf">FOR</span><span class="p">    ${</span><span class="nv">file</span><span class="p">}    </span><span class="s">IN</span><span class="p">    @{</span><span class="nv">files</span><span class="p">}
            </span><span class="nf">Log</span><span class="p">    ${</span><span class="nv">file</span><span class="p">}</span><span class="s">[name]</span><span class="p">
        </span><span class="nf">END</span><span class="p">
        </span><span class="nf">Write table to CSV</span><span class="p">    ${</span><span class="nv">files</span><span class="p">}    ${</span><span class="nv">OUTPUT_DIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">files.csv</span>
    </pre>
                                                <p><strong>Python</strong></p>
                                                <p>The library is also available directly through Python, where it
                                                    is easier to handle multiple different tables or do more bespoke
                                                    manipulation operations.</p>
                                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Tables</span> <span class="kn">import</span> <span class="n">Tables</span>
    
    <span class="n">library</span> <span class="o">=</span> <span class="n">Tables</span><span class="p">()</span>
    <span class="n">orders</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">read_table_from_csv</span><span class="p">(</span>
        <span class="s2">"orders.csv"</span><span class="p">,</span> <span class="n">columns</span><span class="o">=</span><span class="p">[</span><span class="s2">"name"</span><span class="p">,</span> <span class="s2">"mail"</span><span class="p">,</span> <span class="s2">"product"</span><span class="p">]</span>
    <span class="p">)</span>
    
    <span class="n">customers</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">group_table_by_column</span><span class="p">(</span><span class="n">rows</span><span class="p">,</span> <span class="s2">"mail"</span><span class="p">)</span>
    <span class="k">for</span> <span class="n">customer</span> <span class="ow">in</span> <span class="n">customers</span><span class="p">:</span>
        <span class="k">for</span> <span class="n">order</span> <span class="ow">in</span> <span class="n">customer</span><span class="p">:</span>
            <span class="n">add_cart</span><span class="p">(</span><span class="n">order</span><span class="p">)</span>
        <span class="n">make_order</span><span class="p">()</span>
    </pre>
                                            </div>
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
                                                            <h2>
                                                                <a href="#add-table-column">Add Table Column</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Append a column to a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>name</td>
                                                                            <td>str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>values</td>
                                                                            <td>Any, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param name:</th>
                                                                                <td class="field-body">Name of new column</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param values:</th>
                                                                                <td class="field-body">Value(s) for new column</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>The <tt class="docutils literal">values</tt> can either be a list of values, one for each row, or one single value that is set for all rows.</p>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Add empty column</span>
  <span class="token task-name function">Add table column</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>
  
  <span class="token comment"># Add empty column with name</span>
  <span class="token task-name function">Add table column</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    name=Home Address
  
  <span class="token comment"># Add new column where every every row has the same value</span>
  <span class="token task-name function">Add table column</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    name=TOS    values=<span class="token variable"><span class="token punctuation">${</span>FALSE<span class="token punctuation">}</span></span>
  
  <span class="token comment"># Add new column where every row has a unique value</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>is_first<span class="token punctuation">}</span></span>=</span>    Create list    <span class="token variable"><span class="token punctuation">${</span>TRUE<span class="token punctuation">}</span></span>    <span class="token variable"><span class="token punctuation">${</span>FALSE<span class="token punctuation">}</span></span>    <span class="token variable"><span class="token punctuation">${</span>FALSE<span class="token punctuation">}</span></span>
  <span class="token task-name function">Add table column</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    name=IsFirst    values=<span class="token variable"><span class="token punctuation">${</span>is_first<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-table-row">
                                                            <h2>
                                                                <a href="#add-table-row">Add Table Row</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Append rows to a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>values</td>
                                                                            <td>Any, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param values:</th>
                                                                                <td class="field-body">Value(s) for new row</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>The <tt class="docutils literal">values</tt> can either be a list of values, or a dictionary where the keys match current column names. Values for unknown keys are discarded.</p>
                                                                    <p>It can also be a single value that is set for all columns, which is <tt class="docutils literal">None</tt> by default.</p>
                                                                    <p>Example:s</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Add empty row</span>
  <span class="token task-name function">Add table row</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>
  
  <span class="token comment"># Add row where every column has the same value</span>
  <span class="token task-name function">Add table row</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    Unknown
  
  <span class="token comment"># Add values per column</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>values<span class="token punctuation">}</span></span>=</span>    Create dictionary    Username=Mark    Mail=mark@Autosphere.com
  <span class="token task-name function">Add table row</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    <span class="token variable"><span class="token punctuation">${</span>values<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="clear-table">
                                                            <h2>
                                                                <a href="#clear-table">Clear Table</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Clear table in-place, but keep columns.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to clear</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="copy-table">
                                                            <h2>
                                                                <a href="#copy-table">Copy Table</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Make a copy of a table object.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to copy</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-table">
                                                            <h2>
                                                                <a href="#create-table">Create Table</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Create Table object from data.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>data</td>
                                                                            <td>Dict[typing.Union[int, str], typing.Union[typing.Dict, typing.List, typing.Tuple, typing.NamedTuple, set]], List[typing.Union[typing.Dict, typing.List, typing.Tuple, typing.NamedTuple, set]], Table, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>trim</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>columns</td>
                                                                            <td>List[str], None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Data can be a combination of various iterable containers, e.g. list of lists, list of dicts, dict of lists.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param data:</th>
                                                                                <td class="field-body">Source data for table</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param trim:</th>
                                                                                <td class="field-body">Remove all empty rows from the end of the worksheet, default <cite>False</cite></td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param columns:</th>
                                                                                <td class="field-body">Names of columns (optional)</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>See the main library documentation for more information about supported data types.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="export-table">
                                                            <h2>
                                                                <a href="#export-table">Export Table</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Convert a table object into standard Python containers.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>with_index</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>as_list</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to convert to dict</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param with_index:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">Include index in values</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param as_list:</th>
                                                                                <td class="field-body">Export data as list instead of dict</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h3>Examples</h3>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>=</span>       Read worksheet as table    orders.xlsx
  <span class="token task-name function">Sort table by column</span>    <span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>    CustomerId
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>export<span class="token punctuation">}</span></span>=</span>       Export table    <span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>
  <span class="token comment"># The following keyword expects a dictionary:</span>
  <span class="token task-name function">Write as JSON</span>    <span class="token variable"><span class="token punctuation">${</span>export<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="filter-empty-rows">
                                                            <h2>
                                                                <a href="#filter-empty-rows">Filter Empty Rows</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Remove all rows from a table which have only ``None`` values.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Remove all rows from a table which have only <tt class="docutils literal">None</tt> values.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to filter</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>The filtering will be done in-place.</p>
                                                                    <h3>Examples</h3>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>=</span>    Read worksheet as table    orders.xlsx
  <span class="token task-name function">Filter empty rows</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="filter-table-by-column">
                                                            <h2>
                                                                <a href="#filter-table-by-column">Filter Table By Column</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Remove all rows where column values don't match the given condition.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>operator</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>value</td>
                                                                            <td>Any</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Remove all rows where column values don't match the given condition.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to filter</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Column to filter with</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param operator:</th>
                                                                                <td class="field-body">Filtering operator, e.g. &gt;, &lt;, ==, contains</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param value:</th>
                                                                                <td class="field-body">Value to compare column to (using operator)</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>See the keyword <tt class="docutils literal">Find table rows</tt> for all supported operators and their descriptions.</p>
                                                                    <p>The filtering will be done in-place.</p>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Only accept prices that are non-zero</span>
  <span class="token task-name function">Filter table by column</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>   price  !=  <span class="token variable"><span class="token punctuation">${</span>0<span class="token punctuation">}</span></span>
  
  <span class="token comment"># Remove uwnanted product types</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">@{</span>types<span class="token punctuation">}</span></span>=</span>    Create list    Unknown    Removed
  <span class="token task-name function">Filter table by column</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>   product_type  not in  <span class="token variable"><span class="token punctuation">${</span>types<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-table-rows">
                                                            <h2>
                                                                <a href="#find-table-rows">Find Table Rows</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Find all rows in a table which match a condition for a given column.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>operator</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>value</td>
                                                                            <td>Any</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Find all rows in a table which match a condition for a given column.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to find from</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Name of column to search</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param operator:</th>
                                                                                <td class="field-body">Comparison operator</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param value:</th>
                                                                                <td class="field-body">Value to compare against</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Supported operators:</p>
                                                                    <table border="1" class="docutils">
                                                                        <colgroup>
                                                                            <col width="23%" />
                                                                            <col width="77%" />
                                                                        </colgroup>
                                                                        <thead valign="bottom">
                                                                            <tr>
                                                                                <th class="head">Operator</th>
                                                                                <th class="head">Description</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody valign="top">
                                                                            <tr>
                                                                                <td>&gt;</td>
                                                                                <td>Cell value is larger than</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&lt;</td>
                                                                                <td>Cell value is smaller than</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&gt;=</td>
                                                                                <td>Cell value is larger or equal than</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&lt;=</td>
                                                                                <td>Cell value is smaller or equal than</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>==</td>
                                                                                <td>Cell value is equal to</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>!=</td>
                                                                                <td>Cell value is not equal to</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>is</td>
                                                                                <td>Cell value is the same object</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>not is</td>
                                                                                <td>Cell value is not the same object</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>contains</td>
                                                                                <td>Cell value contains given value</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>not contains</td>
                                                                                <td>Cell value does not contain given value</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>in</td>
                                                                                <td>Cell value is in given value</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>not in</td>
                                                                                <td>Cell value is not in given value</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Returns the matches as a new Table instance.</p>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Find all rows where price is over 200</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">@{</span>rows<span class="token punctuation">}</span></span>=</span>    Find table rows    Price  &gt;  <span class="token variable"><span class="token punctuation">${</span>200<span class="token punctuation">}</span></span>
  
  <span class="token comment"># Find all rows where the status does not contain "removed"</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">@{</span>rows<span class="token punctuation">}</span></span>=</span>    Find table rows    Status    not contains    removed
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-cell">
                                                            <h2>
                                                                <a href="#get-table-cell">Get Table Cell</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get a cell value from a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>row</td>
                                                                            <td>int</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to read from</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param row:</th>
                                                                                <td class="field-body">Row of cell</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Column of cell</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Get the value in the first row and first column</span>
  <span class="token task-name function">Get table cell</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    0    0
  
  <span class="token comment"># Get the value in the last row and first column</span>
  <span class="token task-name function">Get table cell</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>   -1    0
  
  <span class="token comment"># Get the value in the third row and column "Name"</span>
  <span class="token task-name function">Get table cell</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    2    Name
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-column">
                                                            <h2>
                                                                <a href="#get-table-column">Get Table Column</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get all values for a single column in a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to read</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Column to read</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h3>Examples</h3>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>emails<span class="token punctuation">}</span></span>=</span>    Get table column    <span class="token variable"><span class="token punctuation">${</span>users<span class="token punctuation">}</span></span>    E-Mail Address
  <span class="token task-name function">FOR</span>    <span class="token variable"><span class="token punctuation">${</span>email<span class="token punctuation">}</span></span>    IN    <span class="token variable"><span class="token punctuation">@{</span>emails<span class="token punctuation">}</span></span>
      <span class="token property">Send promotion</span>    <span class="token variable"><span class="token punctuation">${</span>email<span class="token punctuation">}</span></span>
  <span class="token task-name function">END</span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-dimensions">
                                                            <h2>
                                                                <a href="#get-table-dimensions">Get Table Dimensions</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Return table dimensions, as (rows, columns).</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to inspect</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>rows<span class="token punctuation">}</span></span></span>  <span class="token variable"><span class="token punctuation">${</span>columns<span class="token punctuation">}</span></span>=    Get table dimensions    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>
  <span class="token task-name function">Log</span>    Table has <span class="token variable"><span class="token punctuation">${</span>rows<span class="token punctuation">}</span></span> rows and <span class="token variable"><span class="token punctuation">${</span>columns<span class="token punctuation">}</span></span> columns.
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-row">
                                                            <h2>
                                                                <a href="#get-table-row">Get Table Row</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get a single row from a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>row</td>
                                                                            <td>int</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>as_list</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to read</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param row:</th>
                                                                                <td class="field-body">Row to read</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param as_list:</th>
                                                                                <td class="field-body">Return list instead of dictionary</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>first<span class="token punctuation">}</span></span>=</span>    Get table row    <span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>
  <span class="token task-name function">Log</span>     Handling order: <span class="token variable"><span class="token punctuation">${</span>first<span class="token punctuation">}</span></span>[Order ID]
  
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>row<span class="token punctuation">}</span></span>=</span>      Get table row    <span class="token variable"><span class="token punctuation">${</span>data<span class="token punctuation">}</span></span>    -1    as_list=<span class="token variable"><span class="token punctuation">${</span>TRUE<span class="token punctuation">}</span></span>
  <span class="token task-name function">FOR</span>    <span class="token variable"><span class="token punctuation">${</span>value<span class="token punctuation">}</span></span>    IN    <span class="token variable"><span class="token punctuation">@{</span>row<span class="token punctuation">}</span></span>
      <span class="token property">Log</span>    Data point: <span class="token variable"><span class="token punctuation">${</span>value<span class="token punctuation">}</span></span>
  <span class="token task-name function">END</span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-slice">
                                                            <h2>
                                                                <a href="#get-table-slice">Get Table Slice</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Return a new Table from a range of given Table rows.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>start</td>
                                                                            <td>int, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>end</td>
                                                                            <td>int, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to read from</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param start:</th>
                                                                                <td class="field-body">Start index (inclusive)</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param start:</th>
                                                                                <td class="field-body">End index (exclusive)</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>If <tt class="docutils literal">start</tt> is not defined, starts from the first row. If <tt class="docutils literal">end</tt> is not defined, stops at the last row.</p>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Get all rows except first five</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>slice<span class="token punctuation">}</span></span>=</span>    Get table slice    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    start=5
  
  <span class="token comment"># Get rows at indexes 5, 6, 7, 8, and 9</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>slice<span class="token punctuation">}</span></span>=</span>    Get table slice    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    start=5    end=10
  
  <span class="token comment"># Get all rows except last five</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>slice<span class="token punctuation">}</span></span>=</span>    Get table slice    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    end=-5
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="group-table-by-column">
                                                            <h2>
                                                                <a href="#group-table-by-column">Group Table By Column</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Group a table by ``column`` and return a list of grouped Tables.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Group a table by <tt class="docutils literal">column</tt> and return a list of grouped Tables.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to use for grouping</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Column which is used as grouping criteria</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h3>Examples</h3>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>=</span>    Read worksheet as table    orders.xlsx
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">@{</span>groups<span class="token punctuation">}</span></span>=</span>    Group table by column    <span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>    customer
  <span class="token task-name function">FOR</span>    <span class="token variable"><span class="token punctuation">${</span>group<span class="token punctuation">}</span></span>    IN    <span class="token variable"><span class="token punctuation">@{</span>groups<span class="token punctuation">}</span></span>
      <span class="token comment"># Process all orders for the customer at once</span>
      <span class="token property">Process order</span>    <span class="token variable"><span class="token punctuation">${</span>group<span class="token punctuation">}</span></span>
  <span class="token task-name function">END</span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="merge-tables">
                                                            <h2>
                                                                <a href="#merge-tables">Merge Tables</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Create a union of two tables and their contents.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>tables</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>index</td>
                                                                            <td>str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
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
                                                                    <h3>Examples</h3>
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
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>products<span class="token punctuation">}</span></span>=</span>    Merge tables    <span class="token variable"><span class="token punctuation">${</span>prices<span class="token punctuation">}</span></span>    <span class="token variable"><span class="token punctuation">${</span>stock<span class="token punctuation">}</span></span>    index=Name
  <span class="token task-name function">FOR</span>    <span class="token variable"><span class="token punctuation">${</span>product<span class="token punctuation">}</span></span>    IN    <span class="token variable"><span class="token punctuation">@{</span>products<span class="token punctuation">}</span></span>
      <span class="token property">Log many</span>
      ...    Product: <span class="token variable"><span class="token punctuation">${</span>product<span class="token punctuation">}</span></span>[Name]
      ...    Price: <span class="token variable"><span class="token punctuation">${</span>product<span class="token punctuation">}</span></span>[Price]
      ...    Stock: <span class="token variable"><span class="token punctuation">${</span>product<span class="token punctuation">}</span></span>[Stock]
  <span class="token task-name function">END</span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="pop-table-column">
                                                            <h2>
                                                                <a href="#pop-table-column">Pop Table Column</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Remove column from table and return it.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Column to remove</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Remove column from table and discard it</span>
  <span class="token task-name function">Pop table column</span>    <span class="token variable"><span class="token punctuation">${</span>users<span class="token punctuation">}</span></span>   userId
  
  <span class="token comment"># Remove column from table and iterate over it</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>ids<span class="token punctuation">}</span></span>=</span>    Pop table column    <span class="token variable"><span class="token punctuation">${</span>users<span class="token punctuation">}</span></span>    userId
  <span class="token task-name function">FOR</span>    <span class="token variable"><span class="token punctuation">${</span>id<span class="token punctuation">}</span></span>    IN    <span class="token variable"><span class="token punctuation">@{</span>ids<span class="token punctuation">}</span></span>
      <span class="token property">Log</span>    User id: <span class="token variable"><span class="token punctuation">${</span>id<span class="token punctuation">}</span></span>
  <span class="token task-name function">END</span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="pop-table-row">
                                                            <h2>
                                                                <a href="#pop-table-row">Pop Table Row</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Remove row from table and return it.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>row</td>
                                                                            <td>int, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>as_list</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param row:</th>
                                                                                <td class="field-body">Row index, pops first row if none given</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param as_list:</th>
                                                                                <td class="field-body">Return list instead of dictionary</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>first<span class="token punctuation">}</span></span>=</span>    Pop table row    <span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>
  <span class="token task-name function">Log</span>     Handling order: <span class="token variable"><span class="token punctuation">${</span>first<span class="token punctuation">}</span></span>[Order ID]
  
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>row<span class="token punctuation">}</span></span>=</span>      Pop table row    <span class="token variable"><span class="token punctuation">${</span>data<span class="token punctuation">}</span></span>    -1    as_list=<span class="token variable"><span class="token punctuation">${</span>TRUE<span class="token punctuation">}</span></span>
  <span class="token task-name function">FOR</span>    <span class="token variable"><span class="token punctuation">${</span>value<span class="token punctuation">}</span></span>    IN    <span class="token variable"><span class="token punctuation">@{</span>row<span class="token punctuation">}</span></span>
      <span class="token property">Log</span>    Data point: <span class="token variable"><span class="token punctuation">${</span>value<span class="token punctuation">}</span></span>
  <span class="token task-name function">END</span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="read-table-from-csv">
                                                            <h2>
                                                                <a href="#read-table-from-csv">Read table from CSV</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Read a CSV file as a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>header</td>
                                                                            <td>bool, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>columns</td>
                                                                            <td>List[str], None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>dialect</td>
                                                                            <td>Dialect, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>delimiters</td>
                                                                            <td>str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column_unknown</td>
                                                                            <td>str</td>
                                                                            <td>Unknown</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>encoding</td>
                                                                            <td>str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param path:</th>
                                                                                <td class="field-body">Path to CSV file</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param header:</th>
                                                                                <td class="field-body">CSV file includes header</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param columns:</th>
                                                                                <td class="field-body">Names of columns in resulting table</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param dialect:</th>
                                                                                <td class="field-body">Format of CSV file</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param delimiters:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">String of possible delimiters</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param column_unknown:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">Column name for unknown fields</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param encoding:</th>
                                                                                <td class="field-body">Text encoding for input file, uses system encoding by default</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>By default attempts to deduce the CSV format and headers from a sample of the input file. If it's unable to determine the format automatically, the dialect and header will have to be defined manually.</p>
                                                                    <p>
                                                                        Valid <tt class="docutils literal">dialect</tt> values are <tt class="docutils literal">excel</tt>, <tt class="docutils literal">excel-tab</tt>, and <tt class="docutils literal">unix</tt>, and
                                                                        <tt class="docutils literal">header</tt> is boolean argument (<tt class="docutils literal">True</tt>/<tt class="docutils literal">False</tt>). Optionally a set of valid
                                                                        <tt class="docutils literal">delimiters</tt> can be given as a string.
                                                                    </p>
                                                                    <p>The <tt class="docutils literal">columns</tt> argument can be used to override the names of columns in the resulting table. The amount of columns must match the input data.</p>
                                                                    <p>
                                                                        If the source data has a header and rows have more fields than the header defines, the remaining values are put into the column given by <tt class="docutils literal">column_unknown</tt>. By default it has the value
                                                                        "Unknown".
                                                                    </p>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Source dialect is deduced automatically</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>=</span>    Read table from CSV    export.csv
  <span class="token task-name function">Log</span>   Found columns: <span class="token variable"><span class="token punctuation">${</span>table.columns<span class="token punctuation">}</span></span>
  
  <span class="token comment"># Source dialect is known and given explicitly</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>=</span>    Read table from CSV    export-excel.csv    dialect=excel
  <span class="token task-name function">Log</span>   Found columns: <span class="token variable"><span class="token punctuation">${</span>table.columns<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="rename-table-columns">
                                                            <h2>
                                                                <a href="#rename-table-columns">Rename Table Columns</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Renames columns in the Table with given values. Columns with name as ``None`` will use the previous value.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>names</td>
                                                                            <td>List[typing.Union[str, NoneType]]</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>strict</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Renames columns in the Table with given values. Columns with name as <tt class="docutils literal">None</tt> will use the previous value.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param names:</th>
                                                                                <td class="field-body">List of new column names</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param strict:</th>
                                                                                <td class="field-body">If True, raises ValueError if column lengths do not match</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>The renaming will be done in-place.</p>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>columns<span class="token punctuation">}</span></span>=</span>    Create list   First  Second  Third
  <span class="token task-name function">Rename table columns</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    <span class="token variable"><span class="token punctuation">${</span>columns<span class="token punctuation">}</span></span>
  <span class="token comment"># First, Second, Third</span>
  
  
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>columns<span class="token punctuation">}</span></span>=</span>    Create list   Uno  Dos
  <span class="token task-name function">Rename table columns</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    <span class="token variable"><span class="token punctuation">${</span>columns<span class="token punctuation">}</span></span>
  <span class="token comment"># Uno, Dos, Third</span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-row-as-column-names">
                                                            <h2>
                                                                <a href="#set-row-as-column-names">Set Row As Column Names</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Set existing row as names for columns.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>row</td>
                                                                            <td>int</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param row:</th>
                                                                                <td class="field-body">Row to use as column names</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>=</span>    Read table from CSV    data.csv
  <span class="token task-name function">Set row as column names</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    0
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-table-cell">
                                                            <h2>
                                                                <a href="#set-table-cell">Set Table Cell</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Set a cell value in a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>row</td>
                                                                            <td>int</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>value</td>
                                                                            <td>Any</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify to</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param row:</th>
                                                                                <td class="field-body">Row of cell</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Column of cell</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param value:</th>
                                                                                <td class="field-body">Value to set</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Set the value in the first row and first column to "First"</span>
  <span class="token task-name function">Set table cell</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    0    0       First
  
  <span class="token comment"># Set the value in the last row and first column to "Last"</span>
  <span class="token task-name function">Set table cell</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>   -1    0       Last
  
  <span class="token comment"># Set the value in the third row and column "Name" to "Unknown"</span>
  <span class="token task-name function">Set table cell</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    2    Name    Unknown
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-table-column">
                                                            <h2>
                                                                <a href="#set-table-column">Set Table Column</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Assign values to entire column in the table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>values</td>
                                                                            <td>Any</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Column to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param values:</th>
                                                                                <td class="field-body">Value(s) to set</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>The <tt class="docutils literal">values</tt> can either be a list of values, one for each row, or one single value that is set for all rows.</p>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Set different value for each row (sizes must match)</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>ids<span class="token punctuation">}</span></span>=</span>    Create list    1  2  3  4  5
  <span class="token task-name function">Set table column</span>    <span class="token variable"><span class="token punctuation">${</span>users<span class="token punctuation">}</span></span>    userId    <span class="token variable"><span class="token punctuation">${</span>ids<span class="token punctuation">}</span></span>
  
  <span class="token comment"># Set the same value for all rows</span>
  <span class="token task-name function">Set table column</span>    <span class="token variable"><span class="token punctuation">${</span>users<span class="token punctuation">}</span></span>    email     <span class="token variable"><span class="token punctuation">${</span>NONE<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-table-row">
                                                            <h2>
                                                                <a href="#set-table-row">Set Table Row</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Assign values to a row in the table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>row</td>
                                                                            <td>int</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>values</td>
                                                                            <td>Any</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param row:</th>
                                                                                <td class="field-body">Row to modify</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param values:</th>
                                                                                <td class="field-body">Value(s) to set</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>The <tt class="docutils literal">values</tt> can either be a list of values, or a dictionary where the keys match current column names. Values for unknown keys are discarded.</p>
                                                                    <p>It can also be a single value that is set for all columns.</p>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>columns<span class="token punctuation">}</span></span>=</span>  Create list     One  Two  Three
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>=</span>    Create table    columns=<span class="token variable"><span class="token punctuation">${</span>columns<span class="token punctuation">}</span></span>
  
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>values<span class="token punctuation">}</span></span>=</span>   Create list     1  2  3
  <span class="token task-name function">Set table row</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    0    <span class="token variable"><span class="token punctuation">${</span>values<span class="token punctuation">}</span></span>
  
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>values<span class="token punctuation">}</span></span>=</span>   Create dictionary    One=1  Two=2  Three=3
  <span class="token task-name function">Set table row</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    1    <span class="token variable"><span class="token punctuation">${</span>values<span class="token punctuation">}</span></span>
  
  <span class="token task-name function">Set table row</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>    2    <span class="token variable"><span class="token punctuation">${</span>NONE<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="sort-table-by-column">
                                                            <h2>
                                                                <a href="#sort-table-by-column">Sort Table By Column</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Sort a table in-place according to ``column``.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>column</td>
                                                                            <td>int, str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>ascending</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Sort a table in-place according to <tt class="docutils literal">column</tt>.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to sort</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param column:</th>
                                                                                <td class="field-body">Column to sort with</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name" colspan="2">param ascending:</th>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <td>&nbsp;</td>
                                                                                <td class="field-body">Table sort order</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h3>Examples</h3>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>=</span>    Read worksheet as table    orders.xlsx
  <span class="token task-name function">Sort table by column</span>    <span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>    order_date
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-head">
                                                            <h2>
                                                                <a href="#table-head">Table Head</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Return first ``count`` rows from a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>count</td>
                                                                            <td>int</td>
                                                                            <td>5</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>as_list</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Return first <tt class="docutils literal">count</tt> rows from a table.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to read from</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param count:</th>
                                                                                <td class="field-body">Number of lines to read</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param as_list:</th>
                                                                                <td class="field-body">Return list instead of Table</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Get the first 10 employees</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>employees<span class="token punctuation">}</span></span>=</span>    Read worksheet as table    employees.xlsx
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>first<span class="token punctuation">}</span></span>=</span>        Table head    <span class="token variable"><span class="token punctuation">${</span>employees<span class="token punctuation">}</span></span>    10
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-tail">
                                                            <h2>
                                                                <a href="#table-tail">Table Tail</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Return last ``count`` rows from a table.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>count</td>
                                                                            <td>int</td>
                                                                            <td>5</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>as_list</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Return last <tt class="docutils literal">count</tt> rows from a table.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to read from</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param count:</th>
                                                                                <td class="field-body">Number of lines to read</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param as_list:</th>
                                                                                <td class="field-body">Return list instead of Table</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Examples:</p>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token comment"># Get the last 10 orders</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>=</span>    Read worksheet as table    orders.xlsx
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>latest<span class="token punctuation">}</span></span>=</span>    Table tail    <span class="token variable"><span class="token punctuation">${</span>orders<span class="token punctuation">}</span></span>    10
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="trim-column-names">
                                                            <h2>
                                                                <a href="#trim-column-names">Trim Column Names</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Remove all extraneous whitespace from column names.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to filter</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>The filtering will be done in-place.</p>
                                                                    <h3>Examples</h3>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>=</span>    Read table from CSV    data.csv
  <span class="token task-name function">Log</span>    <span class="token variable"><span class="token punctuation">${</span>table.columns<span class="token punctuation">}</span></span>  <span class="token comment"># "One", "Two ", "  Three "</span>
  <span class="token task-name function">Trim column names</span>     <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>
  <span class="token task-name function">Log</span>    <span class="token variable"><span class="token punctuation">${</span>table-columns<span class="token punctuation">}</span></span>  <span class="token comment"># "One", "Two", "Three"</span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="trim-empty-rows">
                                                            <h2>
                                                                <a href="#trim-empty-rows">Trim Empty Rows</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Remove all rows from the *end* of a table which have only ``None`` as values.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <p>Remove all rows from the <em>end</em> of a table which have only <tt class="docutils literal">None</tt> as values.</p>
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to filter</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>The filtering will be done in-place.</p>
                                                                    <h3>Examples</h3>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>=</span>    Read worksheet as table    orders.xlsx
  <span class="token task-name function">Trim empty rows</span>    <span class="token variable"><span class="token punctuation">${</span>table<span class="token punctuation">}</span></span>
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="write-table-to-csv">
                                                            <h2>
                                                                <a href="#write-table-to-csv">Write table to CSV</a>
                                                              
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Write a table as a CSV file.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>table</td>
                                                                            <td>Table</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>path</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>header</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>dialect</td>
                                                                            <td>Dialect</td>
                                                                            <td>Excel</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>encoding</td>
                                                                            <td>str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="document">
                                                                    <table class="docutils field-list" frame="void" rules="none">
                                                                        <colgroup>
                                                                            <col class="field-name" />
                                                                            <col class="field-body" />
                                                                        </colgroup>
                                                                        <tbody valign="top">
                                                                            <tr class="field">
                                                                                <th class="field-name">param table:</th>
                                                                                <td class="field-body">Table to write</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param path:</th>
                                                                                <td class="field-body">Path to write to</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param header:</th>
                                                                                <td class="field-body">Write columns as header to CSV file</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param dialect:</th>
                                                                                <td class="field-body">The format of output CSV</td>
                                                                            </tr>
                                                                            <tr class="field">
                                                                                <th class="field-name">param encoding:</th>
                                                                                <td class="field-body">Text encoding for output file, uses system encoding by default</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p>Valid <tt class="docutils literal">dialect</tt> values are <tt class="docutils literal">Excel</tt>, <tt class="docutils literal">ExcelTab</tt>, and <tt class="docutils literal">Unix</tt>.</p>
                                                                    <h3>Examples</h3>
                                                                    <pre class="language-robot line-numbers"><code class="language-robot"><span class="token tasks section"><span class="token section-header keyword">*** Tasks ***</span>
  <span class="token task-name function"><span class="token variable"><span class="token punctuation">${</span>sheet<span class="token punctuation">}</span></span>=</span>    Read worksheet as table    orders.xlsx    header=<span class="token variable"><span class="token punctuation">${</span>TRUE<span class="token punctuation">}</span></span>
  <span class="token task-name function">Write table to CSV</span>    <span class="token variable"><span class="token punctuation">${</span>sheet<span class="token punctuation">}</span></span>    output.csv
  </span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre>
                                                                </div>
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