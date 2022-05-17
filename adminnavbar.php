<?php
@session_start();
include 'connection.php';
if (!isset($_SESSION["email"])) {
    header("location:adminlogin.php");
}

?>
<!-- top-header -->
<div class="header-most-top">
    <p>Bookland Offer  Deals & Discounts</p>
</div>
<!-- //top-header -->
<!-- header-bot-->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <!-- header-bot-->
        <div class="col-md-4 logo_agile">
            <h1>
                <a href="index.php">
                    <span>B</span>ook
                    <span>L</span>and
                    <img src="images/logo2.png" alt=" " style="width: 100px;">
                </a>
            </h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-8 header">
            <!-- header lists -->
            <ul>

                <li>
                    <span class="fa fa-phone" aria-hidden="true"></span> +91 7901779442
                </li>

            </ul>
            <!-- //header lists -->
            <!-- search -->
            <div class="agileits_search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="How can we help you today?" required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <span class="fa fa-search" aria-hidden="true"> </span>
                    </button>
                </form>
            </div>
            <!-- //search -->
            <!-- cart details -->
<!--            <div class="top_nav_right">-->
<!--                <div class="wthreecartaits wthreecartaits2 cart cart box_1">-->
<!--                    <form action="#" method="post" class="last">-->
<!--                        <input type="hidden" name="cmd" value="_cart">-->
<!--                        <input type="hidden" name="display" value="1">-->
<!--                        <a href="viewcart.php">-->
<!--                            <button class="w3view-cart" type="button" name="submit" value="">-->
<!--                                <i class="fa fa-cart-arrow-down" id="showcarthere"-->
<!--                                   aria-hidden="true"><sup>--><?php //if (isset($_SESSION['cartarray'])) {
//                                            echo count($_SESSION['cartarray']);
//                                        } else {
//                                            echo 0;
//                                        } ?><!--</sup>-->
<!--                                </i>-->
<!--                            </button>-->
<!--                        </a>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
            <!-- //cart details -->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- shop locator (popup) -->
<!-- Button trigger modal(shop-locator) -->
<div id="small-dialog1" class="mfp-hide">
    <div class="select-city">
        <h3>Please Select Your Location</h3>
        <select class="list_of_cities">
            <optgroup label="Popular Cities">
                <option selected style="display:none;color:#eee;">Select City</option>
                <option>Birmingham</option>
                <option>Anchorage</option>
                <option>Phoenix</option>
                <option>Little Rock</option>
                <option>Los Angeles</option>
                <option>Denver</option>
                <option>Bridgeport</option>
                <option>Wilmington</option>
                <option>Jacksonville</option>
                <option>Atlanta</option>
                <option>Honolulu</option>
                <option>Boise</option>
                <option>Chicago</option>
                <option>Indianapolis</option>
            </optgroup>
            <optgroup label="Alabama">
                <option>Birmingham</option>
                <option>Montgomery</option>
                <option>Mobile</option>
                <option>Huntsville</option>
                <option>Tuscaloosa</option>
            </optgroup>
            <optgroup label="Alaska">
                <option>Anchorage</option>
                <option>Fairbanks</option>
                <option>Juneau</option>
                <option>Sitka</option>
                <option>Ketchikan</option>
            </optgroup>
            <optgroup label="Arizona">
                <option>Phoenix</option>
                <option>Tucson</option>
                <option>Mesa</option>
                <option>Chandler</option>
                <option>Glendale</option>
            </optgroup>
            <optgroup label="Arkansas">
                <option>Little Rock</option>
                <option>Fort Smith</option>
                <option>Fayetteville</option>
                <option>Springdale</option>
                <option>Jonesboro</option>
            </optgroup>
            <optgroup label="California">
                <option>Los Angeles</option>
                <option>San Diego</option>
                <option>San Jose</option>
                <option>San Francisco</option>
                <option>Fresno</option>
            </optgroup>
            <optgroup label="Colorado">
                <option>Denver</option>
                <option>Colorado</option>
                <option>Aurora</option>
                <option>Fort Collins</option>
                <option>Lakewood</option>
            </optgroup>
            <optgroup label="Connecticut">
                <option>Bridgeport</option>
                <option>New Haven</option>
                <option>Hartford</option>
                <option>Stamford</option>
                <option>Waterbury</option>
            </optgroup>
            <optgroup label="Delaware">
                <option>Wilmington</option>
                <option>Dover</option>
                <option>Newark</option>
                <option>Bear</option>
                <option>Middletown</option>
            </optgroup>
            <optgroup label="Florida">
                <option>Jacksonville</option>
                <option>Miami</option>
                <option>Tampa</option>
                <option>St. Petersburg</option>
                <option>Orlando</option>
            </optgroup>
            <optgroup label="Georgia">
                <option>Atlanta</option>
                <option>Augusta</option>
                <option>Columbus</option>
                <option>Savannah</option>
                <option>Athens</option>
            </optgroup>
            <optgroup label="Hawaii">
                <option>Honolulu</option>
                <option>Pearl City</option>
                <option>Hilo</option>
                <option>Kailua</option>
                <option>Waipahu</option>
            </optgroup>
            <optgroup label="Idaho">
                <option>Boise</option>
                <option>Nampa</option>
                <option>Meridian</option>
                <option>Idaho Falls</option>
                <option>Pocatello</option>
            </optgroup>
            <optgroup label="Illinois">
                <option>Chicago</option>
                <option>Aurora</option>
                <option>Rockford</option>
                <option>Joliet</option>
                <option>Naperville</option>
            </optgroup>
            <optgroup label="Indiana">
                <option>Indianapolis</option>
                <option>Fort Wayne</option>
                <option>Evansville</option>
                <option>South Bend</option>
                <option>Hammond</option>
            </optgroup>
            <optgroup label="Iowa">
                <option>Des Moines</option>
                <option>Cedar Rapids</option>
                <option>Davenport</option>
                <option>Sioux City</option>
                <option>Waterloo</option>
            </optgroup>
            <optgroup label="Kansas">
                <option>Wichita</option>
                <option>Overland Park</option>
                <option>Kansas City</option>
                <option>Topeka</option>
                <option>Olathe</option>
            </optgroup>
            <optgroup label="Kentucky">
                <option>Louisville</option>
                <option>Lexington</option>
                <option>Bowling Green</option>
                <option>Owensboro</option>
                <option>Covington</option>
            </optgroup>
            <optgroup label="Louisiana">
                <option>New Orleans</option>
                <option>Baton Rouge</option>
                <option>Shreveport</option>
                <option>Metairie</option>
                <option>Lafayette</option>
            </optgroup>
            <optgroup label="Maine">
                <option>Portland</option>
                <option>Lewiston</option>
                <option>Bangor</option>
                <option>South Portland</option>
                <option>Auburn</option>
            </optgroup>
            <optgroup label="Maryland">
                <option>Baltimore</option>
                <option>Frederick</option>
                <option>Rockville</option>
                <option>Gaithersburg</option>
                <option>Bowie</option>
            </optgroup>
            <optgroup label="Massachusetts">
                <option>Boston</option>
                <option>Worcester</option>
                <option>Springfield</option>
                <option>Lowell</option>
                <option>Cambridge</option>
            </optgroup>
            <optgroup label="Michigan">
                <option>Detroit</option>
                <option>Grand Rapids</option>
                <option>Warren</option>
                <option>Sterling Heights</option>
                <option>Lansing</option>
            </optgroup>
            <optgroup label="Minnesota">
                <option>Minneapolis</option>
                <option>St. Paul</option>
                <option>Rochester</option>
                <option>Duluth</option>
                <option>Bloomington</option>
            </optgroup>
            <optgroup label="Mississippi">
                <option>Jackson</option>
                <option>Gulfport</option>
                <option>Southaven</option>
                <option>Hattiesburg</option>
                <option>Biloxi</option>
            </optgroup>
            <optgroup label="Missouri">
                <option>Kansas City</option>
                <option>St. Louis</option>
                <option>Springfield</option>
                <option>Independence</option>
                <option>Columbia</option>
            </optgroup>
            <optgroup label="Montana">
                <option>Billings</option>
                <option>Missoula</option>
                <option>Great Falls</option>
                <option>Bozeman</option>
                <option>Butte-Silver Bow</option>
            </optgroup>
            <optgroup label="Nebraska">
                <option>Omaha</option>
                <option>Lincoln</option>
                <option>Bellevue</option>
                <option>Grand Island</option>
                <option>Kearney</option>
            </optgroup>
            <optgroup label="Nevada">
                <option>Las Vegas</option>
                <option>Henderson</option>
                <option>North Las Vegas</option>
                <option>Reno</option>
                <option>Sunrise Manor</option>
            </optgroup>
            <optgroup label="New Hampshire">
                <option>Manchesters</option>
                <option>Nashua</option>
                <option>Concord</option>
                <option>Dover</option>
                <option>Rochester</option>
            </optgroup>
            <optgroup label="New Jersey">
                <option>Newark</option>
                <option>Jersey City</option>
                <option>Paterson</option>
                <option>Elizabeth</option>
                <option>Edison</option>
            </optgroup>
            <optgroup label="New Mexico">
                <option>Albuquerque</option>
                <option>Las Cruces</option>
                <option>Rio Rancho</option>
                <option>Santa Fe</option>
                <option>Roswell</option>
            </optgroup>
            <optgroup label="New York">
                <option>New York</option>
                <option>Buffalo</option>
                <option>Rochester</option>
                <option>Yonkers</option>
                <option>Syracuse</option>
            </optgroup>
            <optgroup label="North Carolina">
                <option>Charlotte</option>
                <option>Raleigh</option>
                <option>Greensboro</option>
                <option>Winston-Salem</option>
                <option>Durham</option>
            </optgroup>
            <optgroup label="North Dakota">
                <option>Fargo</option>
                <option>Bismarck</option>
                <option>Grand Forks</option>
                <option>Minot</option>
                <option>West Fargo</option>
            </optgroup>
            <optgroup label="Ohio">
                <option>Columbus</option>
                <option>Cleveland</option>
                <option>Cincinnati</option>
                <option>Toledo</option>
                <option>Akron</option>
            </optgroup>
            <optgroup label="Oklahoma">
                <option>Oklahoma City</option>
                <option>Tulsa</option>
                <option>Norman</option>
                <option>Broken Arrow</option>
                <option>Lawton</option>
            </optgroup>
            <optgroup label="Oregon">
                <option>Portland</option>
                <option>Eugene</option>
                <option>Salem</option>
                <option>Gresham</option>
                <option>Hillsboro</option>
            </optgroup>
            <optgroup label="Pennsylvania">
                <option>Philadelphia</option>
                <option>Pittsburgh</option>
                <option>Allentown</option>
                <option>Erie</option>
                <option>Reading</option>
            </optgroup>
            <optgroup label="Rhode Island">
                <option>Providence</option>
                <option>Warwick</option>
                <option>Cranston</option>
                <option>Pawtucket</option>
                <option>East Providence</option>
            </optgroup>
            <optgroup label="South Carolina">
                <option>Columbia</option>
                <option>Charleston</option>
                <option>North Charleston</option>
                <option>Mount Pleasant</option>
                <option>Rock Hill</option>
            </optgroup>
            <optgroup label="South Dakota">
                <option>Sioux Falls</option>
                <option>Rapid City</option>
                <option>Aberdeen</option>
                <option>Brookings</option>
                <option>Watertown</option>
            </optgroup>
            <optgroup label="Tennessee">
                <option>Memphis</option>
                <option>Nashville</option>
                <option>Knoxville</option>
                <option>Chattanooga</option>
                <option>Clarksville</option>
            </optgroup>
            <optgroup label="Texas">
                <option>Houston</option>
                <option>San Antonio</option>
                <option>Dallas</option>
                <option>Austin</option>
                <option>Fort Worth</option>
            </optgroup>
            <optgroup label="Utah">
                <option>Salt Lake City</option>
                <option>West Valley City</option>
                <option>Provo</option>
                <option>West Jordan</option>
                <option>Orem</option>
            </optgroup>
            <optgroup label="Vermont">
                <option>Burlington</option>
                <option>Essex</option>
                <option>South Burlington</option>
                <option>Colchester</option>
                <option>Rutland</option>
            </optgroup>
            <optgroup label="Virginia">
                <option>Virginia Beach</option>
                <option>Norfolk</option>
                <option>Chesapeake</option>
                <option>Arlington</option>
                <option>Richmond</option>
            </optgroup>
            <optgroup label="Washington">
                <option>Seattle</option>
                <option>Spokane</option>
                <option>Tacoma</option>
                <option>Vancouver</option>
                <option>Bellevue</option>
            </optgroup>
            <optgroup label="West Virginia">
                <option>Charleston</option>
                <option>Huntington</option>
                <option>Parkersburg</option>
                <option>Morgantown</option>
                <option>Wheeling</option>
            </optgroup>
            <optgroup label="Wisconsin">
                <option>Milwaukee</option>
                <option>Madison</option>
                <option>Green Bay</option>
                <option>Kenosha</option>
                <option>Racine</option>
            </optgroup>
            <optgroup label="Wyoming">
                <option>Cheyenne</option>
                <option>Casper</option>
                <option>Laramie</option>
                <option>Gillette</option>
                <option>Rock Springs</option>
            </optgroup>
        </select>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //shop locator (popup) -->
<!-- //header-bot -->
<!-- navigation -->

<div class="ban-top " style="background-color: black">
    <div class="container-fluid">

        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" style="margin-left:100px;margin-right:100px " id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active">
                                <a class="nav-stylehead" style="color: white" href="adminhome.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
<!--                            <li class="dropdown">-->
<!--                                <a style="color: white" class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Manage Admins-->
<!--                                    <b class="caret"></b>-->
<!--                                </a>-->
<!---->
<!--                                <ul class="dropdown-menu agile_short_dropdown">-->
<!--                                    <li><a href="addadmin.php">Add Admin</a></li>-->
<!--                                    <li><a href="viewadmin.php">View Admin</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="dropdown">
                                <a style="color: white" class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Manage Category
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="addcategory.php">Add Category</a></li>
                                    <li><a href="viewcategory.php">View Category</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a style="color: white" class="nav-stylehead" href="order.php">Orders
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a style="color: white" class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">
                                    Manage Author<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="viewauthor.php">View Authors</a></li>
                                    <li><a href="viewuser.php">View User</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a style="color: white" class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown"><span
                                            class="glyphicon glyphicon-wrench"></span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="adminlogout.php">Logout</a></li>
                                    <li><a href="changeadminpassword.php">Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- //navigation -->
<!---->
<!--<div class="container-fluid">-->
<!--    <nav class="navbar navbar-inverse">-->
<!---->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle"-->
<!--                    data-toggle="collapse" data-target="#menubar1">-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="navbar-collapse collapse" id="menubar1">-->
<!--            <ul class="navbar-nav nav">-->
<!--                <li><a href="adminhome.php">Admin Home</a></li>-->
<!--                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Manage Admins<span-->
<!--                                class="caret"> </span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="viewadmin.php">View Admin</a></li>-->
<!--                        <li><a href="addadmin.php">Add Admin</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Manage Categories<span-->
<!--                                class="caret"> </span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="addcategory.php">Add Category</a></li>-->
<!--                        <li><a href="viewcategory.php">View Category</a></li>-->
<!--                        <li><a href="viewauthor.php">View Authors</a></li>-->
<!---->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Manage users<span-->
<!--                                class="caret"> </span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="viewuser.php">View User</a></li>-->
<!---->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!---->
<!--            </ul>-->
<!---->
<!--            <ul class="navbar-nav nav navbar-right">-->
<!--                <li><a href="adminlogout.php">Logout</a></li>-->
<!--                <li><a href="changeadminpassword.php">Change Password</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!---->
<!---->
<!--    </nav>-->
<!--</div>-->
