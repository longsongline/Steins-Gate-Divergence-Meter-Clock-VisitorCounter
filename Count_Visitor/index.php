<html style="background:#000000">
<head>
    <link rel="shortcut icon" href="./images/cruise.ico">
    <meta charset="UTF-8">
    <title>Divergence Meter Vistor</title>
</head>
<body style="background:#000000">
<script type="text/javascript"  src="js.js"> 
</script>

<?php
		//Digital output web counter
		$max_len = 9;
		$CounterFile = "counter.dat";
		if(!file_exists($CounterFile)){		//If the counter file does not exist
			$counter = 0;					
			$cf = fopen($CounterFile,"w");	//open file
			fputs($cf,'0');					//clear 
			fclose($cf);					//close file
		}
		else{										//get new count
			$cf = fopen($CounterFile,"r");
			$counter = trim(fgets($cf,$max_len));
			fclose($cf);
		}
		$counter++;									//add 1 
		$cf = fopen($CounterFile,"w");				//input new count
		fputs($cf,$counter);
		fclose($cf);
	?>
<script language=javascript style="background:#000000">
    var timerid = setTimeout(function () {
        var i = 6;
        var o = <?php
        echo
        $counter;							//output counter
            ?>
        ;
        var oo = o;
        var t = 100000;
        var ci = 10;
        document.write('<body style="background:#000000">');
        document.write('<div style="position:absolute; top:200px; left:200px">');
        document.write('<a  href="http://www.longsong.xyz/Time_Machine">');
        document.write("<img  src=./images/" + String(oo % 2) + ".png>");
        document.write("<img src=./images/p.png>");

        while (i > 0) {
            if (o > t) {
                document.write("<img src=./images/" + String(Math.floor(oo / Math.pow(10, (i - 1)))) + ".png>")

                oo = oo % Math.pow(10, (i - 1));					//output counter
            } else {
                t = t / 10;
                document.write("<img src=./images/0.png>");
            }
            i--;
        }
        document.write('</a');
        document.write('</div>');
        document.write('</body>');
    }, 3000)

</script>

</body>
</html>
