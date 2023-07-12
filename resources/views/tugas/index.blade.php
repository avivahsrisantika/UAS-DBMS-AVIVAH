<h1>Data Petugas</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Petugas ID</td>
    <td>Nama Petugas</td>
    <td>Alamat</td>
    <td>Handphone</td>
    <td>Password</td>
    <td>Level</td>
</tr>

<?php 
$no=0;
 foreach ($petugas_avivah as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->petugasid?></td>
    <td><?php echo $row->namapetugas?></td>
    <td><?php echo $row->alamat?></td>
    <td><?php echo $row->handphone?></td>
    <td><?php echo $row->password?></td>
    <td><?php echo $row->level?></td>
</tr>
<?php
}
?>

</table>