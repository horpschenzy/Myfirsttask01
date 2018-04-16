<!DOCTYPE html>
<html>
<head>
	<title>My First Task</title>
</head>
<style type="text/css">
	body {
    
    font-size: 13px;
    line-height: 1.5;
    font-weight: 300;
    overflow: hidden;
    color: #0b1440;
    background-color: black;

	}
	.bg_img {
    z-index: 0;
    position: fixed;
    top: 0;
    left: 0px;
    background-image: url('video1.jpg');
    background-repeat: no-repeat;
    background-position: center;
    width: 100%;
    height: 100%;
    margin: 10px;
}

.first{
position: absolute;
width: 829px;
height: 126px;
left: 300px;
top: 4px;

font-family: Open Sans;
font-style: italic;
font-weight: 600;
line-height: normal;
font-size: 64px;

color: #c4c4cc;
}
.second{
position: absolute;
width: 371px;
height: 88px;
left: 150px;
top: 268px;

font-family: Open Sans;
font-style: italic;
font-weight: 600;
line-height: normal;
font-size: 64px;

color: #F5F5F5;
}

.third{
position: absolute;
width: 422px;
height: 111px;
left: 700px;
top: 300px;

font-family: Open Sans;
font-style: italic;
font-weight: 600;
line-height: normal;
font-size: 64px;

color: #F5F5F5;
}

.fourth{
position: absolute;
width: 670px;
height: 101px;
left: 400px;
top: 450px;

font-family: Open Sans;
font-style: italic;
font-weight: 600;
line-height: normal;
font-size: 64px;

color: #F5F5F5;
}
	</style>
<body>
	
<div class="bg_img">
	<p class="first">Hotel.Ng Internship 4</p>
	<span class="second">The Time Is :</span>
	<span class="third"><?= date("G:i a") ?></span>
	<span class="fourth">L.OPEOLUWA</span>

</div>
    	


</body>
</html>