
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Collections</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/collections">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/collections/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="append-to-list">
                                        <h2><a href="#append-to-list">Append To List</a></h2>

                                        <div>
                                            <p class="shortdoc">Adds ``values`` to the end of ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*values</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Adds <code>values</code> to the end of <code>list</code>.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>Append To List</td>
                                                    <td>${L1}</td>
                                                    <td>xxx</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Append To List</td>
                                                    <td>${L2}</td>
                                                    <td>x</td>
                                                    <td>y</td>
                                                    <td>z</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${L1} = ['a', 'xxx']
${L2} = ['a', 'b', 'x', 'y', 'z']
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="combine-lists">
                                        <h2><a href="#combine-lists">Combine Lists</a></h2>

                                        <div>
                                            <p class="shortdoc">Combines the given ``lists`` together and returns the result.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>*lists</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Combines the given <code>lists</code> together and returns the result.</p>
                                            <p>The given lists are not altered by this keyword.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${x} =</td>
                                                    <td>Combine Lists</td>
                                                    <td>${L1}</td>
                                                    <td>${L2}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${y} =</td>
                                                    <td>Combine Lists</td>
                                                    <td>${L1}</td>
                                                    <td>${L2}</td>
                                                    <td>${L1}</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${x} = ['a', 'a', 'b']
${y} = ['a', 'a', 'b', 'a']
${L1} and ${L2} are not changed.
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="convert-to-dictionary">
                                        <h2><a href="#convert-to-dictionary">Convert To Dictionary</a></h2>

                                        <div>
                                            <p class="shortdoc">Converts the given ``item`` to a Python ``dict`` type.</p>
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
                                            </table>
                                            <p>Converts the given <code>item</code> to a Python <code>dict</code> type.</p>
                                            <p>Mainly useful for converting other mappings to normal dictionaries. This includes converting Autosphere's own <code>DotDict</code> instances that it uses if variables are created using the <code>&amp;{var}</code>                                                syntax.</p>
                                            <p>Use Create Dictionary from the BuiltIn library for constructing new dictionaries.</p>
                                     
                                        </div>
                                    </div>

                                    <div class="keyword" id="convert-to-list">
                                        <h2><a href="#convert-to-list">Convert To List</a></h2>

                                        <div>
                                            <p class="shortdoc">Converts the given ``item`` to a Python ``list`` type.</p>
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
                                            </table>
                                            <p>Converts the given <code>item</code> to a Python <code>list</code> type.</p>
                                            <p>Mainly useful for converting tuples and other iterable to lists. Use Create List from the BuiltIn library for constructing new lists.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="copy-dictionary">
                                        <h2><a href="#copy-dictionary">Copy Dictionary</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a copy of the given dictionary.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>deepcopy</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>The <code>deepcopy</code> argument controls should the returned dictionary be a <a href="https://docs.python.org/library/copy.html">shallow or deep copy</a>. By default returns a shallow copy, but that can be
                                                changed by giving <code>deepcopy</code> a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>). Earlier versions always returned
                                                shallow copies.</p>
                                            <p>The given dictionary is never altered by this keyword.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="copy-list">
                                        <h2><a href="#copy-list">Copy List</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a copy of the given list.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>deepcopy</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>

            
                                            <p>The given list is never altered by this keyword.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="count-values-in-list">
                                        <h2><a href="#count-values-in-list">Count Values In List</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns the number of occurrences of the given ``value`` in ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
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
                                            <p>Returns the number of occurrences of the given <code>value</code> in <code>list</code>.</p>
                                            <p>The search can be narrowed to the selected sublist by the <code>start</code> and
                                                <code>end</code> indexes having the same semantics as with <a href="#Get%20Slice%20From%20List" class="name">Get Slice From List</a> keyword. The given list is never altered by this keyword.
                                            </p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${x} =</td>
                                                    <td>Count Values In List</td>
                                                    <td>${L3}</td>
                                                    <td>b</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${x} = 1
${L3} is not changed
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="dictionaries-should-be-equal">
                                        <h2><a href="#dictionaries-should-be-equal">Dictionaries Should Be Equal</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the given dictionaries are not equal.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dict1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>dict2</td>
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
                                                <tr>
                                                    <td>values</td>
                                                    <td></td>
                                                    <td>True</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>First the equality of dictionaries' keys is checked and after that all the key value pairs. If there are differences between the values, those are listed in the error message. The types of the dictionaries do
                                                not need to be same.</p>
                                            <p>See <a href="#Lists%20Should%20Be%20Equal" class="name">Lists Should Be Equal</a> for more information about configuring the error message with <code>msg</code> and <code>values</code> arguments.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="dictionary-should-contain-item">
                                        <h2><a href="#dictionary-should-contain-item">Dictionary Should Contain Item</a></h2>

                                        <div>
                                            <p class="shortdoc">An item of ``key`` / ``value`` must be found in a ``dictionary``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>key</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
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
                                            <p>An item of <code>key</code> / <code>value</code> must be found in a <code>dictionary</code>.
                                            </p>
                                            <p>Value is converted to unicode for comparison.</p>
                                            <p>Use the <code>msg</code> argument to override the default error message.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="dictionary-should-contain-key">
                                        <h2><a href="#dictionary-should-contain-key">Dictionary Should Contain Key</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if ``key`` is not found from ``dictionary``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>key</td>
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
                                            <p>Fails if <code>key</code> is not found from <code>dictionary</code>.</p>
                                            <p>Use the <code>msg</code> argument to override the default error message.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="dictionary-should-contain-sub-dictionary">
                                        <h2><a href="#dictionary-should-contain-sub-dictionary">Dictionary Should Contain Sub Dictionary</a>
                                        </h2>

                                        <div>
                                            <p class="shortdoc">Fails unless all items in ``dict2`` are found from ``dict1``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dict1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>dict2</td>
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
                                                <tr>
                                                    <td>values</td>
                                                    <td></td>
                                                    <td>True</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails unless all items in <code>dict2</code> are found from <code>dict1</code>.</p>
                                            <p>See <a href="#Lists%20Should%20Be%20Equal" class="name">Lists Should Be Equal</a> for more information about configuring the error message with <code>msg</code> and <code>values</code> arguments.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="dictionary-should-contain-value">
                                        <h2><a href="#dictionary-should-contain-value">Dictionary Should Contain Value</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if ``value`` is not found from ``dictionary``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
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
                                            <p>Fails if <code>value</code> is not found from <code>dictionary</code>.</p>
                                            <p>Use the <code>msg</code> argument to override the default error message.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="dictionary-should-not-contain-key">
                                        <h2><a href="#dictionary-should-not-contain-key">Dictionary Should Not Contain Key</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if ``key`` is found from ``dictionary``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>key</td>
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
                                            <p>Fails if <code>key</code> is found from <code>dictionary</code>.</p>
                                            <p>Use the <code>msg</code> argument to override the default error message.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="dictionary-should-not-contain-value">
                                        <h2><a href="#dictionary-should-not-contain-value">Dictionary Should Not Contain Value</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if ``value`` is found from ``dictionary``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
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
                                            <p>Fails if <code>value</code> is found from <code>dictionary</code>.</p>
                                            <p>Use the <code>msg</code> argument to override the default error message.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-dictionary-items">
                                        <h2><a href="#get-dictionary-items">Get Dictionary Items</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns items of the given ``dictionary`` as a list.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>sort_keys</td>
                                                    <td></td>
                                                    <td>True</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns items of the given <code>dictionary</code> as a list.</p>
                                            <p>Uses <a href="#Get%20Dictionary%20Keys" class="name">Get Dictionary Keys</a> to get keys and then returns corresponding items. By default keys are sorted and items returned in that order, but this can be changed
                                                by giving <code>sort_keys</code> a false value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>). Notice that with Python 3.5 and earlier dictionary order is undefined unless using
                                                ordered dictionaries.</p>
                                            <p>Items are returned as a flat list so that first item is a key, second item is a corresponding value, third item is the second key, and so on.</p>
                                            <p>The given <code>dictionary</code> is never altered by this keyword.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${sorted} =</td>
                                                    <td>Get Dictionary Items</td>
                                                    <td>${D3}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${unsorted} =</td>
                                                    <td>Get Dictionary Items</td>
                                                    <td>${D3}</td>
                                                    <td>sort_keys=False</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${sorted} = ['a', 1, 'b', 2, 'c', 3]
${unsorted} = ['b', 2, 'a', 1, 'c', 3]    # Order depends on Python version.
</code></pre>
                    
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-dictionary-keys">
                                        <h2><a href="#get-dictionary-keys">Get Dictionary Keys</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns keys of the given ``dictionary`` as a list.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>sort_keys</td>
                                                    <td></td>
                                                    <td>True</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns keys of the given <code>dictionary</code> as a list.</p>
                                            <p>By default keys are returned in sorted order (assuming they are sortable), but they can be returned in the original order by giving <code>sort_keys</code> a false value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).
                                                Notice that with Python 3.5 and earlier dictionary order is undefined unless using ordered dictionaries.</p>
                                            <p>The given <code>dictionary</code> is never altered by this keyword.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${sorted} =</td>
                                                    <td>Get Dictionary Keys</td>
                                                    <td>${D3}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${unsorted} =</td>
                                                    <td>Get Dictionary Keys</td>
                                                    <td>${D3}</td>
                                                    <td>sort_keys=False</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${sorted} = ['a', 'b', 'c']
${unsorted} = ['b', 'a', 'c']   # Order depends on Python version.
</code></pre>
                                       
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-dictionary-values">
                                        <h2><a href="#get-dictionary-values">Get Dictionary Values</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns values of the given ``dictionary`` as a list.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>sort_keys</td>
                                                    <td></td>
                                                    <td>True</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns values of the given <code>dictionary</code> as a list.</p>
                                            <p>Uses <a href="#Get%20Dictionary%20Keys" class="name">Get Dictionary Keys</a> to get keys and then returns corresponding values. By default keys are sorted and values returned in that order, but this can be changed
                                                by giving <code>sort_keys</code> a false value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>). Notice that with Python 3.5 and earlier dictionary order is undefined unless using
                                                ordered dictionaries.</p>
                                            <p>The given <code>dictionary</code> is never altered by this keyword.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${sorted} =</td>
                                                    <td>Get Dictionary Values</td>
                                                    <td>${D3}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${unsorted} =</td>
                                                    <td>Get Dictionary Values</td>
                                                    <td>${D3}</td>
                                                    <td>sort_keys=False</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${sorted} = [1, 2, 3]
${unsorted} = [2, 1, 3]    # Order depends on Python version.
</code></pre>
       
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-from-dictionary">
                                        <h2><a href="#get-from-dictionary">Get From Dictionary</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a value from the given ``dictionary`` based on the given ``key``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>key</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns a value from the given <code>dictionary</code> based on the given <code>key</code>.</p>
                                            <p>If the given <code>key</code> cannot be found from the <code>dictionary</code>, this keyword fails.
                                            </p>
                                            <p>The given dictionary is never altered by this keyword.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${value} =</td>
                                                    <td>Get From Dictionary</td>
                                                    <td>${D3}</td>
                                                    <td>b</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${value} = 2
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-from-list">
                                        <h2><a href="#get-from-list">Get From List</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns the value specified with an ``index`` from ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>index</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns the value specified with an <code>index</code> from <code>list</code>.</p>
                                            <p>The given list is never altered by this keyword.</p>
                                            <p>Index <code>0</code> means the first position, <code>1</code> the second, and so on. Similarly,
                                                <code>-1</code> is the last position, <code>-2</code> the second last, and so on. Using an index that does not exist on the list causes an error. The index can be either an integer or a string that can be
                                                converted to an integer.</p>
                                            <p>Examples (including Python equivalents in comments):</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${x} =</td>
                                                    <td>Get From List</td>
                                                    <td>${L5}</td>
                                                    <td>0</td>
                                                    <td># L5[0]</td>
                                                </tr>
                                                <tr>
                                                    <td>${y} =</td>
                                                    <td>Get From List</td>
                                                    <td>${L5}</td>
                                                    <td>-2</td>
                                                    <td># L5[-2]</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${x} = 'a'
${y} = 'd'
${L5} is not changed
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-index-from-list">
                                        <h2><a href="#get-index-from-list">Get Index From List</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns the index of the first occurrence of the ``value`` on the list.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
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
                                            <p>Returns the index of the first occurrence of the <code>value</code> on the list.</p>
                                            <p>The search can be narrowed to the selected sublist by the <code>start</code> and
                                                <code>end</code> indexes having the same semantics as with <a href="#Get%20Slice%20From%20List" class="name">Get Slice From List</a> keyword. In case the value is not found, -1 is returned. The given list
                                                is never altered by this keyword.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${x} =</td>
                                                    <td>Get Index From List</td>
                                                    <td>${L5}</td>
                                                    <td>d</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${x} = 3
${L5} is not changed
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-match-count">
                                        <h2><a href="#get-match-count">Get Match Count</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns the count of matches to ``pattern`` in ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list</td>
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
                                                <tr>
                                                    <td>whitespace_insensitive</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns the count of matches to <code>pattern</code> in <code>list</code>.</p>
                                            <p>For more information on <code>pattern</code>, <code>case_insensitive</code>, and
                                                <code>whitespace_insensitive</code>, see <a href="#Should%20Contain%20Match" class="name">Should
                          Contain Match</a>.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${count}=</td>
                                                    <td>Get Match Count</td>
                                                    <td>${list}</td>
                                                    <td>a*</td>
                                                    <td># ${count} will be the count of strings beginning with 'a'</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${count}=</td>
                                                    <td>Get Match Count</td>
                                                    <td>${list}</td>
                                                    <td>regexp=a.*</td>
                                                    <td># ${matches} will be the count of strings beginning with 'a' (regexp version)</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${count}=</td>
                                                    <td>Get Match Count</td>
                                                    <td>${list}</td>
                                                    <td>a*</td>
                                                    <td>case_insensitive=${True}</td>
                                                    <td># ${matches} will be the count of strings beginning with 'a' or 'A'</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-matches">
                                        <h2><a href="#get-matches">Get Matches</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a list of matches to ``pattern`` in ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list</td>
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
                                                <tr>
                                                    <td>whitespace_insensitive</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns a list of matches to <code>pattern</code> in <code>list</code>.</p>
                                            <p>For more information on <code>pattern</code>, <code>case_insensitive</code>, and
                                                <code>whitespace_insensitive</code>, see <a href="#Should%20Contain%20Match" class="name">Should
                          Contain Match</a>.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${matches}=</td>
                                                    <td>Get Matches</td>
                                                    <td>${list}</td>
                                                    <td>a*</td>
                                                    <td># ${matches} will contain any string beginning with 'a'</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${matches}=</td>
                                                    <td>Get Matches</td>
                                                    <td>${list}</td>
                                                    <td>regexp=a.*</td>
                                                    <td># ${matches} will contain any string beginning with 'a' (regexp version)</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${matches}=</td>
                                                    <td>Get Matches</td>
                                                    <td>${list}</td>
                                                    <td>a*</td>
                                                    <td>case_insensitive=${True}</td>
                                                    <td># ${matches} will contain any string beginning with 'a' or 'A'</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-slice-from-list">
                                        <h2><a href="#get-slice-from-list">Get Slice From List</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a slice of the given list between ``start`` and ``end`` indexes.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
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
                                            <p>Returns a slice of the given list between <code>start</code> and <code>end</code> indexes.</p>
                                            <p>The given list is never altered by this keyword.</p>
                                            <p>If both <code>start</code> and <code>end</code> are given, a sublist containing values from
                                                <code>start</code> to <code>end</code> is returned. This is the same as
                                                <code>list[start:end]</code> in Python. To get all items from the beginning, use 0 as the start value, and to get all items until and including the end, use <code>None</code> (default) as the end value.</p>
                                            <p>Using <code>start</code> or <code>end</code> not found on the list is the same as using the largest (or smallest) available index.</p>
                                            <p>Examples (incl. Python equivalents in comments):</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${x} =</td>
                                                    <td>Get Slice From List</td>
                                                    <td>${L5}</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                    <td># L5[2:4]</td>
                                                </tr>
                                                <tr>
                                                    <td>${y} =</td>
                                                    <td>Get Slice From List</td>
                                                    <td>${L5}</td>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td># L5[1:None]</td>
                                                </tr>
                                                <tr>
                                                    <td>${z} =</td>
                                                    <td>Get Slice From List</td>
                                                    <td>${L5}</td>
                                                    <td>end=-2</td>
                                                    <td></td>
                                                    <td># L5[0:-2]</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${x} = ['c', 'd']
${y} = ['b', 'c', 'd', 'e']
${z} = ['a', 'b', 'c']
${L5} is not changed
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="insert-into-list">
                                        <h2><a href="#insert-into-list">Insert Into List</a></h2>

                                        <div>
                                            <p class="shortdoc">Inserts ``value`` into ``list`` to the position specified with ``index``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>index</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Inserts <code>value</code> into <code>list</code> to the position specified with
                                                <code>index</code>.</p>
                                            <p>Index <code>0</code> adds the value into the first position, <code>1</code> to the second, and so on. Inserting from right works with negative indices so that <code>-1</code> is the second last position, <code>-2</code>                                                third last, and so on. Use <a href="#Append%20To%20List" class="name">Append To List</a> to add items to the end of the list.</p>
                                            <p>If the absolute value of the index is greater than the length of the list, the value is added at the end (positive index) or the beginning (negative index). An index can be given either as an integer or a string
                                                that can be converted to an integer.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>Insert Into List</td>
                                                    <td>${L1}</td>
                                                    <td>0</td>
                                                    <td>xxx</td>
                                                </tr>
                                                <tr>
                                                    <td>Insert Into List</td>
                                                    <td>${L2}</td>
                                                    <td>${-1}</td>
                                                    <td>xxx</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${L1} = ['xxx', 'a']
${L2} = ['a', 'xxx', 'b']
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="keep-in-dictionary">
                                        <h2><a href="#keep-in-dictionary">Keep In Dictionary</a></h2>

                                        <div>
                                            <p class="shortdoc">Keeps the given ``keys`` in the ``dictionary`` and removes all other.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*keys</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Keeps the given <code>keys</code> in the <code>dictionary</code> and removes all other.</p>
                                            <p>If the given <code>key</code> cannot be found from the <code>dictionary</code>, it is ignored.
                                            </p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>Keep In Dictionary</td>
                                                    <td>${D5}</td>
                                                    <td>b</td>
                                                    <td>x</td>
                                                    <td>d</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${D5} = {'b': 2, 'd': 4}
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="list-should-contain-sub-list">
                                        <h2><a href="#list-should-contain-sub-list">List Should Contain Sub List</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if not all of the elements in ``list2`` are found in ``list1``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>list2</td>
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
                                                <tr>
                                                    <td>values</td>
                                                    <td></td>
                                                    <td>True</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if not all of the elements in <code>list2</code> are found in <code>list1</code>.</p>
                                            <p>The order of values and the number of values are not taken into account.</p>
                                            <p>See <a href="#Lists%20Should%20Be%20Equal" class="name">Lists Should Be Equal</a> for more information about configuring the error message with <code>msg</code> and <code>values</code> arguments.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="list-should-contain-value">
                                        <h2><a href="#list-should-contain-value">List Should Contain Value</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the ``value`` is not found from ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
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
                                            <p>Fails if the <code>value</code> is not found from <code>list</code>.</p>
                                            <p>Use the <code>msg</code> argument to override the default error message.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="list-should-not-contain-duplicates">
                                        <h2><a href="#list-should-not-contain-duplicates">List Should Not Contain Duplicates</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if any element in the ``list`` is found from it more than once.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
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
                                            <p>Fails if any element in the <code>list</code> is found from it more than once.</p>
                                            <p>The default error message lists all the elements that were found from the <code>list</code> multiple times, but it can be overridden by giving a custom <code>msg</code>. All multiple times found items and their
                                                counts are also logged.</p>
                                            <p>This keyword works with all iterables that can be converted to a list. The original iterable is never altered.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="list-should-not-contain-value">
                                        <h2><a href="#list-should-not-contain-value">List Should Not Contain Value</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if the ``value`` is found from ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
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
                                            <p>Fails if the <code>value</code> is found from <code>list</code>.</p>
                                            <p>Use the <code>msg</code> argument to override the default error message.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="lists-should-be-equal">
                                        <h2><a href="#lists-should-be-equal">Lists Should Be Equal</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if given lists are unequal.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>list2</td>
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
                                                <tr>
                                                    <td>values</td>
                                                    <td></td>
                                                    <td>True</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>names</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>ignore_order</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>The keyword first verifies that the lists have equal lengths, and then it checks are all their values equal. Possible differences between the values are listed in the default error message like <code>Index 4: ABC != Abc</code>.
                                                The types of the lists do not need to be the same. For example, Python tuple and list with same content are considered equal.</p>
                                            <p>The error message can be configured using <code>msg</code> and <code>values</code> arguments:
                                            </p>
                                            <ul>
                                                <li>If <code>msg</code> is not given, the default error message is used.</li>
                                                <li>If <code>msg</code> is given and <code>values</code> gets a value considered true (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the error message starts with the given <code>msg</code>                                                    followed by a newline and the default message.</li>
                                                <li>If <code>msg</code> is given and <code>values</code> is not given a true value, the error message is just the given <code>msg</code>.</li>
                                            </ul>
                                            <p>The optional <code>names</code> argument can be used for naming the indices shown in the default error message. It can either be a list of names matching the indices in the lists or a dictionary where keys are
                                                indices that need to be named. It is not necessary to name all of the indices. When using a dictionary, keys can be either integers or strings that can be converted to integers.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${names} =</td>
                                                    <td>Create List</td>
                                                    <td>First Name</td>
                                                    <td>Family Name</td>
                                                    <td>Email</td>
                                                </tr>
                                                <tr>
                                                    <td>Lists Should Be Equal</td>
                                                    <td>${people1}</td>
                                                    <td>${people2}</td>
                                                    <td>names=${names}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${names} =</td>
                                                    <td>Create Dictionary</td>
                                                    <td>0=First Name</td>
                                                    <td>2=Email</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Lists Should Be Equal</td>
                                                    <td>${people1}</td>
                                                    <td>${people2}</td>
                                                    <td>names=${names}</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>If the items in index 2 would differ in the above examples, the error message would contain a row like
                                                <code>Index 2 (email): [email&#160;protected] != [email&#160;protected]</code>.
                                            </p>

                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${list1} =</td>
                                                    <td>Create List</td>
                                                    <td>apple</td>
                                                    <td>cherry</td>
                                                    <td>banana</td>
                                                </tr>
                                                <tr>
                                                    <td>${list2} =</td>
                                                    <td>Create List</td>
                                                    <td>cherry</td>
                                                    <td>banana</td>
                                                    <td>apple</td>
                                                </tr>
                                                <tr>
                                                    <td>Lists Should Be Equal</td>
                                                    <td>${list1}</td>
                                                    <td>${list2}</td>
                                                    <td>ignore_order=True</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="log-dictionary">
                                        <h2><a href="#log-dictionary">Log Dictionary</a></h2>

                                        <div>
                                            <p class="shortdoc">Logs the size and contents of the ``dictionary`` using given ``level``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>level</td>
                                                    <td></td>
                                                    <td>INFO</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Logs the size and contents of the <code>dictionary</code> using given <code>level</code>.</p>
                                            <p>Valid levels are TRACE, DEBUG, INFO (default), and WARN.</p>
                                            <p>If you only want to log the size, use keyword Get Length from the BuiltIn library.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="log-list">
                                        <h2><a href="#log-list">Log List</a></h2>

                                        <div>
                                            <p class="shortdoc">Logs the length and contents of the ``list`` using given ``level``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>level</td>
                                                    <td></td>
                                                    <td>INFO</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Logs the length and contents of the <code>list</code> using given <code>level</code>.</p>
                                            <p>Valid levels are TRACE, DEBUG, INFO (default), and WARN.</p>
                                            <p>If you only want to the length, use keyword Get Length from the BuiltIn library.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="pop-from-dictionary">
                                        <h2><a href="#pop-from-dictionary">Pop From Dictionary</a></h2>

                                        <div>
                                            <p class="shortdoc">Pops the given ``key`` from the ``dictionary`` and returns its value.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>key</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>default</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Pops the given <code>key</code> from the <code>dictionary</code> and returns its value.</p>
                                            <p>By default the keyword fails if the given <code>key</code> cannot be found from the
                                                <code>dictionary</code>. If optional <code>default</code> value is given, it will be returned instead of failing.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${val}=</td>
                                                    <td>Pop From Dictionary</td>
                                                    <td>${D3}</td>
                                                    <td>b</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${val} = 2
${D3} = {'a': 1, 'c': 3}
</code></pre>
                                          
                                        </div>
                                    </div>

                                    <div class="keyword" id="remove-duplicates">
                                        <h2><a href="#remove-duplicates">Remove Duplicates</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns a list without duplicates based on the given ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Returns a list without duplicates based on the given <code>list</code>.</p>
                                            <p>Creates and returns a new list that contains all items in the given list so that one item can appear only once. Order of the items in the new list is the same as in the original except for missing duplicates.
                                                Number of the removed duplicates is logged.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="remove-from-dictionary">
                                        <h2><a href="#remove-from-dictionary">Remove From Dictionary</a></h2>

                                        <div>
                                            <p class="shortdoc">Removes the given ``keys`` from the ``dictionary``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*keys</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Removes the given <code>keys</code> from the <code>dictionary</code>.</p>
                                            <p>If the given <code>key</code> cannot be found from the <code>dictionary</code>, it is ignored.
                                            </p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>Remove From Dictionary</td>
                                                    <td>${D3}</td>
                                                    <td>b</td>
                                                    <td>x</td>
                                                    <td>y</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${D3} = {'a': 1, 'c': 3}
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="remove-from-list">
                                        <h2><a href="#remove-from-list">Remove From List</a></h2>

                                        <div>
                                            <p class="shortdoc">Removes and returns the value specified with an ``index`` from ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>index</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Removes and returns the value specified with an <code>index</code> from <code>list</code>.</p>
                                            <p>Index <code>0</code> means the first position, <code>1</code> the second and so on. Similarly,
                                                <code>-1</code> is the last position, <code>-2</code> the second last, and so on. Using an index that does not exist on the list causes an error. The index can be either an integer or a string that can be
                                                converted to an integer.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${x} =</td>
                                                    <td>Remove From List</td>
                                                    <td>${L2}</td>
                                                    <td>0</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${x} = 'a'
${L2} = ['b']
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="remove-values-from-list">
                                        <h2><a href="#remove-values-from-list">Remove Values From List</a></h2>

                                        <div>
                                            <p class="shortdoc">Removes all occurrences of given ``values`` from ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*values</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Removes all occurrences of given <code>values</code> from <code>list</code>.</p>
                                            <p>It is not an error if a value does not exist in the list at all.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>Remove Values From List</td>
                                                    <td>${L4}</td>
                                                    <td>a</td>
                                                    <td>c</td>
                                                    <td>e</td>
                                                    <td>f</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${L4} = ['b', 'd']
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="reverse-list">
                                        <h2><a href="#reverse-list">Reverse List</a></h2>

                                        <div>
                                            <p class="shortdoc">Reverses the given list in place.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Note that the given list is changed and nothing is returned. Use <a href="#Copy%20List" class="name">Copy List</a> first, if you need to keep also the original order.</p>
                                            <table border="1">
                                                <tr>
                                                    <td>Reverse List</td>
                                                    <td>${L3}</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${L3} = ['c', 'b', 'a']
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="set-list-value">
                                        <h2><a href="#set-list-value">Set List Value</a></h2>

                                        <div>
                                            <p class="shortdoc">Sets the value of ``list`` specified by ``index`` to the given ``value``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>index</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Sets the value of <code>list</code> specified by <code>index</code> to the given
                                                <code>value</code>.</p>
                                            <p>Index <code>0</code> means the first position, <code>1</code> the second and so on. Similarly,
                                                <code>-1</code> is the last position, <code>-2</code> second last, and so on. Using an index that does not exist on the list causes an error. The index can be either an integer or a string that can be converted
                                                to an integer.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>Set List Value</td>
                                                    <td>${L3}</td>
                                                    <td>1</td>
                                                    <td>xxx</td>
                                                </tr>
                                                <tr>
                                                    <td>Set List Value</td>
                                                    <td>${L3}</td>
                                                    <td>-1</td>
                                                    <td>yyy</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${L3} = ['a', 'xxx', 'yyy']
</code></pre>
                                        </div>
                                    </div>

                                    <div class="keyword" id="set-to-dictionary">
                                        <h2><a href="#set-to-dictionary">Set To Dictionary</a></h2>

                                        <div>
                                            <p class="shortdoc">Adds the given ``key_value_pairs`` and ``items`` to the ``dictionary``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>dictionary</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>*key_value_pairs</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>**items</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Adds the given <code>key_value_pairs</code> and <code>items</code> to the
                                                <code>dictionary</code>.</p>
                                            <p>Giving items as <code>key_value_pairs</code> means giving keys and values as separate arguments:
                                            </p>
                                            <table border="1">
                                                <tr>
                                                    <td>Set To Dictionary</td>
                                                    <td>${D1}</td>
                                                    <td>key</td>
                                                    <td>value</td>
                                                    <td>second</td>
                                                    <td>${2}</td>
                                                </tr>
                                            </table>
                                            <p>=&gt;</p>
                                            <pre>${D1} = {'a': 1, 'key': 'value', 'second': 2}
</code></pre>
                                            <table border="1">
                                                <tr>
                                                    <td>Set To Dictionary</td>
                                                    <td>${D1}</td>
                                                    <td>key=value</td>
                                                    <td>second=${2}</td>
                                                </tr>
                                            </table>
                                            <p>The latter syntax is typically more convenient to use, but it has a limitation that keys must be strings.</p>
                                            <p>If given keys already exist in the dictionary, their values are updated.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-contain-match">
                                        <h2><a href="#should-contain-match">Should Contain Match</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if ``pattern`` is not found in ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list</td>
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
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>case_insensitive</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>whitespace_insensitive</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if <code>pattern</code> is not found in <code>list</code>.</p>
                                            <p>By default, pattern matching is similar to matching files in a shell and is case-sensitive and whitespace-sensitive. In the pattern syntax, <code>*</code> matches to anything and
                                                <code>?</code> matches to any single character. You can also prepend <code>glob=</code> to your pattern to explicitly use this pattern matching behavior.</p>
                                            <p>If you prepend <code>regexp=</code> to your pattern, your pattern will be used according to the Python <a href="http://docs.python.org/library/re.html">re module</a> regular expression syntax. Important note:
                                                Backslashes are an escape character, and must be escaped with another backslash (e.g. <code>regexp=\\d{6}</code> to search for <code>\d{6}</code>). See BuiltIn.Should Match Regexp for more details.</p>
                                            <p>If <code>case_insensitive</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the pattern matching will ignore case.</p>
                                            <p>If <code>whitespace_insensitive</code> is given a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>), the pattern matching will ignore whitespace.</p>
                                            <p>Non-string values in lists are ignored when matching patterns.</p>
                                            <p>Use the <code>msg</code> argument to override the default error message.</p>
                                            <p>See also <code>Should Not Contain Match</code>.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>Should Contain Match</td>
                                                    <td>${list}</td>
                                                    <td>a*</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td># Match strings beginning with 'a'.</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Contain Match</td>
                                                    <td>${list}</td>
                                                    <td>regexp=a.*</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td># Same as the above but with regexp.</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Contain Match</td>
                                                    <td>${list}</td>
                                                    <td>regexp=\\d{6}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td># Match strings containing six digits.</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Contain Match</td>
                                                    <td>${list}</td>
                                                    <td>a*</td>
                                                    <td>case_insensitive=True</td>
                                                    <td></td>
                                                    <td># Match strings beginning with 'a' or 'A'.</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Contain Match</td>
                                                    <td>${list}</td>
                                                    <td>ab*</td>
                                                    <td>whitespace_insensitive=yes</td>
                                                    <td></td>
                                                    <td># Match strings beginning with 'ab' with possible whitespace ignored.</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Contain Match</td>
                                                    <td>${list}</td>
                                                    <td>ab*</td>
                                                    <td>whitespace_insensitive=true</td>
                                                    <td>case_insensitive=true</td>
                                                    <td># Same as the above but also ignore case.</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="should-not-contain-match">
                                        <h2><a href="#should-not-contain-match">Should Not Contain Match</a></h2>

                                        <div>
                                            <p class="shortdoc">Fails if ``pattern`` is found in ``list``.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list</td>
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
                                                    <td>msg</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>case_insensitive</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>whitespace_insensitive</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Fails if <code>pattern</code> is found in <code>list</code>.</p>
                                            <p>Exact opposite of <a href="#Should%20Contain%20Match" class="name">Should Contain Match</a> keyword. See that keyword for information about arguments and usage in general.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="sort-list">
                                        <h2><a href="#sort-list">Sort List</a></h2>

                                        <div>
                                            <p class="shortdoc">Sorts the given list in place.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>list_</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Sorting fails if items in the list are not comparable with each others. On Python 2 most objects are comparable, but on Python 3 comparing, for example, strings with numbers is not possible.
                                            </p>
                                            <p>Note that the given list is changed and nothing is returned. Use <a href="#Copy%20List" class="name">Copy List</a> first, if you need to keep also the original order.</p>
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
                            <div><a id="link-append-to-list" href="#append-to-list" class="">Append To List</a><a id="link-combine-lists" href="#combine-lists" class="">Combine Lists</a><a id="link-convert-to-dictionary" href="#convert-to-dictionary"
                                    class="">Convert To
                  Dictionary</a><a id="link-convert-to-list" href="#convert-to-list" class="">Convert To
                  List</a><a id="link-copy-dictionary" href="#copy-dictionary" class="">Copy
                  Dictionary</a><a id="link-copy-list" href="#copy-list" class="">Copy List</a><a id="link-count-values-in-list" href="#count-values-in-list" class="">Count Values In
                  List</a><a id="link-dictionaries-should-be-equal" href="#dictionaries-should-be-equal" class="">Dictionaries Should Be Equal</a><a id="link-dictionary-should-contain-item" href="#dictionary-should-contain-item"
                                    class="">Dictionary Should Contain Item</a><a id="link-dictionary-should-contain-key" href="#dictionary-should-contain-key" class="">Dictionary Should Contain Key</a><a id="link-dictionary-should-contain-sub-dictionary"
                                    href="#dictionary-should-contain-sub-dictionary" class="">Dictionary Should Contain Sub
                  Dictionary</a><a id="link-dictionary-should-contain-value" href="#dictionary-should-contain-value" class="">Dictionary Should Contain Value</a><a id="link-dictionary-should-not-contain-key" href="#dictionary-should-not-contain-key"
                                    class="">Dictionary Should Not Contain Key</a><a id="link-dictionary-should-not-contain-value" href="#dictionary-should-not-contain-value" class="">Dictionary Should Not Contain
                  Value</a><a id="link-get-dictionary-items" href="#get-dictionary-items" class="">Get
                  Dictionary Items</a><a id="link-get-dictionary-keys" href="#get-dictionary-keys" class="">Get Dictionary Keys</a><a id="link-get-dictionary-values" href="#get-dictionary-values" class="">Get Dictionary Values</a>
                                <a id="link-get-from-dictionary" href="#get-from-dictionary" class="">Get From Dictionary
                                    </a><a id="link-get-from-list" href="#get-from-list" class="">Get From
                  List</a><a id="link-get-index-from-list" href="#get-index-from-list" class="">Get Index
                  From List</a><a id="link-get-match-count" href="#get-match-count" class="">Get Match
                  Count</a><a id="link-get-matches" href="#get-matches" class="">Get Matches</a><a id="link-get-slice-from-list" href="#get-slice-from-list" class="">Get Slice From
                  List</a><a id="link-insert-into-list" href="#insert-into-list" class="">Insert Into
                  List</a><a id="link-keep-in-dictionary" href="#keep-in-dictionary" class="">Keep In
                  Dictionary</a><a id="link-list-should-contain-sub-list" href="#list-should-contain-sub-list" class="">List Should Contain Sub List</a><a id="link-list-should-contain-value" href="#list-should-contain-value"
                                    class="">List
                  Should Contain Value</a><a id="link-list-should-not-contain-duplicates" href="#list-should-not-contain-duplicates" class="">List Should Not Contain
                  Duplicates</a><a id="link-list-should-not-contain-value" href="#list-should-not-contain-value" class="">List Should Not Contain Value</a><a id="link-lists-should-be-equal" href="#lists-should-be-equal" class="">Lists Should Be
                  Equal</a><a id="link-log-dictionary" href="#log-dictionary" class="">Log Dictionary</a><a id="link-log-list" href="#log-list" class="">Log List</a><a id="link-pop-from-dictionary" href="#pop-from-dictionary"
                                    class="">Pop From Dictionary</a><a id="link-remove-duplicates" href="#remove-duplicates" class="">Remove Duplicates</a><a id="link-remove-from-dictionary" href="#remove-from-dictionary" class="">Remove From
                  Dictionary</a><a id="link-remove-from-list" href="#remove-from-list" class="">Remove From
                  List</a><a id="link-remove-values-from-list" href="#remove-values-from-list" class="">Remove Values From List</a><a id="link-reverse-list" href="#reverse-list" class="">Reverse List</a><a id="link-set-list-value"
                                    href="#set-list-value" class="">Set
                  List Value</a><a id="link-set-to-dictionary" href="#set-to-dictionary" class="">Set To
                  Dictionary</a><a id="link-should-contain-match" href="#should-contain-match" class="">Should Contain Match</a><a id="link-should-not-contain-match" href="#should-not-contain-match" class="">Should Not Contain Match</a>
                                <a id="link-sort-list" href="#sort-list" class="">Sort List</a>
                            </div>
                        </aside>
                    </div>
                </article>
          
