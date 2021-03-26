
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.FileSystem</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-filesystem">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-filesystem/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p>The <cite>FileSystem</cite> library can be used to interact with files and directories on the local computer. It can inspect and list files, remove and create them, read contents from files, and write data out.</p>
                                <p>It shadows the built-in <cite>OperatingSystem</cite> library but contains keywords which are more Autosphere-oriented.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <p>The library allows, for instance, iterating over files and inspecting them.</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.FileSystem</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Delete large files</span><span class="p">
    ${</span><span class="nv">files</span><span class="p">}=    </span><span class="nf">List files in directory</span><span class="p">    </span><span class="s">archive/orders/</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">    ${</span><span class="nv">file</span><span class="p">}  </span><span class="s">IN</span><span class="p">  &#64;{</span><span class="nv">FILES</span><span class="p">}
        </span><span class="nf">Run keyword if</span><span class="p">    ${</span><span class="nv">file.size</span><span class="p">}</span><span class="s"> &gt; 10**8</span><span class="p">    </span><span class="s">Remove file</span><span class="p">    ${</span><span class="nv">file</span><span class="p">}
    </span><span class="nf">END</span><span class="p">

</span><span class="gu">Read process output</span><span class="p">
    </span><span class="nf">Start external program</span><span class="p">
    </span><span class="nf">Wait until modified</span><span class="p">    </span><span class="s">process.log</span><span class="p">
    ${</span><span class="nv">output</span><span class="p">}=  </span><span class="nf">Read file</span><span class="p">  </span><span class="s">process.log</span><span class="p">
    [</span><span class="kn">Return</span><span class="p">]    ${</span><span class="nv">output</span><span class="p">}</span>
</pre>
                                <p><strong>Python</strong></p>
                                <p>The library can also be used inside Python.</p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.FileSystem</span> <span class="kn">import</span> <span class="n">FileSystem</span>

<span class="k">def</span> <span class="nf">move_to_archive</span><span class="p">():</span>
    <span class="n">lib</span> <span class="o">=</span> <span class="n">FileSystem</span><span class="p">()</span>

    <span class="n">matches</span> <span class="o">=</span> <span class="n">lib</span><span class="o">.</span><span class="n">find_files</span><span class="p">(</span><span class="s2">&quot;**/*.xlsx&quot;</span><span class="p">)</span>
    <span class="k">if</span> <span class="n">matches</span><span class="p">:</span>
        <span class="n">lib</span><span class="o">.</span><span class="n">create_directory</span><span class="p">(</span><span class="s2">&quot;archive&quot;</span><span class="p">)</span>
        <span class="n">lib</span><span class="o">.</span><span class="n">move_files</span><span class="p">(</span><span class="n">matches</span><span class="p">,</span> <span class="s2">&quot;archive&quot;</span><span class="p">)</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           