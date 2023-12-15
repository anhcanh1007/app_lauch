@extends('client.layouts.master')

@section('main')
    <div>
        <div>
            <button>Contact Us</button>
        </div>
        <div>
            <h1>Our Contact Address Here.</h1>
        </div>
        <div>
            <div>
                <div><i class="fas fa-headphones"></i></div>
                <div>
                    <h2>Contact Phone Number</h2>
                </div>
                <div>
                    <p>+64 20 8597 8781</p>
                </div>
            </div>
            <div>
                <div><i class="fas fa-envelope"></i></div>
                <div>
                    <h2>Our Email Address</h2>
                </div>
                <div>
                    <p>info@tradex10.com</p>
                </div>
            </div>
            <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>
                    <h2>Our Location</h2>
                </div>
                <div>
                    <p>14 Uretara Drive,
                        Katikati 3129, New Zealand</p>
                </div>
            </div>
        </div>
        <div>
            <form action="">
                <div>
                    <input type="text" placeholder="Your Name">
                </div>
                <div>
                    <input type="text" placeholder="Phone Number">
                </div>
                <div>
                    <input type="text" placeholder="Your Email">
                </div>
                <div>
                    <input type="text" placeholder="Your Subject">
                </div>
                <div>
                    <textarea name="" placeholder="
                    Your Message" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button>Submit Now</button>
                </div>
            </form>
        </div>
    </div>
@endsection
