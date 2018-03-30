<?php 
tcpdf();
foreach($retdata as $data) :
 $data->arti_img1;
 $data->name_obj;
 $data->acc_number;
 $data->institution;
 $data->owner;
 $data->classify;
 $data->place_orig;
 $data->material;
 $data->acc_number;
 $data->name_obj;
$data->institution;
$data->owner;
$data->classify;
$data->place_orig;
$data->material;
$data->mode;
$data->description;
$data->conserv;
$data->hist;
$data->reference;
$data->date_acq;
$data->price;
$data->cultural;
$data->function;
$data->collector;
$data->chronology;
$data->style;
$data->Dimensions;
endforeach;
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Item Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(false);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 10);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
$obj_pdf->setPrintHeader(false);
$obj_pdf->setPrintFooter(false);

ob_start();

$htmlcontent = "<html>
            
				  <body>
					<table>
					  <tr>


						";		
$htmlcontent .= '<td width = "250"><img style = "height: 200px; " src="' .$data->arti_img1.'"/ ></td>';

$htmlcontent .= " <td>
                             ";
$htmlcontent .= "
                         <h4> &nbsp; Name of Object or Species</h4>
						 <p> &nbsp; ".$data->name_obj. "</p> ";



$htmlcontent .= "        <h4> &nbsp;  Accession number or catalogue number</h4>
                         <p>  &nbsp;".$data->acc_number."</p>

                             <h4> &nbsp; Dimensions</h4>
                         <p>  &nbsp;".$data->Dimensions."</p></td></tr>";

$htmlcontent .= "<tr>  
	<td> 
	<h4> &nbsp;  Collection/Ownership</h4>
    <p>  &nbsp;".$data->owner."</p>
    </td>


    <td> 
	<h4> &nbsp;  Description</h4>
    <p>  &nbsp;".$data->description."</p>
    </td>


</tr>";





$htmlcontent .= "<br><br><br>";









$htmlcontent .=        "</table></body></html>";


ob_end_clean();
$obj_pdf->writeHTML($htmlcontent, true, false, true, false, '');
$obj_pdf->Output('Report.pdf', 'I');

?>
