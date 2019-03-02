@extends('layouts.master')
@section('content')
        <div class="contactUS">
                
                    <h1 class="brand"> Contact Us</h1>
            
                        <div class="compay-info">
                            <h3>Contact Address</h3>
                            <ul>
                                <li>
                                    Federal College of Education
                                    (Technical), Permanent Site, Asaba, Delta, Nigeria
                                </li>
                                <li>
                                    27, Oritshe Street, off Obafemi Awolowo Way
                                    Ikeja, Lagos, Nigeria
                                </li>
            
                                <li><i class="fas fa-phone-volume"> +234 809 170 2226</i></li>
            
                                <li><i class="fas fa-phone-volume"> +234 803 346 9179</i></li>
            
                                <li><i class="far fa-envelope"> cated_autotech.ng@yahoo.com</i></li>
                                <li><i class="fas fa-browser"> www.cated.edu.ng</i></li>
                            </ul>
                        </div>
                        <div class="contact">
                            <h3>E-Mail Us</h3>
                            <form>
                                <p>
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" />
                                </p>
                                <p>
                                    <label>Company</label>
                                    <input class="form-control" type="text" name="company" />
                                </p>
                                <p>
                                    <label>Email Address</label>
                                    <input class="form-control" type="Email" name="Email" />
                                </p>
                                <p>
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="Phone" />
                                </p>
                                <p class="full">
                                    <label>Message</label>
                                    <textarea class="form-control" type="text" name="Message" rows="5"></textarea>
                                </p>
                                <p>
                                    <button class="btn">Submit</button>
                                </p>
                            </form>
                        </div>
                    
                
@endsection