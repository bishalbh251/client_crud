<div class="container">
<h1>Manage Client</h1>
<div style="float:right;">
	<a href="index.php?obj=client&action=add">
		<img src="images/add_user.png" title="add" width="40" height="40" alt="add client"/>
	</a>
</div>

<div class="clear" style="height:10px;"></div>

<?php
	$res=$client->getallclient();
	$num=$connect->fetchNum($res);
	if($num>0)
	{
?>
<table width="100%"  cellpadding="5" cellspacing="1" bgcolor="#999999">
  <tr height="30">
    <th width="10%" align="center" valign="middle" bgcolor="#FFFFFF">S.No.</th>
    <th width="20%" align="center" valign="middle" bgcolor="#FFFFFF">First Name</th>
    <th width="20%" align="center" valign="middle" bgcolor="#FFFFFF">Last Name</th>
    <th width="10%" align="center" valign="middle" bgcolor="#FFFFFF">Gender</th>
    <th width="20%" align="center" valign="middle" bgcolor="#FFFFFF">Phone</th>
    <th width="20%" align="center" valign="middle" bgcolor="#FFFFFF">Email</th>
    <th width="20%" align="center" valign="middle" bgcolor="#FFFFFF">Nationality</th>
    <th width="20%" align="center" valign="middle" bgcolor="#FFFFFF">Action</th>
  </tr>
  	<?php
		$count=1;
		while($row=$connect->fetchObject($res))
		{
	?>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?= $count ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?= $row->fname?></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?= $row->lname?></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?= $row->gender?></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?= $row->phone?></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?= $row->email?></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?=$row->nation?></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF">
    	<a href="index.php?obj=client&action=view&id=<?=$row->client_id?>">
    		<img src="images/view.png" width="25" height="25" title="view" alt="View" />
    	</a> 
    </td>
  </tr>
  <?php
  	$count++;
		}
  ?>
</table>
<?php
	}
	else
	{
		echo "No data available";
	}
?>
</div>