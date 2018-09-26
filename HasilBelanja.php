<?php 
session_start(); 
?> 
<!DOCTYPE html> 
<html>  
<head>   
	<title>Hasil Belanja</title>  
</head>  
<body>    
	<table>     
		<tr>      
			<td><?php echo $_SESSION['nama']; 
			?></td>     
			 <td align="right"><?php echo date("d/m/Y"); 
			 ?></td>     
			</tr>     
			<tr>      
				<td>Jasa_pengirim</td>      
				<td><?php echo $_SESSION['jenis_pengirim']; 
				?></td>     
			</tr>     
			<?php      
			foreach ($_SESSION['data_Barang'] as $value) {     
				?>     
				<tr>      
					<td colspan="2" align="right"><?php echo $value; ?></td>     
				</tr>    
				 <?php     
				}     
				 ?>     
				 <tr>      
				 	<td colspan="2"><hr></td>     
				 </tr>     
				 <tr>      
				 	<td>Hasil</td>      
				 	<td align="right">
				 		<?php echo $_SESSION['Hasil']; 
				 		?>	 		
				 	</td>     
				 </tr>     
				 <tr>      
				 	<td><a href="logout.php">Logout</a>
				 	</td>     
				 </tr>    
				</table>   
			</center> 
 </body> 
</html>

<?php 
session_start(); 
if (isset($_POST['Kirim'])) {  
	$data_Barang = $_POST['data_Barang']?
	$_POST['data_Barang'] : "";

	$Jasa_pengirim = $_POST['jenis_pengirim']? 
	$_POST['jenis_pengirim'] : "";

	$Alamat = $_POST['Alamat']?
	$_POST['Alamat'] : "";

	$data_barang = array(     'Sabun' => 5000,     'Deodoran' => 10000,     'Shampoo' =>3500,     'Penghapus' => 3000,     'Sapu' => 20000);  

	$Jasa_pengirim = array(        'JNE' => 50000,        'POS' => 50000,        'TIKI' => 50000 );  

	function Hasil_Belanja($DaftarBelanja){   
		global $data_Barang;   $Hasil = 0;   
		foreach ($DaftarBelanja as $value) {    
			$Hasil += $data_Barang[$value];   }   
			return $Hasil;  }  
			$_SESSION['data_Barang'] = $data_Barang;  
			$_SESSION['jenis_pengirim'] = $Jasa_pengirim . ' Harga : Rp' .$jenis_pengirim[$Jasa_pengirim];  $Hasil = Hasil_Belanja($data_Barang) + $jenis_pengirim[$Jasa_pengirim];  $_SESSION['Hasil'] = $Hasil;  header("location: HasilBelanja.php"); 
		} 
		?>

	Logout 
		<?php
		session_start();  
		session_destroy();  
		header('location: DaftarBelanja.php');  
		?> 