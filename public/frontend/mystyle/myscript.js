window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
	        document.getElementById("myBtn").style.display = "block";
	    } else {
	        document.getElementById("myBtn").style.display = "none";
	    }
	}
	function topFunction() {
	    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
	    document.documentElement.scrollTop = 0; // For IE and Firefox
	}

$(document).ready(function(){
    $('.menu>#hoverme').click(function(){
        
        if($('.menu>ul').hasClass('an')){
            $('.menu>ul').removeClass('an');
        }else {
            $('.menu>ul').addClass('an');
        }
        return false;
    });
    $('ul#test li:first-of-type').addClass('active');
    $('div.sanpham div.fade:first-of-type').addClass('in active');
});
