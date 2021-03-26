
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.FTP</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-ftp">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-ftp/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>FTP</cite> library can be used to access an FTP server, and interact with files.</p>
                                <p>The library is based on Python's built-in <a class="reference external" href="https://docs.python.org/3/library/ftplib.html">ftplib</a>.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.FTP</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">HOST</span><span class="p">}       </span><span class="s">127.0.0.1</span><span class="p">
${</span><span class="nv">PORT</span><span class="p">}       </span><span class="s">27345</span><span class="p">
${</span><span class="nv">USER</span><span class="p">}       </span><span class="s">user</span><span class="p">
${</span><span class="nv">PASS</span><span class="p">}       </span><span class="s">12345</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">List files on the server directory</span><span class="p">
    </span><span class="nf">Connect</span><span class="p">   ${</span><span class="nv">HOST</span><span class="p">}  ${</span><span class="nv">PORT</span><span class="p">}  ${</span><span class="nv">USER</span><span class="p">}  ${</span><span class="nv">PASS</span><span class="p">}
    &#64;{</span><span class="nv">files</span><span class="p">}  </span><span class="nf">List Files</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">  ${</span><span class="nv">file</span><span class="p">}  </span><span class="s">IN</span><span class="p">  &#64;{</span><span class="nv">files</span><span class="p">}
        </span><span class="nf">Log</span><span class="p">  ${</span><span class="nv">file</span><span class="p">}
    </span><span class="nf">END</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.FTP</span> <span class="kn">import</span> <span class="n">FTP</span>

<span class="n">library</span> <span class="o">=</span> <span class="n">FTP</span><span class="p">()</span>
<span class="n">library</span><span class="o">.</span><span class="n">connect</span><span class="p">(</span><span class="s1">'127.0.0.1'</span><span class="p">,</span> <span class="mi">27345</span><span class="p">,</span> <span class="s1">'user'</span><span class="p">,</span> <span class="s1">'12345'</span><span class="p">)</span>
<span class="n">files</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">list_files</span><span class="p">()</span>
<span class="k">for</span> <span class="n">f</span> <span class="ow">in</span> <span class="n">files</span><span class="p">:</span>
    <span class="nb">print</span><span class="p">(</span><span class="n">f</span><span class="p">)</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
          