
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.PDF</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-pdf">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-pdf/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>PDF</cite> is a library for managing PDF documents.</p>
                                <p>It provides an easy method of generating a PDF document from an HTML formatted template file.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.PDF</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">TEMPLATE</span><span class="p">}    </span><span class="s">order.template</span><span class="p">
${</span><span class="nv">PDF</span><span class="p">}         </span><span class="s">result.pdf</span><span class="p">
&amp;{</span><span class="nv">VARS</span><span class="p">}        </span><span class="s">name=Robot Generated</span><span class="p">
...            </span><span class="s">email=robot&#64;domain.com</span><span class="p">
...            </span><span class="s">zip=00100</span><span class="p">
...            </span><span class="s">items=Item 1, Item 2</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Create PDF from HTML template</span><span class="p">
    </span><span class="nf">Template HTML to PDF</span><span class="p">   ${</span><span class="nv">TEMPLATE</span><span class="p">}  ${</span><span class="nv">PDF</span><span class="p">}  ${</span><span class="nv">VARS</span><span class="p">}</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.PDF</span> <span class="kn">import</span> <span class="n">PDF</span>

<span class="n">p</span> <span class="o">=</span> <span class="n">PDF</span><span class="p">()</span>
<span class="n">orders</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;item 1&quot;</span><span class="p">,</span> <span class="s2">&quot;item 2&quot;</span><span class="p">,</span> <span class="s2">&quot;item 3&quot;</span><span class="p">]</span>
<span class="nb">vars</span> <span class="o">=</span> <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="p">:</span> <span class="s2">&quot;Robot Process&quot;</span><span class="p">,</span>
    <span class="s2">&quot;email&quot;</span><span class="p">:</span> <span class="s2">&quot;robot&#64;domain.com&quot;</span><span class="p">,</span>
    <span class="s2">&quot;zip&quot;</span><span class="p">:</span> <span class="s2">&quot;00100&quot;</span><span class="p">,</span>
    <span class="s2">&quot;items&quot;</span><span class="p">:</span> <span class="s2">&quot;&lt;br/&gt;&quot;</span><span class="o">.</span><span class="n">join</span><span class="p">(</span><span class="n">orders</span><span class="p">),</span>
<span class="p">}</span>
<span class="n">p</span><span class="o">.</span><span class="n">template_html_to_pdf</span><span class="p">(</span><span class="s2">&quot;order.template&quot;</span><span class="p">,</span> <span class="s2">&quot;order.pdf&quot;</span><span class="p">,</span> <span class="nb">vars</span><span class="p">)</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           