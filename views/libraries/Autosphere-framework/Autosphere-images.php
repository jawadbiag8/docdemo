<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Images</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Images</li>
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
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                    <div>
                                                        <div class="keyword" id="crop-image">
                                                            <h2><a href="#crop-image">Crop Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Crop an existing image.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>image</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Image to crop</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>region</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Region to crop image to</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Save cropped image to filename</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param image:</th>
                                                                            <td class="field-body">Image to crop</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param region:</th>
                                                                            <td class="field-body">Region to crop image to</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">Save cropped image to filename</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-template-in-image">
                                                            <h2><a href="#find-template-in-image">Find Template In Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc"><em>DEPRECATED</em> Use keyword <cite>Find</cite> from library
                                                                    <cite>Autosphere.Recognition</cite> instead Attempt to find the template from the given image.
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
                                                                        <td>image</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Path to image or Image instance, used to search from</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>template</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Path to image or Image instance, used to search with</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>region</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Area to search from. Can speed up search significantly.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>limit</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Limit returned results to maximum of limit.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>tolerance</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Tolerance for matching, value between 0.1 and 1.0</td>
                                                                    </tr>
                                                                </table>

                                                                <p><em>DEPRECATED</em> Use keyword <cite>Find</cite> from library <cite>Autosphere.Recognition</cite> instead Attempt to find the template from the given image.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param image:</th>
                                                                            <td class="field-body">Path to image or Image instance, used to search from</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param template:</th>
                                                                            <td class="field-body">Path to image or Image instance, used to search with</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param limit:</th>
                                                                            <td class="field-body">Limit returned results to maximum of <cite>limit</cite>.</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param region:</th>
                                                                            <td class="field-body">Area to search from. Can speed up search significantly.</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param tolerance:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">Tolerance for matching, value between 0.1 and 1.0</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">List of matching regions</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">raises ImageNotFoundError:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">No match was found</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="find-template-on-screen">
                                                            <h2><a href="#find-template-on-screen">Find Template On Screen</a></h2>

                                                            <div>
                                                                <p class="shortdoc"><em>DEPRECATED!!</em> use <cite>Autosphere.Desktop.Find Element</cite> instead Attempt to find the template image from the current desktop. For argument descriptions, see <tt class="docutils literal">find_template_in_image()</tt></p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>template</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><em>DEPRECATED!!</em> use <cite>Autosphere.Desktop.Find Element</cite> instead Attempt to find the template image from the current desktop. For argument descriptions, see <tt class="docutils literal">find_template_in_image()</tt></p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-pixel-color-in-image">
                                                            <h2><a href="#get-pixel-color-in-image">Get Pixel Color In Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get the RGB value of a pixel in the image.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>image</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>image to get pixel from</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>point</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>coordinates for pixel or Point object</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param image:</th>
                                                                            <td class="field-body">image to get pixel from</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param point:</th>
                                                                            <td class="field-body">coordinates for pixel or Point object</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-pixel-color-on-screen">
                                                            <h2><a href="#get-pixel-color-on-screen">Get Pixel Color On Screen</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get the RGB value of a pixel currently on screen.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>point</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>coordinates for pixel or Point object</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param point:</th>
                                                                            <td class="field-body">coordinates for pixel or Point object</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="show-region-in-image">
                                                            <h2><a href="#show-region-in-image">Show Region In Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Draw a rectangle onto the image around the given region.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>image</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>image to draw onto</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>region</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>coordinates for region or Region object</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>color</td>
                                                                        <td></td>
                                                                        <td>red</td>
                                                                        <td>color of rectangle</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>width</td>
                                                                        <td></td>
                                                                        <td>5</td>
                                                                        <td>line width of rectangle</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param image:</th>
                                                                            <td class="field-body">image to draw onto</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param region:</th>
                                                                            <td class="field-body">coordinates for region or Region object</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param color:</th>
                                                                            <td class="field-body">color of rectangle</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param width:</th>
                                                                            <td class="field-body">line width of rectangle</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="show-region-on-screen">
                                                            <h2><a href="#show-region-on-screen">Show Region On Screen</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Draw a rectangle around the given region on the current desktop.</p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>region</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>coordinates for region or Region object</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>color</td>
                                                                        <td></td>
                                                                        <td>red</td>
                                                                        <td>color of rectangle</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>width</td>
                                                                        <td></td>
                                                                        <td>5</td>
                                                                        <td>line width of rectangle</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param region:</th>
                                                                            <td class="field-body">coordinates for region or Region object</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param color:</th>
                                                                            <td class="field-body">color of rectangle</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param width:</th>
                                                                            <td class="field-body">line width of rectangle</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="take-screenshot">
                                                            <h2><a href="#take-screenshot">Take Screenshot</a></h2>

                                                            <div>
                                                                <p class="shortdoc"><em>DEPRECATED</em> Use keyword <cite>Autosphere.Desktop.Take Screenshot</cite> instead Take a screenshot of the current desktop.</p>
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
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Save screenshot to filename</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>region</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td>Region to crop screenshot to</td>
                                                                    </tr>
                                                                </table>

                                                                <p><em>DEPRECATED</em> Use keyword <cite>Autosphere.Desktop.Take Screenshot</cite> instead Take a screenshot of the current desktop.</p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param filename:</th>
                                                                            <td class="field-body">Save screenshot to filename</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param region:</th>
                                                                            <td class="field-body">Region to crop screenshot to</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-template-on-screen">
                                                            <h2><a href="#wait-template-on-screen">Wait Template On Screen</a></h2>

                                                            <div>
                                                                <p class="shortdoc"><em>DEPRECATED!!</em> use <cite>Autosphere.Desktop.Wait For Element</cite> instead Wait for template image to appear on current desktop. For further argument descriptions, see <tt class="docutils literal">find_template_in_image()</tt></p>
                                                                <h3>Arguments</h3>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>template</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>5</td>
                                                                        <td>Time to wait for template (in seconds)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**kwargs</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><em>DEPRECATED!!</em> use <cite>Autosphere.Desktop.Wait For Element</cite> instead Wait for template image to appear on current desktop. For further argument descriptions, see <tt class="docutils literal">find_template_in_image()</tt></p>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param timeout:</th>
                                                                            <td class="field-body">Time to wait for template (in seconds)</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
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
                                                    <li><a id="link-crop-image" href="#crop-image" class="">Crop Image</a></li>
                                                    <li><a id="link-find-template-in-image" href="#find-template-in-image" class="">Find Template In Image</a></li>
                                                    <li><a id="link-find-template-on-screen" href="#find-template-on-screen" class="">Find Template On Screen</a></li>
                                                    <li><a id="link-get-pixel-color-in-image" href="#get-pixel-color-in-image" class="">Get Pixel Color In Image</a></li>
                                                    <li><a id="link-get-pixel-color-on-screen" href="#get-pixel-color-on-screen" class="">Get Pixel Color On Screen</a></li>
                                                    <li><a id="link-show-region-in-image" href="#show-region-in-image" class="">Show Region In Image</a></li>
                                                    <li><a id="link-show-region-on-screen" href="#show-region-on-screen" class="">Show Region On Screen</a></li>
                                                    <li><a id="link-take-screenshot" href="#take-screenshot" class="">Take Screenshot</a></li>
                                                    <li><a id="link-wait-template-on-screen" href="#wait-template-on-screen" class="">Wait Template On Screen</a></li>
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