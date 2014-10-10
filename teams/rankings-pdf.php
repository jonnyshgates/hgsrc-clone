<?php 
    session_start();

    if($_SESSION['loggedin'] != "true")
    { header("location:../index"); }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

	$generated = date('l jS F Y');

	require('../fpdf/fpdf.php');

    $sql="SELECT * FROM members WHERE s_ranking > 0";
    $result=mysql_query($sql);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);

    // set up array of results
    $rankings = array();
    while($row = mysql_fetch_row($result))
    { $rankings[$row[7]] = $row; } // column 7 is the squash ranking so this sorts the array by ranking.

    $sql="SELECT * FROM rankings";
    $result=mysql_query($sql);
	  $row = mysql_fetch_row($result);
	  $period = $row[0];


class PDF extends FPDF
{
    function Heading($text, $textsize)
    {
        $this->SetFont('arial','',$textsize);
		$this->SetFillColor(40,73,52);
        $this->SetTextColor(255,255,255);
        $this->Cell(190,10,$text,0,1,'C', true);
    }

    function post_ranking($f, array $rankings)
    {
		$this->SetFont('arial','',13);
        $this->SetTextColor(63,63,63);
		$this->Cell(1,7,'',0,0,'R',true); // left border
        $this->Cell(79,7,$f.' ',0,0,'R');
        $this->Cell(109,7,' '.$rankings[$f][2].' '.$rankings[$f][3],0,0,'L');
		$this->Cell(1,7,'',0,1,'R',true); // right border
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->Image('../image/logo.png',60,5);
$pdf->Cell(210,20,'',0,1);
$pdf->Heading('Mens Squash Rankings - '.$period,14);
$pdf->Cell(1,5,'',0,0,'R',true); // left border
$pdf->Cell(188,5,'',0,0);
$pdf->Cell(1,5,'',0,1,'R',true); // right border
for($i=1; $i<=30; $i++)
{
if (isset($rankings[$i][2])) // print only if there is a name at the rank
$pdf->post_ranking($i, $rankings);
}
$pdf->Cell(1,5,'',0,0,'R',true); // left border
$pdf->Cell(188,5,'',0,0);
$pdf->Cell(1,5,'',0,1,'R',true); // right border
$pdf->Heading('Generated on: '.$generated,12);

$pdf->Output();

?>