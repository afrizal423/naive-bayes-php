<?php
/*$data = $_POST['hasil'];
$coba = json_decode(json_encode($data),true);

foreach ($coba as $character) {
	echo $character . '<br>';
}*/

include('NB.php');
$data = $_POST['hasil'];


//Test case
//$X=array('Education'=>'Masters','Work'=>44,'Disease'=>'Bronchitis','Salary'=>3000);
//$X=array('Pi'=>'A','Sj'=>'A','Mm'=>'B+','Mt'=>'C','Fz'=>'D');
//$X=array('Bi'=>'B+','Pi'=>'B','Sj'=>'A','Mm'=>'B+','Mt'=>'C','Fz'=>'E','Km'=>'D');
//$X=array('Bi'=>'A-','Pi'=>'B','Sj'=>'A','Mm'=>'A-','Mt'=>'A','Fz'=>'A','Km'=>'A');
$X=array('Bi'=>$data[0],'Pi'=>$data[1],'Sj'=>$data[2],'Mm'=>$data[3],'Mt'=>$data[4],'Fz'=>$data[5],'Km'=>$data[6]);
//$X=array('head_shape'=>'1','body_shape'=>'2','is_smiling'=>'1','holding'=>'1','jacket_color'=>'3','has_tie'=>'1');

//Classification factor
//$coba= 0.4*0.8*0.2*0.2*0.2;
//echo $coba;
$n = 'Category';

//table name
$table='table2';

//To be used to populate databse just once
/*
CREATE TABLE IF NOT EXISTS `table1` (
  `sl` int(4) NOT NULL AUTO_INCREMENT,
  `Education` varchar(20) NOT NULL,
  `Sex` varchar(1) NOT NULL,
  `Work` int(3) NOT NULL,
  `Disease` varchar(20) NOT NULL,
  `Salary` int(6) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`sl`, `Education`, `Sex`, `Work`, `Disease`, `Salary`) VALUES
(1, '9th', 'M', 32, 'Bronchitis', 3000),
(2, '9th', 'M', 30, 'Cholera', 1000),
(3, '9th', 'M', 33, 'Flu', 2000),
(4, '10th', 'F', 35, 'Bronchitis', 2000),
(5, '10th', 'F', 36, 'Cholera', 3000),
(6, '11th', 'M', 37, 'Flu', 3000),
(7, '12th', 'M', 38, 'Cholera', 3000),
(8, '12th', 'F', 38, 'Flu', 3000),
(9, '11th', 'M', 37, 'Bronchitis', 1000),
(10, 'Masters', 'M', 41, 'Cholera', 1000),
(11, 'Bachelors', 'F', 39, 'Bronchitis', 2000),
(12, 'Masters', 'M', 42, 'Flu', 1000),
(13, 'Masters', 'M', 44, 'Flu', 2000),
(14, 'Bachelors', 'F', 38, 'Bronchitis', 1000),
(15, 'Doctorate', 'F', 44, 'Cholera', 2000),
(16, 'Masters', 'F', 40, 'Flu', 1000),
(17, 'Doctorate', 'F', 44, 'Bronchitis', 1000),
(18, 'Doctorate', 'F', 45, 'Cholera', 3000),
(19, 'Doctorate', 'F', 44, 'Cholera', 2000);
*/

classify($X,$n,$table);

?>
