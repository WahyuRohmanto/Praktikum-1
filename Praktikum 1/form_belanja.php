<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    
<div class="row" >
		<div class="col-md-3">
			<form role="form" method="POST" action="belanja.php">
            <fieldset >
            <legend>Form Belanja</legend>
				<div class="form-group " >
					 
					<label for="exampleInputEmail1">
						Customer
					</label>
					<input type="text" class="form-control" id="nama" name="nama" />
				</div>
                <br>
				<div class="form-group">
                <label>
                    Produk Pilihan :
                </label>
                    <input type="radio" name="produk" id="produk" value="TV"/>TV 
                    <input type="radio" name="produk" id="produk" value="Kulkas"/>Kulkas 
                    <input type="radio" name="produk" id="produk" value="Mesin Cuci"/>Mesin Cuci<br/> 	 			
					
				</div>
                <br>
                <div class="col-md-3">
			    <form role="form" method="POST" action="belanja.php">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Jumlah Beli
					</label>
					<input type="text"  name="jumlah" id="jumlah" value="" />
				</div>
                <br>

                <input type="submit" value="Kirim"  name="proses" id="proses" style="background-color:green; color :aliceblue"/>
                </fieldset>
			</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
   <hr style="height : 10px;">
<?php
$proses= $_POST['proses'];
$nama_customer= $_POST['nama'];
$produk_pilihan= $_POST['produk'];
$jumlah_beli= $_POST['jumlah'];
 echo 'Proses : '.$proses;
 echo '<br/>Customer  : '.$nama_customer;
 echo '<br/>Produk Pilihan : '.$produk_pilihan;
 echo '<br/>Jumlah beli : '.$jumlah_beli;
 echo '<br/>Total belanja :'; 
if ($produk_pilihan == "TV"){
     echo 4200000 * $jumlah_beli;
 }
 elseif($produk_pilihan == "Kulkas"){
    echo 3100000 * $jumlah_beli;
}
 else{
    echo 3100000 * $jumlah_beli;
}



?>
    
	
</body>
</html>