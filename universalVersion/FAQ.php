﻿<?php
session_start(); //starts the session to store certain variables using cookies
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>FAQ</title>
<meta charset = "utf-8">

<link  rel="stylesheet" type="text/css" href="CSS/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="CSS/mystyle.css"/>


</head>
<?php
		$loggedIn = "false";
		
		if (array_key_exists('userEmail', $_SESSION) && !empty($_SESSION['userEmail'])) 
			{
				$loggedIn = "true";
			}
?>
<body>
	<div id = "nav">
	<nav>
				
			<ul>
			<div id = "navlogofloat">
				<a href="index.php"><img src="Images/athenalogo.png" alt="Athena Security" title="Athena Security" height="50" width="65"></a>
			</div>
				<li><a href="index.php">Home</a></li>
				<li><a href="anti-virus.php">Anti-Virus</a></li>
				<li><a href="FAQ.php">FAQ</a></li>
				<li><a href="forumMenu.php">Forum</a></li>
				<li><a href="Trouble-shooting.php">Trouble-Shooting</a></li>
				
				<div id = "nav2">
					<nav>
						<ul>
							<?php //if user is logged in, welcome them by user forum name
						if($loggedIn == "true" && !empty($_SESSION['userNickname']))
						{
						   echo "<li> <b> Welcome, " .$_SESSION['userNickname'] ."!</li> </b>"; 
						}
						if($loggedIn == "false")
						{
							
						}
							?>
						</ul>
					<nav>
				</div>
				
				<div id = "nav3">
				<nav>
						<ul>
							<?php
							if ($loggedIn == "true")
							{
							echo"<li><a href='profilePage.php'>Your Profile</a></li>";
							echo "<li><b>|</b></li>"; 

							}
							if ($loggedIn == "false")
							{
							echo"<li><a href='registryTest.php'>Register</a></li>";
							echo "<li><b>|</b></li>"; 
							echo "<li><a href=loginTest.php>Sign in</a></li>";
							$_SESSION['userID'] = "";
							$_SESSION['voteCount'] = 0; 
							}
							?>
							<?php
							if ($loggedIn == "true")
							
							echo "<li><a href=logout.php>Sign out</a></li>";
							?>
						</ul>
						<nav>
				</div>
			</ul>	
			<nav>
	</div>

		<div id = "heading">
		<p>FAQ</p>
		</div>
		<p>
		
		Below are a number of frequently asked questions which our users have sent us. By following our advice you can minimise the chance of compromising your computers security.
		</p>
		<div id = "FAQ-subheading">
		<p><b>Malware</b></p>
		</div>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          What is malware?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Malware is a piece of software which has been installed on a computer without any permission. 
		It will aim to infiltrate or damage a computer system. It is also known as malicious software. 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          What are the threats of malware?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        There are a number of threats which are associated with malware. 
		Firstly you need to understand the types of malware which can harm your computer. 
		There are a number of different variations including viruses, worms and trojan horses. 
		Each type of malware will carry with it its own level of risk, for this reason it is important 
		to treat every piece of malware seriously to ensure that damage to your computer is kept to a minimum.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Can I prevent malware?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Yes. There are a number of ways to protect yourself, the most reliable way is to use a piece of anti virus software. 
		This will act like a barrier (fire wall) to any malware that are trying to gain access to your computer.
      </div>
    </div>
  </div>
</div>
<div id = "FAQ-subheading">
	<p><b>Protecting your computer</b><p>
	</div>

		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          What are anti viruses?
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        Anti viruses are pieces of software that will stop malware from gaining access to your computer. 
		They will also perform scans which should identify any malware which has got through and then delete them to ensure no damage is 
		caused to your computer.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Which anti virus should I use?
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        There is no single anti virus which will provide a service which will cater to your needs perfectly, also you should get a anti virus 
		which is suited for you and the way that you use your computer. To help you choose the best anti virus for you, have a look at our comparison page. 
		Here we have laid out the features that different anti viruses posses as well as the prices. 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          What should I look for in an anti virus?
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        You should make sure that the anti virus is catered to how you use your computer. There is no point spending a large amount of money of 
		something which you believe would not benefit you.
      </div>
    </div>
  </div>
</div>

</p>
		<div id = "FAQ-subheading">
		<p><b>Internet threats</b></p>
		</div>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          How am I vulnerable?
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
        There are many different ways that you can be exploited on the internet the most notable ways are via malicious e-mails, 
		suspicious links, downloads and phishing websites. These methods can exploit you however it is easy to avoid them.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          What should I look out for?
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
	  The main threats you are exposed to when browsing the internet can be avoided with just a basic knowledge of what to avoid e.g. 
	  never opening emails from sources you don’t know/don’t trust, only visiting websites that you know are safe, not downloading or 
	  opening anything from websites you don’t trust and only entering secure/personal information into sites with that have valid certificates 
	  show by a green padlock next to the URL.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          Will anti viruses always protect me?
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
      <div class="panel-body">
	  Anti-virus software will provide you with a good level of protection but none of them will offer complete security so it is best 
	  to stay vigilant and follow the steps above when browsing the internet to ensure you are as safe as possible.
      </div>
    </div>
  </div>
</div>

<div id = "FAQ-subheading">
		<p><b>Infected computers</b></p>
		</div>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTen">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
          How can I check if my computer's security has let something harmful through?
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
      <div class="panel-body">
If you feel as if your computer has been attacked by a virus the best thing to do is to run a full scan using your 
anti-virus software and this will hopefully highlight the problem, it’s also a good idea to create system restore points which can easily 
done on every windows machine this allows you to revert your computer back to a point where there was no issues.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEleven">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
          Why is my computer slow?
        </a>
      </h4>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
      <div class="panel-body">
Chances are if your computer is slow you are running too many background programs at once, to check this look at the bottom right 
corner of your screen and clicking the arrow to expand and make sure to shut down any programs that aren’t needed. 
There’s also a chance that malware is causing your computer to run follow the steps in the question below to help remedy the issue.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwelve">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
          How do I remove malware from my computer?
        </a>
      </h4>
    </div>
    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
      <div class="panel-body">
The best way to check for malware is to see if there are any programs that you don’t remember installing (but ensure that they are 
not build into the operating system) and removes them via the control panel and also run an anti-virus scan to try and route out the malware and remove it.
      </div>
    </div>
  </div>
</div>

<div id = "FAQ-subheading">
		<p><b>Protecting other devices</b></p>
		</div>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThirteen">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
          Can my mobile phone and tablet be infected with a malware?
        </a>
      </h4>
    </div>
    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
      <div class="panel-body">
All devices can be under the threat of malware, just like computers.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFourteen">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
          How do I protect my mobile phone and tablets?
        </a>
      </h4>
    </div>
    <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
      <div class="panel-body">
There are many pieces of anti-virus software available for devices such as 
tablets and phones and provided you follow the same vigilance as you do when browsing the web on a computer and you shouldn’t have any issues.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFifteen">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
          How do I remove malware from my mobile phone and tablet?
        </a>
      </h4>
    </div>
    <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
      <div class="panel-body">
		In the scenario that you believe your device is infected by malware, go to the 'settings' and select the 'Apps' option, this will display
		all applications which are installed on the device. Search through the applications and try and notice anything that seems out of the ordinary,
		this could be an application which you don't recognize/remember installing. Once discovered, uninstall the application and then refer to the previous
		question to prevent this scenario from occurring again.
      </div>
    </div>
  </div>
</div>
		
	<div id="footer">
	<footer>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><b>|</b></li>
				<li><a href="anti-virus.php">Anti-Virus</a></li>
				<li><b>|</b></li>
				<li><a href="FAQ.php">FAQ</a></li>
				<li><b>|</b></li>
				<li><a href="forumMenu.php">Forum</a></li>
				<li><b>|</b></li>
				<li><a href="Trouble-shooting.php">Trouble-Shooting</a></li>	
			</ul>
		
	</footer>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="Javascript/1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Javascript/3.2.0.js"></script>

        <script>
            $('.help').tooltip()

        </script>

</body>
</html>