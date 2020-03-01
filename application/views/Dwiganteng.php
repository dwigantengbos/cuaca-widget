<!DOCTYPE html>
<html>
<head>
	<title>BUKAN WIBU</title>
</head>
<body>

<p>NAMA SAYA <?php echo $name ?></p>
    <h3>Ngujum Cuace</h3>

    <ul> 
        
        
   <?php foreach((array) $data as $item) { ?>


   <?php $date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s',
          @$item->jamCuaca);  ?>
        
        <li> Cuace kinnitok kota singkawang hari <?php echo  @$date->format('l');?> 
            tanggal <?php echo  @$date->format('d M Y'); ?>
            jam <?php echo  @$date->format('H:i'); ?>
            adalah <?php echo $item->cuaca; ?>
            dengan suhu <?php echo $item->tempC; ?>
            derajat celcius.
        
   
        </li>
 <?php }?>
    
    </ul>
</body>
</html>
