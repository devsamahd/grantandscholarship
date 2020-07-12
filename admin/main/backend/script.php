<?php
		

class Admin{

	public function adminread($db)
	{
		$query = "select * from scholarship";
		$stmt = $db->prepare($query);
		$res = $stmt->execute();

		if ($res) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$scholarship_id = $row['sch_id'];
				$title = $row['title'];
				$moreinfo = $row['more_info'];
				$amount = $row['amount'];
				$deadline = $row['deadline'];

				echo "<tbody>
                                        
                        <tr>
                            <td> $scholarship_id </td>
                            <td class='txt-oflo'> $title </td>
                            <td>Not started</td>
                            <td class='txt-oflo text-success'>01-09-2020 00:00</td>
                            <td><span class='text-danger'>$deadline </span></td>
                            <td class='txt-oflo'>0</td>
                        </tr>
                                        
                     </tbody>
                ";
				
				
			}
		}
	}




}

?>