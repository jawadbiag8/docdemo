<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Database</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Database</li>
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
                                            <p><cite>Database</cite> is a library for handling different database operations.</p>
                                            <p>All database operations are supported. Keywords <cite>Query</cite> and <cite>Get
                                                    Rows</cite> return values by default in <cite>Autosphere.Table</cite> format.
                                            </p>
                                            <p>Library is compatible with any Database API Specification 2.0 module.</p>
                                            <p>References:</p>
                                            <ul class="simple">
                                                <li>Database API Specification 2.0 - <a class="reference external" href="http://www.python.org/dev/peps/pep-0249/">http://www.python.org/dev/peps/pep-0249/</a>
                                                </li>
                                                <li>Lists of DB API 2.0 - <a class="reference external" href="http://wiki.python.org/moin/DatabaseInterfaces">http://wiki.python.org/moin/DatabaseInterfaces</a>
                                                </li>
                                                <li>Python Database Programming - <a class="reference external" href="http://wiki.python.org/moin/DatabaseProgramming/">http://wiki.python.org/moin/DatabaseProgramming/</a>
                                                </li>
                                            </ul>
                                            <p><strong>Examples</strong></p>
                                            <p><strong>Autosphere</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">         </span><span class="nn">Autosphere.Database</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Get Orders From Database</span><span class="p">
    </span><span class="nf">Connect To Database</span><span class="p">  </span><span class="s">pymysql</span><span class="p">  </span><span class="s">tester</span><span class="p">  </span><span class="s">user</span><span class="p">  </span><span class="s">password</span><span class="p">  </span><span class="s">127.0.0.1</span><span class="p">
    &#64;{</span><span class="nv">orders</span><span class="p">}            </span><span class="nf">Query</span><span class="p">    </span><span class="s">Select * FROM incoming_orders</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">   ${</span><span class="nv">order</span><span class="p">}  </span><span class="s">IN</span><span class="p">  &#64;{</span><span class="nv">orders</span><span class="p">}
        </span><span class="nf">Handle Order</span><span class="p">  ${</span><span class="nv">order</span><span class="p">}
    </span><span class="nf">END</span>
</pre>
                                            <p><strong>Python</strong></p>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Database</span> <span class="kn">import</span> <span class="n">Database</span>
<span class="kn">from</span> <span class="nn">Autosphere.Secrets</span> <span class="kn">import</span> <span class="n">FileSecrets</span>

<span class="n">filesecrets</span> <span class="o">=</span> <span class="n">FileSecrets</span><span class="p">(</span><span class="s2">&quot;secrets.json&quot;</span><span class="p">)</span>
<span class="n">secrets</span> <span class="o">=</span> <span class="n">filesecrets</span><span class="o">.</span><span class="n">get_secret</span><span class="p">(</span><span class="s2">&quot;databasesecrets&quot;</span><span class="p">)</span>

<span class="n">db</span> <span class="o">=</span> <span class="n">Database</span><span class="p">()</span>
<span class="n">db</span><span class="o">.</span><span class="n">connect_to_database</span><span class="p">(</span><span class="s1">'pymysql'</span><span class="p">,</span>
                    <span class="n">secrets</span><span class="p">[</span><span class="s2">&quot;DATABASE&quot;</span><span class="p">],</span>
                    <span class="n">secrets</span><span class="p">[</span><span class="s2">&quot;USERNAME&quot;</span><span class="p">],</span>
                    <span class="n">secrets</span><span class="p">[</span><span class="s2">&quot;PASSWORD&quot;</span><span class="p">],</span>
                    <span class="s1">'127.0.0.1'</span>
                    <span class="p">)</span>
<span class="n">orders</span> <span class="o">=</span> <span class="n">db</span><span class="o">.</span><span class="n">query</span><span class="p">(</span><span class="s2">&quot;SELECT * FROM incoming_orders&quot;</span><span class="p">)</span>
<span class="k">for</span> <span class="n">order</span> <span class="ow">in</span> <span class="n">orders</span><span class="p">:</span>
    <span class="nb">print</span><span class="p">(</span><span class="n">order</span><span class="p">)</span>
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
                                                        <div class="keyword" id="call-stored-procedure">
                                                            <h2><a href="#call-stored-procedure">Call Stored Procedure</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Call stored procedure with name and params.</p>
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
                                                                        <td>procedure name</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>params</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>parameters for the procedure as a list, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>sanstran</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>run command without an explicit transaction commit or rollback, defaults to False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param name:</th>
                                                                            <td class="field-body">procedure name</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param params:</th>
                                                                            <td class="field-body">parameters for the procedure as a list, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param sanstran:</th>
                                                                            <td class="field-body">run command without an explicit transaction commit or rollback, defaults to False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{params}     Create List   FirstParam   SecondParam   ThirdParam
&#64;{results}    Call Stored Procedure   mystpr  ${params}
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="connect-to-database">
                                                            <h2><a href="#connect-to-database">Connect To Database</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Connect to database using DB API 2.0 module.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>module_name</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>database module to use</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>database</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>name of the database</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>username</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>of the user accessing the database</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>of the user accessing the database</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>host</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>SQL server address</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>port</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>SQL server port</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>charset</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>for example, "utf-8", defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>config_file</td>
                                                                        <td></td>
                                                                        <td>db.cfg</td>
                                                                        <td>location of configuration file, defaults to "db.cfg"</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param module_name:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">database module to use</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param database:</th>
                                                                            <td class="field-body">name of the database</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param username:</th>
                                                                            <td class="field-body">of the user accessing the database</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param password:</th>
                                                                            <td class="field-body">of the user accessing the database</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param host:</th>
                                                                            <td class="field-body">SQL server address</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param port:</th>
                                                                            <td class="field-body">SQL server port</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param charset:</th>
                                                                            <td class="field-body">for example, &quot;utf-8&quot;, defaults to None</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param config_file:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">location of configuration file, defaults to &quot;db.cfg&quot;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Connect To Database  pymysql  database  username  password  host  port
Connect To Database  ${CURDIR}${/}resources${/}dbconfig.cfg
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="description">
                                                            <h2><a href="#description">Description</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get description of the SQL table</p>
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
                                                                        <td>name of the SQL table</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">name of the SQL table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Connect To Database    pymysql  mydb  user  pass  127.0.0.1
${db_description}      Description  mytable
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="disconnect-from-database">
                                                            <h2><a href="#disconnect-from-database">Disconnect From Database</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Close connection to SQL database</p>



                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Connect To Database    pymysql  mydb  user  pass  127.0.0.1
${result}              Query   Select firstname, lastname FROM table
Disconnect From Database
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="execute-sql-script">
                                                            <h2><a href="#execute-sql-script">Execute Sql Script</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Execute content of SQL script as SQL commands.</p>
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
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>filepath to SQL script to execute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>sanstran</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>run command without an explicit transaction commit or rollback, defaults to False</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">filepath to SQL script to execute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param sanstran:</th>
                                                                            <td class="field-body">run command without an explicit transaction commit or rollback, defaults to False</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Execute SQL Script   script.sql
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-number-of-rows">
                                                            <h2><a href="#get-number-of-rows">Get Number Of Rows</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get number of rows in a table. Conditions can be given as arguments for WHERE clause.
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
                                                                        <td>name of the SQL table</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>conditions</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>restrictions for selections, defaults to None</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Get number of rows in a table. Conditions can be given as arguments for WHERE clause.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">name of the SQL table</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param conditions:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">restrictions for selections, defaults to None</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
${count}   Get Number Of Rows  tablename
${count}   Get Number Of Rows  tablename  column1=5 and column2='x'
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-rows">
                                                            <h2><a href="#get-rows">Get Rows</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get rows from table. Columns and conditions can be set to filter result.</p>
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
                                                                        <td>name of the SQL table</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>columns</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>name of columns to return, defaults to None means that all columns are returned</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>conditions</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>limiting result by WHERE clause, defaults to None</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_table</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>if result should be instance of Table, defaults to True False means that return type would be list</td>
                                                                    </tr>
                                                                </table>

                                                                <p>Get rows from table. Columns and conditions can be set to filter result.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param table:</th>
                                                                            <td class="field-body">name of the SQL table</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param columns:</th>
                                                                            <td class="field-body">name of columns to return, defaults to <cite>None</cite> means that all columns are returned</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param conditions:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">limiting result by WHERE clause, defaults to <cite>None</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_table:</th>
                                                                            <td class="field-body">if result should be instance of <tt class="docutils literal">Table</tt>, defaults to <cite>True</cite>
                                                                                <cite>False</cite> means that return type would be <cite>list</cite>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{res}   Get Rows  tablename  arvo
&#64;{res}   Get Rows  tablename  arvo  columns=id,name
&#64;{res}   Get Rows  tablename  columns=id  conditions=column1='newvalue'
&#64;{res}   Get Rows  tablename  conditions=column2='updatedvalue'
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="query">
                                                            <h2><a href="#query">Query</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Make a SQL query.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>statement</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>SQL statement to execute</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>assertion</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>assert on query result, row_count or columns. Works only for SELECT statements Defaults to None.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>sanstran</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td>run command without an explicit transaction commit or rollback, defaults to False</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_table</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>if result should be instance of Table, defaults to True False means that return type would be list</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param statement:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">SQL statement to execute</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param assertion:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">assert on query result, row_count or columns. Works only for SELECT statements Defaults to None.</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param sanstran:</th>
                                                                            <td class="field-body">run command without an explicit transaction commit or rollback, defaults to False</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param as_table:</th>
                                                                            <td class="field-body">if result should be instance of <tt class="docutils literal">Table</tt>, defaults to <cite>True</cite>
                                                                                <cite>False</cite> means that return type would be <cite>list</cite>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
&#64;{res}   Query   Select firstname, lastname FROM table
FOR  ${row}  IN  &#64;{RES}
    Log   ${row}
END
&#64;{res}   Query  Select * FROM table  row_count &gt; ${EXPECTED}
&#64;{res}   Query  Select * FROM table  'arvo' in columns
&#64;{res}   Query  Select * FROM table  columns == ['id', 'arvo']
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-auto-commit">
                                                            <h2><a href="#set-auto-commit">Set Auto Commit</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set database auto commit mode.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>autocommit</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td>boolean value for auto commit, defaults to True</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param autocommit:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">boolean value for auto commit, defaults to True</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <h4>Examples</h4>
                                                                <pre><code class="line-numbers language-robot">*** Tasks ***
Set Auto Commit             # auto commit is set on
Set Auto Commit   False     # auto commit is turned off
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
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()" type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-call-stored-procedure" href="#call-stored-procedure" class="">Call Stored Procedure</a></li>
                                                    <li><a id="link-connect-to-database" href="#connect-to-database" class="">Connect To Database</a></li>
                                                    <li><a id="link-description" href="#description" class="">Description</a></li>
                                                    <li><a id="link-disconnect-from-database" href="#disconnect-from-database" class="">Disconnect From Database</a></li>
                                                    <li><a id="link-execute-sql-script" href="#execute-sql-script" class="">Execute Sql Script</a></li>
                                                    <li><a id="link-get-number-of-rows" href="#get-number-of-rows" class="">Get Number Of Rows</a></li>
                                                    <li><a id="link-get-rows" href="#get-rows" class="">Get Rows</a></li>
                                                    <li><a id="link-query" href="#query" class="">Query</a></li>
                                                    <li><a id="link-set-auto-commit" href="#set-auto-commit" class="">Set Auto Commit</a></li>
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