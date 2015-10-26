<?php
require 'db.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Pok&eacute;mon Neo Thunder</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://www.pkmneothunder.com/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="border:solid black 1px">
<table class="table"id="Logo"><tr><td><img id="position"src='http://www.pkmneothunder.com/images/Logo.jpg'height="200px"> </td></tr> </table>  
<table id="btn-placement" class="table" style="background:url('http://www.pkmneothunder.com/images/twitter1.png');margin-top:-20px;">
<style>
td {
float:left;
}
</style>
 <tr><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Account  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="prof.php?id=<?=$_SESSION['id'];?>">Your Profile</a></li>
    <li><a href="edit_profile.php">Edit Profile</a></li>
    <li><a href="search.php">Search User</a></li>
    <li><a href="staff.php">Staff List</a></li>
    <li><a href="minigames.php">Minigames</a></li>
    <li><a href="rankings.php?id=1">Trainer Rankings</a></li>
    <li><a href="rankings.php?id=2">Pok&eacute;mon Rankings</a></li>
    <li><a href="rankings.php?id=3">Money Rankings</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div></td><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Battle  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="battle.php?find">Find a trainer</a></li>
    <li><a href="battle.php?factory">Battle Factory</a></li>
    <li><a href="battle.php?tower">Battle Towers</a></li>
  </ul>
</div></td><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Maps  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="map.php?id=1">Route 1</a></li>
    <li><a href="map.php?id=2">Route 2</a></li>
    <li><a href="map.php?id=3">Route 3</a></li>
    <li><a href="map.php?id=4">Route 4</a></li>
    <li><a href="map.php?id=5">Route 5</a></li>
    <li><a href="map.php?id=6">Route 6</a></li>
  </ul>
</div></td><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Trade  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="trade.php?create">Create Trade</a></li>
    <li><a href="trade.php">View Trades</a></li>
    <li><a href="auction.php">Auctions</a></li>
  </ul>
</div></td><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Activities
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="friends.php">Friends</a></li>
    <li><a href="shop.php">Buy/Sell Pok&eacute;mon</a></li>
    <li><a href="buy_item.php">Buy Items</a></li>
  </ul>
</div></td><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Pok&eacute;mon 
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="party.php">Change Party</a></li>
    <li><a href="items.php">Manage Items</a></li>
    <li><a href="moves.php">Change Moves</a></li>
    <li><a href="evolution.php">Evolution</a></li>
  </ul>
</div></td><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Messages
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="send.php">Compose Message</a></li>
    <li><a href="inbox.php">Inbox</a></li>
    <li><a href="outbox.php">Outbox</a></li>
  </ul>
</div></td><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Clans
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="clan_create.php">Create a Clan</a></li>
    <li><a href="clans.php">Clans List</a></li>
    <li><a href="clan.php">Clan Info</a></li>
  </ul>
</div></td><td>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Community  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="online.php">Online Users</a></li>
    <li><a href="privacy.php">Privacy Policy</a></li>
    <li><a href="legal.php">Legal Information</a></li>
    <li><a href="terms.php">Terms & Conditions</a></li>
    <li><a href="rules.php">Rules</a></li>
    <li><a href="forum.pkmneothunder.com">Forums</a></li>
    <li><a href="https://v1.spot.im/embed/undocked.html?spotId=1ae8a43e74fef4091707eeb2d5dd964a&url=/pokemonneothunder" target="_blank">Chatroom</a></li>
  </ul>
</div></td></tr>
      </table>
	<table id="Swarm_alert"class="table"style="border:solid black 1px">
	<tr><td><img src="http://www.pkmneothunder.com/images/swarm.jpg"height="100px"width="100px"><br/>
<div id='swarm'><img src="http://www.pkmneothunder.com/images/pkmn/01.png" /></div>

<br/><nav id="Server"style="margin-left:0px;margin-top:-10px"><?=date('l jS F Y h:i:s A',time());?><nav id="txt"style="margin-left:0px;margin-top:-13px"></nav></nav><br/></td></tr>
      </table>
<table id="Content"class="table"style="border:solid black 1px;">
