
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Database</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-database">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-database/keywords">Keywords</a></nav>
                    </div>
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
                </article>
           
