
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Dialogs</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/dialogs">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/dialogs/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="execute-manual-step">
                                        <h2><a href="#execute-manual-step">Execute Manual Step</a></h2>

                                        <div>
                                            <p class="shortdoc">Pauses test execution until user sets the keyword status.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>message</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>default_error</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>User can press either <code>PASS</code> or <code>FAIL</code> button. In the latter case execution fails and an additional dialog is opened for defining the error message.</p>
                                            <p><code>message</code> is the instruction shown in the initial dialog and
                                                <code>default_error</code> is the default value shown in the possible error message dialog.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-selection-from-user">
                                        <h2><a href="#get-selection-from-user">Get Selection From User</a></h2>

                                        <div>
                                            <p class="shortdoc">Pauses test execution and asks user to select a value.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>message</td>
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

                                            <p>The selected value is returned. Pressing <code>Cancel</code> fails the keyword.</p>
                                            <p><code>message</code> is the instruction shown in the dialog and <code>values</code> are the options given to the user.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${user} =</td>
                                                    <td>Get Selection From User</td>
                                                    <td>Select user</td>
                                                    <td>user1</td>
                                                    <td>user2</td>
                                                    <td>admin</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-selections-from-user">
                                        <h2><a href="#get-selections-from-user">Get Selections From User</a></h2>

                                        <div>
                                            <p class="shortdoc">Pauses test execution and asks user to select multiple values.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>message</td>
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

                                            <p>The selected values are returned as a list. Selecting no values is OK and in that case the returned list is empty. Pressing <code>Cancel</code> fails the keyword.</p>
                                            <p><code>message</code> is the instruction shown in the dialog and <code>values</code> are the options given to the user.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${users} =</td>
                                                    <td>Get Selections From User</td>
                                                    <td>Select users</td>
                                                    <td>user1</td>
                                                    <td>user2</td>
                                                    <td>admin</td>
                                                </tr>
                                            </table>
                                          
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-value-from-user">
                                        <h2><a href="#get-value-from-user">Get Value From User</a></h2>

                                        <div>
                                            <p class="shortdoc">Pauses test execution and asks user to input a value.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>message</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>default_value</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>hidden</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Value typed by the user, or the possible default value, is returned. Returning an empty value is fine, but pressing <code>Cancel</code> fails the keyword.</p>
                                            <p><code>message</code> is the instruction shown in the dialog and <code>default_value</code> is the possible default value shown in the input field.</p>
                                            <p>If <code>hidden</code> is given a true value, the value typed by the user is hidden.
                                                <code>hidden</code> is considered true if it is a non-empty string not equal to
                                                <code>false</code>, <code>none</code> or <code>no</code>, case-insensitively. If it is not a string, its truth value is got directly using same <a href="http://docs.python.org/library/stdtypes.html#truth">rules as in Python</a>.</p>
                                            <h3>Examples</h3>
                                            <table border="1">
                                                <tr>
                                                    <td>${username} =</td>
                                                    <td>Get Value From User</td>
                                                    <td>Input user name</td>
                                                    <td>default</td>
                                                </tr>
                                                <tr>
                                                    <td>${password} =</td>
                                                    <td>Get Value From User</td>
                                                    <td>Input password</td>
                                                    <td>hidden=yes</td>
                                                </tr>
                                            </table>
                                            <p>Considering strings <code>false</code> and <code>no</code> to be false is new in RF 2.9 and considering string <code>none</code> false is new in RF 3.0.3.</p>
                                        </div>
                                    </div>

                                    <div class="keyword" id="pause-execution">
                                        <h2><a href="#pause-execution">Pause Execution</a></h2>

                                        <div>
                                            <p class="shortdoc">Pauses test execution until user clicks ``Ok`` button.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>message</td>
                                                    <td></td>
                                                    <td>Test execution paused. Press OK to continue.</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Pauses test execution until user clicks <code>Ok</code> button.</p>
                                            <p><code>message</code> is the message shown in the dialog.</p>
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
                            <div><a id="link-execute-manual-step" href="#execute-manual-step" class="">Execute Manual
                  Step</a><a id="link-get-selection-from-user" href="#get-selection-from-user" class="">Get
                  Selection From User</a><a id="link-get-selections-from-user" href="#get-selections-from-user" class="">Get Selections From User</a><a id="link-get-value-from-user" href="#get-value-from-user" class="">Get Value From
                  User</a><a id="link-pause-execution" href="#pause-execution" class="">Pause Execution</a>
                            </div>
                        </aside>
                    </div>
                </article>
           
