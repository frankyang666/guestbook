<style type="text/css">
tabel {
	border: 1px solid; 
	}
</style>

<table>
	<tr>
    	<td>姓名</td>
        <td>eMail</td>
        <td>姓別</td>
     	<td>留言內容</td>
        <td>留言時間</td>
        <td>留言IP</td>
    
    </tr>
    
<? //  print_r ($data);
foreach ($data['data'] as $key=>$value){ ?>
	
 	<tr>
        <td><? echo $value['name']; ?></td>
        <td><? echo $value['email']; ?></td>
        <td><? if ($value['sex']==1) {echo 男生;} else {echo 女生;} ?></td>
        <td><? echo $value['content']; ?></td>
        <td><? 
		echo $date($value['create_time']); ?></td>
        <td><? echo $value['ip']; ?></td>
	</tr>
<? } ?>  
</table>