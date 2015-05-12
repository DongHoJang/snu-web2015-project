<!DOCTYPE html>
<html>
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/components/header.php" ?>
    <!-- additional header below -->
</head>

<body>

<?php include $_SERVER["DOCUMENT_ROOT"].'/components/navbar.php' ?>


<!-- contents here -->
    <div class="container">
        <div class="jumbotron">
            <h1>Bootstrap Calendar Demo</h1>



        </div>

        <div class="page-header">

            <div class="pull-right form-inline">
                <div class="btn-group">
                    <button class="btn btn-primary" data-calendar-nav="prev">&lt;&lt; Prev</button>
                    <button class="btn btn-default" data-calendar-nav="today">Today</button>
                    <button class="btn btn-primary" data-calendar-nav="next">Next &gt;&gt;</button>
                </div>
                <div class="btn-group">
                    <button class="btn btn-warning" data-calendar-view="year">Year</button>
                    <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                    <button class="btn btn-warning" data-calendar-view="week">Week</button>
                    <button class="btn btn-warning" data-calendar-view="day">Day</button>
                </div>
            </div>

            <h3>March 2013</h3>
            <small>To see example with events navigate to march 2013</small>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div id="calendar" class="cal-context" style="width: 100%;">
                    <div class="cal-row-fluid cal-row-head">

                        <div class="cal-cell1">Sunday</div>

                        <div class="cal-cell1">Monday</div>

                        <div class="cal-cell1">Tuesday</div>

                        <div class="cal-cell1">Wednesday</div>

                        <div class="cal-cell1">Thursday</div>

                        <div class="cal-cell1">Friday</div>

                        <div class="cal-cell1">Saturday</div>

                    </div>
                    <div class="cal-month-box">


                        <div class="cal-row-fluid cal-before-eventlist">
                            <div class="cal-cell1 cal-cell" data-cal-row="-day1">
                                <div class="cal-month-day cal-day-outmonth cal-day-weekend cal-month-first-row">
                                    <span class="pull-right" data-cal-date="2013-02-24" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">24</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day2">
                                <div class="cal-month-day cal-day-outmonth cal-month-first-row">
                                    <span class="pull-right" data-cal-date="2013-02-25" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">25</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day3">
                                <div class="cal-month-day cal-day-outmonth cal-month-first-row">
                                    <span class="pull-right" data-cal-date="2013-02-26" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">26</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day4">
                                <div class="cal-month-day cal-day-outmonth cal-month-first-row">
                                    <span class="pull-right" data-cal-date="2013-02-27" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">27</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day5">
                                <div class="cal-month-day cal-day-outmonth cal-month-first-row">
                                    <span class="pull-right" data-cal-date="2013-02-28" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">28</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day6">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-01" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">1</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day7">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-02" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">2</span>

                                </div>
                            </div>
                        </div>


                        <div class="cal-row-fluid cal-before-eventlist">
                            <div class="cal-cell1 cal-cell" data-cal-row="-day1">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-03" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">3</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day2">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-04" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">4</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day3">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-05" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">5</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day4">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-06" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">6</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day5">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-07" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">7</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day6">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-08" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">8</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day7">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-09" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">9</span>

                                </div>
                            </div>
                        </div>


                        <div class="cal-row-fluid cal-before-eventlist">
                            <div class="cal-cell1 cal-cell" data-cal-row="-day1">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-10" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">10</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day2">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-11" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">11</span>

                                    <div class="events-list" data-cal-start="1362927600000" data-cal-end="1363014000000">

                                        <a href="http://www.example.com/" data-event-id="293" data-event-class="event-warning" class="pull-left event event-warning" data-toggle="tooltip" title="" data-original-title="This is warning class event with very long title to check how it fits to evet in day view"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day3">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-12" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">12</span>

                                    <div class="events-list" data-cal-start="1363014000000" data-cal-end="1363100400000">

                                        <a href="http://www.example.com/" data-event-id="293" data-event-class="event-warning" class="pull-left event event-warning" data-toggle="tooltip" title="" data-original-title="This is warning class event with very long title to check how it fits to evet in day view"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day4">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-13" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">13</span>

                                    <div class="events-list" data-cal-start="1363100400000" data-cal-end="1363186800000">

                                        <a href="http://www.example.com/" data-event-id="293" data-event-class="event-warning" class="pull-left event event-warning" data-toggle="tooltip" title="" data-original-title="This is warning class event with very long title to check how it fits to evet in day view"></a>

                                        <a href="http://www.example.com/" data-event-id="294" data-event-class="event-info" class="pull-left event event-info" data-toggle="tooltip" title="" data-original-title="This is information class "></a>

                                        <a href="http://www.example.com/" data-event-id="256" data-event-class="event-warning" class="pull-left event event-warning" data-toggle="tooltip" title="" data-original-title="Event that ends on timeline"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day5">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-14" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">14</span>

                                    <div class="events-list" data-cal-start="1363186800000" data-cal-end="1363273200000">

                                        <a href="http://www.example.com/" data-event-id="293" data-event-class="event-warning" class="pull-left event event-warning" data-toggle="tooltip" title="" data-original-title="This is warning class event with very long title to check how it fits to evet in day view"></a>

                                        <a href="http://www.example.com/" data-event-id="294" data-event-class="event-info" class="pull-left event event-info" data-toggle="tooltip" title="" data-original-title="This is information class "></a>

                                        <a href="http://www.example.com/" data-event-id="256" data-event-class="event-warning" class="pull-left event event-warning" data-toggle="tooltip" title="" data-original-title="Event that ends on timeline"></a>

                                        <a href="http://www.example.com/" data-event-id="548" data-event-class="event-special" class="pull-left event event-special" data-toggle="tooltip" title="" data-original-title="This is special event"></a>

                                        <a href="http://www.example.com/" data-event-id="297" data-event-class="event-success" class="pull-left event event-success" data-toggle="tooltip" title="" data-original-title="This is success event"></a>

                                        <a href="http://www.example.com/" data-event-id="276" data-event-class="event-success" class="pull-left event event-success" data-toggle="tooltip" title="" data-original-title="Short day event"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day6">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-15" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">15</span>

                                    <div class="events-list" data-cal-start="1363273200000" data-cal-end="1363359600000">

                                        <a href="http://www.example.com/" data-event-id="294" data-event-class="event-info" class="pull-left event event-info" data-toggle="tooltip" title="" data-original-title="This is information class "></a>

                                        <a href="http://www.example.com/" data-event-id="548" data-event-class="event-special" class="pull-left event event-special" data-toggle="tooltip" title="" data-original-title="This is special event"></a>

                                        <a href="http://www.example.com/" data-event-id="297" data-event-class="event-success" class="pull-left event event-success" data-toggle="tooltip" title="" data-original-title="This is success event"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day7">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-16" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">16</span>

                                    <div class="events-list" data-cal-start="1363359600000" data-cal-end="1363446000000">

                                        <a href="http://www.example.com/" data-event-id="548" data-event-class="event-special" class="pull-left event event-special" data-toggle="tooltip" title="" data-original-title="This is special event"></a>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="cal-row-fluid cal-before-eventlist">
                            <div class="cal-cell1 cal-cell" data-cal-row="-day1">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-17" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">17</span>

                                    <div class="events-list" data-cal-start="1363446000000" data-cal-end="1363532400000">

                                        <a href="http://www.example.com/" data-event-id="548" data-event-class="event-special" class="pull-left event event-special" data-toggle="tooltip" title="" data-original-title="This is special event"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day2">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-18" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">18</span>

                                    <div class="events-list" data-cal-start="1363532400000" data-cal-end="1363618800000">

                                        <a href="http://www.example.com/" data-event-id="548" data-event-class="event-special" class="pull-left event event-special" data-toggle="tooltip" title="" data-original-title="This is special event"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day3">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-19" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">19</span>

                                    <div class="events-list" data-cal-start="1363618800000" data-cal-end="1363705200000">

                                        <a href="http://www.example.com/" data-event-id="548" data-event-class="event-special" class="pull-left event event-special" data-toggle="tooltip" title="" data-original-title="This is special event"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day4">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-20" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">20</span>

                                    <div class="events-list" data-cal-start="1363705200000" data-cal-end="1363791600000">

                                        <a href="http://www.example.com/" data-event-id="54" data-event-class="" class="pull-left event " data-toggle="tooltip" title="" data-original-title="This is simple event"></a>

                                    </div>

                                    <div id="cal-day-tick" style="display: none;"><i class="icon-chevron-down glyphicon glyphicon-chevron-down"></i></div>
                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day5">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-21" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">21</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day6">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-22" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">22</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day7">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-23" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">23</span>

                                </div>
                            </div>
                        </div>


                        <div class="cal-row-fluid cal-before-eventlist">
                            <div class="cal-cell1 cal-cell" data-cal-row="-day1">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-24" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">24</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day2">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-25" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">25</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day3">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-26" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">26</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day4">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-27" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">27</span>

                                    <div class="events-list" data-cal-start="1364310000000" data-cal-end="1364396400000">

                                        <a href="http://www.example.com/" data-event-id="295" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Event 3"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day5">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-28" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">28</span>

                                    <div class="events-list" data-cal-start="1364396400000" data-cal-end="1364482800000">

                                        <a href="http://www.example.com/" data-event-id="295" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Event 3"></a>

                                        <a href="http://www.example.com/" data-event-id="532" data-event-class="event-inverse" class="pull-left event event-inverse" data-toggle="tooltip" title="" data-original-title="This is inverse event"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day6">
                                <div class="cal-month-day cal-day-inmonth">
                                    <span class="pull-right" data-cal-date="2013-03-29" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">29</span>

                                    <div class="events-list" data-cal-start="1364482800000" data-cal-end="1364569200000">

                                        <a href="http://www.example.com/" data-event-id="532" data-event-class="event-inverse" class="pull-left event event-inverse" data-toggle="tooltip" title="" data-original-title="This is inverse event"></a>

                                    </div>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day7">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-30" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">30</span>

                                </div>
                            </div>
                        </div>


                        <div class="cal-row-fluid cal-before-eventlist">
                            <div class="cal-cell1 cal-cell" data-cal-row="-day1">
                                <div class="cal-month-day cal-day-inmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-03-31" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">31</span>

                                    <div id="cal-week-box" data-cal-week="2013-03-31" style="display: none;">Week 14</div>
                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day2">
                                <div class="cal-month-day cal-day-outmonth">
                                    <span class="pull-right" data-cal-date="2013-04-01" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">1</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day3">
                                <div class="cal-month-day cal-day-outmonth">
                                    <span class="pull-right" data-cal-date="2013-04-02" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">2</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day4">
                                <div class="cal-month-day cal-day-outmonth">
                                    <span class="pull-right" data-cal-date="2013-04-03" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">3</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day5">
                                <div class="cal-month-day cal-day-outmonth">
                                    <span class="pull-right" data-cal-date="2013-04-04" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">4</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day6">
                                <div class="cal-month-day cal-day-outmonth">
                                    <span class="pull-right" data-cal-date="2013-04-05" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">5</span>

                                </div>
                            </div>
                            <div class="cal-cell1 cal-cell" data-cal-row="-day7">
                                <div class="cal-month-day cal-day-outmonth cal-day-weekend">
                                    <span class="pull-right" data-cal-date="2013-04-06" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">6</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <select id="first_day" class="form-control">
                        <option value="" selected="selected">First day of week language-dependant</option>
                        <option value="2">First day of week is Sunday</option>
                        <option value="1">First day of week is Monday</option>
                    </select>
                    <select id="language" class="form-control">
                        <option value="">Select Language (default: en-US)</option>
                        <option value="ko-KR">Korean</option>
                    </select>
                    <label class="checkbox">
                        <input type="checkbox" value="#events-modal" id="events-in-modal"> Open events in modal window
                    </label>
                </div>

                <h4>Events</h4>
                <small>This list is populated with events dynamically</small>
                <ul id="eventlist" class="nav nav-list">
                    <li><a href="http://www.example.com/">This is warning class event with very long title to check how it fits to evet in day view</a></li>
                    <li><a href="http://www.example.com/">This is information class </a></li>
                    <li><a href="http://www.example.com/">Event that ends on timeline</a></li>
                    <li><a href="http://www.example.com/">This is special event</a></li>
                    <li><a href="http://www.example.com/">This is success event</a></li>
                    <li><a href="http://www.example.com/">Short day event</a></li>
                    <li><a href="http://www.example.com/">This is simple event</a></li>
                    <li><a href="http://www.example.com/">Event 3</a></li>
                    <li><a href="http://www.example.com/">This is inverse event</a></li>
                </ul>
            </div>
        </div>

        <div class="clearfix"></div>
        <br>
        <br>
        <div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title">Event</h3>
                    </div>
                    <div class="modal-body" style="height: 400px">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<script type="text/javascript" src="/scripts/underscore-min.js"></script>


    <script type="text/javascript" src="/scripts/calendar.js"></script>
    <script type="text/javascript" src="/scripts/calendarapp.js"></script>



<?php include $_SERVER["DOCUMENT_ROOT"].'/components/footer.php' ?>
    
</body>
</html>