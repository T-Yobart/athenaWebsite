<?php 
include 'localization/en.php';
$text=$text['index'];
?>
<!DOCTYPE html>
<html lang=<?=$_GET['lang']?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="introduction">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$text['title']?></title>
    <style><?php include 'stylesheets/index.css' ?></style>
    <link rel="icon" type="image/x-icon" href="rsc/Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="http://athenacompany.co.uk">
                <img alt="athena company logo" src="rsc/logo.jpg">
            </a>
            <h1>
                <?=$text['title']?>
            </h1>
            <a href="https://twitter.com/CompanyAthena/">
                <img alt="twitter handle" src="rsc/twitter.ico">
            </a>
            <a href="https://discord.gg/c3jnuKaz24">
                <svg class="homeIcon-AaowEC" aria-hidden="false" viewBox="0 0 28 20">
                <path fill="currentColor" d="M23.0212 1.67671C21.3107 0.879656 19.5079 0.318797 17.6584 0C17.4062 0.461742 17.1749 0.934541 16.9708 1.4184C15.003 1.12145 12.9974 1.12145 11.0283 1.4184C10.819 0.934541 10.589 0.461744 10.3368 0.00546311C8.48074 0.324393 6.67795 0.885118 4.96746 1.68231C1.56727 6.77853 0.649666 11.7538 1.11108 16.652C3.10102 18.1418 5.3262 19.2743 7.69177 20C8.22338 19.2743 8.69519 18.4993 9.09812 17.691C8.32996 17.3997 7.58522 17.0424 6.87684 16.6135C7.06531 16.4762 7.24726 16.3387 7.42403 16.1847C11.5911 18.1749 16.408 18.1749 20.5763 16.1847C20.7531 16.3332 20.9351 16.4762 21.1171 16.6135C20.41 17.0369 19.6639 17.3997 18.897 17.691C19.3052 18.4993 19.7718 19.2689 20.3021 19.9945C22.6677 19.2689 24.8929 18.1364 26.8828 16.6466H26.8893C27.43 10.9731 25.9665 6.04728 23.0212 1.67671ZM9.68041 13.6383C8.39754 13.6383 7.34085 12.4453 7.34085 10.994C7.34085 9.54272 8.37155 8.34973 9.68041 8.34973C10.9893 8.34973 12.0395 9.54272 12.0187 10.994C12.0187 12.4453 10.9828 13.6383 9.68041 13.6383ZM18.3161 13.6383C17.0332 13.6383 15.9765 12.4453 15.9765 10.994C15.9765 9.54272 17.0124 8.34973 18.3161 8.34973C19.6184 8.34973 20.6751 9.54272 20.6543 10.994C20.6543 12.4453 19.6184 13.6383 18.3161 13.6383Z">
                </path>
                </svg>
            </a>
            <a href="ts3server://athenacompany.co.uk?port=9987">
                <img alt="teamspeak link" src="	https://teamspeak.com/user/themes/teamspeak/images/favicon.png"
                width=50" height="50">
            </a>
        </nav>
    </header>
    <video autoplay muted loop id="myVideo">
        <source src="https://cdn.discordapp.com/attachments/804979732461518848/858425194029121566/ArmA_3_2021.06.26_-_19.10.18.03.mp4" type="video/mp4">
    </video>
    <main>
        <div>
            <section>
                <h2><?=$text['optimer']?></h2>
                <p id="optimer">why tho</p>
            </section>
        </div>
        <div>
            <section>
                <img alt="athena company logo" src="rsc/logo.jpg">
                <div>
                <h2><?=$text['panel1']['h2']?></h2>
                <p><?=$text['panel1']['desc']?> </p>
                </div>
            </section>
            <section>
                <div>
                    <h2><?=$text['panel2']['h2']?></h2>
                    <p><?=$text['panel2']['desc']?> </p>
                </div>
                <img alt="athena company logo" src="rsc/logo.jpg">
            </section>
        </div>
        <div>
            <section>
                <div id="ts3viewer_1125685" style=""> </div>
                <script src="https://static.tsviewer.com/short_expire/js/ts3viewer_loader.js"></script>
                <script>
                var ts3v_url_1 = "https://www.tsviewer.com/ts3viewer.php?ID=1125685&text=818181&text_size=12&text_family=1&text_s_color=818181&text_s_weight=normal&text_s_style=normal&text_s_variant=normal&text_s_decoration=none&text_i_color=818181&text_i_weight=normal&text_i_style=normal&text_i_variant=normal&text_i_decoration=none&text_c_color=818181&text_c_weight=normal&text_c_style=normal&text_c_variant=normal&text_c_decoration=none&text_u_color=818181&text_u_weight=normal&text_u_style=normal&text_u_variant=normal&text_u_decoration=none&text_s_color_h=818181&text_s_weight_h=bold&text_s_style_h=normal&text_s_variant_h=normal&text_s_decoration_h=none&text_i_color_h=818181&text_i_weight_h=bold&text_i_style_h=normal&text_i_variant_h=normal&text_i_decoration_h=none&text_c_color_h=818181&text_c_weight_h=bold&text_c_style_h=normal&text_c_variant_h=normal&text_c_decoration_h=none&text_u_color_h=818181&text_u_weight_h=bold&text_u_style_h=normal&text_u_variant_h=normal&text_u_decoration_h=none&iconset=default_colored_2014_tsv";
                ts3v_display.init(ts3v_url_1, 1125685, 100);
                </script>
            </section>
        </div>
    </main>
</body>
<script>
function nextOp(){
    function dayoffset(target,day){
        //number of days from day to target
        if(target!=day){
            if(day <target){
                return target-day;
            }else{
                return target-(day-6);
            }
        }else{
            return 0;
        }
    }
    let now= new Date();
    let fri= new Date(now.getFullYear(),now.getMonth(),now.getDate(),18,45,0,0);
    let sat= new Date(now.getFullYear(),now.getMonth(),now.getDate(),17,45,0,0);
    let day=fri.getDay();
    fri.setTime(fri.getTime()+(dayoffset(5,day)*24000*3600));
    day=sat.getDay();
    sat.setTime(sat.getTime()+(dayoffset(6,day)*24000*3600));
    console.log(fri);
    console.log(sat);
    if(now.getTime()>fri.getTime() && now.getTime()<sat.getTime()){
        //samedi 17:45
        return sat;
    }else{
        //vendredi 18:45
        return fri;
    }
}
function timer(){
    countDownDate=nextOp();
    console.log(countDownDate);
    // Update the count down every 1 second
    let x = setInterval(function() {

        // Get today's date and time
        let now = new Date();

        // Find the distance between now and the count down date
        let distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("optimer").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            countDownDate=nextOp();
        }
    }, 1000);
}
timer();
</script>
</html>
