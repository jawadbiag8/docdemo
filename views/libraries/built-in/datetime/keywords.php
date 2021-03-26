
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>DateTime</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/datetime">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/datetime/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="add-time-to-date">
                                        <h2><a href="#add-time-to-date">Add Time To Date</a></h2>

                                        <div>
                                            <p class="shortdoc">Adds time to date and returns the resulting date.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>date</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>time</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>result_format</td>
                                                    <td></td>
                                                    <td>timestamp</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude_millis</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>date_format</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Arguments:</p>
                                            <ul>
                                                <li><code>date:</code> Date to add time to in one of the supported <a href="#Date%20formats" class="name">date formats</a>.</li>
                                                <li><code>time:</code> Time that is added in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                <li><code>result_format:</code> Format of the returned date.</li>
                                                <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                <li><code>date_format:</code> Possible <a href="#Custom%20timestamp" class="name">custom
                            timestamp</a> format of <code>date</code>.</li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Add Time To Date</td>
                                                    <td>2014-05-28 12:05:03.111</td>
                                                    <td>7 days</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-06-04 12:05:03.111</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Add Time To Date</td>
                                                    <td>2014-05-28 12:05:03.111</td>
                                                    <td>01:02:03:004</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-05-28 13:07:06.115</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="add-time-to-time">
                                        <h2><a href="#add-time-to-time">Add Time To Time</a></h2>

                                        <div>
                                            <p class="shortdoc">Adds time to another time and returns the resulting time.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>time1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>time2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>result_format</td>
                                                    <td></td>
                                                    <td>number</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude_millis</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Arguments:</p>
                                            <ul>
                                                <li><code>time1:</code> First time in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                <li><code>time2:</code> Second time in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                <li><code>result_format:</code> Format of the returned time.</li>
                                                <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Add Time To Time</td>
                                                    <td>1 minute</td>
                                                    <td>42</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>${102}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Add Time To Time</td>
                                                    <td>3 hours 5 minutes</td>
                                                    <td>01:02:03</td>
                                                    <td>timer</td>
                                                    <td>exclude_millis=yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>04:07:03</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="convert-date">
                                        <h2><a href="#convert-date">Convert Date</a></h2>

                                        <div>
                                            <p class="shortdoc">Converts between supported `date formats`.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>date</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>result_format</td>
                                                    <td></td>
                                                    <td>timestamp</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude_millis</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>date_format</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Converts between supported <a href="#Date%20formats" class="name">date formats</a>.</p>
                                            <p>Arguments:</p>
                                            <ul>
                                                <li><code>date:</code> Date in one of the supported <a href="#Date%20formats" class="name">date
                            formats</a>.</li>
                                                <li><code>result_format:</code> Format of the returned date.</li>
                                                <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                <li><code>date_format:</code> Specifies possible <a href="#Custom%20timestamp" class="name">custom timestamp</a> format.</li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Convert Date</td>
                                                    <td>20140528 12:05:03.111</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-05-28 12:05:03.111</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Convert Date</td>
                                                    <td>${date}</td>
                                                    <td>epoch</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>${1401267903.111}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Convert Date</td>
                                                    <td>5.28.2014 12:05</td>
                                                    <td>exclude_millis=yes</td>
                                                    <td>date_format=%m.%d.%Y %H:%M</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-05-28 12:05:00</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="convert-time">
                                        <h2><a href="#convert-time">Convert Time</a></h2>

                                        <div>
                                            <p class="shortdoc">Converts between supported `time formats`.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>time</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>result_format</td>
                                                    <td></td>
                                                    <td>number</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude_millis</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>Converts between supported <a href="#Time%20formats" class="name">time formats</a>.</p>
                                            <p>Arguments:</p>
                                            <ul>
                                                <li><code>time:</code> Time in one of the supported <a href="#Time%20formats" class="name">time
                            formats</a>.</li>
                                                <li><code>result_format:</code> Format of the returned time.</li>
                                                <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Convert Time</td>
                                                    <td>10 seconds</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>${10}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Convert Time</td>
                                                    <td>1:00:01</td>
                                                    <td>verbose</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>1 hour 1 second</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Convert Time</td>
                                                    <td>${3661.5}</td>
                                                    <td>timer</td>
                                                    <td>exclude_milles=yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>01:01:02</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-current-date">
                                        <h2><a href="#get-current-date">Get Current Date</a></h2>

                                        <div>
                                            <p class="shortdoc">Returns current local or UTC time with an optional increment.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>time_zone</td>
                                                    <td></td>
                                                    <td>local</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>increment</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>result_format</td>
                                                    <td></td>
                                                    <td>timestamp</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude_millis</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Arguments:</p>
                                            <ul>
                                                <li><code>time_zone:</code> Get the current time on this time zone. Currently only
                                                    <code>local</code> (default) and <code>UTC</code> are supported.</li>
                                                <li><code>increment:</code> Optional time increment to add to the returned date in one of the supported <a href="#Time%20formats" class="name">time formats</a>. Can be negative.</li>
                                                <li><code>result_format:</code> Format of the returned date (see <a href="#Date%20formats" class="name">date formats</a>).</li>
                                                <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Get Current Date</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-06-12 20:00:58.946</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Get Current Date</td>
                                                    <td>UTC</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-06-12 17:00:58.946</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Get Current Date</td>
                                                    <td>increment=02:30:00</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-06-12 22:30:58.946</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Get Current Date</td>
                                                    <td>UTC</td>
                                                    <td>- 5 hours</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-06-12 12:00:58.946</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Get Current Date</td>
                                                    <td>result_format=datetime</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date.year}</td>
                                                    <td>${2014}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date.month}</td>
                                                    <td>${6}</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="subtract-date-from-date">
                                        <h2><a href="#subtract-date-from-date">Subtract Date From Date</a></h2>

                                        <div>
                                            <p class="shortdoc">Subtracts date from another date and returns time between.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>date1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>date2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>result_format</td>
                                                    <td></td>
                                                    <td>number</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude_millis</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>date1_format</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>date2_format</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Arguments:</p>
                                            <ul>
                                                <li><code>date1:</code> Date to subtract another date from in one of the supported <a href="#Date%20formats" class="name">date formats</a>.</li>
                                                <li><code>date2:</code> Date that is subtracted in one of the supported <a href="#Date%20formats" class="name">date formats</a>.</li>
                                                <li><code>result_format:</code> Format of the returned time (see <a href="#Time%20formats" class="name">time formats</a>).</li>
                                                <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                <li><code>date1_format:</code> Possible <a href="#Custom%20timestamp" class="name">custom
                            timestamp</a> format of <code>date1</code>.</li>
                                                <li><code>date2_format:</code> Possible <a href="#Custom%20timestamp" class="name">custom
                            timestamp</a> format of <code>date2</code>.</li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Subtract Date From Date</td>
                                                    <td>2014-05-28 12:05:52</td>
                                                    <td>2014-05-28 12:05:10</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>${42}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Subtract Date From Date</td>
                                                    <td>2014-05-28 12:05:52</td>
                                                    <td>2014-05-27 12:05:10</td>
                                                    <td>verbose</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>1 day 42 seconds</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="subtract-time-from-date">
                                        <h2><a href="#subtract-time-from-date">Subtract Time From Date</a></h2>

                                        <div>
                                            <p class="shortdoc">Subtracts time from date and returns the resulting date.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>date</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>time</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>result_format</td>
                                                    <td></td>
                                                    <td>timestamp</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude_millis</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>date_format</td>
                                                    <td></td>
                                                    <td>None</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Arguments:</p>
                                            <ul>
                                                <li><code>date:</code> Date to subtract time from in one of the supported <a href="#Date%20formats" class="name">date formats</a>.</li>
                                                <li><code>time:</code> Time that is subtracted in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                <li><code>result_format:</code> Format of the returned date.</li>
                                                <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                                <li><code>date_format:</code> Possible <a href="#Custom%20timestamp" class="name">custom
                            timestamp</a> format of <code>date</code>.</li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Subtract Time From Date</td>
                                                    <td>2014-06-04 12:05:03.111</td>
                                                    <td>7 days</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-05-28 12:05:03.111</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${date} =</td>
                                                    <td>Subtract Time From Date</td>
                                                    <td>2014-05-28 13:07:06.115</td>
                                                    <td>01:02:03:004</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${date}</td>
                                                    <td>2014-05-28 12:05:03.111</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="subtract-time-from-time">
                                        <h2><a href="#subtract-time-from-time">Subtract Time From Time</a></h2>

                                        <div>
                                            <p class="shortdoc">Subtracts time from another time and returns the resulting time.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>time1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>time2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>result_format</td>
                                                    <td></td>
                                                    <td>number</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>exclude_millis</td>
                                                    <td></td>
                                                    <td>False</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <p>Arguments:</p>
                                            <ul>
                                                <li><code>time1:</code> Time to subtract another time from in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                <li><code>time2:</code> Time to subtract in one of the supported <a href="#Time%20formats" class="name">time formats</a>.</li>
                                                <li><code>result_format:</code> Format of the returned time.</li>
                                                <li><code>exclude_millis:</code> When set to any true value, rounds and drops milliseconds as explained in <a href="#Millisecond%20handling" class="name">millisecond handling</a>.</li>
                                            </ul>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Subtract Time From Time</td>
                                                    <td>00:02:30</td>
                                                    <td>100</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>${50}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>${time} =</td>
                                                    <td>Subtract Time From Time</td>
                                                    <td>${time}</td>
                                                    <td>1 minute</td>
                                                    <td>compact</td>
                                                </tr>
                                                <tr>
                                                    <td>Should Be Equal</td>
                                                    <td>${time}</td>
                                                    <td>- 10s</td>
                                                    <td></td>
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
                            <div><a id="link-add-time-to-date" href="#add-time-to-date" class="">Add Time To Date</a><a id="link-add-time-to-time" href="#add-time-to-time" class="">Add Time To Time</a><a id="link-convert-date" href="#convert-date"
                                    class="">Convert Date</a><a id="link-convert-time" href="#convert-time" class="">Convert Time</a><a id="link-get-current-date" href="#get-current-date" class="">Get Current Date</a><a id="link-subtract-date-from-date"
                                    href="#subtract-date-from-date" class="">Subtract Date
                  From Date</a><a id="link-subtract-time-from-date" href="#subtract-time-from-date" class="">Subtract Time From Date</a><a id="link-subtract-time-from-time" href="#subtract-time-from-time" class="">Subtract Time From Time</a></div>
                        </aside>
                    </div>
                </article>
           