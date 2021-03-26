<article class="sc-hBEYos dVNWBU">
    <div class="sc-kLgntA iHaOcn">
        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z" fill="#002642"></path>
            </svg><a href="">Built-in</a></nav>
        <div class="sc-iktFzd gaGeRK">
            <h1>Collections</h1>
        </div>
        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/collections">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/collections/keywords">Keywords</a></nav>
    </div>
    <div class="sc-jJEJSO laquCT">
        <div class="sc-hiSbYr XqbgT">
            <div class="sc-jcVebW hrCIoP">
                <div>
                    <p>A test library providing keywords for handling lists and dictionaries.</p>
                    <p><code>Collections</code> is Autosphere's standard library that provides a set of keywords for handling
                        Python lists and dictionaries. This library has keywords, for example, for modifying and getting values from
                        lists and dictionaries (e.g. <a href="#Append%20To%20List" class="name">Append To List</a>, <a href="#Get%20From%20Dictionary" class="name">Get From Dictionary</a>) and for verifying their contents
                        (e.g. <a href="#Lists%20Should%20Be%20Equal" class="name">Lists Should Be Equal</a>, <a href="#Dictionary%20Should%20Contain%20Value" class="name">Dictionary Should Contain Value</a>).</p>
                    <h3 id="Table of contents">Table of contents</h3>
                    <ul>
                        <li><a href="#Related%20keywords%20in%20BuiltIn" class="name">Related keywords in BuiltIn</a></li>
                        <li><a href="#Using%20with%20list-like%20and%20dictionary-like%20objects" class="name">Using with list-like
                                and dictionary-like objects</a></li>
                        <li><a href="#Boolean%20arguments" class="name">Boolean arguments</a></li>
                        <li><a href="#Data%20in%20examples" class="name">Data in examples</a></li>
                        <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
                        <li><a href="#Keywords" class="name">Keywords</a></li>
                    </ul>
                    <h2 id="Related keywords in BuiltIn">Related keywords in BuiltIn</h2>
                    <p>Following keywords in the BuiltIn library can also be used with lists and dictionaries:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <th>Keyword Name</th>
                                <th>Applicable With</th>
                                <th>Comment</th>
                            </tr>
                            <tr>
                                <td><span class="name">Create List</span></td>
                                <td>lists</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Create Dictionary</span></td>
                                <td>dicts</td>
                                <td>Was in Collections until RF 2.9.</td>
                            </tr>
                            <tr>
                                <td><span class="name">Get Length</span></td>
                                <td>both</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Length Should Be</span></td>
                                <td>both</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Should Be Empty</span></td>
                                <td>both</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Should Not Be Empty</span></td>
                                <td>both</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Should Contain</span></td>
                                <td>both</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Should Not Contain</span></td>
                                <td>both</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Should Contain X Times</span></td>
                                <td>lists</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Should Not Contain X Times</span></td>
                                <td>lists</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="name">Get Count</span></td>
                                <td>lists</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 id="Using with list-like and dictionary-like objects">Using with list-like and dictionary-like objects</h2>
                    <p>List keywords that do not alter the given list can also be used with tuples, and to some extend also with
                        other iterables. <a href="#Convert%20To%20List" class="name">Convert To List</a> can be used to convert
                        tuples and other iterables to Python <code>list</code> objects.</p>
                    <p>Similarly dictionary keywords can, for most parts, be used with other mappings. <a href="#Convert%20To%20Dictionary" class="name">Convert To Dictionary</a> can be used if real Python
                        <code>dict</code> objects are needed.
                    </p>
                    <h2 id="Boolean arguments">Boolean arguments</h2>
                    <p>Some keywords accept arguments that are handled as Boolean values true or false. If such an argument is given
                        as a string, it is considered false if it is an empty string or equal to <code>FALSE</code>,
                        <code>NONE</code>, <code>NO</code>, <code>OFF</code> or <code>0</code>, case-insensitively. Keywords
                        verifying something that allow dropping actual and expected values from the possible error message also
                        consider string <code>no values</code> to be false. Other strings are considered true regardless their
                        value, and other argument types are tested using the same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.
                    </p>
                    <p>True examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Should%20Contain%20Match" class="name">Should Contain Match</a></td>
                                <td>${list}</td>
                                <td>${pattern}</td>
                                <td>case_insensitive=True</td>
                                <td># Strings are generally true.</td>
                            </tr>
                            <tr>
                                <td><a href="#Should%20Contain%20Match" class="name">Should Contain Match</a></td>
                                <td>${list}</td>
                                <td>${pattern}</td>
                                <td>case_insensitive=yes</td>
                                <td># Same as the above.</td>
                            </tr>
                            <tr>
                                <td><a href="#Should%20Contain%20Match" class="name">Should Contain Match</a></td>
                                <td>${list}</td>
                                <td>${pattern}</td>
                                <td>case_insensitive=${TRUE}</td>
                                <td># Python <code>True</code> is true.</td>
                            </tr>
                            <tr>
                                <td><a href="#Should%20Contain%20Match" class="name">Should Contain Match</a></td>
                                <td>${list}</td>
                                <td>${pattern}</td>
                                <td>case_insensitive=${42}</td>
                                <td># Numbers other than 0 are true.</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>False examples:</p>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td><a href="#Should%20Contain%20Match" class="name">Should Contain Match</a></td>
                                <td>${list}</td>
                                <td>${pattern}</td>
                                <td>case_insensitive=False</td>
                                <td># String <code>false</code> is false.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Should%20Contain%20Match" class="name">Should Contain Match</a></td>
                                <td>${list}</td>
                                <td>${pattern}</td>
                                <td>case_insensitive=no</td>
                                <td># Also string <code>no</code> is false.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Should%20Contain%20Match" class="name">Should Contain Match</a></td>
                                <td>${list}</td>
                                <td>${pattern}</td>
                                <td>case_insensitive=${EMPTY}</td>
                                <td># Empty string is false.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Should%20Contain%20Match" class="name">Should Contain Match</a></td>
                                <td>${list}</td>
                                <td>${pattern}</td>
                                <td>case_insensitive=${FALSE}</td>
                                <td># Python <code>False</code> is false.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#Lists%20Should%20Be%20Equal" class="name">Lists Should Be Equal</a></td>
                                <td>${x}</td>
                                <td>${y}</td>
                                <td>Custom error</td>
                                <td>values=no values</td>
                                <td># <code>no values</code> works with <code>values</code> argument</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 id="Data in examples">Data in examples</h2>
                    <p>List related keywords use variables in format <code>${Lx}</code> in their examples. They mean lists with as
                        many alphabetic characters as specified by <code>x</code>. For example, <code>${L1}</code> means
                        <code>['a']</code> and <code>${L3}</code> means <code>['a', 'b', 'c']</code>.
                    </p>
                    <p>Dictionary keywords use similar <code>${Dx}</code> variables. For example, <code>${D1}</code> means
                        <code>{'a': 1}</code> and <code>${D3}</code> means <code>{'a': 1, 'b': 2, 'c': 3}</code>.
                    </p>
                </div>
            </div>
        </div>

    </div>
</article>