$(document).ready(function(){
	$('#login').click(function(){
		$('#Content').load('login.php');
	});
	
	$('#Register').click(function(){
		$('#Content').load('signup.php');
	});
	
	$('#index').click(function(){
		$('#Content').load('index2.php');
	});
	
	$('#forum').click(function(){
		window.location.href = 'http://forum.pkmneothunder.com/';
	});
	
	$('id').click(function(){
		$('#Content').load('credits.php');
	});
	
	$('terms').click(function(){
		$('#Content').load('terms.php');
	});
});

$(document).ready(function(){
	c=0;
	$('#access').click(function(){
		var see=$('#aunt').val();
		if(see=="Phantom"){
		$('#myModal').modal({ show: false});
		$('#myModal').modal({backdrop:'static'});
		
		$('#myModal').modal('show');
		
		responsiveVoice.speak($('#text').text(),$('#voiceselection').val());
		setTimeout(function(){$('#myModal').modal('hide')},1000);
		setInterval(function(){start();},1000);
	}
});

function start(){
k=10;

$('#slash').animate({width:"10%"},"500",function(){
	$('#slash').animate({width:"20%"},"500",function(){
		$('#slash').animate({width:"30%"},"500",function(){
			$('#slash').animate({width:"50%"},"500",function(){
				$('#slash').animate({width:"60%"},"500",function(){
					$('#slash').animate({width:"70%"},"500",function(){
						$('#right').fadeOut();
						$('#left').fadeOut();
						$('#after').animate({opacity:"1"},1000);
					});
				});
			});
		});
	});
});
}
}); 
