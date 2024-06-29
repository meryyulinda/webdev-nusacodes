@extends('template', ['page_name' => 'sentcontact'])

@section('content')

<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Thank you, {{ $contact->name }}!</h1>
                <p class="lead fw-normal text-muted mb-0">I will reach out to you soon!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <h1></h1>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection