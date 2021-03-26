
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Tables</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-tables">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-tables/keywords">Keywords</a></nav>
                    </div>
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
                </article>
           