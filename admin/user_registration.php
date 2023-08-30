<script>
	function deluser(id)
	{
		if(confirm("You want to delete this User ?"))
		{
		window.location.href='delete_user.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>User Registration</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Country</th>
		<th>Picture</th>
		<th>delete</th>
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($con,"select * from user");

while($res=mysqli_fetch_assoc($sql))
{
	$id=$res['id'];	
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['password']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['country']; ?></td>
		<td><?php echo $res['pictrure']; ?></td>
		<td><a href="#" onclick="deluser('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</td>
	</tr>	
<?php 	
}
?>	