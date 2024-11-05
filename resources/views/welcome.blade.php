<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <title>Volleyball Competition</title>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../../assets/images/logo5.png"
    />
    
    
    
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/scrollbar.css" rel="stylesheet">
    
    <!-- Buttons Style (moved to separate stylesheet for best practices) -->
    <style>
        .header-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .header-buttons button {
            margin: 5px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .header-buttons button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        
        <!-- Sidebar -->
        <aside id="sidebar">
            <!-- Toggle Button -->
            <div class="button-container clearfix">
                <div class="menu-toggle flaticon-menu10"></div>
            </div>
            
            <!-- Menu Box -->
            <div class="menu-box">
                
                <!-- Logo -->
                <br>
                <style>
                        .logo img {
                            width: 130px;
                            height: 130px;
                        }
                        .logo-text {
                            text-align: center; /* ตั้งให้หัวข้อตรงกลาง */
                            font-size: 25px; /* ขนาดตัวหนังสือ */
                            font-weight: bold; /* ตัวหนา */
                            margin-top: 10px; /* เว้นระยะห่างด้านบน */
                        }
                </style>
                    <div class="logo text-right">
                        <a href="#"><img src="images/logo5.png" alt=""></a>
                    </div>
                    <div class="logo-text">Volleyball Competition</div>
                    <br>

                
                <!-- Sticky Menu -->
            <div class="menu-box">
                <nav class="sticky-menu">
                    <ul>
                        <li class="current"><a href="#Schedule">Schedule <span class="fa fa-arrow-right"></span></a></li>
                        <li><a href="#Event">Event <span class="fa fa-arrow-right"></span></a></li>
                        <li><a href="#Women">Women <span class="fa fa-arrow-right"></span></a></li>
                        <li><a href="#Men">Men <span class="fa fa-arrow-right"></span></a></li>
                        <li><a href="#Teams">Team list <span class="fa fa-arrow-right"></span></a></li>
                        </ul>
                    </nav>
            </div>
        </aside>
        
        <!-- Content Section -->
        <div id="content-section">
            
            <!-- Introduction Section -->

            <section class="section introduction" id="Schedule">
                <div class="sec-title">
                    <span class="icon fa fa-th-list"></span>
                    <h2>Schedule</h2>
                </div>
                    
                    <!-- Header Buttons -->
                    <div class="header-buttons">
                        <button onclick="location.href='{{ route('login') }}'">Login Admin</button>
                        <button onclick="location.href='{{ route('register') }}'">Register Admin</button>
                    </div>
                
    <br>
    <div class="sec-content">
    <!-- <h2>Event Volleyball</h2>

        
        <div class="separator"></div> -->
        
        <div style="margin-top: 20px;">
                <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; table-layout: fixed;">
                    <thead>

                        <tr>
                                <th style="padding: 10px; border: 1px solid black; background-color: #FF00FF;">Date</th>
                                <th style="padding: 10px; border: 1px solid black; background-color: #FF00FF;">Event</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td style="padding: 10px; border: 1px solid black;">{{ $event->date }}</td>
                            <td style="padding: 10px; border: 1px solid black;">{{ $event->event }}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
        </div>

    </div>
    
</section>



        
        <!-- HTML Structure -->
         <section class="section html-structure" id="Event">
        <div class="sec-title">
                    <span class="icon fa fa-th-list"></span>
                    <h2>Event</h2>
                </div>

                <br>
                <section class="section introduction" id="introduction">

            
            <br>
            <div class="sec-content">
            @foreach ($uniqueEvents as $event)
            	<h2><li>{{ $event }}</li></h2>
                @endforeach
            </div>
        </section>
        
        <!--CSS Structure-->
        <section class="section css-structure" id="Women">
                <div class="sec-title">
                    <span class="icon fa fa-th-list"></span>
                    <h2>Women</h2>
                </div>
                
                
            
            </select>
                <div style="margin-top: 20px;">
                
                <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; table-layout: fixed;">
                    <thead>

                        <tr>
                            <th style="padding: 10px; border: 1px solid black;background-color: #FFC0CB; text-align: center; width: 150px;">Date</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #FFC0CB; text-align: center; width: 80px;">Time</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #FFC0CB; text-align: center; width: 180px;">Round</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #FFC0CB; text-align: center; width: 180px;">Team1</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #FFC0CB; text-align: center; width: 80px;">Score</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #FFC0CB; text-align: center; width: 180px;">Team2</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #FFC0CB; text-align: center;">Event</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($worlds as $world)
                        <tr>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 150px;">{{ $world->w_date }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 80px;">{{ $world->w_time }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 180px;">{{ $world->w_round }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 180px;">{{ $world->w_teamone }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 80px;">{{ $world->w_score }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 180px;">{{ $world->w_teamtwo }}</td>
                            <td style="padding: 10px; border: 1px solid black;">{{ $world->w_event }}</td>
                        </tr>

                        
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </section>

        <!--Javascript-->
        <section class="section javascript" id="Men">
            <div class="sec-title">
                <span class="icon fa fa-th-list"></span>
                <h2>Men</h2>
            </div>
            
            <div style="margin-top: 20px;">
                <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; table-layout: fixed;">
                    <thead>

                        <tr>
                            <th style="padding: 10px; border: 1px solid black;background-color: #6495ED; text-align: center; width: 150px;">Date</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #6495ED; text-align: center; width: 80px;">Time</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #6495ED; text-align: center; width: 180px;">Round</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #6495ED; text-align: center; width: 180px;">Team1</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #6495ED; text-align: center; width: 80px;">Score</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #6495ED; text-align: center; width: 180px;">Team2</th>
                            <th style="padding: 10px; border: 1px solid black;background-color: #6495ED; text-align: center;">Event</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($menballs as $menball)
                    
                        <tr>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 150px;">{{ $menball->date }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 80px;">{{ $menball->time }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 180px;">{{ $menball->round }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 180px;">{{ $menball->teamone }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 80px;">{{ $menball->score }}</td>
                            <td style="padding: 10px; border: 1px solid black; text-align: center; width: 180px;">{{ $menball->teamtwo }}</td>
                            <td style="padding: 10px; border: 1px solid black;">{{ $menball->event }}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </section>

        <!--Contact Form Settings-->
        <section class="section contact-form" id="Teams">
            <div class="sec-title">
                <span class="icon fa fa-th-list"></span>
                <h2>Team list </h2>
            </div>
            
            <div style="margin-top: 20px;">
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; table-layout: fixed;">
        <thead>
            <tr>
                <th style="padding: 10px; border: 1px solid black;background-color: #FFC0CB;">Women</th>
                <th style="padding: 10px; border: 1px solid black;background-color: #6495ED;">Men</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid black;">
                    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="padding: 10px; border: 1px solid black;background-color:#FFFF00;">Team</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uniqueTeamsWomen as $team)
                                <tr>
                                    <td style="padding: 10px; border: 1px solid black;">{{ $team }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </td>
                <td style="padding: 10px; border: 1px solid black;">
                    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="padding: 10px; border: 1px solid black;background-color:#FFFF00;">Team</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uniqueTeamsMen as $team)
                                <tr>
                                    <td style="padding: 10px; border: 1px solid black;">{{ $team }}</td>
                                </tr>
                            @endforeach
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>


</body>
</html>


