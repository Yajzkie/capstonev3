@extends('layouts.app')

@section('title', 'COTS Southern Leyte - Home')



@section('content')
    <div class="header">
        <h1>Welcome to [Your Website Name]</h1>
        <p>Your go-to resource for Commercial Off-The-Shelf (COTS) solutions. Explore our comprehensive range of COTS products designed to streamline your operations, reduce costs, and enhance efficiency. From software to hardware, our expert-curated selections meet diverse needs with proven reliability and performance. Get insights and make informed decisions with our detailed reports available at the end of each product description. Dive in and discover how COTS can transform your business today!</p>
    </div>

    <div class="content">
        <h2>Most Dangerous Species</h2>
        <div class="species-images">
            <img src="{{ asset('images/cots1.jpg') }}" alt="Species 1">
            <img src="{{ asset('images/cots2.jpg') }}" alt="Species 2">
            <img src="{{ asset('images/cots1.jpg') }}" alt="Species 3">
        </div>

        <div class="map">
            <img src="{{ asset('images/maps.png') }}" alt="Map of Southern Leyte">
            <p>Southern Leyte, a stunning province in the Philippines, faces significant challenges related to its marine ecosystem. The area has been struggling with illegal fishing practices that threaten its rich biodiversity and disrupt the balance of its underwater habitats. Additionally, an outbreak of Crown-of-Thorns Starfish (COTS) has exacerbated the problem, as these invasive predators damage coral reefs and further strain the local marine environment. Efforts to address these issues are crucial for preserving Southern Leyte’s unique marine life and ensuring the health of its ecosystems for future generations.</p>
        </div>
    </div>

    <div class="contact-info">
        <div class="details">
            <div class="img">
                <img src="{{ asset('images/logo1.jpg') }}" alt="Logo 1">
                <img src="{{ asset('images/logo3.jpg') }}" alt="Logo 2">
                <p>
                    In Partnership with: <br> 
                    <span style="font-weight: bold;">SOUTHERN LEYTE UNIVERSITY-BONTOC CAMPUS, <br>
                    RESEARCH, INNOVATION AND EXTENSION SERVICES -SLSU BONTOC and <br>
                    Bureau of Fisheries and Aquatic Resources</span>
                </p>
            </div>  
            <div class="info">
                <p><strong>Contact Details:</strong></p>
                <p>📞 <span style="font-weight: bold;">0993023200445</span></p>
                <p>✉️ <span style="font-weight: bold;">dssdks@gmail.com</span></p>
            </div>        
            
        </div>
    </div>  

@endsection


