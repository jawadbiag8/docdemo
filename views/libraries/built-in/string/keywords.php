
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>String</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/string">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/string/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="convert-to-lower-case">
                                        <h2><a href="#convert-to-lower-case">Convert To Lower Case</a></h2>

                                        <div>
                                            <p class="shortdoc">Converts string to lower case.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Uses Python's standard <a href="https://docs.python.org/library/stdtypes.html#str.lower">lower()</a> method.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${str1} =</td>
                                                    <td>Convert To Lower Case</td>
                                                    <td>ABC</td>
                                                </tr>
                                                <tr>
                                                    <td>${str2} =</td>
                                                    <td>Convert To Lower Case</td>
                                                    <td>1A2c3D</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str1}</td>
                                                    <td>abc</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str2}</td>
                                                    <td>1a2c3d</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="convert-to-title-case">
                                        <h2><a href="#convert-to-title-case">Convert To Title Case</a></h2>

                                        <div>
                                            <p class="shortdoc">Converts string to title case.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Uses the following algorithm:</p>
                                            <ul>
                                                <li>Split the string to words from whitespace characters (spaces, newlines, etc.).</li>
                                                <li>Exclude words that are not all lower case. This preserves, for example, "OK" and "iPhone".
                                                </li>
                                                <li>Exclude also words listed in the optional <code>exclude</code> argument.</li>
                                                <li>Title case the first alphabetical character of each word that has not been excluded.</li>
                                                <li>Join all words together so that original whitespace is preserved.</li>
                                            </ul>
                                            <p>Explicitly excluded words can be given as a list or as a string with words separated by a comma and an optional space. Excluded words are actually considered to be regular expression patterns, so it is possible
                                                to use something like "example[.!?]?" to match the word "example" on it own and also if followed by ".", "!" or "?". See BuiltIn.Should Match Regexp for more information about Python regular expression syntax
                                                in general and how to use it in Autosphere test data in particular.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${str1} =</td>
                                                    <td>Convert To Title Case</td>
                                                    <td>hello, world!</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${str2} =</td>
                                                    <td>Convert To Title Case</td>
                                                    <td>it's an OK iPhone</td>
                                                    <td>exclude=a, an, the</td>
                                                </tr>
                                                <tr>
                                                    <td>${str3} =</td>
                                                    <td>Convert To Title Case</td>
                                                    <td>distance is 1 km.</td>
                                                    <td>exclude=is, km.?</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str1}</td>
                                                    <td>Hello, World!</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str2}</td>
                                                    <td>It's an OK iPhone</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str3}</td>
                                                    <td>Distance is 1 km.</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>The reason this keyword does not use Python's standard <a href="https://docs.python.org/library/stdtypes.html#str.title">title()</a> method is that it can yield undesired results, for example, if strings contain
                                                upper case letters or special characters like apostrophes. It would, for example, convert "it's an OK iPhone" to "It'S An Ok Iphone".
                                            </p>
                                    
                                        </div>
                                    </div>

                                    <div class="keyword" id="convert-to-upper-case">
                                        <h2><a href="#convert-to-upper-case">Convert To Upper Case</a></h2>

                                        <div>
                                            <p class="shortdoc">Converts string to upper case.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Uses Python's standard <a href="https://docs.python.org/library/stdtypes.html#str.upper">upper()</a> method.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${str1} =</td>
                                                    <td>Convert To Upper Case</td>
                                                    <td>abc</td>
                                                </tr>
                                                <tr>
                                                    <td>${str2} =</td>
                                                    <td>Convert To Upper Case</td>
                                                    <td>1a2C3d</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str1}</td>
                                                    <td>ABC</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str2}</td>
                                                    <td>1A2C3D</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="decode-bytes-to-string">
                                        <h2><a href="#decode-bytes-to-string">Decode Bytes To String</a></h2>

                                        <div>
                                            <p class="shortdoc">Decodes the given ``bytes`` to a Unicode string using the given ``encoding``.
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
                                                    <td>bytes</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>encoding</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>errors</td>
                                                    <td></td>
                                                    <td>strict</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Decodes the given <code>bytes</code> to a Unicode string using the given <code>encoding</code>.
                                            </p>
                                            <p><code>errors</code> argument controls what to do if decoding some bytes fails. All values accepted by <code>decode</code> method in Python are valid, but in practice the following values are most useful:</p>
                                            <ul>
                                                <li><code>strict</code>: fail if characters cannot be decoded (default)</li>
                                                <li><code>ignore</code>: ignore characters that cannot be decoded</li>
                                                <li><code>replace</code>: replace characters that cannot be decoded with a replacement character
                                                </li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${string} =</td>
                                                    <td>Decode Bytes To String</td>
                                                    <td>${bytes}</td>
                                                    <td>UTF-8</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${string} =</td>
                                                    <td>Decode Bytes To String</td>
                                                    <td>${bytes}</td>
                                                    <td>ASCII</td>
                                                    <td>errors=ignore</td>
                                                </tr>
                                            </table>
                                            <p>Use <a href="#Encode%20String%20To%20Bytes" class="name">Encode String To Bytes</a> if you need to convert Unicode strings to byte strings, and Convert To String in <code>BuiltIn</code> if you need to convert
                                                arbitrary objects to Unicode strings.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="encode-string-to-bytes">
                                        <h2><a href="#encode-string-to-bytes">Encode String To Bytes</a></h2>

                                        <div>
                                            <p class="shortdoc">Encodes the given Unicode ``string`` to bytes using the given ``encoding``.
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
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>encoding</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>errors</td>
                                                    <td></td>
                                                    <td>strict</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Encodes the given Unicode <code>string</code> to bytes using the given <code>encoding</code>.
                                            </p>
                                            <p><code>errors</code> argument controls what to do if encoding some characters fails. All values accepted by <code>encode</code> method in Python are valid, but in practice the following values are most useful:</p>
                                            <ul>
                                                <li><code>strict</code>: fail if characters cannot be encoded (default)</li>
                                                <li><code>ignore</code>: ignore characters that cannot be encoded</li>
                                                <li><code>replace</code>: replace characters that cannot be encoded with a replacement character
                                                </li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${bytes} =</td>
                                                    <td>Encode String To Bytes</td>
                                                    <td>${string}</td>
                                                    <td>UTF-8</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${bytes} =</td>
                                                    <td>Encode String To Bytes</td>
                                                    <td>${string}</td>
                                                    <td>ASCII</td>
                                                    <td>errors=ignore</td>
                                                </tr>
                                            </table>
                                            <p>Use Convert To Bytes in <code>BuiltIn</code> if you want to create bytes based on character or integer sequences. Use <a href="#Decode%20Bytes%20To%20String" class="name">Decode Bytes To
                          String</a> if you need to convert byte strings to Unicode strings and Convert To String in
                                                <code>BuiltIn</code> if you need to convert arbitrary objects to Unicode.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="fetch-from-left">
                                        <h2><a href="#fetch-from-left">Fetch From Left</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns contents of the ``string`` before the first occurrence of ``marker``.
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
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>marker</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns contents of the <code>string</code> before the first occurrence of <code>marker</code>.
                                            </p>
                                            <p>If the <code>marker</code> is not found, whole string is returned.</p>
                                            <p>See also <a href="#Fetch%20From%20Right" class="name">Fetch From Right</a>, <a href="#Split%20String" class="name">Split String</a> and <a href="#Split%20String%20From%20Right" class="name">Split String From Right</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="fetch-from-right">
                                        <h2><a href="#fetch-from-right">Fetch From Right</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns contents of the ``string`` after the last occurrence of ``marker``.
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
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>marker</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns contents of the <code>string</code> after the last occurrence of <code>marker</code>.
                                            </p>
                                            <p>If the <code>marker</code> is not found, whole string is returned.</p>
                                            <p>See also <a href="#Fetch%20From%20Left" class="name">Fetch From Left</a>, <a href="#Split%20String" class="name">Split String</a> and <a href="#Split%20String%20From%20Right" class="name">Split String From Right</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="format-string">
                                        <h2><a href="#format-string">Format String</a></h2>

                                        <div>
                                            <p class="shortdoc">Formats a ``template`` using the given ``positional`` and ``named`` arguments.
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
                                                    <td>template</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*positional</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>**named</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Formats a <code>template</code> using the given <code>positional</code> and <code>named</code> arguments.
                                            </p>
                                            <p>The template can be either be a string or an absolute path to an existing file. In the latter case the file is read and its contents are used as the template. If the template file contains non-ASCII characters,
                                                it must be encoded using UTF-8.</p>
                                            <p>The template is formatted using Python's <a href="https://docs.python.org/library/string.html#format-string-syntax">format string
                          syntax</a>. Placeholders are marked using <code>{}</code> with possible field name and format specification inside. Literal curly braces can be inserted by doubling them like {{ and }}.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${to} =</td>
                                                    <td>Format String</td>
                                                    <td>To: {} &lt;{}&gt;</td>
                                                    <td>${user}</td>
                                                    <td>${email}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${to} =</td>
                                                    <td>Format String</td>
                                                    <td>To: {name} &lt;{email}&gt;</td>
                                                    <td>name=${name}</td>
                                                    <td>email=${email}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${to} =</td>
                                                    <td>Format String</td>
                                                    <td>To: {user.name} &lt;{user.email}&gt;</td>
                                                    <td>user=${user}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${xx} =</td>
                                                    <td>Format String</td>
                                                    <td>{:*^30}</td>
                                                    <td>centered</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${yy} =</td>
                                                    <td>Format String</td>
                                                    <td>{0:{width}{base}}</td>
                                                    <td>${42}</td>
                                                    <td>base=X</td>
                                                    <td>width=10</td>
                                                </tr>
                                                <tr>
                                                    <td>${zz} =</td>
                                                    <td>Format String</td>
                                                    <td>${CURDIR}/template.txt</td>
                                                    <td>positional</td>
                                                    <td>named=value</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                 
                                        </div>
                                    </div>

                                    <div class="keyword" id="generate-random-string">
                                        <h2><a href="#generate-random-string">Generate Random String</a></h2>

                                        <div>
                                            <p class="shortdoc">Generates a string with a desired ``length`` from the given ``chars``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>length</td>
                                                    <td></td>
                                                    <td>8</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>chars</td>
                                                    <td></td>
                                                    <td>[LETTERS][NUMBERS]</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Generates a string with a desired <code>length</code> from the given <code>chars</code>.</p>
                                            <p>The population sequence <code>chars</code> contains the characters to use when generating the random string. It can contain any characters, and it is possible to use special markers explained in the table below:</p>
                                            <table border="1">
                                                <tr>
                                                    <th>Marker</th>
                                                    <th>Explanation</th>
                                                </tr>
                                                <tr>
                                                    <td><code>[LOWER]</code></td>
                                                    <td>Lowercase ASCII characters from <code>a</code> to <code>z</code>.</td>
                                                </tr>
                                                <tr>
                                                    <td><code>[UPPER]</code></td>
                                                    <td>Uppercase ASCII characters from <code>A</code> to <code>Z</code>.</td>
                                                </tr>
                                                <tr>
                                                    <td><code>[LETTERS]</code></td>
                                                    <td>Lowercase and uppercase ASCII characters.</td>
                                                </tr>
                                                <tr>
                                                    <td><code>[NUMBERS]</code></td>
                                                    <td>Numbers from 0 to 9.</td>
                                                </tr>
                                            </table>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${ret} =</td>
                                                    <td>Generate Random String</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${low} =</td>
                                                    <td>Generate Random String</td>
                                                    <td>12</td>
                                                    <td>[LOWER]</td>
                                                </tr>
                                                <tr>
                                                    <td>${bin} =</td>
                                                    <td>Generate Random String</td>
                                                    <td>8</td>
                                                    <td>01</td>
                                                </tr>
                                                <tr>
                                                    <td>${hex} =</td>
                                                    <td>Generate Random String</td>
                                                    <td>4</td>
                                                    <td>[NUMBERS]abcdef</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-line">
                                        <h2><a href="#get-line">Get Line</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns the specified line from the given ``string``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>line_number</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns the specified line from the given <code>string</code>.</p>
                                            <p>Line numbering starts from 0 and it is possible to use negative indices to refer to lines from the end. The line is returned without the newline character.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${first} =</td>
                                                    <td>Get Line</td>
                                                    <td>${string}</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>${2nd last} =</td>
                                                    <td>Get Line</td>
                                                    <td>${string}</td>
                                                    <td>-2</td>
                                                </tr>
                                            </table>
                                            <p>Use <a href="#Split%20To%20Lines" class="name">Split To Lines</a> if all lines are needed.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-line-count">
                                        <h2><a href="#get-line-count">Get Line Count</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns and logs the number of lines in the given string.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>

                                    <div class="keyword" id="get-lines-containing-string">
                                        <h2><a href="#get-lines-containing-string">Get Lines Containing String</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns lines of the given ``string`` that contain the ``pattern``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>pattern</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>case_insensitive</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns lines of the given <code>string</code> that contain the <code>pattern</code>.</p>
                                            <p>The <code>pattern</code> is always considered to be a normal string, not a glob or regexp pattern. A line matches if the <code>pattern</code> is found anywhere on it.</p>
                                            <p>The match is case-sensitive by default, but giving <code>case_insensitive</code> a true value makes it case-insensitive. The value is considered true if it is a non-empty string that is not equal to <code>false</code>,
                                                <code>none</code> or <code>no</code>. If the value is not a string, its truth value is got directly in Python. Considering <code>none</code> false is new in RF 3.0.3.
                                            </p>
                                            <p>Lines are returned as one string catenated back together with newlines. Possible trailing newline is never returned. The number of matching lines is automatically logged.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${lines} =</td>
                                                    <td>Get Lines Containing String</td>
                                                    <td>${result}</td>
                                                    <td>An example</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${ret} =</td>
                                                    <td>Get Lines Containing String</td>
                                                    <td>${ret}</td>
                                                    <td>FAIL</td>
                                                    <td>case-insensitive</td>
                                                </tr>
                                            </table>
                                            <p>See <a href="#Get%20Lines%20Matching%20Pattern" class="name">Get Lines Matching Pattern</a> and
                                                <a href="#Get%20Lines%20Matching%20Regexp" class="name">Get Lines Matching Regexp</a> if you need more complex pattern matching.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-lines-matching-pattern">
                                        <h2><a href="#get-lines-matching-pattern">Get Lines Matching Pattern</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns lines of the given ``string`` that match the ``pattern``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>pattern</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>case_insensitive</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns lines of the given <code>string</code> that match the <code>pattern</code>.</p>
                                            <p>The <code>pattern</code> is a <i>glob pattern</i> where:</p>
                                            <table border="1">
                                                <tr>
                                                    <td><code>*</code></td>
                                                    <td>matches everything</td>
                                                </tr>
                                                <tr>
                                                    <td><code>?</code></td>
                                                    <td>matches any single character</td>
                                                </tr>
                                                <tr>
                                                    <td><code>[chars]</code></td>
                                                    <td>matches any character inside square brackets (e.g. <code>[abc]</code> matches either
                                                        <code>a</code>, <code>b</code> or <code>c</code>)</td>
                                                </tr>
                                                <tr>
                                                    <td><code>[!chars]</code></td>
                                                    <td>matches any character not inside square brackets</td>
                                                </tr>
                                            </table>
                                            <p>A line matches only if it matches the <code>pattern</code> fully.</p>
                                            <p>The match is case-sensitive by default, but giving <code>case_insensitive</code> a true value makes it case-insensitive. The value is considered true if it is a non-empty string that is not equal to <code>false</code>,
                                                <code>none</code> or <code>no</code>. If the value is not a string, its truth value is got directly in Python. Considering <code>none</code> false is new in RF 3.0.3.
                                            </p>
                                            <p>Lines are returned as one string catenated back together with newlines. Possible trailing newline is never returned. The number of matching lines is automatically logged.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${lines} =</td>
                                                    <td>Get Lines Matching Pattern</td>
                                                    <td>${result}</td>
                                                    <td>Wild???? example</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${ret} =</td>
                                                    <td>Get Lines Matching Pattern</td>
                                                    <td>${ret}</td>
                                                    <td>FAIL: *</td>
                                                    <td>case_insensitive=true</td>
                                                </tr>
                                            </table>
                                            <p>See <a href="#Get%20Lines%20Matching%20Regexp" class="name">Get Lines Matching Regexp</a> if you need more complex patterns and <a href="#Get%20Lines%20Containing%20String" class="name">Get
                          Lines Containing String</a> if searching literal strings is enough.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-lines-matching-regexp">
                                        <h2><a href="#get-lines-matching-regexp">Get Lines Matching Regexp</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns lines of the given ``string`` that match the regexp ``pattern``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>pattern</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>partial_match</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns lines of the given <code>string</code> that match the regexp <code>pattern</code>.</p>
                                            <p>See BuiltIn.Should Match Regexp for more information about Python regular expression syntax in general and how to use it in Autosphere test data in particular.</p>
                                            <p>By default lines match only if they match the pattern fully, but partial matching can be enabled by giving the <code>partial_match</code> argument a true value. The value is considered true if it is a non-empty
                                                string that is not equal to <code>false</code>, <code>none</code> or
                                                <code>no</code>. If the value is not a string, its truth value is got directly in Python. Considering <code>none</code> false is new in RF 3.0.3.</p>
                                            <p>If the pattern is empty, it matches only empty lines by default. When partial matching is enabled, empty pattern matches all lines.</p>
                                            <p>Notice that to make the match case-insensitive, you need to prefix the pattern with case-insensitive flag <code>(?i)</code>.</p>
                                            <p>Lines are returned as one string concatenated back together with newlines. Possible trailing newline is never returned. The number of matching lines is automatically logged.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${lines} =</td>
                                                    <td>Get Lines Matching Regexp</td>
                                                    <td>${result}</td>
                                                    <td>Reg\\w{3} example</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${lines} =</td>
                                                    <td>Get Lines Matching Regexp</td>
                                                    <td>${result}</td>
                                                    <td>Reg\\w{3} example</td>
                                                    <td>partial_match=true</td>
                                                </tr>
                                                <tr>
                                                    <td>${ret} =</td>
                                                    <td>Get Lines Matching Regexp</td>
                                                    <td>${ret}</td>
                                                    <td>(?i)FAIL: .*</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>See <a href="#Get%20Lines%20Matching%20Pattern" class="name">Get Lines Matching Pattern</a> and
                                                <a href="#Get%20Lines%20Containing%20String" class="name">Get Lines Containing String</a> if you do not need full regular expression powers (and complexity).</p>
                                            <p><code>partial_match</code>. In earlier versions exact match was always required.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-regexp-matches">
                                        <h2><a href="#get-regexp-matches">Get Regexp Matches</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a list of all non-overlapping matches in the given string.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>pattern</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*groups</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p><code>string</code> is the string to find matches from and <code>pattern</code> is the regular expression. See BuiltIn.Should Match Regexp for more information about Python regular expression syntax in general
                                                and how to use it in Autosphere test data in particular.</p>
                                            <p>If no groups are used, the returned list contains full matches. If one group is used, the list contains only contents of that group. If multiple groups are used, the list contains tuples that contain individual
                                                group contents. All groups can be given as indexes (starting from 1) and named groups also as names.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${no match} =</td>
                                                    <td>Get Regexp Matches</td>
                                                    <td>the string</td>
                                                    <td>xxx</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${matches} =</td>
                                                    <td>Get Regexp Matches</td>
                                                    <td>the string</td>
                                                    <td>t..</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${one group} =</td>
                                                    <td>Get Regexp Matches</td>
                                                    <td>the string</td>
                                                    <td>t(..)</td>
                                                    <td>1</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${named group} =</td>
                                                    <td>Get Regexp Matches</td>
                                                    <td>the string</td>
                                                    <td>t(?P&lt;name&gt;..)</td>
                                                    <td>name</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${two groups} =</td>
                                                    <td>Get Regexp Matches</td>
                                                    <td>the string</td>
                                                    <td>t(.)(.)</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${no match} = []
${matches} = ['the', 'tri']
${one group} = ['he', 'ri']
${named group} = ['he', 'ri']
${two groups} = [('h', 'e'), ('r', 'i')]
</code></pre>
                                 
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-substring">
                                        <h2><a href="#get-substring">Get Substring</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a substring from ``start`` index to ``end`` index.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>start</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>end</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns a substring from <code>start</code> index to <code>end</code> index.</p>
                                            <p>The <code>start</code> index is inclusive and <code>end</code> is exclusive. Indexing starts from 0, and it is possible to use negative indices to refer to characters from the end.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${ignore first} =</td>
                                                    <td>Get Substring</td>
                                                    <td>${string}</td>
                                                    <td>1</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${ignore last} =</td>
                                                    <td>Get Substring</td>
                                                    <td>${string}</td>
                                                    <td></td>
                                                    <td>-1</td>
                                                </tr>
                                                <tr>
                                                    <td>${5th to 10th} =</td>
                                                    <td>Get Substring</td>
                                                    <td>${string}</td>
                                                    <td>4</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td>${first two} =</td>
                                                    <td>Get Substring</td>
                                                    <td>${string}</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>${last two} =</td>
                                                    <td>Get Substring</td>
                                                    <td>${string}</td>
                                                    <td>-2</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="remove-string">
                                        <h2><a href="#remove-string">Remove String</a></h2>

                                        <div>
                                            <p class="shortdoc">Removes all ``removables`` from the given ``string``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*removables</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Removes all <code>removables</code> from the given <code>string</code>.</p>
                                            <p><code>removables</code> are used as literal strings. Each removable will be matched to a temporary string from which preceding removables have been already removed. See second example below.
                                            </p>
                                            <p>Use <a href="#Remove%20String%20Using%20Regexp" class="name">Remove String Using Regexp</a> if more powerful pattern matching is needed. If only a certain number of matches should be removed,
                                                <a href="#Replace%20String" class="name">Replace String</a> or <a href="#Replace%20String%20Using%20Regexp" class="name">Replace String Using Regexp</a> can be used.
                                            </p>
                                            <p>A modified version of the string is returned and the original string is not altered.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${str} =</td>
                                                    <td>Remove String</td>
                                                    <td>Autosphere</td>
                                                    <td>work</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str}</td>
                                                    <td>Robot Frame</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${str} =</td>
                                                    <td>Remove String</td>
                                                    <td>Autosphere</td>
                                                    <td>o</td>
                                                    <td>bt</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str}</td>
                                                    <td>R Framewrk</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="remove-string-using-regexp">
                                        <h2><a href="#remove-string-using-regexp">Remove String Using Regexp</a></h2>

                                        <div>
                                            <p class="shortdoc">Removes ``patterns`` from the given ``string``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*patterns</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Removes <code>patterns</code> from the given <code>string</code>.</p>
                                            <p>This keyword is otherwise identical to <a href="#Remove%20String" class="name">Remove
                          String</a>, but the <code>patterns</code> to search for are considered to be a regular expression. See <a href="#Replace%20String%20Using%20Regexp" class="name">Replace String Using
                          Regexp</a> for more information about the regular expression syntax. That keyword can also be used if there is a need to remove only a certain number of occurrences.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="replace-string">
                                        <h2><a href="#replace-string">Replace String</a></h2>

                                        <div>
                                            <p class="shortdoc">Replaces ``search_for`` in the given ``string`` with ``replace_with``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>search_for</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>replace_with</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>count</td>
                                                    <td></td>
                                                    <td>-1</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Replaces <code>search_for</code> in the given <code>string</code> with
                                                <code>replace_with</code>.</p>
                                            <p><code>search_for</code> is used as a literal string. See <a href="#Replace%20String%20Using%20Regexp" class="name">Replace String Using Regexp</a> if more powerful pattern matching is needed. If you need to
                                                just remove a string see <a href="#Remove%20String" class="name">Remove String</a>.</p>
                                            <p>If the optional argument <code>count</code> is given, only that many occurrences from left are replaced. Negative <code>count</code> means that all occurrences are replaced (default behaviour) and zero means
                                                that nothing is done.</p>
                                            <p>A modified version of the string is returned and the original string is not altered.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${str} =</td>
                                                    <td>Replace String</td>
                                                    <td>Hello, world!</td>
                                                    <td>world</td>
                                                    <td>tellus</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str}</td>
                                                    <td>Hello, tellus!</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${str} =</td>
                                                    <td>Replace String</td>
                                                    <td>Hello, world!</td>
                                                    <td>l</td>
                                                    <td>${EMPTY}</td>
                                                    <td>count=1</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${str}</td>
                                                    <td>Helo, world!</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="replace-string-using-regexp">
                                        <h2><a href="#replace-string-using-regexp">Replace String Using Regexp</a></h2>

                                        <div>
                                            <p class="shortdoc">Replaces ``pattern`` in the given ``string`` with ``replace_with``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>pattern</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>replace_with</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>count</td>
                                                    <td></td>
                                                    <td>-1</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Replaces <code>pattern</code> in the given <code>string</code> with <code>replace_with</code>.
                                            </p>
                                            <p>This keyword is otherwise identical to <a href="#Replace%20String" class="name">Replace
                          String</a>, but the <code>pattern</code> to search for is considered to be a regular expression. See BuiltIn.Should Match Regexp for more information about Python regular expression syntax in general and how to use it in Autosphere test data in particular.</p>
                                            <p>If you need to just remove a string see <a href="#Remove%20String%20Using%20Regexp" class="name">Remove String Using Regexp</a>.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${str} =</td>
                                                    <td>Replace String Using Regexp</td>
                                                    <td>${str}</td>
                                                    <td>20\\d\\d-\\d\\d-\\d\\d</td>
                                                    <td>&lt;DATE&gt;</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${str} =</td>
                                                    <td>Replace String Using Regexp</td>
                                                    <td>${str}</td>
                                                    <td>(Hello|Hi)</td>
                                                    <td>${EMPTY}</td>
                                                    <td>count=1</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-be-byte-string">
                                        <h2><a href="#should-be-byte-string">Should Be Byte String</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the given ``item`` is not a byte string.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>item</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if the given <code>item</code> is not a byte string.</p>
                                            <p>Use <a href="#Should%20Be%20Unicode%20String" class="name">Should Be Unicode String</a> if you want to verify the <code>item</code> is a Unicode string, or <a href="#Should%20Be%20String" class="name">Should Be String</a>                                                if both Unicode and byte strings are fine. See <a href="#Should%20Be%20String" class="name">Should Be String</a> for more details about Unicode strings and byte strings.</p>
                                            <p>The default error message can be overridden with the optional <code>msg</code> argument.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-be-lowercase">
                                        <h2><a href="#should-be-lowercase">Should Be Lowercase</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the given ``string`` is not in lowercase.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if the given <code>string</code> is not in lowercase.</p>
                                            <p>For example, <code>'string'</code> and <code>'with specials!'</code> would pass, and
                                                <code>'String'</code>, <code>''</code> and <code>' '</code> would fail.</p>
                                            <p>The default error message can be overridden with the optional <code>msg</code> argument.</p>
                                            <p>See also <a href="#Should%20Be%20Uppercase" class="name">Should Be Uppercase</a> and <a href="#Should%20Be%20Titlecase" class="name">Should Be Titlecase</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-be-string">
                                        <h2><a href="#should-be-string">Should Be String</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the given ``item`` is not a string.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>item</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if the given <code>item</code> is not a string.</p>
                                            <p>With Python 2, except with IronPython, this keyword passes regardless is the <code>item</code> a Unicode string or a byte string. Use <a href="#Should%20Be%20Unicode%20String" class="name">Should Be Unicode String</a>                                                or <a href="#Should%20Be%20Byte%20String" class="name">Should Be Byte String</a> if you want to restrict the string type. Notice that with Python 2, except with IronPython, <code>'string'</code> creates
                                                a byte string and
                                                <code>u'unicode'</code> must be used to create a Unicode string.</p>
                                            <p>With Python 3 and IronPython, this keyword passes if the string is a Unicode string but fails if it is bytes. Notice that with both Python 3 and IronPython, <code>'string'</code> creates a Unicode string, and
                                                <code>b'bytes'</code> must be used to create a byte string.</p>
                                            <p>The default error message can be overridden with the optional <code>msg</code> argument.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-be-titlecase">
                                        <h2><a href="#should-be-titlecase">Should Be Titlecase</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if given ``string`` is not title.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if given <code>string</code> is not title.</p>
                                            <p><code>string</code> is a titlecased string if there is at least one character in it, uppercase characters only follow uncased characters and lowercase characters only cased ones.</p>
                                            <p>For example, <code>'This Is Title'</code> would pass, and <code>'Word In UPPER'</code>,
                                                <code>'Word In lower'</code>, <code>''</code> and <code>' '</code> would fail.</p>
                                            <p>The default error message can be overridden with the optional <code>msg</code> argument.</p>
                                            <p>See also <a href="#Should%20Be%20Uppercase" class="name">Should Be Uppercase</a> and <a href="#Should%20Be%20Lowercase" class="name">Should Be Lowercase</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-be-unicode-string">
                                        <h2><a href="#should-be-unicode-string">Should Be Unicode String</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the given ``item`` is not a Unicode string.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>item</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if the given <code>item</code> is not a Unicode string.</p>
                                            <p>Use <a href="#Should%20Be%20Byte%20String" class="name">Should Be Byte String</a> if you want to verify the <code>item</code> is a byte string, or <a href="#Should%20Be%20String" class="name">Should Be String</a>                                                if both Unicode and byte strings are fine. See <a href="#Should%20Be%20String" class="name">Should Be String</a> for more details about Unicode strings and byte strings.</p>
                                            <p>The default error message can be overridden with the optional <code>msg</code> argument.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-be-uppercase">
                                        <h2><a href="#should-be-uppercase">Should Be Uppercase</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the given ``string`` is not in uppercase.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if the given <code>string</code> is not in uppercase.</p>
                                            <p>For example, <code>'STRING'</code> and <code>'WITH SPECIALS!'</code> would pass, and
                                                <code>'String'</code>, <code>''</code> and <code>' '</code> would fail.</p>
                                            <p>The default error message can be overridden with the optional <code>msg</code> argument.</p>
                                            <p>See also <a href="#Should%20Be%20Titlecase" class="name">Should Be Titlecase</a> and <a href="#Should%20Be%20Lowercase" class="name">Should Be Lowercase</a>.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-not-be-string">
                                        <h2><a href="#should-not-be-string">Should Not Be String</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the given ``item`` is a string.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>item</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if the given <code>item</code> is a string.</p>
                                            <p>See <a href="#Should%20Be%20String" class="name">Should Be String</a> for more details about Unicode strings and byte strings.</p>
                                            <p>The default error message can be overridden with the optional <code>msg</code> argument.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="split-string">
                                        <h2><a href="#split-string">Split String</a></h2>

                                        <div>
                                            <p class="shortdoc">Splits the ``string`` using ``separator`` as a delimiter string.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>separator</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>max_split</td>
                                                    <td></td>
                                                    <td>-1</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Splits the <code>string</code> using <code>separator</code> as a delimiter string.</p>
                                            <p>If a <code>separator</code> is not given, any whitespace string is a separator. In that case also possible consecutive whitespace as well as leading and trailing whitespace is ignored.</p>
                                            <p>Split words are returned as a list. If the optional <code>max_split</code> is given, at most
                                                <code>max_split</code> splits are done, and the returned list will have maximum
                                                <code>max_split + 1</code> elements.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>@{words} =</td>
                                                    <td>Split String</td>
                                                    <td>${string}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>@{words} =</td>
                                                    <td>Split String</td>
                                                    <td>${string}</td>
                                                    <td>,${SPACE}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${pre}</td>
                                                    <td>${post} =</td>
                                                    <td>Split String</td>
                                                    <td>${string}</td>
                                                    <td>::</td>
                                                    <td>1</td>
                                                </tr>
                                            </table>
                                            <p>See <a href="#Split%20String%20From%20Right" class="name">Split String From Right</a> if you want to start splitting from right, and <a href="#Fetch%20From%20Left" class="name">Fetch From
                          Left</a> and <a href="#Fetch%20From%20Right" class="name">Fetch From Right</a> if you only want to get first/last part of the string.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="split-string-from-right">
                                        <h2><a href="#split-string-from-right">Split String From Right</a></h2>

                                        <div>
                                            <p class="shortdoc">Splits the ``string`` using ``separator`` starting from right.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>separator</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>max_split</td>
                                                    <td></td>
                                                    <td>-1</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Splits the <code>string</code> using <code>separator</code> starting from right.</p>
                                            <p>Same as <a href="#Split%20String" class="name">Split String</a>, but splitting is started from right. This has an effect only when <code>max_split</code> is given.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${first}</td>
                                                    <td>${rest} =</td>
                                                    <td>Split String</td>
                                                    <td>${string}</td>
                                                    <td>-</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>${rest}</td>
                                                    <td>${last} =</td>
                                                    <td>Split String From Right</td>
                                                    <td>${string}</td>
                                                    <td>-</td>
                                                    <td>1</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="split-string-to-characters">
                                        <h2><a href="#split-string-to-characters">Split String To Characters</a></h2>

                                        <div>
                                            <p class="shortdoc">Splits the given ``string`` to characters.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Splits the given <code>string</code> to characters.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>@{characters} =</td>
                                                    <td>Split String To Characters</td>
                                                    <td>${string}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="split-to-lines">
                                        <h2><a href="#split-to-lines">Split To Lines</a></h2>

                                        <div>
                                            <p class="shortdoc">Splits the given string to lines.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>start</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>end</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>It is possible to get only a selection of lines from <code>start</code> to <code>end</code> so that <code>start</code> index is inclusive and <code>end</code> is exclusive. Line numbering starts from 0, and
                                                it is possible to use negative indices to refer to lines from the end.</p>
                                            <p>Lines are returned without the newlines. The number of returned lines is automatically logged.
                                            </p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>@{lines} =</td>
                                                    <td>Split To Lines</td>
                                                    <td>${manylines}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>@{ignore first} =</td>
                                                    <td>Split To Lines</td>
                                                    <td>${manylines}</td>
                                                    <td>1</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>@{ignore last} =</td>
                                                    <td>Split To Lines</td>
                                                    <td>${manylines}</td>
                                                    <td></td>
                                                    <td>-1</td>
                                                </tr>
                                                <tr>
                                                    <td>@{5th to 10th} =</td>
                                                    <td>Split To Lines</td>
                                                    <td>${manylines}</td>
                                                    <td>4</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td>@{first two} =</td>
                                                    <td>Split To Lines</td>
                                                    <td>${manylines}</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>@{last two} =</td>
                                                    <td>Split To Lines</td>
                                                    <td>${manylines}</td>
                                                    <td>-2</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Use <a href="#Get%20Line" class="name">Get Line</a> if you only need to get a single line.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="strip-string">
                                        <h2><a href="#strip-string">Strip String</a></h2>

                                        <div>
                                            <p class="shortdoc">Remove leading and/or trailing whitespaces from the given string.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>string</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>mode</td>
                                                    <td></td>
                                                    <td>both</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>characters</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p><code>mode</code> is either <code>left</code> to remove leading characters, <code>right</code> to remove trailing characters, <code>both</code> (default) to remove the characters from both sides of the string
                                                or <code>none</code> to return the unmodified string.</p>
                                            <p>If the optional <code>characters</code> is given, it must be a string and the characters in the string will be stripped in the string. Please note, that this is not a substring to be removed but a list of characters,
                                                see the example below.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${stripped}=</td>
                                                    <td>Strip String</td>
                                                    <td>${SPACE}Hello${SPACE}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${stripped}</td>
                                                    <td>Hello</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${stripped}=</td>
                                                    <td>Strip String</td>
                                                    <td>${SPACE}Hello${SPACE}</td>
                                                    <td>mode=left</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${stripped}</td>
                                                    <td>Hello${SPACE}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${stripped}=</td>
                                                    <td>Strip String</td>
                                                    <td>aabaHelloeee</td>
                                                    <td>characters=abe</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${stripped}</td>
                                                    <td>Hello</td>
                                                    <td></td>
                                                </tr>
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
                            <div><a id="link-convert-to-lower-case" href="#convert-to-lower-case" class="">Convert To
                  Lower Case</a><a id="link-convert-to-title-case" href="#convert-to-title-case" class="">Convert To Title Case</a><a id="link-convert-to-upper-case" href="#convert-to-upper-case" class="">Convert To Upper Case</a>
                                <a id="link-decode-bytes-to-string" href="#decode-bytes-to-string" class="">Decode Bytes To String
                                    </a><a id="link-encode-string-to-bytes" href="#encode-string-to-bytes" class="">Encode String To Bytes</a><a id="link-fetch-from-left" href="#fetch-from-left"
                                    class="">Fetch From Left</a>
                                <a id="link-fetch-from-right" href="#fetch-from-right" class="">Fetch From Right</a><a id="link-format-string" href="#format-string" class="">Format String</a><a id="link-generate-random-string"
                                    href="#generate-random-string" class="">Generate Random String</a>
                                <a id="link-get-line" href="#get-line" class="">Get Line</a><a id="link-get-line-count" href="#get-line-count" class="">Get Line Count</a><a id="link-get-lines-containing-string" href="#get-lines-containing-string"
                                    class="">Get
                  Lines Containing String</a><a id="link-get-lines-matching-pattern" href="#get-lines-matching-pattern" class="">Get Lines Matching Pattern</a><a id="link-get-lines-matching-regexp" href="#get-lines-matching-regexp"
                                    class="">Get Lines
                  Matching Regexp</a><a id="link-get-regexp-matches" href="#get-regexp-matches" class="">Get Regexp Matches</a><a id="link-get-substring" href="#get-substring" class="">Get Substring</a><a id="link-remove-string"
                                    href="#remove-string" class="">Remove String</a><a id="link-remove-string-using-regexp" href="#remove-string-using-regexp" class="">Remove String Using Regexp</a><a id="link-replace-string" href="#replace-string"
                                    class="">Replace String</a><a id="link-replace-string-using-regexp" href="#replace-string-using-regexp" class="">Replace String Using Regexp</a><a id="link-should-be-byte-string" href="#should-be-byte-string"
                                    class="">Should Be Byte String</a><a id="link-should-be-lowercase" href="#should-be-lowercase" class="">Should Be
                  Lowercase</a><a id="link-should-be-string" href="#should-be-string" class="">Should Be
                  String</a><a id="link-should-be-titlecase" href="#should-be-titlecase" class="">Should Be
                  Titlecase</a><a id="link-should-be-unicode-string" href="#should-be-unicode-string" class="">Should Be Unicode String</a><a id="link-should-be-uppercase" href="#should-be-uppercase" class="">Should Be Uppercase</a>
                                <a id="link-should-not-be-string" href="#should-not-be-string" class="">Should Not Be String
                                                </a><a id="link-split-string" href="#split-string" class="">Split String</a><a id="link-split-string-from-right" href="#split-string-from-right"
                                    class="">Split String
                  From Right</a><a id="link-split-string-to-characters" href="#split-string-to-characters" class="">Split String To Characters</a><a id="link-split-to-lines" href="#split-to-lines" class="">Split To Lines</a>
                                <a id="link-strip-string" href="#strip-string" class="">Strip String
                                                    </a>
                            </div>
                        </aside>
                    </div>
                </article>
           