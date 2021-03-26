
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Images</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-images">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-images/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><em>DEPRECATED</em> For image-based automation use <cite>Autosphere.Desktop</cite> instead.
                                </p>
                                <p><cite>Images</cite> is a library for taking screenshots, matching templates, and generally manipulating images. It can also be used for GUI-based automation when traditional UI locators are not available.</p>
                                <p><strong>Coordinates</strong></p>
                                <p>The coordinates used in the library are pairs of x and y values that represent pixels. The upper left corner of the image or screen is (0, 0). The x-coordinate increases towards the right, and the y-coordinate increases
                                    towards the bottom.</p>
                                <p>Regions are represented as tuples of (left, top, right, bottom). For example, a 400 by 200-pixel region in the upper left corner would be (0, 0, 400, 200).</p>
                                <p><strong>Template matching</strong></p>
                                <p>Template matching refers to an operation where the (potential) location of a smaller image is searched from a larger image. It can be used for verifying certain conditions or locating UI elements for desktop or web automation.</p>
                                <p><strong>Requirements</strong></p>
                                <p>The default installation depends on <a class="reference external" href="https://python-pillow.org/">Pillow</a> library, which is used for general image manipulation operations.</p>
                                <p>For more robust and faster template matching, the library can use a combination of <a class="reference external" href="https://numpy.org/">NumPy</a> and <a class="reference external" href="https://opencv.org/">OpenCV</a>.
                                    They can be installed by opting in to the <cite>cv</cite> dependency:</p>
                                <p><tt class="docutils literal">pip install Autosphereframework[cv]</tt></p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <p>The <cite>Images</cite> library can be imported and used directly in Autosphere, for instance, for capturing screenshots or verifying something on the screen.</p>
                                <p>Desktop automation based on images should be done using the corresponding desktop library, i.e. <tt class="docutils literal">Autosphere.Desktop</tt>.</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Images</span><span class="p">

</span><span class="gh">*** Keywords ***</span><span class="p">
</span><span class="gu">Should show success</span><span class="p">
    [</span><span class="kn">Documentation</span><span class="p">]    </span><span class="s">Raises ImageNotFoundError if success image is not on screen</span><span class="p">
    </span><span class="nf">Find template on screen</span><span class="p">    ${</span><span class="nv">CURDIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">success.png</span><span class="p">

</span><span class="gu">Save screenshot to results</span><span class="p">
    [</span><span class="kn">Documentation</span><span class="p">]    </span><span class="s">Saves screenshot of desktop with unique name</span><span class="p">
    ${</span><span class="nv">timestamp</span><span class="p">}=      </span><span class="nf">Get current date</span><span class="p">    </span><span class="s">result_format=%H%M%S</span><span class="p">
    </span><span class="nf">Take screenshot</span><span class="p">    </span><span class="s">filename=</span><span class="p">${</span><span class="nv">OUTPUT_DIR</span><span class="p">}${</span><span class="nv">/</span><span class="p">}</span><span class="s">desktop_</span><span class="p">${</span><span class="nv">timestamp</span><span class="p">}</span><span class="s">.png</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Images</span> <span class="kn">import</span> <span class="n">Images</span>

<span class="k">def</span> <span class="nf">draw_matches_on_desktop</span><span class="p">(</span><span class="n">template</span><span class="p">):</span>
    <span class="n">lib</span> <span class="o">=</span> <span class="n">Images</span><span class="p">()</span>
    <span class="n">screenshot</span> <span class="o">=</span> <span class="n">lib</span><span class="o">.</span><span class="n">take_screenshot</span><span class="p">()</span>

    <span class="n">matches</span> <span class="o">=</span> <span class="n">lib</span><span class="o">.</span><span class="n">find_template_in_image</span><span class="p">(</span><span class="n">screenshot</span><span class="p">,</span> <span class="n">template</span><span class="p">)</span>
    <span class="k">for</span> <span class="n">match</span> <span class="ow">in</span> <span class="n">matches</span><span class="p">:</span>
        <span class="n">lib</span><span class="o">.</span><span class="n">show_region_in_image</span><span class="p">(</span><span class="n">screenshot</span><span class="p">,</span> <span class="n">match</span><span class="p">)</span>

    <span class="n">screenshot</span><span class="o">.</span><span class="n">save</span><span class="p">(</span><span class="s2">&quot;matches.png&quot;</span><span class="p">)</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
            
