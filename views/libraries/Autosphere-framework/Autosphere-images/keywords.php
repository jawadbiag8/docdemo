
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
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-images">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-images/keywords">Keywords</a></nav>
                    </div>
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
                                                <cite>Autosphere.Recognition</cite> instead Attempt to find the template from the given image.</p>
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
                        <aside class="sc-iJuUWI jaFBcT">
                            <form>
                                <h5>Keywords</h5>
                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                      fill="#fff"></path>
                  </svg></fieldset>
                            </form>
                            <div><a id="link-crop-image" href="#crop-image" class="">Crop Image</a><a id="link-find-template-in-image" href="#find-template-in-image" class="">Find Template In
                  Image</a><a id="link-find-template-on-screen" href="#find-template-on-screen" class="">Find Template On Screen</a><a id="link-get-pixel-color-in-image" href="#get-pixel-color-in-image" class="">Get Pixel Color In Image</a>
                                <a id="link-get-pixel-color-on-screen" href="#get-pixel-color-on-screen" class="">Get Pixel Color On Screen</a><a id="link-show-region-in-image" href="#show-region-in-image" class="">Show Region In Image</a>
                                <a id="link-show-region-on-screen" href="#show-region-on-screen" class="">Show Region On Screen</a>
                                <a id="link-take-screenshot" href="#take-screenshot" class="">Take Screenshot</a><a id="link-wait-template-on-screen" href="#wait-template-on-screen" class="">Wait Template
                  On Screen</a></div>
                        </aside>
                    </div>
                </article>
           