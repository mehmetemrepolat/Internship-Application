<table id="user-list-table" class="table table-striped dataTable mt-4" role="grid"
       aria-describedby="user-list-page-info">
    <thead>
    <tr class="ligth">
        <th>ID</th>
        <th>Adı</th>
        <th>Soyadı</th>
        <th>TC Kimlik Numarası</th>
        <th>Telefon Numarası</th>
        <th>Mail</th>
        <th>Sınıf</th>
        <th>Adres</th>
        <th>İl</th>
        <th>İlçe</th>
        <th>Posta Kodu</th>
        <th>Uyruk</th>
        <th>Danışman Öğretmen</th>
        <th>İşlem</th>
    </tr>
    </thead>
    <tbody>


    <tr>
        <?php
        include('../vt.php');


        $query = "SELECT students.st_id, internship_application.Internship_ID, Company_Name, Activity_Field, 
		students.st_name, students.st_lastName, students.st_PhoneNumber, 
        students.st_mailAdress, students.st_class, students.st_adress, students.st_city, students.st_town,
                            students.st_postCode, students.st_citizenship, students.st_faculty, students.st_department, students.st_IS_info 
FROM internship_application
INNER JOIN students ON internship_application.st_id=students.st_id where st_id = '3'";



        if ($result = $baglanti->query($query)) {
            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
                $ID = $row["st_id"];
                $Internship_ID = $row["Internship_ID"];
                $Activity_Field = $row["Activity_Field"];
                $st_name = $row["st_name"];
                $st_lastName = $row["st_lastName"];
                $st_PhoneNumber = $row["st_PhoneNumber"];
                $st_mailAdress = $row["st_mailAdress"];
                $st_class = $row["st_class"];
                $st_adress = $row["st_adress"];
                $st_city = $row["st_city"];
                $st_town = $row["st_town"];
                $st_postCode = $row["st_postCode"];
                $st_citizenship = $row["st_citizenship"];
                $st_faculty = $row["st_faculty"];
                $st_department = $row["st_department"];
                $st_IS_info = $row["st_IS_info"];


                echo '<tr> 
                                            <td>'.$ID.'</td> 
                                            <td>'.$Internship_ID.'</td> 
                                            <td>'.$Activity_Field.'</td> 
                                            <td>'.$st_name.'</td> 
                                            <td>'.$st_lastName .'</td>
                                            <td>'.$st_PhoneNumber .'</td>
                                            <td>'.$st_mailAdress .'</td>
                                            <td>'.$st_class .'</td>
                                            <td>'.$st_adress .'</td>
                                            <td>'.$st_city .'</td>
                                            <td>'.$st_town .'</td>
                                            <td>'.$st_postCode .'</td>
                                            <td>'.$st_citizenship .'</td>      
                                            <td>'.$st_faculty .'</td>  
                                            <td>'.$st_department .'</td>  
                                             <td>'.$st_IS_info .'</td>  
 
                                        </tr>';
            }
            /* free result set */
            $result->free();
        }
        ?>

    </tr>
    </tbody>
</table>
