<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App;
use Auth;

class ReportController extends Controller
{
  public function report1($pid)
  {
    $payment = Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin:20px; padding:20px;'>";
    $print .= "<h1 align ='center'> Payment Receipt</h1>";
    $print .= "<hr/>";
    $print .= "<table style='width:100%;'>";
    $print .= "<tr>";
    $print .= "<td>Invoice No : " . $pid . " </td>";
    $print .= "<td>Date : " . date("d-m-Y", strtotime($payment->created_at)) . " </td>";
    $print .= "</tr>";
    $print .= "<td><p> Enrollment No : <b>" . $payment->enrollment->enroll_no . "</b></p></td>";
    $print .= "<br>";

    $print .= "<tr><th >Customer Details : </th></tr>";


    $print .= "<tr>";


    $print .= "<td><hr/><p> Student Name : <b>" . $payment->enrollment->student->name . "</b></p></td>";
    $print .= "<hr/>";
    $print .= "</tr>";

    $print .= "<tr>";
    $print .= "<td>Batch : <b>" . $payment->enrollment->batch->name . "</b></td>";

    $print .= "</tr>";
    $print .= "<tr>";

    $print .= "<td>Amount : </td>";
    $print .= "<td><b>" . $payment->amount . "</b></td>";
    $print .= "</tr>";
    $print .= "<tr>";


    $print .= "<tr>";

    $print .= "</table>";
    $print .= "<hr/>";
    // $print .= "<span> Printed By: <b>" . $payment->enrollment->student->name . "</b></span>";
    $print .= "<h4 align='left'  >Printed Date: <b>" . date('d-m-y') . "</b></h4>";
    $print .= "<h4 diaplay='inline'>Accountant Sign</h4>    <h4 align='right'>Signature</h4> ";

    $print .= "</div>";
    $pdf->loadHTML($print);
    return $pdf->stream();





  }
}