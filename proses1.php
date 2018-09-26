<!DOCTYPE html> 
<html> 
<head>  <title>6701174139</title> 
</head> 
<body>  <br>  <br>  <br> <center>   
		<table border="1">    
			<tr>     
				<td>      
					<label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hobby</label>     
				</td>     
				<td>      
					<input type="checkbox" name="hobby" value="Menonton tv">Menonton tv<br>      
					<input type="checkbox" name="hobby" value="Membaca">Membaca<br>
					<input type="checkbox" name="hobby" value="Berbelanja">Berbelanja<br>      
					<input type="checkbox" name="hobby" value="Makan">Makan<br>
					<input type="checkbox" name="hobby" value="Travelling">Travelling           
				</td>    
			</tr>    
			<tr>     
				<td>&nbsp &nbsp &nbsp Mengupload foto <br>
					<center><input type="submit" name="submit" value="Browse"></center>     
				</td>
			</tr>	            
			<tr>     
				<td>      
					<label>&nbsp &nbsp &nbsp &nbsp &nbsp  Genre Film</label>     
				</td>     
				<td> 
     				<input type="checkbox" name="genre" value="Horor">Horor<br>      
     				<input type="checkbox" name="genre" value="Action">Action<br>      
     				<input type="checkbox" name="genre" value="Anime">Anime<br>      
     				<input type="checkbox" name="genre" value="Thriller">Thriller<br>      
     				<input type="checkbox" name="genre" value="Animasi">Animasi     
     			</td>    
     		</tr>   
     		 <tr>     
     		 	<td>      
     		 		<label>Wisata tujuan travelling</label>     
     		 	</td>     
     		 	<td>      
     		 		<input type="checkbox" name="wisata" value="Lombok">Lombok<br>      
     		 		<input type="checkbox" name="wisata" value="pulau samosir">Pulau samosir<br>      
     		 		<input type="checkbox" name="wisata" value="Pantai curocok">Pantai curocok<br>      
     		 		<input type="checkbox" name="wisata" value="Danau atas dan Danau Bawah">Danau atas dan Danau Bawah<br>
     		 		<input type="checkbox" name="wisata" value="Pantai Losari">Pantai Losari     
     		 	</td>    
     		 </tr>        
     		 <tr>     
     		 	<td></td>     
     		 	<td>      
     		 		<input type="submit" name="submit" value="Submit">   
     		 		 <a href="logout.php">Logout</a>   
     		 	</td>    
     		 </tr>   
  </table>        
</form> 
</body> 
</html> 

<?php 
session_start();
if (isset($_POST['submit'])) {    
$_SESSION['id']; 

$tmp_name =$_FILES ['Browse']['tmp_name'];

$Movie = uploading_file
($tmp_name, 'telah diupload/'.$file);    
	if ($Movie) {   
		$Hobby = $_POST['hobby'];   
		$_SESSION['hobby'] = $Hobby; 
 
  $wisata = $_POST['Wisata'];   
  $_SESSION['Wisata'] = $wisata;

  $genre = $_POST ['Genre'];   
  $_SESSION['Genre']=$Genre;

  $_SESSION['Browse'] = 'telah diupload/'.$file;
  header('location: halaman_akhir.php'); 
} 
}
?> 

<!DOCTYPE html> 
<html> 
<head>  
	<title>6701174139</title> 
	</head> 
	<body>  <br>  <br>  <br> <center>    
		<table>   
			<tr>    
				<td>     
					<img src="<?php echo $_SESSION['Browse']; ?>" width="200">    
				</td>   
			</tr>   
			<tr>    
				<th>Hobby</th>   
			</tr>   
			<?php   
			$Hobby = $_SESSION['hobby']?   
			foreach($Hobby as $nilai)  
			?>   
			<tr>    
				<td>     
				<?php 
				echo $value;
				?>    
				</td>   
			</tr>    
			<tr>    
				<th>Genre Film</th>   
			</tr>   
			<?php   
			$Genre =$_SESSION['Genre'];   
			foreach ($Genre as $value) 
			{   
			}
			?>   
			<tr>    
				<td>     
					<?php 
					echo 
					$value; 
					?>     
				</td>   
			</tr>    
  			<tr>    
  				<th>Wisata</th>   
  			</tr>   
  			<?php   
  			$Wisata = $_SESSION['Wisata'];   
  			foreach ($Wisata as $value) 
  			{   
  			?>  
  		 	<tr>    
  		 		<td>     
  		 		<?php 
  		 		echo 
  		 		$value; 
  		 		?>    
  		 		</td>   
  		 	</tr>   
  			<?php   
  				}   
  			?>
  			<a href="logout.php">Logout</a>   
  	</table>  
  	</body> 
  	</html> 
  	<?php 
 	if (isset($_POST['delete()']) && isset($_POST['index'])) 
	?> 