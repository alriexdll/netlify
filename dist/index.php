<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
            @font-face {
                font-family: BreuerFont;
                src: url(css/font/BreuerFont.ttf);
            }

            @font-face {
                font-family: BreuerHeadline;
                src: url(css/font/BreuerHeadline.ttf);
            }

            @font-face {
                font-family: BreuerHeadline-Oblique;
                src: url(css/font/BreuerHeadline-Oblique.otf);
            }

            @font-face {
                font-family: BreuerText;
                src: url(css/font/BreuerText.ttf);
            }

            @font-face {
                font-family: BreuerText-Bold;
                src: url(css/font/BreuerText-Bold.ttf);
            }

            @font-face {
                font-family: BreuerText-BoldItalic;
                src: url(css/font/BreuerText-BoldItalic.otf);
            }

            @font-face {
                font-family: BreuerText-Medium;
                src: url(css/font/BreuerText-Medium.ttf);
            }

            @font-face {
                font-family: BreuerText-Regular;
                src: url(css/font/BreuerText-Regular.otf);
            }        
    
        
    
    </style>
    
</head>
<body class="background-image whitespace-normal" style="background-color: #002246;">

<?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailSucc = "Valid email format";

        }
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";

        }
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
    
    
    <div class="lg:pl-80 lg:pr-96 lg:items-center lg:flex lg:justify-between
                md:flex md:justify-center md:items-center sm:items-center sm:justify-center whitespace-normal">
        <!-- LOGO -->
        <div class="flex justify-center items-center sm:h-auto sm:w-6/12">
            <a href="http://www.coral.co.uk">
                <img src="css/img/corallogo.png">
            </a>
        </div>
        <!-- LOGIN -->
        <div class="flex justify-center items-center">
            <div class="text-white underline pl-4" style="border: 1px solid white; border-radius: 5px"><a href="http://www.coral.co.uk">I'm Already a Customer</a> <button class="p-1 ml-2" style="background-color: #fdeb01; padding: 0px 6px 0px 6px; border-radius: 5px; font-family: BreuerHeadline; font-size: 20px; color: #9d7300;" onClick="location.href='https://coral.co.uk/'" >LOGIN</button></div>
<!--            <div class="border-solid p-1 ml-2" style="background-color: #fdeb01; padding: 0px 6px 0px 6px; border-radius: 5px; font-family: BreuerHeadline; font-size: 20px; color: #9d7300;"><button>LOGIN</button></div>-->
        </div>
    </div>
    
    <div class="flex items-center justify-center relative">
        <!-- BANNER -->
        <div class="absolute top-0">
            <img class="h-auto w-96" src="css/img/banner.png">
        </div>
        <!-- NCO -->
        <div class="absolute top-30 mt-80">
            <img class="h-auto w-40" src="css/img/NCO.png" style="margin-bottom: 7px;">
        </div>
        <div class="absolute top-40 text-white" style="margin-top: 5px; font-family: BreuerHeadline-Oblique; font-size: 20px;">
            LIVERPOOL v AUGSBURG
        </div>
        <div class="absolute top-44" style="margin-top: 1px; font-family: BreuerHeadline-Oblique; font-size: 35px; color: #ffe802;">
            LIVERPOOL TO WIN
        </div>
        <div class="absolute top-52" style="margin-top: -2px; font-family: BreuerHeadline-Oblique; font-size: 35px; color: #ffe802;">
            IN 90 MINS
        </div>
        <div class="absolute top-56" style="margin-top: -2px; font-family: BreuerHeadline-Oblique; font-size: 70px; color: #ffe802;">
            8/1
        </div>
        <div class="absolute top-72" style="margin-top: 14px; font-family: BreuerFont; font-size: 11px; color: white;">
            £/E 5 BET ONLY | PLUS £/E FREE BET SHOULD YOUR BET LOOSE
        </div>
        
        <div class="absolute top-80 w-48 max-w-xs">
            <div>   
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input class="shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" name="email" placeholder="Email">
                    <span class="error flex items-center justify-center"><?php echo $emailErr;?></span>
                    <span class="success flex items-center justify-center"><?php echo $emailSucc;?> </span>
                <div class="flex items-center justify-center" style="margin-top: 12px;">
<!--                    <a class="rainbow rainbow-1"><span>BET NOW >></span></a>-->
                    <input class="rainbow rainbow-1" type="submit" name="submit" required value="BET NOW >>"> 
                </div>
            </form>    
            </div>
            
        </div>
  
     
    </div>
    

    <div class="relative flex items-center justify-center">
          <div class="absolute top-96 md:flex md:space-x-2" style="margin-top: 40px">
            <div class="rounded-full h-24 w-24 flex items-center justify-center fontst ">1</div>
            <div class="animate-spinpx-0 flex items-center justify-start fontf">REGISTER &#38;<br>
            DEPOSIT £/€5<br>
            OR MORE
            </div>
              
            <div class="w-5 h-0 md:visible lg:visible "><img style="width: auto; height: 101px;" src="css/img/ldivider.png"> </div>
              
            <div class="rounded-full h-24 w-24 flex items-center justify-center fontst">2</div>
            <div class="px-0 flex items-center justify-start fontf">YOUR ENHANCED<br>
            ODDS WILL<br>
            DISPLAY ON THE <br>
            HOMPAGE
            </div>

            <div class="w-5 h-0 sm:invisible md:visible lg:visible "><img style="width: auto; height: 101px;" src="css/img/ldivider.png"> </div>
              
            <div class="rounded-full h-24 w-24 flex items-center justify-center fontst">3</div>
            <div class="px-0 flex items-center justify-start fontf">IF YOUR BET<br>
            WINS YOUR WINNINGS<br>
            WILL BE PAID AS<br>
            A £/€40 FREE BET
            </div>
        </div>
        
    </div>
    
        <div class="flex items-center justify-center relative">
            <div class="absolute top-96 flex items-center justify-center" style="margin-top: 140px;">
                <div style="width: 80%;" class="h-auto w-auto"><img src="css/img/gambleaware.png"></div>
            </div>
            <div class="absolute top-96 flex items-center justify-center text-white" style="margin-top: 180px; font-size: 10px">
                <script src="https://use.fontawesome.com/c6435311fd.js"></script>
                <div class="underline">
                <details>
                  <summary>About Coral Sports Betting</summary>
                <div style="text-decoration: none">
                <h1>Coral Sports Betting</h1>
                <p>Coral are one of the UK’s most trusted and respected bookmakers in the betting industry. With over 1700 betting shops around the UK and a dedicated sportsbook and gaming website, Coral are odds on to give great value for money and outstanding customer service around the clock. What’s more, our online, mobile and tablet offering makes betting on-the-go even easier.
                <br>
                <br>
                Coral offers a range of great markets on a variety of sports such as horse racing, football, tennis and much more. So if you’re looking for a bet on a huge sporting event such as the Grand National, Wimbledon, The FA Cup, or the Premier League then check out our magnitude of outright, score cast and in-play betting markets.  Alternatively, if you’re an avid race goer with a passion for horses or just love to make your Saturday afternoons come alive with a bet on the football, then we’ve got all bases covered. In addition, our great bonuses and money-back specials make your money go further every time you visit. Furthermore, if you enjoy in-play betting then we’re well placed to provide a full service in-play offering across a number of sports around the world. 
                <br>
                <br>
                Coral are well known for their horse racing expertise, that’s why we’ve got the odds for every race meeting across the country covered, from Aintree to Ascot and Cheltenham to Chepstow. Not only can you bet on every race, our streaming service lets you watch the race live online once you’ve placed your bet, allowing you to get even closer to the action from the comfort of your PC or mobile! 
                <br>
                <br>
                For football fans, our markets are second to none with competitive prices designed to offer true value for money. Whether you’re looking for odds across England’s top divisions, or various leagues from around Europe and the world then our football section has all you need. 
                <br>
                <br>
                Whatever sport you’re looking for, you’re sure to find an unbeatable betting experience with Coral in-store, online and on your mobile. So take advantage of over 80 years of experience in the industry and ‘back us’ to deliver your perfect betting experience.
                    </p>
                </div>
                </details>
                </div>
                <div>&nbsp;|&nbsp;</div>
                <div class="underline">
                    <a href="#" id="myBtn">Terms and Conditions</a>
                </div>
            </div>
        </div>


  
        

  
    
    
    
    
    
    
    
    
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Terms and Conditions</h2>
    </div>
    <div class="modal-body">
      1. The £30 free bet offer is available for new coral.co.uk customers who deposit and bet a total of £30 on any sports event(s).<br>
                2. The free bet will be triggered by the first deposit amount and will not be applicable for subsequent deposit values.<br>
                3. Customers depositing and staking less than £30 will receive the equivalent free bet value. For example: a customer that deposits an initial amount of £5 will be credited with a £5 free bet once they have bet a total of £5 on any sports event(s).<br>
                4. Advertised offers relating to the opening of a Coral.co.uk account are limited to one per customer.<br>
                5. In the case of a customer opening more than one Coral.co.uk account, we reserve the right to suspend and close duplicate accounts, and make void any bets placed.<br>
                6. Please note that the free bet will only appear in your account once the amount of your own deposit has been bet with on any sporting event(s) (this doesn't have to be bet as one go but can be bet in increments). The free bet must then be staked before any withdrawal is permitted. Void bets do not count toward this offer.<br>
                7. The free bet can be used on "sports" events and are not valid for Games, Casino, Virtual Sports, Poker, Lotto, Bingo, Live Casino.<br>
                8. The free bet can be redeemed on win or each-way bets and can used on the following listed bet types: single, double, treble, 4-fold and upwards accumulator, forecast, combination forecast, tricast and combination tricast.<br>
                9. The original free bet stake is not returned with any winnings.<br>
                10. The free bet is not valid on tote, other combination and multiple bets (i.e Lucky 15s)<br>
                11. The free bet is valid for 30 days.<br>
                12. We reserve the right to amend or withdraw any promotion at any point for whatever reason.<br>
                13. Coral.co.uk rules apply.<br>
                14. Offer only available to UK Residents aged 18 or over.
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>