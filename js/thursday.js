<script type="text/javascript">
onload=function(){
	var rightNow = new Date();
	var day = rightNow.getDay();
	var hour = rightNow.getHours();
	var newDisplay = 'none'; // unless we see otherwise
	if(day==1  ||  day==2  ||  day==3  ||  day==5  || day==6 | day==7) {  // days hidden 
    	if((hour>= 8) && (hour<= 18)) {
          newDisplay = 'block';
}
}
document.getElementById('thursday').style.display = newDisplay;
}
</script>