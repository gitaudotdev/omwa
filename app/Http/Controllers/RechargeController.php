<?php
namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
    //use Http\Client\Exception;
use Illuminate\Http\Request;
use Prophecy\Exception\Exception;

    class RechargeController extends Controller
    {
        public function recharge(Request $request){
            $username = 'sandbox';
            $apiKey   = '5d23cda1c452af6ebb3a7836dc37095d6bc92a874da6a78016f2e150482aa985';
            $AT       = new AfricasTalking($username, $apiKey);

            $airtime = $AT->airtime();
            

                if($request->isMethod('post')){
                        $data = $request->all();
                        // echo "<pre>"; print_r($data); die;

                        $phone = $data['phoneNumber'];
                        // $receiver =  $data['phone1'];
                        $amount = $data['amount'];
                        $currency_code = $data['currency_code'];


                    if ($request->input($phone)) {
                        
                        $recipients = [[
                        'phoneNumber' => $phone,
                        'currency_code' => $currency_code,
                        'amount'=>$amount
                    ]];

                    $results = $airtime->send([
                        'recipients' => $recipients
                    ]);
                    try {
                        print_r($results);

                         // echo "<pre>";  die;
    
                   } catch(Exception $e) {
                       echo "Error: ".$e->getMessage();
                   }
                       

                    // print_r($results);
                    }

    //                 $recipients = [[
    //                      $data['phoneNumber'] => $_POST['phone'],
    //                     $data['currency_code'] => $_POST['currency_code'],
    //                     $data['amount']=>$_POST['amount']
    //                 ]];
    //                 $results = $airtime->send([
    //                     'recipients' => $recipients
    //                 ]);
    // //                    echo "<pre>"; print_r($results); die;

    //                 print_r($results);

    //                try {
    //
    //
    //                } catch(Exception $e) {
    //                    echo "Error: ".$e->getMessage();
    //                }

                    // if($request->isMethod('post')) {
            //     $data = $request->all();
            //     $phone = $data['phone'];
            //     // $recipient = $data['phone1'];
            //     $amount = $data['amount'];
            //     $currency_code = $data['currency_code'];
                }
            // }


            return redirect()->back();

        }
    }
