<?php
/**
 * Created by PhpStorm.
 * User: Praba
 * Date: 4/23/2018
 * Time: 9:13 PM
 */

namespace Cms\Classes;

use App;
use Illuminate\Routing\Controller as ControllerBase;
use Closure;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController
{
    public function sendMail(Request $request)
    {
        $input = $request->except('sub','g-recaptcha-response');
        //$input['g-recaptcha-response'] = $request->except('g-recaptcha-response');
        $input['created_at'] = now();
        $input['phone'] = 0;
        $input['type'] = 1;
        $input['organization'] = 0;
        DB::table('contactus')->insert(
            $input
        );
        //data
        $sub = [''=>'Contact Form','findwork' => 'Find Work', 'findtalent' => 'Find Talent', 'requestdemo' => 'Request a Demo'];

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: Integrass @ Marketing <noreply@integrass.com>";
        $subject = 'Thank you for getting in touch!';
        $message = "<html>                    						
							<body><table><tr><td>Hello " . $request->name . ",<td><tr>
							<tr><td><p>Thank you for your interest in  <b>Integrass</b>!</p><td></tr>
							<tr><td><p>We're looking forward to helping you decide if we're the<br>
							right fit.</p>
							<p>Shortly, an Integrass expert will be following up with you to<br>
							learn more about your plans and answer any specific<br>
							questions you may have.</p>
							<p>In the meantime, feel free to email or call us directly to immediately<br>
							discover more information about our services.</p>
							</p></td></tr>
							<tr><td><p>Email: info@integrass.com</p>							
							Call: 352-720-3135 <br>    
							<p>All the best</p>							
							<p>Integrass</br>
							info@integrass.com<p></td></tr></body></html>";
        mail($request->email, $subject, $message, $headers);
        $subject_info = ($request->has('sub')) ? $sub[$request->sub] : "New Contact Enquiry";
        $mail_info = ($request->has('sub') && $request->sub == 'findwork') ? "career@integrass.com" : env('TO_Mail',
            'info@integrass.com');
        $message_info = "<html>                    						
							<body><p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Dear &nbsp; Integrass</p>
							<p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>New contact enquiry submitted from integrass.com. Please find the submitted details below:</p>
                        <table  height='130' border='0' style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;border: 1px solid #fbfbef;'>
                        <tr>
                                <td>Name</td><td>" . $request->name . "</td>
                        </tr>
                        <tr>
                                <td>Email </td><td>" . $request->email . "</td>
                        </tr> 
						<tr>
                                <td>Subject </td><td>" . $request->subject . "</td>
                        </tr> 						
						<tr>
                                <td>Message </td><td>" . $request->message . "</td>
                        </tr> 
                        </table>
                        <p style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Thanking you,</p>
                        <h4 style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Integrass.com</h4>
                        </body>
                        </html>";
        mail($mail_info, $subject_info, $message_info, $headers);
        return 'OK';
    }

    public function newsletter(Request $request)
    {
        $user = DB::table('newsletter')->where('email', $request->email)->get();
        if ($user->count() == 0) {
            $input = $request->all();
            $input['created_at'] = now();
            DB::table('newsletter')->insert($input);
            return 1;
        } else {
            return 2;
        }

    }

    public function businesspartner(Request $request)
    {
        $user = DB::table('business_partners')->where('email', $request->email)->get();
        if ($user->count() == 0) {
            $input = $request->all();
            $input['created_at'] = now();
            $request->merge([
                'created_at' => now()
            ]);
            DB::table('business_partners')->insert($request->all());


            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: Integrass @ Marketing <noreply@integrass.com>";
            $subject = 'Thank you for getting in touch!';
            $message = "<html>                    						
							<body><table><tr><td>Hello " . $request->name . ",<td><tr>
							<tr><td><p>We appreciate your interest to being partner with <b>Integrass</b>!</p><td></tr>
							<tr><td><p>We're looking forward to helping you decide if we're the<br>
							right fit.</p>
							<p>Shortly, an Integrass expert will be following up with you to<br>
							learn more about your plans and answer any specific<br>
							questions you may have.</p>
							<p>In the meantime, feel free to email or call us directly to immediately<br>
							discover more information about our services.</p>
							</p></td></tr>
							<tr><td><p>Email: info@integrass.com</p>							
							Call: 352-720-3135 <br>
							<p>All the best</p>							
							<p>Integrass</br>
							info@integrass.com<p></td></tr></table></body></html>";
            mail($request->email, $subject, $message, $headers);
            $subject_info = "New Business Partner Enquiry";
            $message_info = "<html>                    						
							<body><p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Dear &nbsp; Integrass</p>
							<p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>New Business Partner enquiry submitted from integrass.com. Please find the submitted details below:</p>
                        <table  height='130' border='0' style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;border: 1px solid #fbfbef;'>
						<tr>
                                <td>Organization</td><td>" . $request->organization . "</td>
                        </tr>
                        <tr>
                                <td>First Name</td><td>" . $request->firstname . "</td>
                        </tr>
						<tr>
                                <td>Last Name</td><td>" . $request->lastname . "</td>
                        </tr>
                        <tr>
                                <td>Email </td><td>" . $request->email . "</td>
                        </tr> 
						<tr>
                                <td>Phone </td><td>" . $request->phone . "</td>
                        </tr> 						
						<tr>
                                <td>Title </td><td>" . $request->title . "</td>
                        </tr> 
                        </table>
                        <p style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Thanking you,</p>
                        <h4 style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Integrass.com</h4>
                        </body>
                        </html>";
            mail('info@integrass.com', $subject_info, $message_info, $headers);
            return 'OK';
        } else {
            return 'Already Signed up!';
        }

    }

    public function socialpartner(Request $request)
    {
        $user = DB::table('social')->where('email', $request->email)->get();
        if ($user->count() == 0) {
            $input = $request->all();
            $input['created_at'] = now();
            unset($input['subject']);
            DB::table('social')->insert($input);
            $content = ucfirst(str_replace('_', ' ', $request->subject));
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: Integrass @ Marketing <noreply@integrass.com>";
            $subject = 'Thank you for getting in touch!';
            $message = "<html>                    						
							<body><table><tr><td>Hello " . $request->name . ",<td><tr>
							<tr><td><p>Thank you for your interest in  <b>" . $content . "</b>!</p><td></tr>
							<tr><td><p>Shortly, an Integrass expert will be sending you the necessary details.
                            In the meantime, feel free to email or call us directly to immediately
                            discover more information about our services.
                            </p>							
							</p></td></tr>
							<tr><td><p>Email: info@integrass.com<br>
							Call: 352-720-3135 </p>
							<p>All the best</p>							
							<p>Integrass</br>
							info@integrass.com<p></td></tr></body></html>";
            mail($request->email, $subject, $message, $headers);
            $subject_info = 'New E-book Registration';
            $message_info = "<html>                    						
							<body><p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Dear &nbsp; Integrass</p>
							<p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>New registration done for the e-book " . $content . ". Please find the registration details below:</p>
                        <table  height='130' border='0' style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;border: 1px solid #fbfbef;'>
						<tr>
                                <td>Organization</td><td>" . $request->organization . "</td>
                        </tr>
                        <tr>
                                <td>First Name</td><td>" . $request->firstname . "</td>
                        </tr>
						<tr>
                                <td>Last Name</td><td>" . $request->lastname . "</td>
                        </tr>
                        <tr>
                                <td>Email </td><td>" . $request->email . "</td>
                        </tr> 
						<tr>
                                <td>Phone </td><td>" . $request->phone . "</td>
                        </tr> 						
						<tr>
                                <td>Title </td><td>" . $request->title . "</td>
                        </tr> 
                        </table>
                        <p style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Thanking you,</p>
                        <h4 style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Integrass.com</h4>
                        </body>
                        </html>";
            mail(env('TO_Mail', 'info@integrass.com'), $subject_info, $message_info, $headers);


            return 'OK';
        } else {
            return 'Already Signed up!';
        }

    }

    public function laravelpartner(Request $request)
    {
        $user = DB::table('laravel')->where('email', $request->email)->get();
        if ($user->count() == 0) {
            $input = $request->all();
            $input['created_at'] = now();
            unset($input['subject']);
            DB::table('laravel')->insert($input);
            $content = ucfirst(str_replace('_', ' ', $request->subject));
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: Integrass @ Marketing <noreply@integrass.com>";
            $subject = 'Thank you for getting in touch!';
            $message = "<html>                    						
							<body><table><tr><td>Hello " . $request->name . ",<td><tr>
							<tr><td><p>Thank you for your interest in  <b>" . $content . "</b>!</p><td></tr>
							<tr><td><p>Shortly, an Integrass expert will be sending you the necessary details.
                            In the meantime, feel free to email or call us directly to immediately
                            discover more information about our services.
                            </p>							
							</p></td></tr>
							<p></p>
							<tr><td><p>Email: info@integrass.com<br>
							Call: 352-720-3135 </p>
							<p>All the best</p>							
							<p>Integrass</br>
							info@integrass.com<p></td></tr></body></html>";
            mail($request->email, $subject, $message, $headers);
            $subject_info = 'New E-book Registration';
            $message_info = "<html>                    						
							<body><p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Dear &nbsp; Integrass</p>
							<p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>New registration done for the e-book " . $content . ". Please find the registration details below:</p>
                        <table  height='130' border='0' style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;border: 1px solid #fbfbef;'>
						<tr>
                                <td>Organization</td><td>" . $request->organization . "</td>
                        </tr>
                        <tr>
                                <td>First Name</td><td>" . $request->firstname . "</td>
                        </tr>
						<tr>
                                <td>Last Name</td><td>" . $request->lastname . "</td>
                        </tr>
                        <tr>
                                <td>Email </td><td>" . $request->email . "</td>
                        </tr> 
						<tr>
                                <td>Phone </td><td>" . $request->phone . "</td>
                        </tr> 						
						<tr>
                                <td>Title </td><td>" . $request->title . "</td>
                        </tr> 
                        </table>
                        <p style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Thanking you,</p>
                        <h4 style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Integrass.com</h4>
                        </body>
                        </html>";
            mail(env('TO_Mail', 'info@integrass.com'), $subject_info, $message_info, $headers);
            return 1;
        } else {
            return 2;
        }
    }
    function contact_enquiry(Request $request) {
        $input['created_at'] = now();
        $input['phone'] = $request->phone;
        $input['organization'] = $request->company_name;
        $input['email'] = $request->email;
        $input['message'] = $request->message;
        $input['name'] = $request->full_name;
        $input['type'] = $request->type;

        DB::table('contactus')->insert(
            $input
        );
        //data
        $sub = 'Contact From Integrass Website';

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: Integrass @ Marketing <noreply@integrass.com>";
        $subject = 'Thank you for getting in touch!';
        $message = "<html>                    						
							<body><table><tr><td>Hello " . $request->full_name . ",<td><tr>
							<tr><td><p>Thank you for your interest in  <b>Integrass</b>!</p><td></tr>
							<tr><td><p>We're looking forward to helping you decide if we're the<br>
							right fit.</p>
							<p>Shortly, an Integrass expert will be following up with you to<br>
							learn more about your plans and answer any specific<br>
							questions you may have.</p>
							<p>In the meantime, feel free to email or call us directly to immediately<br>
							discover more information about our services.</p>
							</p></td></tr>
							<tr><td><p>Email: info@integrass.com</p>							
							Call: (855) 297-7575 <br>    
							<p>All the best</p>							
							<p>Integrass</br>
							info@integrass.com<p></td></tr></body></html>";
        mail($request->email, $subject, $message, $headers);
        $subject_info = ($request->has('sub')) ? $sub[$request->sub] : "New Contact Enquiry";
        $mail_info = ($request->has('sub') && $request->sub == 'findwork') ? "career@integrass.com" : env('TO_Mail',
            'info@integrass.com');
        $message_info = "<html>                    						
							<body><p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Dear &nbsp; Integrass</p>
							<p style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>New contact enquiry submitted from integrass.com. Please find the submitted details below:</p>
                        <table  height='130' border='0' style=' font-size:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;border: 1px solid #fbfbef;'>
                        <tr>
                                <td>Company Name</td><td>" . $request->company_name . "</td>
                        </tr>
                        <tr>
                                <td>Name</td><td>" . $request->full_name . "</td>
                        </tr>
                        <tr>
                                <td>Email </td><td>" . $request->email . "</td>
                        </tr> 
						<tr>
                                <td>Subject </td><td>" . $request->subject . "</td>
                        </tr> 						
						<tr>
                                <td>Message </td><td>" . $request->message . "</td>
                        </tr> 
                        </table>
                        <p style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Thanking you,</p>
                        <h4 style=' font:14px;font-family: 'Verdana','sans-serif'; letter-spacing:1px;'>Integrass.com</h4>
                        </body>
                        </html>";
        mail($mail_info, $subject_info, $message_info, $headers,true);
        return 1;
    }

}